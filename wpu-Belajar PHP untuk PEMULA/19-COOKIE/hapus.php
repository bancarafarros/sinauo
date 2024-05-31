<?php
session_start();

// validasi user sudah atau belum untuk mencegah function digunakan non user
if (!isset($_SESSION["login"])) {
    header("Location: login.php"); // jika belum login diarahkan ke login.php
    exit;
}

// menggunakan file functions.php
require 'functions.php';

$id = $_GET["id"];

if (hapusMahasiswa($id) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'index.php'
        </script>";
} else {
    echo "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'index.php'
        </script>";
}
