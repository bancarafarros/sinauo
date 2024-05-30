<?php

session_start(); // memulai session
$_SESSION = []; // mengosongkan session
session_unset(); // unset session atau menghentikan session yang sedang berjalan
session_destroy(); // menghancurkan atau menghentikan session yang sedang berjalan

header("Location: login.php"); // mengarahkan ke halaman login.php
exit;
