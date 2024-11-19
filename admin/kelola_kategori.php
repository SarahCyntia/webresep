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
                    // Simulated Database Query to fetch categories
                    $categories = [
                        ['id' => 1, 'name' => 'Makanan Utama'],
                        ['id' => 2, 'name' => 'Cemilan'],
                        ['id' => 3, 'name' => 'Minuman']
                    ];
                    foreach ($categories as $category) {
                        echo "<tr>
                                <td>{$category['id']}</td>
                                <td>{$category['name']}</td>
                                <td><a href='#' class='button'>Edit</a> <a href='#' class='button'>Hapus</a></td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
