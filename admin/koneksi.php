<!-- <?php
$koneksi = mysqli_connect('localhost', 'root', '', 'web_makanan');
?> -->

<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'makanan';

// Koneksi ke database
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>