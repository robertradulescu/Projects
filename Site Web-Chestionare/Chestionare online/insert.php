<?php
echo"";
$a=$_POST['nume'];
$b=$_POST['prenume'];
$c=$_POST['username'];
$d=md5($_POST['parola']);

include "connect.php";
$sql="INSERT INTO utilizatori (nume,prenume,username,Password) VALUES ('$a','$b','$c','$d')";
//echo $sql;
//die();
$rez=mysqli_query($conexiune,$sql);
if($rez)
		header("Location:afis.php");
	else
		header("Location:form_insert.php");

?>