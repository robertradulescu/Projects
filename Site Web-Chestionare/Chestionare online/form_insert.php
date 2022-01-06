<!DOCTYPE html >
<html>
<head>
<meta charset=UTF-8>
<title>Insereaza Studenti</title>
<link href="stil.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
 
<div id="nav">
<?php
include "meniuAdministrator.html";
?>

</div>
<div id=clear></div>
<div id="continut">
<h2>Formular inserare</h2>
<form action=insert.php method=post>
<label>Nume</label><input type=text name=nume required=required><br>
<label>Prenume</label><input type=text name=prenume required=required><br>
<label>Username</label><input type=text name=username required=required><br>
<label>Parola</label><input type=password name=parola required=required><br>

<input type=submit value=INSCRIE>
</div>

</div><!--aici se termina wrapperul-->


</body></html>