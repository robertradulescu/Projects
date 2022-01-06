<!DOCTYPE html >
<html>
<head>
<meta charset=UTF-8>
<title>Template</title>
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
<h2>Formular modificare</h2>
<?php
$x=$_GET['idul'];
$sql="SELECT * FROM utilizatori WHERE nr='$x'";
include "connect.php";
$rez=mysqli_query($conexiune,$sql);
$row=mysqli_fetch_array($rez);

?>


<form action=update.php method=post>
<label>Nume</label><input type=text name=Nume value= <?php echo $row['nume']; ?> required=required><br>
<label>Prenume</label><input type=text name=Prenume value= <?php echo $row['prenume']; ?> required=required><br>
<label>Username</label><input type=text name=Username value= <?php echo $row['username'];?> required=required><br>
<label>Parola</label><input type=password name=Parola value= <?php echo $row['Password']; ?> required=required><br>
<input type=hidden name=idul1 value= <?php echo $x; ?>>
<input type=submit value=Modifica>
</div>

</div><!--aici se termina wrapperul-->


</body></html>