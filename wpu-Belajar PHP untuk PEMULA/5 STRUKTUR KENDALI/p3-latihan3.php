<?php
// Pengkondisian / Percabangan
// if else
// if else if else
// ternary
// switch

// $x = 10;
// if ($x < 20) {
//     echo "benar";
// }

// $x = 20;
// if ($x < 20) {
//     echo "benar";
// }
// echo "salah"

// $x = 10;
// if ($x < 20) {
//     echo "benar";
// }
// echo "salah";

// $x = 10;
// if ($x < 20) {
//     echo "benar";
// } else {
//     echo "salah";
// }

// $x = 30;
// if ($x < 20) {
//     echo "benar";
// } elseif ($x == 20) {
//     echo "bingo!";
// } else {
//     echo "salah";
// }

$x = 20;
if ($x < 20) {
    echo "benar";
} elseif ($x == 20) {
    echo "bingo!";
} else {
    echo "salah";
}

// ternary
// yang pertama aksi dari kondisi true, yg kedua aksi dari kondisi false
// di bawah sama kayak ini, if empty($user) = TRUE, set $status = "anonymous"
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo("<br>");

$user = "John Doe";
// di bawah sama kayak ini, if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";

// switch
// if else if versi lebih simpel

$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

// versi if else if
$favcolor = "red";
if ($favcolor == "red") {
    echo "Your favorite color is red!";
} else if ($favcolor == "blue") {
    echo "Your favorite color is blue!";
} else if ($favcolor == "green") {
    echo "Your favorite color is green!";
} else {
    echo "Your favorite color is neither red, blue, nor green!";
}

?>