<?php
    // Date
    // Menampilkan tanggal denga format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp /EPOCH Time
    // echo time();
    // echo date("l", time() + 172800); // 172800 detik dalam 2 hari ke depan
    // echo date("l", time() + 60 * 60 * 24 * 100); // 60 detik * 60 menit * 24 jam * 100 hari dalam 100 hari ke belakang
    
    // mktime jam, menit, detik, bulan, tanggal, tahun
    // membuat sendiri detik
    // echo date("l", mktime(0, 0, 0, 6, 25, 2002)); // mengetahui tanggal di masa lalu

    // strtotime
    echo date("l", strtotime("25 jun 2002"));
?>