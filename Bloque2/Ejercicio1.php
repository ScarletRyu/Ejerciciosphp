<html>
	<head>
		<title>Ejercicio 1</title>
	</head>
	<body>
	<?php
		$num = [0,1,2,3,4,5,6,7,8,9,10];
		$factorial=[];
		function factorial($n)
		{
		    if ($n <= 1) {
		        return 1;
		    }
		 
		    return $n * factorial($n - 1);
		}
		foreach ($num as $numero){
			$factorial[$numero] = factorial($numero);
			echo $numero." Factorial: ".$factorial[$numero]."</br>";
		}
		
	?>
	</body>
</html>