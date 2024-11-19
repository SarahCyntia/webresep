<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="add_resep.php" method="POST" enctype="multipart/form-data">
    <label for="id">ID:</label>
    <input type="text" name="id" id="id" required><br>

    <label for="nama_resep">Nama Resep:</label>
    <input type="text" name="nama_resep" id="nama_resep" required><br>

    <label for="bahan_bahan_resep">Bahan-bahan:</label>
    <textarea name="bahan_bahan_resep" id="bahan_bahan_resep" required></textarea><br>

    <label for="image_resep">Upload Gambar:</label>
    <input type="file" name="image_resep" id="image_resep" required><br>

    <button type="submit">Tambahkan Resep</button>
</form>

</body>
</html>