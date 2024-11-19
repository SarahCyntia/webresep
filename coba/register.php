<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatibel" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
</head>
<body>
    <form method="post">
        <label for="">Nama</label>
        <input type="text" name="nama"><br>

        <label for="">Username</label>
        <input type="email" name="username"><br>

        <label for="">Password</label>
        <input type="password" name="password"><br>

        <button name="register" type="submit">Register</button>
        sudah memiliki akun? <a href="login.php">Login!</a>
    </form>

    <?php 
    include "koneksi.php";
    if(isset($_POST['register'])){
        $name = $_POST['nama'];
        $username = $_POST['username'];
        $pwd = $_POST['password'];

        // $query = $koneksi->query("INSERT INTO tb_users(id, nama, username, password)VALUE('', '$name', '$username', '$pwd')");
        $query =$koneksi->query("INSERT INTO tb_users(id, nama, username, password)VALUE('', '$name', '$username', '$pwd')");
        if($query) {
            echo "<script>alert('Register Behasil!');window.location = 'login.php';</script>";
        
        }else {
            echo "<script>alert('Register Gagal!');window.location = 'register.php';</script>";
        }
    }
    ?>

</body>
</head>
</html>