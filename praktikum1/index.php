<?php

    $title = 'Praktikum 1 PHP';
    $nama = 'Firenze Higa Putra' ;
    $umur = 18 ;

    // echo 'WELCOME ' . $nama . '<br>' . ' dengan umur ' . $umur ;

    define('PHI', 3.14);
    $jari = 8;
    $keliling = 2 * PHI * $jari;
    $luas = PHI * $jari * $jari;

    /* echo $keliling;
    echo '<br>' . $luas; */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>

    <p>Keliling Lingkaran : <?php echo $keliling ?></p>
    <p>Luas Lingkaran : <?php echo $luas ?></p>

</body>
</html>