<?php
// menggunakan library mpdf
require_once __DIR__ . '/vendor/autoload.php'; // panggil library yang ada di dalam vendor

// menggunakan file functions.php
require 'functions.php';

// menggunakan function query() dari file functions.php
// function query diisi dengan sintaks SQL
$mahasiswa = query("SELECT * FROM mahasiswa");

$mpdf = new \Mpdf\Mpdf(); // memanggil library mpdf

// membuat kode html di pdf
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Gambar</th>
            </tr>';

$no = 1;
foreach ($mahasiswa as $row) {
    $html .= '<tr>' . '
    <td>' . $no++ . '</td>
    <td>' . $row['nama'] . '</td>
    <td>' . $row['nim'] . '</td>
    <td>' . $row['email'] . '</td>
    <td>' . $row['jurusan'] . '</td>
    <td><img src="img/' . $row["gambar"] . '" alt="" width="100"></td>
    </tr>';
}

$html .= '</table>
        </body>
</html>';

$mpdf->WriteHTML($html); // membuat kode html di pdf
$mpdf->Output('daftar-mahasiswa.pdf', \Mpdf\Output\Destination::INLINE); // compile menjadi pdf