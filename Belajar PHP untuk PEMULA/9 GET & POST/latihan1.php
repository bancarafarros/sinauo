<?php
// // variable scope / lingkup variabel
// $x = 10; // variabel local untuk file tempat dia berada

// function tampilX()
// {
//     // $x = 44;
//     global $x; // keyword global memerintahkan function mencari $x di luar function
//     echo $x; // variabel local untuk function dia berada
// }

// echo $x;
// echo '<br>';
// tampilX();

// =================================================

// // SUPERGLOBALS
// // variable global milik PHP
// // merupakan array associative
// // _GET digunakan untuk menampung data yang berasal dari url yang menggunakan metode request GET
// var_dump($_SERVER);


// $_GET["nama"] = "charr";
// $_GET["NIM"] = "V3920013";
// var_dump($_GET);

// // selain masukin data via source code, bisa pake url, contohnya ?nama=charr&NIM=V3920013
// // nama key charr value
// var_dump($_GET);

$mahasiswa = [
    [
        "nama" => "Charr",
        "NIM" => "V3920013",
        "email" => "charr@gmail.com",
        "jurusan" => "Teknik Informatika",
        "foto" => "boy.png"
    ],

    [
        "nama" => "Wawawa",
        "NIM" => "V39200",
        "email" => "uwiwiwiwiw@gmail.com",
        "jurusan" => "Teknik",
        "foto" => "woman.png"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>_GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&NIM=<?= $mhs["NIM"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&foto=<?= $mhs["foto"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>