<?php
session_start();

// Cek cookie untuk otomatis login
if(isset($_COOKIE['nama']) && isset($_COOKIE['pass'])) {
    $nama = $_COOKIE['nama'];
    $pass = $_COOKIE['pass'];
    if($nama === "admin" && $pass === "1234") {
        $_SESSION['login'] = true;
        header("Location: index.php");
        exit;
    }
}

// Autentikasi login
if(isset($_POST["login"])) {
    $nama = $_POST["nama"];
    $pass = $_POST["pass"];
    
    // Cek username dan password
    if($nama === "admin" && $pass === "1234") { 
        $_SESSION['login'] = true; 
        
        // Cek remember me 
        if(isset($_POST['remember'])) { 
            // Buat cookie 
            setcookie('nama', "admin", time()+60); 
            setcookie('pass', "1234", time()+60); 
        } 
        
        header("Location: index.php"); 
        exit; 
    } 
    
    $error = true; 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
        }
        .container {
            display: flex;
            flex: 1;
        }
        .left {
            flex: 1;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .left img {
            width: 80%; /* Ubah lebar gambar menjadi 80% dari parent (.left) */
            max-width: 400px; /* Batasi lebar maksimum gambar */
            height: auto; /* Biarkan tinggi gambar menyesuaikan proporsi */
        }
        .right {
            flex: 1;
            background-color: #FFC0CB; /* Ubah warna latar belakang menjadi pink */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #fff;
        }
        .login-form {
            width: 80%;
            max-width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .login-form input {
            margin-bottom: 20px;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
        }
        .login-form button {
            padding: 10px;
            font-size: 16px;
            background-color: #FF00FF; /* Ubah warna background menjadi magenta */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            max-width: 200px;
        }
        .login-form button:hover {
            background-color: #FF1493; /* Ubah warna hover menjadi magenta lebih gelap */
        }
        .error-message {
            color: red;
            font-style: italic;
            margin-bottom: 10px;
        }
        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            color: #fff;
        }
        .remember-me input {
            margin-right: 10px;
            cursor: pointer;
            flex: initial;
        }
        .paper-plane {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: -50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="print.jpg" alt="Phone with lock icon">
        </div>
        <div class="right">
            <h1>Welcome to PixelPrints.com</h1>
            <form class="login-form" action="" method="post">
                <?php if(isset($error) && $error): ?>
                    <p class="error-message">Username/password salah</p>
                <?php endif; ?>
                <input type="text" name="nama" placeholder="Username" required>
                <input type="password" name="pass" placeholder="Password" required>
                <label class="remember-me">
                    <input type="checkbox" name="remember" id="remember">
                    Remember me
                </label>
                <button type="submit" name="login">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
