<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Funciones</title>
</head>
<body>


	<?php 

		function suma($num1,$num2)
		{
			$resultado = $num1 + $num2;
			return $resultado;
		}

		echo ("Resultado: " . suma(35,20));

		function frase_mayus($frase,$conversion=true)
		{

			$frase = strtolower($frase);

			if($conversion == true)
			{
				$resultado = ucwords($frase);
			}
			else
			{
				$resultado = strtoupper($frase);
			}

			return $resultado;
		}

		echo (frase_mayus("esto es una prueba"));
		/*
			Las funciones permiten automatizar tareas. Esto permite eliminar codigo repetitivo en los programas.
			Ejemplo: Necesitamos que nuestros programas realicen un calculo concreto. Creamos una funcion que realice dicho calculo y utilizamos la funcion las veces que sea necesario en nuestros programas.

			2 tipos:
				Funciones predefinidas: vienen con el lenguaje PHP.
				Funciones propias: las crea el programador con el objetivo de reutilizarlas en el futuro.
		*/

	 ?>


</body>
</html>