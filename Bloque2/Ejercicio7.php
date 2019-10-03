<html>
	<head>
		<title>Ejercicio 7</title>
	</head>
	<body>
       <?php
            $base = rand(1,100);
            $exp = 3;
            echo ("La base es: ".$base."</br>");
            function calcPoten($base, $expo = 2){
                $res = pow($base, $expo);
                echo $res;
            }
            Potencia($base, $exp);
        ?>
	</body>
</html>