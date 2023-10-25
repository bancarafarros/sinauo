<?php
    // versi lama
    $hari = array("Senin", "Selasa", "Rabu");
    
    //  versi baru
    $bulan = ["Januari", "Februari", "Maret"];

    $arr = [100, "teks", true];

    // menampilkan array
    // versi debugging
    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>";

    // menampilkan 1 elemen dari array
    echo $arr[0];
    echo "<br>";
    echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #bada55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <?php
        $angka = [1, 2, 3,4,5,6,7,8,9];
    ?>

    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
    <br><br><br>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #bada55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
        $angka = [
                    [1, 2, 3],
                    [4, 5, 6],
                    [7, 8, 9]
                ];
    ?>

    <!-- <?php echo $angka[1][1]; ?> -->
    <!-- <?php echo $angka[1][1] . $angka[1][1]; ?> -->

    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $an) : ?>
            <div class="kotak"><?= $an; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

</body>
</html>