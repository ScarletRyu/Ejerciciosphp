<html>
	<head>
		<title>Ejercicio 9</title>
	</head>
	<body>
       <?php
            $nums = array(3, -9, 8, 4, 20);
            function Area($lado){
                if ($lado < 0){
                    throw new Exception ('Insert Positive Number');
            }   else {
                    return $lado * $lado;
                }
            }
                foreach ($nums as $lado){
                    try {
                        echo "El área es: " . Area($lado) . "<br>";
                    } catch (Exception $e) {
                        echo 'Exception: ' . $e->getMessage() . "<br>";
                    }
                }
       ?>
	</body>
</html>