<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="name" content="content">
	<title>Variables y comentarios</title>
</head>
<body>

	<?php 

		$nombre = "Hernan"; //Creamos una variable string
		
		$edad = 21;

		//Con doble comilla " " Se puede mostrar cadena de caracteres mas el valor de las variables.
		//Con comillas simples ' ' Se puede mostrar cadena de caracteres pero sin el valor de las variables.

		print "Bienvenido $nombre!<br>";
		print "Tu edad es: $edad";

		echo "<br>echo: " . $nombre,$edad;

		//print Muestra string y variables.
		//echo Hace lo mismo pero tambien puede mostrar varias variables sin string.



	 ?>
</body>
</html>