<?php
	include 'confirmacion.php';
	include 'base.php';	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Datos</title>
</head>
<body>
	
	<?php
		$conexion= mysqli_connect($host, $user, $pass, $base);

		if (!$conexion) {
			
		}else{
			echo "$_nAsesor, $_apellidoPA, $_apellidoMA";
			$insert_nAsesor ="INSERT INTO asesor(id_asesor, nombreA, apellidoPA, apellidoMA) VALUES ('1', '$_nAsesor', '$_apellidoPA', $_apellidoMA)";
			mysqli_query($conexion, $insert_nAsesor);

			mysqli_close($conexion);
		}
	?>


</body>
</html>



