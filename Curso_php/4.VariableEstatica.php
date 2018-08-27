<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="name" content="content">
	<title>Variable Estatica</title>
</head>
<body>


	<?php 

		function incrementaVariable(){
			static $contador = 0; //Creamos una variable estatica. Lo que hace es conservar su valor al salir de la funcion.

			$contador++;

			echo $contador . "<br>";
		}

		incrementaVariable();
		incrementaVariable();
		incrementaVariable();
		incrementaVariable();
	 ?>
</body>
</html>