<?php
$host = "localhost"; //aici numele serverului
$user = "root"; // aici userul
$passw = ""; //parola
$db_name = "baza"; // numele bazei de date

$link = mysqli_connect($host, $user, $passw, $db_name);

$conn = mysqli_connect('localhost','root','','baza');

$conexiune = mysqli_connect($host,$user,$passw,$db_name);
mysqli_set_charset($conexiune,"utf8");
//mysql_set_charset('utf8');
if(!$conexiune)
echo mysqli_connect_error();

?>