<!DOCTYPE html>
<html>
<head>
	<title>Agregar hotel</title>
</head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
<body>
	<?php
	if (isset($_POST['enviar'])) {
		$nombreHotel=$_POST['nombreHotel'];
		$descripcion=$_POST['descripcion'];

		include("conexion.php");
		$sql="insert into hoteles (nombreHotel, descripcion) values ('".$nombreHotel."','".$descripcion."')";
		$resultadoo=mysqli_query($conexion, $sql);

		if ($resultadoo) {
			//se guardo correctamente
			echo "<script language ='JavaScript'>
					alert ('Los datos fueron ingresados a la bd');
					location.assign('hoteles.php');
					</script>";
		}else{
			//no se ha guardado
			echo "<script language ='JavaScript'>
					alert ('ERROR: Los datos no fueron ingresados a la bd');
					location.assign('hoteles.php');
					</script>";
		}

		mysqli_close($conexion);

	}else{

	

	?>

	<h1>Agregar nuevo hotel</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<label>Titulo: </label>
		<input type="text" name="nombreHotel"> <br>
		<br>
		<label>Texto:</label>
		<input type="text" name="descripcion"> <br>
		<br>
		<input type="submit" name="enviar" value="AGREGAR">
		<a href="hoteles.php">Regresar</a>
	</form>
	<?php
		}
	?>
</body>
</html>