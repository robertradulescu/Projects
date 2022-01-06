<?php 

	$nume = $_POST['numePentruUser'];
	$prenume = $_POST['prenumePentruUser'];
	$numeUser = $_POST['usernamePentruUser'];
	$parolaUser =md5($_POST['parolaPentruUser']);
	
	include "connect.php";
	if(!$nume == null && !$prenume == null && !$numeUser == null && !$parolaUser == null){
	$sql = "INSERT INTO utilizatori(nume, prenume, username, Password) VALUES ('$nume', '$prenume', '$numeUser', '$parolaUser')";
	$rez = mysqli_query($link, $sql);
	}else {
		//echo "Introdu in toate campurile";
		header('Location:newUser.html');
	}
	
	if(!$rez){
		echo "Utilizatorul nu a putut fi creat";
	}
	else {
		//echo "Utilizator creat cu succes";
		header('Location:loginUser.html');
	}
	
?>