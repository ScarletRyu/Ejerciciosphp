<html>
	<head>
		<title>Mayor</title>
	</head>
	<body>
	<?php
        
        $potencia = 3;
        $cantidad =300;
        for($i = 1; pow($i, $potencia) < $cantidad; $i++)
            echo "$i^$potencia = ".pow($i, $potencia)."<br>";
        
	?>
	</body>
</html>