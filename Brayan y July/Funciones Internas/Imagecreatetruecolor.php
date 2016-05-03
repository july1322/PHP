<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



		<?php

			$image = imagecreatetruecolor($width, $height);
			imagealphablending($image, true);

			header('Content-type: image/png');
			imagepng($image);
			imagedestroy($image);

		?>

</body>
</html>