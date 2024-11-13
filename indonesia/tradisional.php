<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Makanan Indonesia</title>
    <link rel="stylesheet" href="tradisional.css">
</head>
<body>

    <main>

        <header>
            <h1>Masakan Indonesia</h1>
        </header>

        <section id="Tradisional">
            <div class="resep-card">
                <h3>Nasi Goreng Gila</h3> <br>
                <img src="gambar/Resep-Nasgor-Gila.jpg" alt="Nasi Goreng"> <br>
                <a href="nasi-goreng-gila.php" class="button">Lihat Resep</a>
            </div>

            <div class="resep-card2 ">
                <h3>Rendang</h3> <br>
                <img src="gambar/Rendang.jpg" alt="Rendang"> <br>
                <a href="rendang.php" class="button">Lihat Resep</a>
            </div>

            <div class="resep-card3">
                <h3>Ayam Rica-rica</h3> <br>
                <img src="gambar/Resep-Ayam-Rica-rica.jpg" alt="Ayam Rica-rica"> <br>
                <a href="ayam-rica-rica.php" class="button">Lihat Resep</a>
            </div>

            <div class="resep-card4">
                <h3>Gulai Ayam</h3> <br>
                <img src="gambar/Gulai-Ayam.jpg" alt="Gulai Ayam"> <br>
                <a href="gulai-ayam.php" class="button">Lihat Resep</a>
            </div>

            <div class="resep-card5">
                <h3>Binte Bilihuta</h3> <br>
                <img src="gambar/Binte-Biluhuta.jpg" alt="Binte Bilihuta"> <br>
                <a href="binte-biluhuta.php" class="button">Lihat Resep</a>
            </div>

            <div class="resep-card6">
                <h3>Nasi Padang</h3> <br>
                <img src="gambar/nasi-padang.jpg" alt="Nasi Padang"> <br>
                <a href="nasi-padang.php" class="button">Lihat Resep</a>
            </div>
        </section>   
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
    
    <button><a href="/makanan/LandingPage.php">Kembali</a></button>
    </main>
</body>
</html>

