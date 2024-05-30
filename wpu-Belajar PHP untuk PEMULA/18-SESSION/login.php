<?php
session_start();

// validasi user sudah atau belum untuk mencegah function digunakan non user
if (isset($_SESSION["login"])) {
    header("Location: index.php"); // jika sudah login diarahkan ke index.php
    exit;
}

// import functions.php
require 'functions.php';

// ambil data dari form login via $_POST
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // cek username dulu, kalo ada lanjut cek password kalo gk ada skip

    // cek table users di database, apakah ada username yang sama
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // kalo ada username yang sama, pasti hasilnya 1
    if (mysqli_num_rows($result) === 1) {
        // cek password dari username yang sama
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {

            // set session
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }

    // kalo username gk ketemu masuk ke sini, $error buat display error message di login page
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <h1>Halaman Login</h1>

    <!-- error message -->
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style:italic">Username atau password salah</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li><br>

            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li><br>

            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>

</html>