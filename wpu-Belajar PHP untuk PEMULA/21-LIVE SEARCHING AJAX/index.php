<?php
session_start();

// validasi user sudah login atau belum untuk mencegah function digunakan non user
if (!isset($_SESSION["login"])) {
    header("Location: login.php"); // jika belum login diarahkan ke login.php
    exit;
}

// menggunakan file functions.php
require 'functions.php';

// menggunakan function query() dari file functions.php
// function query diisi dengan sintaks SQL
$mahasiswa = query("SELECT * FROM mahasiswa");

if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <!-- autofocus = ngarahin kursor  autocomplete="off" = matiin suggestion-->
        <input type="text" name="keyword" size="40" placeholder="Masukkan keyword pencarian" autofocus autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php $no = 1; ?>
        <!-- Menggunakan foreach untuk menampilkan data -->
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="100"></td>
                <td>
                    <a href="update.php?id=<?= $row["id"]; ?>">Ubah</a>
                </td>
                <td>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin hapus data?');">Hapus</a>
                </td>
            </tr>
            <?php $no++; ?>
        <?php endforeach; ?>
    </table>

    <script src="js/script.js"></script>
</body>

</html>