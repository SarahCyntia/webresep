<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_makanan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch categories for the dropdown
$sql = "SELECT * FROM kategori";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Resep</title>
    <link rel="stylesheet" href="add_resep.css">
</head>
<body>
    <form action="add_resep.php" method="POST" enctype="multipart/form-data">
        <label for="resep_id">ID:</label>
        <input type="text" name="id" id="id" required><br>

        <label for="nama_resep">Nama Resep:</label>
        <input type="text" name="nama_resep" id="nama_resep" required><br>

        <label for="bahan_bahan_resep">Bahan-bahan:</label><br>
        <textarea name="bahan" id="bahan_bahan_resep" required></textarea><br>

        <label for="image_resep">Upload Gambar:</label>
        <input type="file" name="image_resep" id="image_resep" required><br><br>

        <label for="category">Kategori:</label>
        <select name="category" required>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row["kategori_id"] . '">' . $row["kategori_nama"] . '</option>';
            }
            ?>
        </select><br><br>

        <button type="submit">Tambahkan Resep</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include('koneksi.php'); // Ensure your database connection file is correct

        // Fetch the POST data
        $id = $_POST['id'];
        $nama_resep = $_POST['nama_resep'];
        $bahan_bahan_resep = $_POST['bahan'];
        $kategori = $_POST['category'];

        // Image Upload
        $image_name = $_FILES['image_resep']['name'];
        $image_tmp = $_FILES['image_resep']['tmp_name'];
        $image_path = "uploads/" . basename($image_name); // Store image in "uploads" directory

        // Move the uploaded image to the desired location
        if (move_uploaded_file($image_name
        
        , $image_path)) {
            // Prepare the SQL query to insert the recipe into the database
            $stmt = $conn->prepare("INSERT INTO resep (resep_id, nama_resep, bahan_bahan_resep, kategori, image_resep) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("issss", $id, $nama_resep, $bahan_bahan_resep, $kategori, $image_path);

            // Execute the query and check if it's successful
            if ($stmt->execute()) {
                echo "<script>alert('Resep berhasil ditambahkan!'); window.location = 'LandingPage.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan resep!');</script>";
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "<script>alert('Gagal mengunggah gambar!');</script>";
        }
    }
    ?>

    <button><a href="LandingPage.php">Kembali</a></button>
</body>
</html>
