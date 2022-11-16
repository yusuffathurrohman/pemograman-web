<?php
session_start();
// cek apakah ada username
if(isset($_SESSION['username'])){
    header('Location:admin.php');
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
    <title>Register Page</title>
</head> 
<body  background="login.webp">
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="register_proses.php" method="post">
    <div class="global-register">
         <div class="login-form">
        <table width="25%" border="0">
            <tr> 
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>Gender</td>
                <td>:</td>
                <td>
                    <select name="gender" id="gender">
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </td>
            </tr>
            <tr> 
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr> 
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Register"></td>
            </tr>
        </table>
    </form>
    <br><br>
    Sudah memiliki akun? <a href="login-page.php">Login</a>
</body>
</html>