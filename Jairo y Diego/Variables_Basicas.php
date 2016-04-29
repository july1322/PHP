<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

	$nombre = 'July';
	$nombre2 = &$nombre;
	$nombre3 = &$nombre;
	$nombre = "Julian";      // imprime "Roberto, Juan"

	echo "$nombre, $nombre2, $nombre3";
	//$4site = 'aun no';      // inválido; comienza con un número
	//$_4site = 'aun no';     // válido; comienza con un carácter de subrayado

	//$täyte = 'mansikka';    // válido; 'ä' es ASCII (Extendido) 228

?>

</body>
</html>