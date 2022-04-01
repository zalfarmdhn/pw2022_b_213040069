<?php
// cek apakah tombol submit sudah tekan atau belum
if (isset($_POST["submit"])) {
    // cek username & passowrd
    if ($_POST["username"] == "admin" && $_POST["password"] == "marin456") {
        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <style>
        li {
            list-style: none;
        }
    </style>
</head>

<body>
    <h1>Login Admin</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">username / password salah!</p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <button type="submit" name="submit">Login</button>
        </form>
    </ul>
</body>

</html>