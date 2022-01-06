<?php 

   $id_intr = $_POST['id_intr'];
   
	$raspuns1 = $_POST['raspuns1'];
	$corect1 =  $_POST['corect1'];
	
	$raspuns2 = $_POST['raspuns2'];
	$corect2 =  $_POST['corect2'];
	
	$raspuns3 = $_POST['raspuns3'];
	$corect3 =  $_POST['corect3'];
	
	
	include "connect.php";
	if(!$raspuns1 == null && !$id_intr == null  ){
	$sql = "INSERT INTO raspuns(rasp, id_intr, corect) VALUES ('$raspuns1', '$id_intr', '$corect1')";
	$rez = mysqli_query($link, $sql);
	}else {
		//echo "Introdu in toate campurile";
		header('Location:loginUser.html');
	}
	
	if(!$raspuns2 == null && !$id_intr == null  ){
	$sql = "INSERT INTO raspuns(rasp, id_intr, corect) VALUES ('$raspuns2', '$id_intr', '$corect2')";
	$rez = mysqli_query($link, $sql);
	}else {
		//echo "Introdu in toate campurile";
		header('Location:loginUser.html');
	}
	
	if(!$raspuns3 == null && !$id_intr == null  ){
	$sql = "INSERT INTO raspuns(rasp, id_intr, corect) VALUES ('$raspuns3', '$id_intr', '$corect3')";
	$rez = mysqli_query($link, $sql);
	}else {
		//echo "Introdu in toate campurile";
		header('Location:loginUser.html');
	}
	
	
	
	
	if(!$rez){
		echo "Utilizatorul nu a putut fi creat";
	}
	else {
		//echo "Utilizator creat cu succes";
		header('Location:meniuAdministrator.html');
	}
	
?>