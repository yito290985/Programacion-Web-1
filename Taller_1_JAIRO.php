<?php 

	echo "TALLER 1 SEGUNDA PARTE<br><br><br>";

	echo "a. Determinar si un número es negativo<br>";

	$n1 = 22 ;

	if($n1 < 0) {
			echo "".$n1."  es un numero negativo";
		}else{ 
			echo "".$n1." NO es un numero negativo<br>";
		}
	
	echo "<br>b. Imprimir verdadero o falso de acuerdo al contenido de una variable <br>";
	
	$var = false;

	if($var) {
		echo "Verdadero.";
	}else {
		echo "Falso.<br><br>";
	}


	echo "c. Determinar si un número es primo<br>";


	$v = 7;
	$p = 0;
	 
	for ($a = 1; $a < $v; $a++) {
	    if ($v % $a == 0) {
	        $p++;
	    }
	}
	 
	if ($p >= 2) {
	    echo "El numero ".$v." no es primo.<br><br>";
	} else {
	    echo "El numero ".$v." es primo.<br><br>";
	}


	echo "d. Determinar si un número es mayor que 35.<br>";

	$n2 = 30;

	if($n2 < 35) {
		echo "".$n2." es menor que 35.<br><br>";
	}else {
		echo "".$n2." es mayor que 35.<br><br>";
	}


	echo "e. Determinar si un número es positivo y menor que 100.<br>";

	$n3 = -20;

	if($n3 >= 0 && $n3 < 100) {
		echo "".$n3." es positivo y menor que 100.";
	}else {
		echo "".$n3." es negativo y menor que 100.<br><br>";
	}


	echo "f. Determinar si un número pertenece al intervalo [-3,27].<br>";

	$n4 = -2;

	if($n4 >= -3 && $n4 <= 27) {
		echo "".$n4." pertenece al intervalo -3, 27.<br><br>";
	}else {
		echo "".$n4." no pertenece al intervalo -3, 27.<br><br>";
	}


	echo "g. Determinar si un número no pertenece al intervalo [25,50].<br>";

	$n5 = 30;

	if($n5 >= 25 && $n5 <= 50) {
		echo "".$n5." pertenece al intervalo 25, 50.<br><br>";
	}else {
		echo "".$n5." no pertenece al intervalo 25, 50.<br><br>";
	}

	echo "h. Determinar si el módulo de un número es menor que 15.<br>";

	$n6 = 14;

	if($n6 % 1 < 15) {
		echo "El modulo de ".$n6." es menor que 15.<br><br>";
	}else {
		echo "El modulo de ".$n6." es mayor que 15.<br><br>";
	}


	echo "i. Determinar si un entero es impar (lo será cuando el resto de su división (operador aritmético ‘%’) por 2 sea distinto de cero).<br>";

	$n7 = 10;

	if($n7 % 2 == 0) {
		echo "".$n7." no es un numero impar.<br><br>";
	}else {
		echo "".$n7." es un numero impar.<br><br>";
	}


	echo "j. Eleve al cuadrado un número si es par y al cubo si es impar.<br>";

	$n8 = 6;
	$r;

	if($n8 % 2 == 0) {
		$r = $n8 ** 2;
		echo "El resultado de elevar ".$n8." al cuadrado es ".$r.".<br><br>";
	}else {
		$r = $n8 ** 3;
		echo "El resultado de elevar ".$n8." al cubo es ".$r.".<br><br>";
	}


	echo "k. Calcule el máximo de 2 números dados.<br>";

	$n9 = 4;
	$n10 = 8;

	if($n9 < $n10) {
		echo "El maximo entre ".$n9." y ".$n10." es ".$n10.".<br><br>";
	}else {
		echo "El maximo entre ".$n9." y ".$n10." es ".$n9.".<br><br>";
	}


	echo "l. Calcule el máximo de tres números.<br>";

	$n11 = 120;
	$n12 = 230;
	$n13 = 190;

	if($n11 < $n12 && $n12 > $n13) {
		echo "El maximo entre ".$n11.", ".$n12." y ".$n13." es ".$n12.".<br><br>";
	}else if($n11 > $n12 && $n11 > $n13) {
		echo "El maximo entre ".$n11.", ".$n12." y ".$n13." es ".$n11.".<br><br>";
	}else if($n11 < $n12 && $n12 < $n13) {
		echo "El maximo entre ".$n11.", ".$n12." y ".$n13." es ".$n13.".<br><br>";
	}

	echo "m. Ordenar 2 números de menor a mayor.<br>";

	$n14 = 17;
	$n15 = 19;

	if($n14 < $n15) {
		echo "Orden de menor a mayor ".$n14.", ".$n15.".<br><br>";
	}else if ($n14 == $n15) {
		echo "Los numeros ".$n15." y ".$n14." son iguales.<br><br>";
	}else {
		echo "Orden de menor a mayor ".$n15.", ".$n14.".<br><br>";
	}


	echo "n. Ordenar 3 numeros de mayor a menor.<br>";

	$n16 = 12;
	$n17 = 30;
	$n18 = 5;

	if($n16 > $n17 && $n17 > $n18) {
		echo "Orden de mayor a menor ".$n16.", ".$n17.", ".$n18.".<br><br>";
	}else if($n16 < $n17 && $n17 < $n18) {
		echo "Orden de mayor a menor ".$n18.", ".$n17.", ".$n16.".<br><br>";
	}else if($n16 < $n17 && $n18 < $n16) {
		echo "Orden de mayor a menor ".$n17.", ".$n16.", ".$n18.".<br><br>";
	}else if($n16 < $n17 && $n18 > $n16) {
		echo "Orden de mayor a menor ".$n17.", ".$n18.", ".$n16.".<br><br>";
	}else if($n16 > $n18 && $n18 > $n17) {
		echo "Orden de mayor a menor ".$n16.", ".$n18.", ".$n17.".<br><br>";
	}else if($n16 < $n18 && $n16 > $n17) {
		echo "Orden de mayor a menor ".$n18.", ".$n16.", ".$n17.".<br><br>";
	}else if ($n16 == $n17 && $n16 == $n18 && $n17 == $n18) {
		echo "Los numeros ".$n18.", ".$n16." y ".$n17." son igules.<br><br>";
	}

 	echo "o. Determinar la longitud de una cadena y si es mayor a 5 caracteres indicar nombre largo,de lo contrario nombre corto.<br>";

 	$c = "salazar";
	
	if(strlen($c) > 5) {
		echo "La longitud de la cadena es de ".strlen($c)." caracteres y el texto es largo.<br><br>";
	}else {
		echo "La longitud de la cadena es de ".strlen($c)." caracteres y el texto es corto.<br><br>";
	}


	echo "p. Determinar si una variable existe<br>";

	$ve=0;

	if(isset($ve)) {
		echo "La variable existe.<br><br>";
	}else {
		echo "La variable no existe.<br><br>";
	}


	 echo "q. Determinar si una variable está vacía o tiene contenido.<br>";

	 $vari="jairo";

	if(empty($vari)) {
		echo "La variable se encuentra vacia.<br><br>";
	}else {
		echo "La variable contiene informacion.<br><br>";
	}
 ?>