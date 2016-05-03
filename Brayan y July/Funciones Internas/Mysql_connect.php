<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	// nos  conectamos a localhost y a la toma ej. /tmp/mysql.sock

	// variante 1: omitir el localhost
		$enlace = Mysql_connect(':/tmp/mysql', 'usuario_mysql',  'contraseña_mysql');
		if (!$enlace) {
		    die('No pudo conectarse: ' . Mysql_error());
		}
		echo 'Conectado satisfactoriamente';
		Mysql_close($enlace);


		// variante 2: con localhost
		$enlace = Mysql_connect('localhost:/tmp/mysql.sock',  'usuario_mysql', 'contraseña_mysql');
		if  (!$enlace) {
		    die('No pudo conectarse: ' . Mysql_error());
		}
		echo 'Conectado  satisfactoriamente';
		Mysql_close($enlace);

	?>

</body>
</html>