<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Condicional Switch</title>
</head>
<body>
	<form action="11.CondicionalesSwitch.php" method="post" name="datos_usuario" id="datos_usuario">
		<table width="15%" align="center">
			<tr>
				<td>Nombre</td>
				<td>
					<label for="nombre_usuario" id="nombre_usuario"></label>
					<input type="text" name="nombre_usuario" id="nombre_usuario">
				</td>
			</tr>
			<tr>
				<td>Contraseña</td>
				<td>
					<input type="text" name="contra_usuario" id="contra_usuario">
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
		if(isset($_POST["enviando"])){

			$nombre = $_POST["nombre_usuario"];
			$contra = $_POST["contra_usuario"];
			
			switch (true) {
				case $nombre == "Hernan" && $contra == "1234":
						echo "Usuario registrado!";
					break;
				default:
						echo "Usuario no registrado!";
					break;
			}
		}
	 ?>
</body>
</html>