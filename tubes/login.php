<?php
session_start();
require 'functions.php';
$conn = koneksi();

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $check = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");


    // cek username
    if (mysqli_num_rows($check) === 1) {

        $data = mysqli_fetch_assoc($check);
        // cek password
        if (password_verify($password, $data["password"])) {
            // masukkan level dan username ke session
            $_SESSION['login'] = true;
            $_SESSION['level'] = $data["level"];
            $_SESSION['username'] = $data["username"];
            $_SESSION['id'] = $data["id"];
            $_SESSION['nama'] = $data["nama"];
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
    echo "<script>alert('Username atau password salah!');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Punimu</title>
    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Personal Custom CSS -->
    <link href="assets/css/login.css" rel="stylesheet">

    <style>
        body {
            background-image: url(assets/img/bg-login.jpg);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-4">Masuk ke Punimu</h5>
                        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" name="username" id="username" placeholder="username">
                                <label for="floatingInput"></label>
                            </div>
                            <div class="form-floating mb-2">
                                <input type="password" class="form-control" name="password" id="password" placeholder="password">
                                <label for="floatingPassword"></label>
                            </div>
                            <button class="btn btn-primary btn-login text-uppercase" type="submit" name="login">Sign in</button><br>
                            <div class="mt-3">
                                <a href="register.php">Belum punya akun? registrasi</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>