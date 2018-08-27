<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="name" content="content">
	<title>Operadores de Comparacion</title>

	<style type="text/css" media="screen">

		body {
			background: #77CDFE;
		}

		h1 {
			text-align: center;
			border: #000 2px solid;
			width: 40%;
			margin: auto;
			margin-bottom: 6px; 
			background: #DFD8D8;
		}

		table {
			background-color: #FFC;
			padding: 5px;
			border: #666 5px solid;
		}

		.no_validado {
			text-align: center;
			font-size: 25px;
			color: #F00;
			font-weight: bold;
		}

		.validado {
			text-align: center;
			font-size: 25px;
			color: #20427F;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<h1>USANDO OPERADORES COMPARACION</h1>

	<form action="6.OperadoresDeComparacion.php" method="post" name="datos_usuario" id="datos_usuario">
		<table width="15%" align="center">
			<tr>
		      <td>Nombre:</td>
		      <td><label for="nombre_usuario"></label>
		      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
		    </tr>
		    <tr>
		      <td>Edad:</td>
		      <td><label for="edad_usuario"></label>
		      <input type="text" name="edad_usuario" id="edad_usuario"></td>
		    </tr>
		    <tr>
		      <td>&nbsp;</td>
		      <td>&nbsp;</td>
		    </tr>
		    <tr>
		      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
		    </tr>
		</table>
	</form>



	<?php 

		//$_POST es una variable super global.
		//Comprobamos si pulsamos el boton
		if(isset($_POST["enviando"])){

			$usuario = $_POST["nombre_usuario"];
			$edad = $_POST["edad_usuario"];

			if($usuario == "Hernan" && $edad == 21){
				echo "<p class='validado'>Bienvenido amo!</p>";
			}else{
				echo "<p class='no_validado'>Usted no es mi amo.</p>";
			}
		}



		// == "Igual que". Verdadero sin las dos variables son iguales.
		// === "Identica que". Verdadero si las dos variables son iguales y del mismo tipo.
		// != "Diferente que". Verdadero si las dos variables no son iguales.
		// <> "Diferente que". Verdadero si las dos variables no son iguales y ademas no son del mismo tipo.
		// < "Menor que". Verdadero si la primera variable es menor que la segunda.
		// > "Mayor que". Verdadero si la primera variable es mayor que la segunda.
		// <= "Menor o igual que". Verdadero si la primera variable es menor o igual que la segunda.
		// >= "Mayor o igual que". Verdadero si la primera variable es Mayor o igual que la segunda.

	 ?>
</body>
</html>