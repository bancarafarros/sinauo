<!-- sekarang data mahasiswa dipanggil dari sini -->
<?php
sleep(1); // memberikan delay 1 detik

// memanggil fuctions.php
require '../functions.php';

// menyimpan value $_GET["keyword"]
$keyword = $_GET["keyword"];

// query untuk mencari data mahasiswa
$query = "SELECT * FROM mahasiswa 
    WHERE nama LIKE '%$keyword%' OR
    nim LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'
    ";

// menyimpan data mahasiswa yang didaptkan dari query di atas
$mahasiswa = query($query);
?>

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