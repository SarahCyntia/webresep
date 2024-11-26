<?php
include 'koneksi.php';  // Menghubungkan dengan file koneksi

// Query untuk mengambil semua kategori
$sql = "SELECT * FROM kategori";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kategori</title>
    <link rel="stylesheet" href="LandingPage.css">
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="add_resep.php">Tambah Resep</a></li>
            <li><a href="manage_recipes.php">Kelola Resep</a></li>
            <li><a href="manage_categories.php">Kelola Kategori</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h1>Kelola Kategori</h1>
        <div class="box">
            <h3>Daftar Kategori</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        // Menampilkan data kategori
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['kategori_id']}</td>
                                    <td>{$row['kategori_nama']}</td>
                                    <td><a href='editkategori.php?id={$row['kategori_id']}' class='button'>Edit</a> <a href='hapuskategori.php?id={$row['kategori']}' class='button'>Hapus</a></td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>Tidak ada kategori ditemukan</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>

<?php
$conn->close();  // Menutup koneksi database
?>
