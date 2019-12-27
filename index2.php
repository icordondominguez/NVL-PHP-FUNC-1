<?php

	$texto = "Upgrade Hub";
	$letra = "u";
	cuentaLetraA($texto,$letra);

	function cuentaLetraA($texto,$letra)
	{
		// creamos un contador para contar la cantidad de letras A que hay
		$cont = 0;

		// ponemos la cadena en minusculas por si nos meten alguna mayuscula
		$texto = strtolower($texto);

		// transformamos la cadena en array para poder buscar la letra que nos indiquen
		$arr1 = str_split($texto);

		// recorremos el array y comprobamos en cada posicion si hay una letra como la que nos piden, si lo hay sumamos 1 al contador
		foreach ($arr1 as $d) {
			if($d == $letra){
				$cont++;
			}
		}
		echo "La cadena de texto " . "'$texto'" . " tiene " . $cont . " letras " . $letra;
	}

?>