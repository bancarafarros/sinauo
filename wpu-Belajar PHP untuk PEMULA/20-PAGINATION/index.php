<?php
session_start();

// validasi user sudah login atau belum untuk mencegah function digunakan non user
if (!isset($_SESSION["login"])) {
    header("Location: login.php"); // jika belum login diarahkan ke login.php
    exit;
}

// menggunakan file functions.php
require 'functions.php';

// pagination
$jumlahDataPerHalaman = 2; // data yang ditampilkan tiap halaman

// ambil seluruh data dari database dan hitung jumlah data yang berhasil diambil dengan function count
$jumlahData = count(query("SELECT * FROM mahasiswa"));

// membagi $jumlahData dengan $jumlahDataPerHalaman dan membulatkannya ke atas dengan ceil() untuk mengetahui $jumlahHalaman yang diperlukan 
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

// untuk menandai user sedang berada di halaman ke berapa
// jika ada parameter "halaman" di URL terisi, maka digunakan
// jika tidak, maka diisi nelai default 1 (digunakan ketika baru masuk ke index.php pertama kali)
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

// $awalData untuk menentukan data yang ditampilkan mulai dari index ke berapa
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// menampilkan data dengan LIMIT
// $awalData untuk titik mulai data ditampilkan
// $jumlahDataPerHalaman untuk berapa banyak data yang ditampilkan dalam satu halaman (dalam sekali fungsi tersebut dijalankan)
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// menggunakan function query() dari file functions.php
// function query diisi dengan sintaks SQL
// $mahasiswa = query("SELECT * FROM mahasiswa");

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

    <!-- navigasi halaman -->
    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a> <!-- tombol << -->
    <?php endif; ?>

    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a> <!-- menandakan halaman yang sedang aktif -->
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a> <!-- menampilkan halaman lain -->
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a> <!-- tombol >> -->
    <?php endif; ?>
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
</body>

</html>