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

$tmp=$_GET["kategori_id"];

$sql = "SELECT*FROM resep WHERE kategori_id= $tmp";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Makanan Internasional</title>
    <link rel="stylesheet" href="list_resep.css">
</head>
<body>

    <main>

        <header>
            <h1><?php echo $_GET["Masakan Internasional"]?></h1>
        </header>

        <section id="Internasional">
             <?php
        while($row = $result->fetch_assoc()) {
        ?>
            <div class="resep-card">
                <h3><?php echo $row["nama_resep"]?> </h3> <br>
                <img src="gambar/Resep-Spagetti-aglio-olio.jpg" alt="spaghetti-aglio e-olio"> <br>
                <a href="page_resep.php?nama_resep=<?php echo $row["nama_resep"]?>&resep_id=<?php echo $row["resep_id"]?>"<?php echo $row["nama_resep"]?> class="button">Lihat Resep</a>
            </div>
              <?php } ?>

            <!-- <div class="resep-card2 ">
                <h3>Macaroni and Cheese</h3> <br>
                <img src="/internasional/gambar/macaroni and cheese.jpg" alt="Macaroni and Cheese"> <br>
                <a href="macaroni-and-cheese.php" class="button">Lihat Resep</a>
            </div>

            <div class="resep-card3">
                <h3>ramen</h3> <br>
                <img src="gambar/ramen.jpg" alt="ramen"> <br>
                <a href="ramen.php" class="button">Lihat Resep</a>
            </div>

            <div class="resep-card4">
                <h3>Chicken Gochujang </h3> <br>
                <img src="gambar/Korean-Gochujang-Chicken-15.jpg" alt="Chicken Gochujang (ayam goreng korea)"> <br>
                <a href="chicken-gochujang.php" class="button">Lihat Resep</a>
            </div>

            <div class="resep-card5">
                <h3>Tteokbokki 떡볶이 </h3> <br>
                <img src="gambar/toppoki.jpg" alt="Tteokbokki 떡볶이 "> <br>
                <a href="Tteokbokki.php" class="button">Lihat Resep</a>
            </div>

            <div class="resep-card6">
                <h3>Ayam pandan Thailand</h3> <br>
                <img src="gambar/ayam pandan thailand.jpg.jpeg" alt="Ayam pandan thailand"> <br>
                <a href="ayam-pandan-thailand.php" class="button">Lihat Resep</a>
            </div> -->
        </section>
        <button><a href="/makanan/Makanan/LandingPage.php">Kembali</a></button>
   
     
    <!-- <div class="container">
        <div class="tes"></div>
        <div class="tes2"></div>
        <div class="tes3"></div>
        <div class="tes4"></div>
    </div> -->

    <!-- <div class="container">
            <div class="img1"></div>
            <div ass="img2"></div>
            <div class="img3"></div>
    </div> -->
    </main>
    


</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="internasional.css">
</head>
<body>
    <main>
        <section id="Internasional">
            <h2>Masakan Internasional</h2>
            <h3>Nasi Goreng</h3>
            <img src="macaroni and cheese.jpg" alt="Macaroni and cheese" /><br>
            <button><a href="macaroni-and-cheese.php">Lihat Resep</a></button>

            <h3>Spaghetti Aglio e Olio</h3>
            <img src="Resep-Spagetti-aglio-olio.jpg" alt="Rendang" /> <br>
            <button><a href="spaghetti-aglio e-olio.php">Lihat Resep</a></button>
        </section>
    </main>
</body>
</html> -->