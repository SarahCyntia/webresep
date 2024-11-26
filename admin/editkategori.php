<?php
include 'koneksi.php';  // Menghubungkan dengan file koneksi

// Mendapatkan ID dari URL
$id = $_GET['id'];

// Query untuk mendapatkan data kategori berdasarkan ID
$sql = "SELECT * FROM kategori WHERE id = $id";
$result = $conn->query($sql);

// Mengecek apakah data ditemukan
// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
// } else {
//     echo "Kategori tidak ditemukan.";
//     exit;
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST['kategori_name'];

    // Query untuk mengupdate kategori
    $sql_update = "UPDATE kategori SET nama = '$nama' WHERE id = $id";

    if ($conn->query($sql_update) === TRUE) {
        echo "Kategori berhasil diperbarui.";
        header("Location: kelola_kategori.php");  // Redirect ke halaman kelola kategori
    } else {
        echo "Error: " . $sql_update . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
</head>
<body>
    <h1>Edit Kategori</h1>
    <form method="POST">
        <label for="nama">Nama Kategori:</label>
        <input type="text" kategori_id="id", kategori_name="nama" value="<?php echo $row['nama']; ?>" required>
        <button type="submit">Update Kategori</button>
    </form>
</body>
</html>

<?php
$conn->close();  // Menutup koneksi database
?>
