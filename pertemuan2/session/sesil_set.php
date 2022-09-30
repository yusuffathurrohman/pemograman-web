<?php
session_start();
$_SESSION['nama'] = "yusuf fathurrohman";
$_SESSION['absen'] = 33;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan sission</title>
</head>
<body>
    <?php 
    echo "nama saya".$_SESSION['nama']."<br>"."Nomor absen".$_SESSION['absen'];
    ?>
</body>
</html>