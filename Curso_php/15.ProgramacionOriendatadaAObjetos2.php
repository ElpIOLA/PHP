<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Programacion orientada a objetos</title>
</head>
<body>

	<?php 
		class Coche 
		{
			//Atributos
			var $ruedas;
			var $color;
			var $motor;

			//Metodo Constructor
			function Coche() //Se encarga de darle un estado inicial a la clase.
			{
				$this->ruedas = 4;
				$this->color = " ";
				$this->motor = 1600;
			}

			//Metodos
			function arrancar()
			{
				echo "Estoy arrancando<br>";
			}

			function girar()
			{
				echo "Estoy girando<br>";
			}

			function frenar()
			{
				echo "Estoy frenando<br>";
			}
		}

		$fiat = new Coche(); 
		
		$fiat->arrancar();
		echo "Ruedas: " . $fiat->ruedas;

	 ?>
</body>
</html>