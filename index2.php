<?php

	$texto = "PHP me esta volviendo loca la cabeza";
	cuentaLetraA($texto);

	function cuentaLetraA($texto)
	{
		// creamos un contador para contar la cantidad de letras A que hay
		$cont = 0;

		// ponemos la cadena en minusculas por si nos meten alguna mayuscula
		$texto = strtolower($texto);

		// transformamos la cadena en array para poder buscar la letra A
		$arr1 = str_split($texto);

		// recorremos el array y comprobamos en cada posicion si hay una A, si lo hay sumamos 1 al contador
		foreach ($arr1 as $d) {
			if($d == 'h'){
				$cont++;
			}
		}
		echo "La cadena de texto " . "'$texto'" . " tiene " . $cont . " letras A";
	}
	
?>