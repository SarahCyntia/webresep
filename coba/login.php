<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatibel" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php 
    session_start();
    include "koneksi.php";
    ?>

    <div class="login-container">
    <h1>Login</h1>
    <form method="post">
        <label for="">Username</label>
        <input type="text" name="username"><br>

        <label for="">Password</label>
        <input type="text" name="password"><br>

        <button name="login" type="submit">Login</button>
        belim memiliki akun? <a href="register.php">Register!</a>
    </form>
    </div>

    <?PHP
    if(isset($_POST['login'])){
        $name = $_POST['username'];
        $pwd = $_POST['password'];

    $qry = $koneksi->query("SELECT * FROM tb_users WHERE username='$name' AND password='$pwd'");
    $result = mysqli_num_rows($qry);

    if($result == 1){
        $data = $qry->fetch_assoc();

        $_SESSION['user'] = $data;
        echo "<script>alert('Login Berhsil!');window.location='index.php';</script>";
    }else{
        echo "<script>alert('Login Gagal!');window.location='login.php';</script>";
        }
    }

?>
</body>
</html>