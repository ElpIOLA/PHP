<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Condicionales I. Uso IF</title>
</head>
<body>

	<form action="10.CondicionalesYUsoDelIf.php" method="post" name="datos_usuario" id="datos_usuario">
		<table width="15%" align="center">
			<tr>
				<td>Nombre</td>
				<td>
					<label form="nombre_usuario" id="nombre_usuario"></label>
					<input type="text" name="nombre_usuario" id="nombre_usuario">
				</td>
			</tr>
			<tr>
				<td>Edad</td>
				<td>
					<label form="edad_usuario" id="edad_usuario"></label>
					<input type="text" name="edad_usuario" id="edad_usuario">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="enviando" id="enviando" value="Enviar">
				</td>
			</tr>
		</table>
	</form>


<?php 

	if (isset($_POST["enviando"])){
		$edad = $_POST["edad_usuario"];	

		/*if($edad < 18){
			echo "Eres menor de edad. No tienes acceso.";
		}else{
			echo "Eres mayor. Por lo tanto puedes acceder.";
		}*/

		//Esto es el operador Ternario. Es lo mismo que el IF pero mucho mas resumido. Si se cumple la condicion $edad<18 Aparecera el primer comentario. Sino el segundo.
		echo $edad<18 ? "Eres menor de edad. No puedes acceder." : "Puedes acceder."; 

		//Sino se puede almacenar en una variable.
		$resultado $edad<18 ? "Eres menor de edad. No puedes acceder." : "Puedes acceder."; 
	}
	
	/*
	&& Y LOGICO
	AND Y LOGICO
	|| O LOGICO
	OR O LOGICO
	XOR O EXCLUSIVO
	! NEGACION (NOT)
	*/
 ?>
</body>
</html>