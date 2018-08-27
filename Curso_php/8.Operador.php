<style type="text/css" media="screen">
	.resultado {
		    font-weight: bold;
		    font-size: 32px;
			padding: 10px;
			background: #B0FBE3;
			border: #000 2px solid;
			width: 25%;
			margin: auto;
			text-align: center;
		}
</style>


<?php 
		function calcular($calculo){
			global $numero_1;
			global $numero_2;

			if(strcasecmp("Suma",$calculo) == 0){
				echo "<p class='resultado'>El resultado es: " . ($numero_1+$numero_2);
			}

			if(strcasecmp("Resta",$calculo) == 0){
				echo "<p class='resultado'>El resultado es: " . ($numero_1-$numero_2);
			}

			if(strcasecmp("Multiplicación",$calculo) == 0){
				echo "<p class='resultado'>El resultado es: " . ($numero_1*$numero_2);
			}

			if(strcasecmp("División",$calculo) == 0){
				echo "<p class='resultado'>El resultado es: " . ($numero_1/$numero_2);
			}

			if(strcasecmp("Módulo",$calculo) == 0){
				echo "<p class='resultado'>El resultado es: " . ($numero_1%$numero_2);
			}

			if(strcasecmp("Incremento",$calculo) == 0){
				echo "<p class='resultado'>El resultado es: " . $numero_1++;
			}

			if(strcasecmp("Decremento",$calculo) == 0){
				echo "<p class='resultado'>El resultado es: " . $numero_1--;
			}
		}
				
		/*  + Suma
			- Resta
			* Multiplicacion
			/ Division
			% Modulo
			++ += Incremento
			-- -= Decremento
		*/
 ?>