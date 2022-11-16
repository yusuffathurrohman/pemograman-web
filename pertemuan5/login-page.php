<?php 
session_start();
if(isset($_SESSION['username'])){
    header('location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css"
     integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>login</title>
</head>
<body  background="login.webp">
<div class="global-container">
      <div class="login-form">
        <div class="card-body">
         <img src="download.png" style = "width:80px;height:80px;" align="left">
          <h1 class= "card-title ">f.store05</h1>
          <h5 class= "card-title  ">login</h5>
        </div>
        <div class="card-text">
    <form action="index1.php" method="POST">
        
        <label for="username">username</label>
        <input name="username" type="text"/>
        <br/>
        <label for="password">password </label>
        <input name="password" type="password"/>
        <br/>
        <input type="submit" name="submit" value="Login">
        <br>
        Belum memiliki akun? <a href="registrasi.php">Register</a>
</from>

</body>
</html>