<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php
								//forma de caracter para llamar todas las letras
		echo preg_replace_callback('~-([A-Z])~', function ($coincidencia) {
		
		//strtoupper: Convierte un string a mayúsculas
		
				    return strtoupper($coincidencia);
		
		}, 'Hola a todos');
		// imprime holaMundo

	?>


</body>
</html>