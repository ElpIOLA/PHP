<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="name" content="content">
	<title>Operadores Matematicos</title>
	<style type="text/css" media="screen">
		* {
			padding: 0;
			margin: 0;
		}

		body {
			background: #B7A1DF;
			text-align: center;
		}

		form {
			border: #000 2px solid;
			padding: 10px;
			width: 28%;
			margin: auto;
			background: #551DF6;
		}

		.text{
			padding: 2px;
			margin: 2px;
			background: #CDC8C8;
			border: #000 1px solid;
		}		

		.boton {
			padding: 3px;
			margin: 2px;
			border: #000 1px solid;
			width: 100px;
		}

		.operador {
			padding: 2px;
			margin: 1px;
			border: #000 2px solid;
		}
	</style>
</head>
<body>

	<p>&nbsp;</p>
	<form name="form1" method="post" action="">
	  <p>
	    <label for="num1"></label>
	    <input type="text" class="text" name="num1" id="num1">
	    <label for="num2"></label>
	    <input type="text" class="text" name="num2" id="num2">
	    <label for="operacion"></label>
	    <select name="operacion" class="operador" id="operacion">
	      <option>Suma</option>
	      <option>Resta</option>
	      <option>Multiplicación</option>
	      <option>División</option>
	      <option>Módulo</option>
	      <option>Incremento</option>
	      <option>Decremento</option>
	    </select>
	  </p>
	  <p>
	    <input type="submit" class="boton" name="button" id="button" value="Enviar" onClick="prueba">
	  </p>
	</form>
	<p>&nbsp;</p>

	<?php 
		include("8.Operador.php");

		if(isset($_POST["button"]) == 1){

			$numero_1 = $_POST["num1"];
			$numero_2 = $_POST["num2"];
			$operacion = $_POST["operacion"];

			if($numero_1 != 0 && $numero_2 != 0){
				calcular($operacion);
			}else{
				echo "<p class='resultado'> Debe ingresar al menos un numero.";
			}		
		}
	 ?>
</body>
</html>