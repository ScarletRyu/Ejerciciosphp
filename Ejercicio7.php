<html>
	<head>
		<title>Entero Positivo</title>
	</head>
	<body>
	<?php
    $numero = 20;

    while ($numero != 1) {
        if ($numero %2 == 0) {
            $numero/=2;
        }else $numero * 3 +1; 

        echo $numero. " ";
    }




    ?>
    </body>
    </html>