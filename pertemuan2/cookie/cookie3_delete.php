<?php 
setcookie("usser", "",time()-3600, "/");

if(isset($_COOKIE['usser'])){
    echo "cookie ". 'usser' ." telah diatur!<br/>";
    echo "Nilai adalah ". $_COOKIE['usser'];
}else{
    echo"Nama cookie ". 'usser' ." telah diatur";
}
?>