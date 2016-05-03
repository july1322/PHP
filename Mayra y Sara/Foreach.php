<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php

		foreach (array(1, 2, 3, 4) as &$valor) {
		    $valor = $valor * 2;
		}

	?>


</body>
</html>