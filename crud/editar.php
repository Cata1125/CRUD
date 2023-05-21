<?php
	include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	
	<title>EDITAR</title>
</head>
<body>
	<?php
		if (isset($_POST['enviar'])) {
			// Cuando presiona boton enviar
			$id=$_POST['id'];
			$titulo=$_POST['titulo'];
			$texto=$_POST['texto'];

			//update informacion set
			$sql="update informacion set titulo='".$titulo."', texto = '".$texto."' where id= '".$id."'";
			$resultado=mysqli_query($conexion,$sql);

			if ($resultado) {
				echo "<script language ='JavaScript'>
					alert ('Los datos fueron actualizados en la bd');
					location.assign('index.php');
					</script>";
			}else{
				echo "<script language ='JavaScript'>
					alert ('ERROR Los datos no fueron actualizados en la bd');
					location.assign('index.php');
					</script>";
			}
			mysqli_close($conexion);


		}else{
			//cuando no se ha presionado el boton
			$id=$_GET['id'];
			$sql="select * from informacion where id ='".$id."'";
			$resultado=mysqli_query($conexion,$sql);

			$fila=mysqli_fetch_assoc($resultado);
			$titulo=$fila["titulo"];
			$texto=$fila["texto"];

			mysqli_close($conexion);

	?>
	<h1>Editar informacion</h1>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<label>Titulo:</label>
		<input type="text" name="titulo" value="<?php echo $titulo;?>"> <br>
		<label>Texto</label>
		<input type="text" name="texto" value="<?php echo $texto;?>"><br>

		<input type="hidden" name="id" value="<?php echo $id;?>">

		<input type="submit" name="enviar" value="ACTUALIZAR">
		<a href="index.php">REGRESAR</a>
	</form>
	<?php
		}
	?>
</body>
</html>