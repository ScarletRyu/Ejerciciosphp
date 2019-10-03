<html>
	<head>
		<title>Ejercicio 4</title>
	</head>
	<body>
	<?php
		$string = "Rojo blanco verde amarillo Negro";
		$indices = explode(" ", strtolower($string));
		$valores= [];
		for ($i=0; $i < count($indices); $i++) { 
			$valores[$i]=strlen($indices[$i]);
		}
		
		$palabras = array_combine($indices, $valores);
		foreach ($palabras as $palabra => $longitud) {
			echo($palabra." tiene ".$longitud." caracteres</br>");
		}
	?>
	</body>
</html>