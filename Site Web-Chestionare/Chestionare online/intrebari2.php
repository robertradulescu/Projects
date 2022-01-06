<!DOCTYPE html>
<html>
	<head>
		<title>WEB PROJECT</title>
		<meta charset="utf-8" /> 
		<link rel="stylesheet" href="css/styles.css" type="text/css" />

		
	</head>
<body class="hero-image">

<img src="eu.jpg" class="img" alt="Avatar">
<img src="bizi.jpeg" class="img1" alt="Avatar">
<h1 class="text_center">Chestionarara</h1> <br>


<div id="navcontainer">
  <ul>
     <li><a href="meniuUser.html"><span>Acasa</span></a></li>
    <li><a href="despre.html"><span>Despre</span></a></li>
    <li><a href="documentatie.html"><span>Documentatie</span></a></li>
    <li><a href="intrebari.php"><span>Intrebări Suplimentare</span></a></li>
	<li><a href="intrebari1.php"><span>Intrebări Istorie</span></a></li>
	<li><a href="intrebari2.php"><span>Intrebări Cultura Generala</span></a></li>
    <li><a href="http://csac.ulbsibiu.ro"><span>CSAC</span></a></li>
	
   
  </ul>
</div>

     
	  
	   <div id="left-column">
  
	  <?php
		include "connect.php";
		$sql="SELECT *FROM intrebari2";
		$rez=mysqli_query($link,$sql);
		$i=1;
		while($row=mysqli_fetch_array($rez))
		{
			echo "<br>".$i++.".".$row['intrebare'];
			$sql2="SELECT *FROM raspuns2 WHERE id_intr = '$row[id_intrebare]' ";
			$rez2=mysqli_query($link,$sql2);
			echo "<br><br><form action=\"verifica2.php\" method=\"post\">";
			while($row2=mysqli_fetch_array($rez2))
			{
				echo "<input type=\"radio\" name=\"rasp\" value=\"".$row2['id_rasp']."\" >".$row2['rasp']."<br><br>";
			}
			echo "<input type=\"submit\" value=\"Trimite\">";
			echo"</form>";
		}
	  ?>
  
  
  
      </div>
    </div>
    <div id="footer">
      � 2021 Radulescu Robert-Valentin & Bizgan Gheorghe-Alexandru. All rights reserved.
    </div>
  </div>
</body>
</html>
