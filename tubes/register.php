<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (register($_POST) > 0) {
        echo "  <script>
                    alert('user baru berhasil ditambahkan!');
                </script>";
        header("Location: login.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Punimu</title>
    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Personal Custom CSS -->
    <link href="assets/css/register.css" rel="stylesheet">
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
                        <h5 class="card-title text-center mb-4">Daftar ke Punimu</h5>
                        <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
                            <div class="row mt-2">
                                <a href="login.php"><i class="fas fa-arrow-left mb-3"></i> Kembali</a>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="username" id="username" placeholder="username" required>
                                <label for="floatingInput"></label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="nama" required>
                                <label for="floatingInput"></label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                                <label for="floatingInput"></label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
                                <label for="floatingPassword"></label>
                            </div>
                            <div class="form-floating">
                                <input type="password" name="validPass" id="validPass" class="form-control" placeholder="konfirmasi password" required>
                                <label for="floatingPassword"></label>
                            </div>
                            <button class="btn btn-primary btn-login text-uppercase" type="submit" name="register">Register!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>