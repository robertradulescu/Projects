<?php 

	$intrebare = $_POST['intrebare'];

	
	include "connect.php";
	if(!$intrebare == null ){
	$sql = "INSERT INTO intrebari(intrebare) VALUES ('$intrebare')";
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