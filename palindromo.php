<?php
	
	$palavra  = $_GET["palavra"];
	$palavra = trim($palavra);
	$palavra_invertida = strrev($palavra);
	var_dump($palavra);

	print "<p>Teste de palavras que são palindromos!</p>";
	
	print "<p>A palavra digita foi: <b>";	
	print $palavra;
	print "</b></p>";

	print "<p>A palavra ao contrario:<b>";
	print $palavra_invertida;	
	print "</b></p>";

	if ($palavra == $palavra_invertida){
		print "<p>A palavra <b>é</b> um <b>palindromo</b>!</p>";	
	}
	else {
		print "<p>A palavra <b>não é</b> um <b>palindromo</b>!</p>";	
	}

	
?>