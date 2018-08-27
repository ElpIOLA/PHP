<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta name="name" content="content">
		<title>Constante</title>
	</head>
	<body>
		
		<?php 

			define("PROGRAMADOR","Hernan",true);

			echo "Linea: " . __LINE__ ."<br>";

			echo "Fichero: " . __FILE__;





			/*CONSTANTE:
				Espacio	en la memoria del ordenador donde se almacenara un valor que no podra cambiar durante la ejecucion del programa.
			
			ASPECTOS A TENER EN CUENTA CON LAS CONSTANTES:
				
				-El nombre de las constantes ha de ir en mayusculas.
				-El nombre de las constantes no deben llevar el simbolo $.
				-Es obligatorio el uso de la funcion define() para definirla.
				-El ambito de las constantes es global por defecto.
				-Las constantes no se pueden redefinir.
				-Las constantes solo pueden almacenar valores escalares.
			*/
		 ?>	
	</body>
	</html>	