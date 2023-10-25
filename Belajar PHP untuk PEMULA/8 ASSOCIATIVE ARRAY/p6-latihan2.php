<!-- <?php
    // $mahasiswa = [
    //     ["Charr", "V3920013", "Teknik Informatika", "charr@gmail.com"],
    //     ["Gonn", "V3920022", "Teknik Teknik", "gonn@gmail.com"],
    //     ["Kiww", "V3920011", "Teknik Aja", "wikk@gmail.com"]
    // ];

    // array associative
    // dfinisinya sama seperti array numerik, tapi
    // key-nya adalah string yg dibuat oleh user
    // $mahasiswa = [
    //     "nama" => "Charr",
    //     "NIM" => "V3920013",
    //     "email" => "charr@gmail.com",
    //     "jurusan" => "Teknik Informatika"
    // ];
    // echo $mahasiswa["jurusan"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs[0]; ?></li>
            <li>NIM: <?= $mhs[1]; ?></li>
            <li>Jurusan: <?= $mhs[2]; ?></li>
            <li>Email: <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html> -->

<!-- <?php
    $mahasiswa = [
        [
            "nama" => "Charr",
            "NIM" => "V3920013",
            "email" => "charr@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],

        [
            "nama" => "Gonn",
            "NIM" => "V3920018",
            "email" => "charr@gmail.com",
            "jurusan" => "Teknik Informatika",
            // "tugas" =>  [90, 80, 100]
        ]
    ];

    // echo $mahasiswa[1]["jurusan"];
    // echo $mahasiswa[1]["tugas"][1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NIM: <?= $mhs["NIM"]; ?></li>
            <li>Jurusan: <?= $mhs["email"]; ?></li>
            <li>Email: <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html> -->

<?php
    $mahasiswa = [
        [
            "nama" => "Charr",
            "NIM" => "V3920013",
            "email" => "charr@gmail.com",
            "jurusan" => "Teknik Informatika",
            "foto" => "boy.png"
        ],

        [
            "nama" => "Wiwi",
            "NIM" => "V3920018",
            "email" => "uwiwiwiwiw@gmail.com",
            "jurusan" => "Teknik",
            "foto" => "woman.png"
        ]
    ];

    // echo $mahasiswa[1]["jurusan"];
    // echo $mahasiswa[1]["tugas"][1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["foto"]; ?>" alt="" srcset=""></li>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NIM: <?= $mhs["NIM"]; ?></li>
            <li>Jurusan: <?= $mhs["email"]; ?></li>
            <li>Email: <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>