
<?php
		if(isset($_POST['mostrar'])) {
			$not1 = $_POST['nota1'];
			$not2 = $_POST['nota2'];
			$not3 = $_POST['nota3'];
			$promedio = ($not1 + $not2 + $not3) / 3;
			if($promedio >= 13) {
				echo "<p>Aprobado con  $promedio.</p>";
			} else {
				echo "<p>Reprobado con  $promedio.</p>";
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

