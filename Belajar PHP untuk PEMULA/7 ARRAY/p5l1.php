<?php
    // array
    // variabel yang dapat memiliki banyak nilai
    // elemen pada array bis amemiliki tipe data yang berbeda
    // array adalah pasangan antara key dan value
    // key adalah index yang dimulai dari 0

    // membuat array
    // cara lama
    $hari = array("Senin", "Selasa", "Rabu");

    // cara baru
    $bulan = ["Januari", "Februari", "Maret"];

    $arr1 = [123, "tulisan", false];

    // manmpilkan array
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";
    // echo $arr1[1];

    // menambahkan elemen baru pada array;
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jumat";
    echo "<br>";
    var_dump($hari);
?>