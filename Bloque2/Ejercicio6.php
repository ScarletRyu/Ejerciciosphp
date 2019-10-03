<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 6</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
	$a = array (
		"Enero" => ["Jon","Ane","Aimar"],
		"Febrero" => ["Mikel","Bartolo"],
		"Marzo" => ["Mainditze"],
		"Abril" => ["Axer","Keipz","Untu"],
		"Mayo" => ["Chopu","Nere"],
		"Junio" => ["Miguel","Oihan"],
		"Julio" => ["Naufreitx"],
		"Agosto" => ["Gotzon","Maialen","Irati"],
		"Septiembre" => ["Gorka","Manu","Erik"],
		"Octubre" => ["Fernando","Charly","Mario"],
		"Noviembre" => ["Peps"],
		"Diciembre" => ["Joseba","Leire"]
	);
	function Nombre ($array, $mes, $nombre){
		array_push($array[$mes], $nombre);
		$count = 0;
		foreach ($array as $x) {
			$count+=count($x);
		}
		return $count;
	}
	$resultado = Nombre($a, 'Noviembre','Gorka');
	echo  "<br> Numero personas en el calendario: $resultado";
	/*Tabla*/
	
	foreach ($a as $mes => $nombres) {
		echo "<h2 style='color:blue'>".$mes."</h2><ol>";
		foreach ($nombres as $persona) {
			echo "<li>".$persona."</li>";
		}
		echo "</ol>";
	}	
	
?>

<table>

	<tr></tr>

</table>

</body>
</html>