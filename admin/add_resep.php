<input?php
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
</head>
<body>
    <fo action="process_recipe.php" method="POST">
        <label for="title">Nama Resep:</label>
        <input type="text" name="title" required></input><br><br>
    
        <label for="description">Bahan-bahan:</label>
        <input name="description" required></input><br><br>

        <label for="description">Cara Membuat</label>
        <input name="description" required></input><br><br>

        <label for="description">img</label>
        <input type="file">
    
        <label for="category">Kategori:</label>
        <select name="category" required>
        <?php
        while($row = $result->fetch_assoc()) {
        ?>
            <option value="1"><a href="../list_resep.php?kategori_nama=<?php echo $row["kategori_nama"]?>&kategori_id=<?php echo $row["kategori_id"]?>"><?php echo $row["kategori_nama"]?></a>
            <?php } ?></option>
  
        </select><br><br>
    
        <label for="ingredients">Bahan-bahan (Pisahkan dengan koma):</label>
        <input type="text" name="ingredients" required><br><br>
    
        <input type="submit" value="Tambah Resep">
    </form>
</body>
</html>