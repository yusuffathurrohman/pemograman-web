<?php
session_start();
if(isset($_SESSION['ussername'])){
    header('location:login-page.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <h1><p align= center>Hello, Selamat Datang <?= $_SESSION['ussername']; ?>!!!<p>
    </h1>
    <p align= center> kamu berada di page <b>admin</b></p>
    <br><h3><p align= center ><a href='logout.php'>logout</a></p></h3>
</body>
</html>