<?php
session_start();
if(!$_SESSION['user']){
    echo "<script>alert('silahkan Login!');window.location='login.php';<?script>";
}
?>

<h1>HAI! <?= $_SESSION['user']['nama'];?> Selamat Datang </h1>
<a href="logout.php">logout</a>