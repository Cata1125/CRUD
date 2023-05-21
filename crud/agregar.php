<!DOCTYPE html>
<html>
<head>
	<title>Agregar</title>
</head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
<body>
	<?php
	if (isset($_POST['enviar'])) {
		$titulo=$_POST['titulo'];
		$texto=$_POST['texto'];

		include("conexion.php");
		$sql="insert into informacion (titulo, texto) values ('".$titulo."','".$texto."')";

		$resultado=mysqli_query($conexion, $sql);

		if ($resultado) {
			//se guardo correctamente
			echo "<script language ='JavaScript'>
					alert ('Los datos fueron ingresados a la bd');
					location.assign('index.php');
					</script>";
		}else{
			//no se ha guardado
			echo "<script language ='JavaScript'>
					alert ('ERROR: Los datos no fueron ingresados a la bd');
					location.assign('index.php');
					</script>";
		}

		mysqli_close($conexion);

	}else{

	

	?>

	<h1>Agregar nueva informacion</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<label>Titulo: </label>
		<input type="text" name="titulo"> <br>
		<br>
		<label>Texto:</label>
		<input type="text" name="texto"> <br>
		<br>
		<input type="submit" name="enviar" value="AGREGAR">
		<a href="index.php">Regresar</a>
	</form>
	<?php
		}
	?>
</body>
</html>