<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Makanan Lezat.com</title>
    <link rel="stylesheet" href="LandingPage.css">
</head>
<body>
    <!-- <div class="icon">
                <h2 class="logo">DapoerKita</h2>
    </div> -->

    <header>
        <h1>Makanan Lezat</h1>
        <p>Mau masak apa hari ini?</p>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#popular-recipes">Resep</a></li>
                <li><a href="#tentangkami">Tentang Kami</a></li>
                <li><a href="#Contact">Kontak</a></li>
                <!-- <li><a href="/makanan/Favorit.html">Favorit</a></li> -->
            </ul>
        </nav>
    </header>

    <div class="dropdown">
        <button class="dropbtn">Select Category 
            <span class="arrow">&#9662;</span> <!-- Down arrow -->
        </button>
        <div class="dropdown-content">
            <a href="/indonesia/tradisional.php">Masakan Indonesia</a>
            <a href="/internasional/internasional.php">Masakan Internasional</a>
            <a href="/dissert/dissert.php">Dessert</a>
            <a href="/snack/snack.php">Snack</a>
        </div>
    </div>
    
    <!-- <nav>
        <ul>
            <li><a href="/indonesia/tradisional.html">Masakan Indonesia</a></li>
            <li><a href="internasional/internasional.html">Masakan Internasional</a></li>
             <li><a href="#penutup">Hidangan Penutup</a></li>
            <li><a href="#camilan">Camilan</a></li>
        </ul>
    </nav> -->

    <section id="home">
    <img src="ladingpage.jpg" alt="">

    <div class="content2">
        <h1>Resep<br><span>Makanan</span><br>Dapoer<span>Kita</span></h1>
        <p class="par">Kamu mau masak tapi bingung caranya? Atau bingung bahannya apa aja? <br>Tepat sekali! Web ini membantu kamu untuk mencari berbagai resep.
        <br>Have a nice day!</p>
    </div>
    </section>
    

    <section id="popular-recipes">
        <div class="container">
            <h2>Resep Populer Hari Ini</h2>
            <div class="recipes-list">
                <div class="recipe-item">
                    <h3><a href="/indonesia/nasi-goreng-gila.html">Nasi Gila</a></h3>
                    <!-- <button class="favorite-btn" onclick="addToFavorites('Nasi Gila')">Tambah ke Favorit</button> -->
                </div>
                <div class="recipe-item">
                    <h3><a href="/internasional/spaghetti-aglio e-olio.html">Spaghetti Aglio e Olio</a></h3>
                    <!-- <button class="favorite-btn" onclick="addToFavorites('Spaghetti Aglio e Olio')">Tambah ke Favorit</button> -->
                </div>
                <div class="recipe-item">
                    <h3><a href="/dissert/oreo-dessert-cup.html">Oreo Dessert</a></h3>
                    <!-- <button class="favorite-btn" onclick="addToFavorite('Oreo Dessert')">Tambah ke Favorit</button> -->
                </div>
                <div class="recipe-item">
                    <h3><a href="/snack/risol-mayo.html">Risol Mayo</a></h3>
                    <!-- <button class="favorite-btn" onclick="addToFavorites('Risol Mayo')">Tambah ke Favorit</button> -->
                </div>
            </div>
        </div>
    </section>

    <!-- tentang -->
    <section id="tentangkami">
    <div class="content3">
        <h2>Tentang Kami</h2>
        <p class="par2">Selamat datang di DapoerKita, tempat di mana kami berbagi resep lezat dan mudah diikuti untuk semua level memasak. Kami adalah sekelompok pecinta kuliner yang ingin menginspirasi Anda menjelajahi dunia memasak dengan berbagai hidangan dari seluruh penjuru.
            <br>Dengan langkah-langkah yang jelas dan bahan yang mudah ditemukan, kami berharap setiap pengalaman memasak Anda menjadi menyenangkan. Bergabunglah dengan kami dan temukan inspirasi baru di setiap hidangan!
            <br>Selamat memasak!</p>
    </div>
    </section>

    
    
    <section id="Contact">
        <div class="container">
            <h2>Ingin Request atau Mengirimkan Resep?</h2>
            <div class="recipes-list">
                <div class="recipe-item">
                    <h3><a href="https://wa.me/+6282331466156?text=Hai,%20saya%20ingin%20request%20resep%20(nama%20makanan)">Request Resep</a></h3>
                </div>
                <div class="recipe-item">
                    <h3><a href="https://wa.me/+6282331466156?text=Hai,%20saya%20ingin%20mengirimkan%20resep%20(isi%20resep%20makanan)">Kirim Resep</a></h3>
            </div>
        </div>
        <!-- <div class="TextRequestKirim">
        <h2>Ingin Request atau mengirimkan resep?</h2>
        <div class="Request"><a href="https://wa.me/+6282331466156?text=Hai,%20saya%20ingin%20request%20resep%20(nama%20makanan)">Request Resep</a></div>
        <div class="Kirim"><a href="https://wa.me/+6282331466156?text=Hai,%20saya%20ingin%20mengirimkan%20resep%20(isi%20resep%20makanan)">Kirim Resep</a></div> -->
    </div>
</section>

<div class="email">
    <h3><a href="https://wa.me/+6282331466156?text=Hai,%20saya%20ingin%20mengirimkan%20resep%20(isi%20resep%20makanan)">DapoerKitaNAFAS@gmail.com</a></h3>
</div>
    <script src="LandingPage.js"></script>

    <footer>
        <p>&copy; 2024 Resep Makanan Lezat. Semua hak dilindungi.</p>
    </footer>
</body>
</html>