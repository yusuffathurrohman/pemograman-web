<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesi 4</title>
</head>

<body>
    <?php
    if(isset($_SESSION['alamat'])){
        echo "alamat saya "." ". $_SESSION['alamat'];
    } else {
        echo "Variable session alamat belum dibuat / sudah terhapus";
    }
    ?>
</body>
</html>