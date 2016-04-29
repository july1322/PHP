<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Bienvenido</h1>

	<?php
		if (isset($_COOKIE['conteo'])) {
	?>

		<b>Nombre: </b> <?php echo $_COOKIE['Micookie']['Nombre']; ?> </br>
		<b>Edad: </b> <?php echo $_COOKIE['Micookie']['Edad']; ?> </br>
	<?php 

	?>
</body>
</html>