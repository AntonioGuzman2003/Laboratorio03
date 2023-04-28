
<?php
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$num1 = $_POST["num1"];
			$num2 = $_POST["num2"];
			if($num2 == 0) {
				echo "Error: No puede ser cero";
			} else {
				if($num1 > $num2) {
					$suma = $num1 + $num2;
					$diferencia = $num1 - $num2;
					echo "La suma es: ".$suma."<br>";
					echo "La diferencia es: ".$diferencia."<br>";
				} else {
					$producto = $num1 * $num2;
					$division = $num1 / $num2;
					echo "El producto es: ".$producto."<br>";
					echo "La división es: ".$division."<br>";
				}
			}
		}
	?>
<style>
	body {
       background-image: url(https://img.freepik.com/foto-gratis/fondo-acuarela-pintada-mano-forma-cielo-nubes_24972-1095.jpg);
        background-size: cover;
        background-attachment: fixed;
    }

</style>
