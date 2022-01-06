<?php
	include "connect.php";
	
	$rasp=$_POST['rasp'];
	
	$sql="SELECT *FROM raspuns WHERE id_rasp = '$rasp'";
	$rez=mysqli_query($link,$sql);
	$row=mysqli_fetch_array($rez);
	
	if($row['corect'] == 1)
		echo "Corect !";
	else
		echo "Incorect !";
?>