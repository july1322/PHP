<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$a = "Hello ";
$b = $a . "World!"; // ahora $b contiene "Hello World!"
echo "$a";
$a = "Hello ";
$a .= "World!";     // ahora $a contiene "Hello World!"
echo "$a";
?>
</body>
</html>