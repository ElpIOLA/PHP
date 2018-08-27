<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Parametros por valor y por referencia</title>
</head>
<body>

	<?php 

		function cambia_mayus(&$param)
		{
			$param = strtolower($param); // Pasa una cadena a minuscula.

			$param = ucwords($param); // Convierte la primera letra de cada palabra en mayuscula.

			return $param;
		}

		$cadena = "hOLA mUNDO";

		echo cambia_mayus($cadena) . "<br>";
		echo $cadena;

		//$ Pasaje por valor.
		//&$ Pasaje por referencia.
	 ?>
</body>
</html>