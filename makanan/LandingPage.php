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

$sql = "SELECT*FROM kategori";
$result = $conn->query($sql);

$conn->close();

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Makanan Lezat.com</title>
    <link rel="icon" type="image/x-icon" href="Makanan/logo.ico">
    <link rel="stylesheet" href="LandingPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php
session_start();
if(!$_SESSION['user']){
    echo "<script>alert('silahkan Login!');window.location='login.php';<?script>";
}
?>
    <header>
        <nav>
            <a href="#home">Beranda</a>
            <a href="#popular-recipes">Resep</a>
            <a href="#tentangkami">Tentang Kami</a>
            <a href="#contact">Kontak</a>
            <!-- <button><a href="/makanan/coba/logout.php">logout</a></button> -->
            <button><a href="/makanan/coba/login.php" target="_blank" class="social-icon facebook"><i class="fa-solid fa-user"></i></a></button>
        </nav>
        <h3>HAI! <?= $_SESSION['user']['nama'];?> mau masak apa hari ini?</h3>

        <form action="search.php" method="POST">
                <input type="search" placeholder="Search here ..." name="search">
                <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                <button type="submit">search</button>
   </form>

        <!-- <form action="" method="post">
            <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian..." autocomplete="off">
            <button type="submit" name="cari"> Cari!</button>
<<<<<<< HEAD
        </form> -->
=======
            <div id="search-result"></div> <!-- Tempat hasil pencarian muncul -->

        </form>
>>>>>>> e6bb6037255187db67c35e5068b5a8674c35e62a

        <!-- <form action="" mathod="post ">
            <input type="search" placeholder="Search here ...">
            <i class="fa-solid fa-magnifying-glass"></i>
        </form> -->


    </header>

    <div class="dropdown">
        <button class="dropbtn">Select Category 
            <span class="arrow">&#9662;</span>
        </button>
        <div class="dropdown-content">
        <?php
        while($row = $result->fetch_assoc()) {
        ?>
            <a href="../list_resep.php?kategori_nama=<?php echo $row["kategori_nama"]?>&kategori_id=<?php echo $row["kategori_id"]?>"><?php echo $row["kategori_nama"]?></a>
         <?php } ?>
            <!-- <a href="/Makanan/indonesia/tradisional.php">Masakan Indonesia</a> -->
            <!-- <a href="/Makanan/internasional/internasional.php">Masakan Internasional</a>
            <a href="/Makanan/dissert/dissert.php">Dessert</a>
            <a href="/Makanan/snack/snack.php">Snack</a> -->

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
                <h2>DapoerKita</h2>
                <p>Temukan cita rasa terbaik di setiap gigitan</p>
            </div>
            <div class="footer-nav">
                <h3>Menu</h3>
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#tentangkami">Tentang Kami</a></li>
                    <li><a href="#popular-recipes">Resep Populer</a></li>
                    <li><a href="#contact">Kontak</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Kontak Kami</h3>
                <p>Email: DapoerKita@gmail.com</p>
                <p>WhatApp: <a href ="https://wa.me/+62 812-3136-5656">+62 812-3136-5656</a></p>
            </div>
            <div class="footer-social">
                <h3>Ikuti Kami</h3>
                <div class="social-icons">
                    <a href="#" target="_blank" class="social-icon facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/dapoer.kita11/" target="_blank" class="social-icon instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" target="_blank" class="social-icon twitter"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 DapoerKita. All rights reserved.</p>
        </div>

        <!-- <button><a href="/makanan/coba/logout.php">logout</a></button> -->
    </footer>

    <script src="LandingPage.js"></script>
</body>
</html>