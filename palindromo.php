<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	
	<title>Palindromo</title>

</head>
<body>
<?php
	
	if(isset($_GET["palavra"])){
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
	}
	else {
		print "<p>Digite uma palavra na url com o formato:</p>";
		print "<p><code>localhost/palindromo.php?palavra=palavra</code></p>";	
	}
	
?>

	<p> Para testar outra palavra cloque <a href="chamar-palindromo.html">aqui</a>.</p>
</body>
</html>