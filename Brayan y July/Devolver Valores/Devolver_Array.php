<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		
		

	//Una función no puede devolver múltiples valores, pero se pueden obtener resultados similares devolviendo un array.
		function números_pequeños()
		
		{
		
		    return array (0, 1, 2);
		
	}
		$res = list ($cero, $uno, $dos) = números_pequeños();
		var_dump($res);
	?>

</body>
</html>