<?php
session_start();

// validasi user sudah login atau belum untuk mencegah function digunakan non user
if (!isset($_SESSION["login"])) {
    header("Location: login.php"); // jika belum login diarahkan ke login.php
    exit;
}

// menggunakan file functions.php
require 'functions.php';

// cek apakah tombol submit sudah pernah ditekan atau belum
if (isset($_POST["submit"])) {
    // var_dump($_POST);
    // var_dump($_FILES);
    // die;

    // cek data masuk atau tidak ke db
    if (tambahMahasiswa($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = 'index.php'
        </script>";
    }

    // // cek data masuk atau tidak ke db
    // if (var_dump(mysqli_affected_rows($conn) > 0)) {
    //     echo "berhasil";
    // } else {
    //     echo "gagal";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" required>
            </li>

            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </li>

            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required>
            </li>

            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>

            <li>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar" required>
            </li>

            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>

</html>