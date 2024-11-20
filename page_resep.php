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
    <title>Resep Makanan</title>
    <link rel="stylesheet" href="resep.css">
</head>
<body>
    <main>
            <h4>Bahan-bahan</h4>
        <ol>
            <?php
            while ($row = $result->fetch_assoc()) {
                ?>
                <?php echo $row["bahan_bahan_resep"] ?>
            </ol>
            <!-- <h4>Bumbu Halus</h4>
            <ol>
                <?php echo $row["bumbu_halus_resep"] ?>
            </ol>
            <h4>Bahan Marinasi</h4>
            <ol>
                <?php echo $row["bahan_marinasi"] ?>
            </ol>
            <h4>Bahan Saus</h4>
            <ol>
                <?php echo $row["bahan_saus"] ?>
            </ol> -->
            <h4>Cara Membuat</h4>
            <ol>
                <?php echo $row["cara_membuat"] ?>
                <!-- <button><a href="<button><a href='/makanan/Makanan/list_resep.php?kategori_nama=<?php echo $row["kategori_nama"] ?>&kategori_id=<?php echo $row["kategori_id"] ?>'>Kembali</a></button>">Kembali</a></button> -->
            <?php } ?>
        </ol>
        <button><a href="http://localhost/makanan/Makanan/LandingPage.php">Kembali</a></button>
        <!-- <button><a href="<button><a href='/makanan/list_resep.php?kategori_nama=<?php echo $row["kategori_nama"] ?>&kategori_id=<?php echo $row["kategori_id"] ?>'>Kembali</a></button>">Kembali</a></button> -->
        </main>
        </main>
    </main>
</body>
</html>