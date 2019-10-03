<html>
	<head>
		<title>Ejercicio 2</title>
	</head>
	<body>
	<?php
		$col=5;
		$filas=1;
		function Tabla($filas, $col){
			echo "<table>";
			for($i=1;$i<=$filas; $i++){
				echo "<tr>";
					for ($j=1; $j <=$col ; $j++) { 
						echo "<td>Columna</td>";
					}
				echo "</tr>";
			}
			echo "</table>";
		}
		Tabla($filas,$col);
		
	?>
	</body>
</html>