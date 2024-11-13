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

$tmp=$_GET["resep_id"];
$sql = "SELECT*FROM resep WHERE resep_id= $tmp";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Macaroni and Cheese</title>
    <link rel="stylesheet" href="resep.css">
</head>
<body>
    <main>
        <h4></h4>
<ol>
     <li><?php echo $_GET["nama_resep"]?></li>
     </ol>
        <h4>Cara Membuat:</h4>
        <ol>
        <?php
        while($row = $result->fetch_assoc()) {
        ?>
            <li><?php echo $row["cara_membuat"]?></li>
        <?php } ?>
        </ol>
        <button><a href="internasional.php">Kembali</a></button>
    </main>
</body>
</html>