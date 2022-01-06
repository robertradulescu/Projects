<?php

	$numeUser = $_POST['usernamex'];
	$parolaUser = md5($_POST['password']);
	
	include 'connect.php';
	
	$sql = "SELECT * from utilizatori WHERE username = '$numeUser'";
	$rez = mysqli_query($link, $sql);
	$row = mysqli_fetch_array($rez); //
	
	$parola = $row['Password'];
	
	if($parolaUser == $parola && $parolaUser != "") {
		header('Location: meniuUser.html');
	}
	else {
		//echo "<br> Datele introduse �n formular sunt incorecte";
		header('Location: loginUser.html');
	
	}
?>