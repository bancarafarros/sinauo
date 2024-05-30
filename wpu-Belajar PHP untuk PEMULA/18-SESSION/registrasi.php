<?php
require 'functions.php';

// TODO: 1. add validasi login, jika sudah login diarahkan ke index.php
// TODO: 2. berikan pesan anda sudah login, silahkan logout dulu

// ketika tombol register submit ditekan maka data user baru akan divalidasi dan diinput ke database
if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) { // kondisi ketika berhasil membuat user baru
        echo "<script>alert('User baru berhasil ditambahkan')</script>";
    } else { // kondisi ketika gagal membuat user baru
        echo mysqli_error($conn);
    }
}

// TODO: 3. selesai registrasi destroy session
// TODO: 4. arahkan ke halaman login
// TODO: 5. berikan pesan silahkan login dengan akun yang sudah dibuat
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <h1>Halaman Registrasi</h1>

    <!-- attribue action dikosongkan supaya data yang disubmit dikembalikan ke halaman tempat dia berasal -->
    <!-- jika  diisi, maka data akan dikrimkan ke halaman yang dituliskan di dalam attribute action-->
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li><br>

            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li><br>

            <li>
                <label for="confirmPassword">Konfirmasi Password:</label>
                <input type="password" name="confirmPassword" id="confirmPassword">
            </li><br>

            <button type="submit" name="register">Register</button>
        </ul>
    </form>
</body>

</html>