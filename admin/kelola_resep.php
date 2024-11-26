<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Resep</title>
    <link rel="stylesheet" href="add_resep.css">
</head>
<body>
    <div class="main-content">
        <h1>Kelola Resep</h1>
        <div class="box">
            <h3>Daftar Resep</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Resep</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Simulated Database Query to fetch recipes
                    $recipes = [
                        ['id' => 1, 'name' => 'Nasi Goreng'],
                        ['id' => 2, 'name' => 'Mie Goreng'],
                        ['id' => 3, 'name' => 'Sate Ayam']
                    ];
                    foreach ($recipes as $recipe) {
                        echo "<tr>
                                <td>{$recipe['id']}</td>
                                <td>{$recipe['name']}</td>
                                <td><a href='#' class='button'>Edit</a> <a href='#' class='button'>Hapus</a></td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <button><a href="/makanan/admin/LandingPage.php">Kembali</a></button>
</body>
</html>
