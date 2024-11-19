<?php
session_start();
<<<<<<< HEAD
if(!$_SESSION['user']){
    echo "<script>alert('silahkan Login!');window.location='login.php';<?script>";
}
?>

<h1>HAI! <?= $_SESSION['user']['nama'];?> Selamat Datang </h1>
<a href="logout.php">logout</a>
=======
if(!issset($_SESSION['user'])){
    echo "<script>alert('silahkan Login');window.location='login.php;<?script>";
}
?> 

<h1> Membuat login, register, dan logout</h1>
<a href="">logout</a>
>>>>>>> 68b984385d57dc901f56fe509bd7b55a128f8002
