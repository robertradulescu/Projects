<?php
	include "connect.php";
	$id=$_GET['id'];
	$sql="DELETE FROM utilizatori WHERE nr='$id'";
	//echo $sql;
	//die();
	$rez=mysqli_query($conexiune,$sql);
	if($rez)
		header("Location: afis_sterge.php");
	else
		echo"Problema la ...";
?>