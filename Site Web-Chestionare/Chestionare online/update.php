<?php
	include "connect.php";
	$x=$_POST['idul1'];
	$a=$_POST['Nume'];
	$y=$_POST['Prenume'];
	$b=$_POST['Username'];
	$c=$_POST['Parola'];
	
	$sql="UPDATE utilizatori SET nume='$a',prenume='$y' ,username='$b', 
			Password='$c' WHERE nr='$x'";
	$rez=mysqli_query($conexiune,$sql);
	if($rez)
		header("Location: afis_modif.php");
	else
		echo"Problema la ...";
?>