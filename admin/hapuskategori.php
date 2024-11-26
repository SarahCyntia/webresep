<?php
include 'koneksi.php';  // Menghubungkan dengan file koneksi

// Mendapatkan ID dari URL
$id = $_GET['id'];

// Query untuk menghapus kategori berdasarkan ID
$sql_delete = "DELETE FROM kategori WHERE id = $id";

if ($conn->query($sql_delete) === TRUE) {
    echo "Kategori berhasil dihapus.";
    header("Location: kelola_kategori.php");  // Redirect ke halaman kelola kategori
} else {
    echo "Error: " . $sql_delete . "<br>" . $conn->error;
}

$conn->close();  // Menutup koneksi database
?>
