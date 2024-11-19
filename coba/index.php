<?php
session_start();
if(!issset($_SESSION['user'])){
    echo "<script>alert('silahkan Login');window.location='login.php;<?script>";
}
?> 

<h1> Membuat login, register, dan logout</h1>
<a href="">logout</a>