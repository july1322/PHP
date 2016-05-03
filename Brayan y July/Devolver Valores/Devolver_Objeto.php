<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php

		class Multiplica{

	    var $primernumero=7;
	    var $segundonumero=8;

	    function curratelo(){
	        echo $this->factor1 * $this->factor2;
	       }
		}

	   $operacion = new Multiplica;
	   $operacion ->curratelo();
	 
 	?>

</body>
</html>