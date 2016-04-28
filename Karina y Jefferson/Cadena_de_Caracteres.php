<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<pre>

	<?php 

	//se pueden colocar variables dentro de comillas dobles 
	//$nombre = "July Sierra";

	//echo "Mi nombre es \n" . $nombre ."<br/>";
	//echo "Mi nombre es $nombre<br/>";
	//echo 'Mi nombre es $nombre <br/>';

	$jugo = "manzana";

	echo "Él tomó algo de jugo de $jugo." .PHP_EOL; 
	// Inválido. "s" es un carácter válido para un nombre de variable, pero la variable es $jugo.
	echo "Él tomó algo de jugo hecho de $jugo.";

	
	?>
</pre>
</body>
</html>