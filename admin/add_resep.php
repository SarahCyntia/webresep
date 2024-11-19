<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_makanan";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT*FROM kategori";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add_resep.css">
</head>
<body>
    <!-- <form action="process_recipe.php" method="POST">
        <label for="title">Nama Resep:</label>
        <input type="text" name="title" required></input><br><br>
    
        <label for="description">Bahan-bahan:</label>
        <input name="description" required></input><br><br>

        <label for="description">Cara Membuat:</label>
        <input name="description" required></input><br><br>

        <label for="description">img</label>
        <input type="file"><br>
</form> -->

<form action="add_resep.php" method="POST" enctype="multipart/form-data">
    <label for="resep_id">ID:</label>
    <input type="text" name="id" id="id" required><br>

    <label for="nama_resep">Nama Resep:</label>
    <input type="text" name="nama_resep" id="nama_resep" required><br>

    <label for="bahan_bahan_resep">Bahan-bahan:</label><br>
    <textarea name="bahan_bahan_resep" id="bahan_bahan_resep" required></textarea><br>

    <label for="image_resep">Upload Gambar:</label>
    <input type="file" name="image_resep" id="image_resep" required><br><br>

    <label for="category">Kategori:</label>
    <select name="category" required>
    <?php
        while($row = $result->fetch_assoc()) {
        ?>
            <option value="1"><a href="../list_resep.php?kategori_nama=<?php echo $row["kategori_nama"]?>&kategori_id=<?php echo $row["kategori_id"]?>"><?php echo $row["kategori_nama"]?></a>
            <?php } ?></option>
            </select><br><br>

    <button type="submit">Tambahkan Resep</button>
    <?php
    include('koneksi.php');
    $stmt = $koneksi->prepare("INSERT INTO resep (resep_id, nama_resep, bahan_bahan_resep, image_resep) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $id, $nama_resep, $bahan_bahan_resep, $img); // "isss" berarti integer, string, string, string
            
    // Menjalankan query
    if ($stmt->execute()) {
        echo "<script>alert('Resep berhasil ditambahkan!'); window.location = 'LandingPage.php';</script>";
    }
    // Menutup statement
    $stmt->close();
    ?>

</form>
    
  
    
    
        <!-- <label for="ingredients">Bahan-bahan (Pisahkan dengan koma):</label>
        <input type="text" name="ingredients" required><br><br> -->
    
        <!-- <input type="submit" value="Tambah Resep"> -->

        <!-- php
    // Pastikan koneksi sudah benar
    include('koneksi.php'); // Koneksi ke database

    // // Mendapatkan data dari form (jika menggunakan metode POST)
    // $id = $_POST['id']; // Misalnya id adalah input dari form
    // $nama_resep = $_POST['nama_resep'];
    // $bahan_bahan_resep = $_POST['bahan_bahan_resep'];
    // $img = $_FILES['image_resep']['name']; // Asumsi menggunakan file upload untuk gambar

    // // Memindahkan file gambar ke folder tujuan
    // $target_dir = "uploads/";
    // $target_file = $target_dir . basename($img);
    // move_uploaded_file($_FILES["image_resep"]["tmp_name"], $target_file);

    // Menggunakan query dengan prepared statement
    $stmt = $koneksi->prepare("INSERT INTO resep (resep_id, nama_resep, bahan_bahan_resep, image_resep) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $id, $nama_resep, $bahan_bahan_resep, $img); // "isss" berarti integer, string, string, string
            
    // Menjalankan query
    if ($stmt->execute()) {
        echo "<script>alert('Resep berhasil ditambahkan!'); window.location = 'LandingPage.php';</script>";
    }
    // Menutup statement
    $stmt->close();
    ?>

</body>
</html>