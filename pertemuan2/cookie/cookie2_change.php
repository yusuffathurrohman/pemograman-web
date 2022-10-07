<?php
$COOKIE_name = "usser";
$COOKIE_value = "yusuf";
setcookie($COOKIE_name, $COOKIE_value, time()+3600, "/");

if(isset($_COOKIE[$COOKIE_name])){
    echo "cookie ". $COOKIE_name ." telah diatur!<br/>";
    echo "Nilai adalah ". $_COOKIE[$COOKIE_name];
}else{
    echo"Nama cookie ".$COOKIE_name ." telah diatur";
}
?>