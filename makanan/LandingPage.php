<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Makanan Lezat.com</title>
    <link rel="stylesheet" href="LandingPage.css">
</head>
<body>
    
    <header>
        <nav>
            <a href="#home">Beranda</a>
            <a href="#popular-recipes">Resep</a>
            <a href="#tentangkami">Tentang Kami</a>
            <a href="#Contact">Kontak</a>
        </nav>
        <h2>Mau masak apa hari ini?</h2>

        <form action="">
            <input type="search" placeholder="Search here ...">
            <i class="fa-solid fa-magnifying-glass"></i>
        </form>


    </header>

    <div class="dropdown">
        <button class="dropbtn">Select Category 
            <span class="arrow">&#9662;</span>
        </button>
        <div class="dropdown-content">
            <a href="/Makanan/indonesia/tradisional.php">Masakan Indonesia</a>
            <a href="/Makanan/internasional/internasional.php">Masakan Internasional</a>
            <a href="/Makanan/dissert/dissert.php">Dessert</a>
            <a href="/Makanan/snack/snack.php">Snack</a>
        </div>
    </div>


    <section id="home">
    <img src="LandingPage.jpg" alt="">

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
                    <h3><a href="/Makanan/Makanan/nasgor.php">Nasi Goreng Gila</a></h3>
                </div>
                <div class="recipe-item">
                    <h3><a href="/Makanan/Makanan/spaghetti.php">Spaghetti Aglio e Olio</a></h3>
                </div>
                <div class="recipe-item">
                    <h3><a href="/Makanan/Makanan/oreo.php">Oreo Dessert</a></h3>
                </div>
                <div class="recipe-item">
                    <h3><a href="/Makanan/Makanan/risol.php">Risol Mayo</a></h3>
                </div>
            </div>
        </div>
    </section>

    <section id="tentangkami">
    <div class="content3">
        <h2>Tentang Kami</h2>
        <p class="par2">Selamat datang di DapoerKita, tempat di mana kami berbagi resep lezat dan mudah diikuti untuk semua level memasak. Kami adalah sekelompok pecinta kuliner yang ingin menginspirasi Anda menjelajahi dunia memasak dengan berbagai hidangan dari seluruh penjuru.
            <br>Dengan langkah-langkah yang jelas dan bahan yang mudah ditemukan, kami berharap setiap pengalaman memasak Anda menjadi menyenangkan. Bergabunglah dengan kami dan temukan inspirasi baru di setiap hidangan!
            <br>Selamat memasak!</p>
    </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <h2>DeliciousBites</h2>
                <p>Temukan cita rasa terbaik di setiap gigitan</p>
            </div>
            <div class="footer-nav">
                <h3>Menu</h3>
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="#recipes">Resep Populer</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Kontak Kami</h3>
                <p>Email: support@deliciousbites.com</p>
                <p>Telepon: 123-456-7890</p>
            </div>
            <div class="footer-social">
                <h3>Ikuti Kami</h3>
                <div class="social-icons">
                    <a href="#" target="_blank" class="social-icon facebook"></a>
                    <a href="#" target="_blank" class="social-icon instagram"></a>
                    <a href="#" target="_blank" class="social-icon twitter"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 DeliciousBites. All rights reserved.</p>
        </div>
    </footer>

    <script src="LandingPage.js"></script>
</body>
</html>