<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="name" content="content">
	<title>Ambitos de las Variables</title>
</head>
<body>


	<?php 

		$nombre = "Hernan";

		function dameNombre(){
			global $nombre; //Cambiamos la variable local por una global. Solamente se puede usar global dentro de una funcion.
			$nombre = "El nombre es: " . $nombre = "Maria";
		}

		dameNombre();

		echo $nombre;

	 ?>
</body>
</html>