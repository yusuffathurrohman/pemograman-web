<?php
session_start();
if(isset($_SESSION['ussername'])){
    session_destroy();
    echo'<script>
    alert("Anda berhasil Logout");
    window.location="login-page.php";
    </script>'
} else {
    header('location:admin.php');
    exit();
}
?>
