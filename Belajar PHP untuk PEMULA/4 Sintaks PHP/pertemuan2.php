<?php
    // komentar di php
    // ini komentar satu baris
    /* ini komentar buat
    lebih dari satu baris */

    // Pertemuan 2 - PHP Dasar
    // Sintaks PHP

    // Standar Output
    // echo, print
    // print_r
    // var_dump

    // echo "Charr";
    // print "Charr";
    // print_r("Charr");
    // var_dump("Charr");
    // "" digunakan ketika di dalam string terdapat karakter spesial

    // Penulisan Sintaks PHP
    // 1. PHP di dalam HTML
    // 2. HTML di dalam PHP

    // Variabel dan Tipe Data
    // Variabel
    // tidak boleh diawali angka tapi boleh mengandung angka
    // "" bisa menggunakan interpolasi, mengecek apakah di dalam string ada variabel atau tidak
    // jadi, kalo di dalem string ada variabel, string ditulis pake ""
    // $nama = "Charr";
    // echo "nama saya $nama";

    // Operator
    // Aritmatika
    // * / + - %
    // $x = 10;
    // $y = 20;
    // echo $x + $y;

    // Penggabunag String / Concatenation / Concat
    // .
    // $namaDepan = "Charr";
    // $namaBelakang = "Gonn";
    // echo $namaDepan . " " . $namaBelakang;

    // Assignment
    // =, +=, _=, *=, /=, %=, .=
    // $x = 1;
    // $x -= 5;
    // echo $x;
    // $nama = "Charr";
    // $nama .= " ";
    // $nama .= "Gonn";
    // echo $nama;

    // Perbandingan
    // <, >, <=, >=, ==
    // var_dump(1 == "1");

    // identitas
    // ===, !==
    // var_dump(1 === "1");

    // Logika
    // &&, ||, !
    $x = 30;
    var_dump($x < 20 && $x % 2 == 0);
?>