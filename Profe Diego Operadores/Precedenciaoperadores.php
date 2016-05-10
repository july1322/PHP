<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
// la asociatividad del operador ternario difiere de C/C++
$a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2
echo "$a";
$a = 1;
$b = 2;
$a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
echo "$a";
?>
</body>
</html>