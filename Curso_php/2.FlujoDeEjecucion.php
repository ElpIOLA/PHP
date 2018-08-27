<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="name" content="content">
	<title>Flujo de Ejecucion</title>
</head>
<body style="background: #19F8A7; text-align: center;">


	<?php 
		function datos(){
			echo "<b>Este es el mensaje de la funcion </b><br>";
		}
	 ?>

	<?php 

		echo "Este es el primer mensaje <br>",
		datos();
		echo "Este es el segundo mensaje <br>";

		//include ("Nombre del archivo");
	 ?>
</body>
</html>