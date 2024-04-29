<?php
    // pengulangan pada array
    // for dan foreach

    $angka = [3, 2, 15, 20, 11, 77, 89, 8];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <!-- <?php for ($i=0; $i < 7; $i++) : ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php endfor; ?> -->

    <!-- pake for -->
    <?php for ($i=0; $i < count($angka); $i++) : ?>
        <div class="kotak"><?= $angka[$i]; ?></div>
    <?php endfor; ?>
    
    <div class="clear"></div>

    <!-- pake foreach -->
    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
</body>
</html>