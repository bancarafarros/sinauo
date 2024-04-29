<?php
    $mahasiswa = ["Charr", "V3920013", "Teknik Informatika", "charr@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiwa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
        <ul>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <li><?= $mhs; ?></li>
            <?php endforeach; ?>

            <li><?= $mahasiswa[0]; ?></li>
            <li><?= $mahasiswa[1]; ?></li>
            <li><?= $mahasiswa[2]; ?></li>
            <li><?= $mahasiswa[3]; ?></li>
        </ul>
</body>
</html>

<!-- ====================================================================== -->

<!-- array multidimensi -->
<!-- array numerik -->
<?php
    $mahasiswa = [
        ["Charr", "V3920013", "Teknik Informatika", "charr@gmail.com"],
        ["Gonn", "V3920022", "Teknik Teknik", "gonn@gmail.com"],
        ["Kiww", "V3920011", "Teknik Aja", "wikk@gmail.com"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiwa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>NIM: <?= $mhs[1]; ?></li>
            <li>Jurusan: <?= $mhs[2]; ?></li>
            <li>Email: <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>