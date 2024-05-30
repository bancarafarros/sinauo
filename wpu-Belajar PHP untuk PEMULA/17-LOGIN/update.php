<?php
require 'functions.php';

// ambil data di url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs[0]["nama"]);
// var_dump($mhs["nama"]);

// cek apakah tombol submit sudah pernah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek data masuk atau tidak ke db
    if (updateMahasiswa($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diupdate');
            document.location.href = 'index.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal diupdate');
            document.location.href = 'index.php'
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
</head>

<body>
    <h1>Update Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?= $mhs["id"]; ?>" required>
        <ul>
            <li>
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" value="<?= $mhs["nim"]; ?>" required>
            </li>

            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>" required>
            </li>

            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>" required>
            </li>

            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>" required>
            </li>

            <li>
                <label for="gambar">Gambar</label>
                <img src="img/<?= $mhs['gambar']; ?>" width="40" alt="" srcset="">
                <input type="file" name="gambar" id="gambar">
                <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
            </li>

            <li>
                <button type="submit" name="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>

</html>