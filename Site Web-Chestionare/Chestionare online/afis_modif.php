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
<h2>Updateaza utilizatori</h2>
<?php
	include "connect.php";
	$sql="SELECT * FROM utilizatori ORDER BY nume";
	$rez=mysqli_query ($conexiune,$sql);
?>
<table>
		<tr>
			<th>Nr Crt</th>
			<th>Nume</th>
			<th>Prenume</th>			
			<th>Username</th>
			<th>Parola</th>
			<th>Modifica</th>
		</tr>
			<?php
				$i=1;
				while($row=mysqli_fetch_array($rez))
				{
					echo"<tr";
						if($i%2==0)
							echo" class=\"stil1\"";
						echo"><td>".$i."</td>
						<td>".$row['nume']."</td>
						<td>".$row['prenume']."<td>					
						<td>".$row['username']."</td>
						<td>".$row['Password']."</td>

						<td><a href=form_modif.php?idul=".$row['nr'].">Modifica</a></td>
						</tr>\n";
					$i++;
				}
			?>	
</table>
</div>

</div><!--aici se termina wrapperul-->


</body></html>