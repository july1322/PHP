<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<pre>


	<?php 

		define ("COM" , "123");
		const K123=23;
		echo K123;

		echo "VERSION", PHP_VERSION;
		
		echo "<br>ruta",_FILE_;
		echo "<br>Linea",_LINE_;
		echo _DIR_;

		function TRABAJO(){
			PRINT "function";
			ECHO _FUNCTION_;
		}
		TRABAJO();

	?>

</pre>
</body>
</html>