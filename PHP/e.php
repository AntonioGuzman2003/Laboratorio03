<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];

$mayor = $num1;

if ($num2 > $mayor) {
	$mayor = $num2;
}

if ($num3 > $mayor) {
	$mayor = $num3;
}

echo "El numero mayor es: " . $mayor;
?>
<style>
	body {
       background-image: url(https://img.freepik.com/foto-gratis/fondo-acuarela-pintada-mano-forma-cielo-nubes_24972-1095.jpg);
        background-size: cover;
        background-attachment: fixed;
    }

</style>
