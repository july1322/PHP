<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	
	// STATIC: SE PUEDE LLAMAR DE OTRA CLASE SIN TENER QUE INSTANCIAR.
	$a = 1;
	$b = 2;

	function Suma()
	{
	global $a, $b;

      $b = $a + $b;
	}

	Suma();
	echo $b;

?>

</body>
</html>