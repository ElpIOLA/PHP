<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="name" content="content">
	<title>String</title>
	<style type="text/css" media="screen">
		
		.resaltar {
			color:#F00;
			font-weight: bold;
			background: #C9BCBC;
		}

	</style>
</head>
<body>


	<?php 
		//strcmp Compara valores de tipo string y no ignora si son mayusculas.
		//strcasecmp Compara valores de tipo string ignora sin son mayusculas o minusculas.

		$variable1 = "casa";
		$variable2 = "CASA";

		$resultado = strcasecmp($variable1,$variable2);

		if($resultado == 1){
			echo "No coinciden";
		}else{
			echo "Coinciden";
		}

		

	 ?>
</body>
</html>