<!DOCTYPE html>
<html>

<head>
	<title>Ejercicio 5</title>
	<meta charset="utf-8">
</head>
 
<body>

	<?php
	$year = 2020;
	$array = array(
		"Enero" => "",
		"Febrero" => "",
		"Marzo" => "",
		"Abril" => "",
		"Mayo" => "",
		"Junio" => "",
		"Julio" => "",
		"Agosto" => "",
		"Septiembre" => "",
		"Octubre" => "",
		"Noviembre" => "",
		"Diciembre" => ""
	);
	$i=1;
	foreach($array as $clave => $valor){
		$a[$clave] = cal_days_in_month(CAL_GREGORIAN, $i, $year);
		$i++;
	}
	
	print_r($a);
	?>

</body>

</html>