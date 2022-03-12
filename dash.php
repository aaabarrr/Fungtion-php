<?php
    include_once('libfungsi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Luas Segitiga :<?= segitiga();?></h1>
    <h1>Luas Persegipangang :<?= persegipanjang(2,3);?> </h1>
    <h1>Volume bangun ruang kubus :<?= kubus();?> </h1>
    <h1>volume bangun ruang balok: <?=balok();?> </h1>
</body>
</html>