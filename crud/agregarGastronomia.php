<!DOCTYPE html>
<html>
<head>
	<title>Agregar</title>
</head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
<body>
	<?php
	if (isset($_POST['enviar'])) {
		$nombreComida=$_POST['nombreComida'];
		$descripcionComida=$_POST['descripcionComida'];

		include("conexion.php");
		$sql="insert into gastronomia (nombreComida, descripcionComida) values ('".$nombreComida."','".$descripcionComida."')";

		$resultados=mysqli_query($conexion, $sql);

		if ($resultados) {
			//se guardo correctamente
			echo "<script language ='JavaScript'>
					alert ('Los datos fueron ingresados a la bd');
					location.assign('gastronomia.php');
					</script>";
		}else{
			//no se ha guardado
			echo "<script language ='JavaScript'>
					alert ('ERROR: Los datos no fueron ingresados a la bd');
					location.assign('gastronomia.php');
					</script>";
		}

		mysqli_close($conexion);

	}else{

	

	?>

	<h1>Agregar comida</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<label>Titulo: </label>
		<input type="text" name="nombreComida"> <br>
		<br>
		<label>Texto:</label>
		<input type="text" name="descripcionComida"> <br>
		<br>
		<input type="submit" name="enviar" value="AGREGAR">
		<a href="gastronomia.php">Regresar</a>
	</form>
	<?php
		}
	?>
</body>
</html>