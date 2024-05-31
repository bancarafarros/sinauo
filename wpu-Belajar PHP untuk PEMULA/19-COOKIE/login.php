<?php
// import functions.php
require 'functions.php';

// session adalah informasi yang disimpan di sisi server
session_start();

// cookie disimpan di sisi client
// cookie bisa digunakan untuk mengenali user, shopping cart, dan personalisasi: ads
// cookie bisa disalahgunakan
// baiknya cookie disimpan di dalam database

// validasi cookie dilakukan pertama supaya memudahkan user yang sudah pernah login 
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) { // cek cookie dari id dan username (key)
    // simpan ke dalam variabel terpisah
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id dari cookie
    $result = mysqli_query($conn, "SELECT username from users WHERE id = '$id'");
    $row = mysqli_fetch_assoc($result); // menyimpan data user satu baris

    // validasi username yang ada di cookie (key) dengan username di database
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION["login"] = true; // set session true supaya user bisa langsung masuk
    }
}

// validasi user sudah login atau belum
if (isset($_SESSION["login"])) {
    header("Location: index.php"); // jika sudah login diarahkan ke index.php
    exit;
}

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
        $row = mysqli_fetch_assoc($result); // menyimpan data user satu baris
        if (password_verify($password, $row['password'])) { // validasi password dari form login dengan password dari database

            // set session
            $_SESSION["login"] = true;

            // validasi remember me dicentang atau tidak
            if (isset($_POST["remember"])) {

                // jika dicentang maka buat cookie
                setcookie('id', $row["id"], time() + 60); // id dari username yang diambil dari database
                setcookie('key', hash('sha256', $row["username"]), time() + 60); // username yang diambil dari database dan dienkripsi
            }

            // diarahkan ke index.php
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
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </li>

            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>

</html>