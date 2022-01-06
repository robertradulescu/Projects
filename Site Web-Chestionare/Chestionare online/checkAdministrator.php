<?php

	$numeAdmin = $_POST['adminName'];
	$parolaAdmin = $_POST['adminPassword'];
	
	if($numeAdmin == "robert") {
		if($parolaAdmin == "robert") {
			header('Location: meniuAdministrator.html');
		}
		
		else {
			// echo "Parola introdusă este incorectă";
			header('Location: loginAdmin.html');
		}
	}
	else {
		// echo "Numele introdus nu aparține administratorului";
		header('Location: loginAdmin.html');
	}
	
?>