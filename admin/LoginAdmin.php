<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatibel" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* Reset CSS untuk menghilangkan margin dan padding default */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body - Desain Umum */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f2f2f2;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Container untuk form login */
.login-container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 40px;
    width: 100%;
    max-width: 400px;
    text-align: center;
    transition: transform 0.3s ease;
}

.login-container:hover {
    transform: scale(1.02);
}

/* Judul form login */
.login-container h1 {
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
    font-weight: 600;
}

/* Label untuk input */
label {
    font-size: 1rem;
    color: #555;
    margin-bottom: 8px;
    display: block;
}

/* Input fields */
input[type="email"], 
input[type="password"] {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

input[type="email"]:focus, 
input[type="password"]:focus {
    border-color: #ff6f61;
    outline: none;
}

/* Tombol Login */
button {
    width: 100%;
    padding: 12px;
    background-color: #ff6f61;
    color: #fff;
    font-size: 1.1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #e05c50;
}

/* Link untuk register */
p {
    margin-top: 15px;
    font-size: 0.9rem;
    color: #555;
}

a {
    color: #ff6f61;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Responsif untuk tampilan mobile */
@media (max-width: 480px) {
    .login-container {
        padding: 30px;
        width: 90%;
    }

    .login-container h1 {
        font-size: 1.8rem;
    }

    input[type="text"], input[type="password"] {
        font-size: 0.9rem;
    }

    button {
        font-size: 1rem;
    }
}
    </style>
</head>
<body>

    <?php 
    session_start();
    include "koneksi.php";
    ?>

    <form method="post">
        <label for="">Email</label>
        <input type="email" name="email"><br>

        <label for="">Password</label>
        <input type="password" name="password"><br>

        <button name="login" type="submit">Login</button>
    </form>

    <?PHP
        if(isset($_POST['login'])){
    $name = $_POST['email'];
    $pwd = $_POST['password'];

    $qry = $koneksi->query("SELECT * FROM admin WHERE email='$name' AND password='$pwd'");
    $result = mysqli_num_rows($qry);

    if($result == 1){
        $data = $qry->fetch_assoc();

        $_SESSION['user'] = $data;
        header("Location: LandingPage.php");
    }echo "<script>alert('Email atau Password salah!');</script>";
}

?>
</body>
</html>