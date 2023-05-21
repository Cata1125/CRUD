<!DOCTYPE html>
<html>
<head>
	<title>Agregar hotel</title>
</head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
<body>
	<?php
	if (isset($_POST['enviar'])) {
		$evento=$_POST['evento'];
		$descripcion=$_POST['descripcion'];

		include("conexion.php");
		$sql="insert into eventos (evento, descripcion) values ('".$evento."','".$descripcion."')";
		$resultadoo=mysqli_query($conexion, $sql);

		if ($resultadoo) {
			//se guardo correctamente
			echo "<script language ='JavaScript'>
					alert ('Los datos fueron ingresados a la bd');
					location.assign('eventos.php');
					</script>";
		}else{
			//no se ha guardado
			echo "<script language ='JavaScript'>
					alert ('ERROR: Los datos no fueron ingresados a la bd');
					location.assign('eventos.php');
					</script>";
		}

		mysqli_close($conexion);

	}else{

	

	?>

	<h1>Agregar nuevo evento</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<label>Titulo: </label>
		<input type="text" name="evento"> <br>
		<br>
		<label>Texto:</label>
		<input type="text" name="descripcion"> <br>
		<br>
		<input type="submit" name="enviar" value="AGREGAR">
		<a href="eventos1.php">Regrsar</a>
	</form>
	<?php
		}
	?>
</body>
</html>