<?php
session_start();
$database =[
    'ussername'=> 'yusuf',
    'password' => 'fathur123'
];

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $database['ussername'] && $password == $database['password']){
        $_SESSION['ussername'] = $username;
        header("location:admin.php");
    }else{
        echo '<script> alert("username atau pasword salah!");
        window.location="login-page.php";</script>';
    }
}else{
    echo '<script> window.location="login-page.php";</script>';
}
?>