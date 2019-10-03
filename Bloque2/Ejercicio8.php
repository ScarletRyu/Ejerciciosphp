<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 8</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
	function validar (){
		try {
			if (!file_exists('config.php'))
				throw new exception("config.php not found");
			
		} catch (Error $e) {
			echo $e->getMessage(), "\n";
		}
	}
	validar();
	?>

</body>
</html>