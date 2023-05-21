<!DOCTYPE html>
<html>
<head>
	<title>Agregar hotel</title>
</head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
<body>
	<?php
	if (isset($_POST['enviar'])) {
		$nombre=$_POST['nombre'];
		$informacion=$_POST['informacion'];

		include("conexion.php");
		$sql="insert into procesion (nombre, informacion) values ('".$nombre."','".$informacion."')";
		$resultadoo=mysqli_query($conexion, $sql);

		if ($resultadoo) {
			//se guardo correctamente
			echo "<script language ='JavaScript'>
					alert ('Los datos fueron ingresados a la bd');
					location.assign('procesion.php');
					</script>";
		}else{
			//no se ha guardado
			echo "<script language ='JavaScript'>
					alert ('ERROR: Los datos no fueron ingresados a la bd');
					location.assign('procesion.php');
					</script>";
		}

		mysqli_close($conexion);

	}else{

	

	?>

	<h1>Agregar nuevo evento</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<label>Titulo: </label>
		<input type="text" name="nombre"> <br>
		<br>
		<label>Texto:</label>
		<input type="text" name="informacion"> <br>
		<br>
		<input type="submit" name="enviar" value="AGREGAR">
		<a href="eventos1.php">Regrsar</a>
	</form>
	<?php
		}
	?>
</body>
</html>