<?php
$hostname= "localhost";
$username= "root";
$password="";
$dbname="test"; 
$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("Unable to connect");
}
if ($_POST) {
    $uname= $_POST["username"];
    $pass= $_POST["password"];

    $uname= mysqli_real_escape_string($conn, $uname); 
    $sql="SELECT * FROM users_tutorial WHERE username='$uname' AND password '$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1){
        echo "Welcome, user!";
    }else{
        echo"Incorrect Username/password";
    }
}

?>