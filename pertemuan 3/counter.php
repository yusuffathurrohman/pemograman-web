<?php 
$connetion = mysqli_connect("localhost","root","","db_counter");

if(!$connetion){
    echo mysqli_connect_eror();
}
$query_counting = mysqli_query($connetion, "UPDATE db_counter SET counter = counter + 1");
$query_select = mysqli_query($connetion, "SELECT counter FROM db_counter");
$data = mysqli_fetch_row($query_select);

echo"Anda adalah pengunjung ke- ".$data[0]." hari ini";

mysqli_close($connetion);
?>