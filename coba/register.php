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
        <input type="text" name="username"><br>

        <label for="">Password</label>
        <input type="text" name="password"><br>

        <label for="">Umur</label>
        <input type="number" name="umur"><br>

        <label for="">Jeis kelamin</label>
        <select name="jk">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select><br>

        <label for="">Alamat</label>
        <textarea name="alamat" rows="4"></textarea><br><br>

        <button name="register" type="submit">Register</button>
        sudah memiliki akun? <a href="login.php">Login!</a>
    </form>

    <?php 
    include "koneksi.php";
    if(isset($_POST['register'])){
        $name = $_POST['nama'];
        $username = $_POST['username'];
        $pwd = $_POST['password'];
        $umur = $_POST['umur'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];


        // $query = $koneksi->query("INSERT INTO tb_users(id, nama, username, password, umur, jk, alamat)VALUE('', '$name', '$username', '$pwd', '$umur', '$jk', '$alamat')");
        $query =$koneksi->query("INSERT INTO tb_users(id, nama, username, password, umur, jk, alamat)VALUE('', '$name', '$username', '$pwd', '$umur', '$jk', '$alamat')");
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