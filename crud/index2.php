<?php
include ("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buscar</title>
	<script type="text/javascript">
		function confirmar(){
			return confirm ('Eliminar informacion?');
		}
	</script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<table>
			<tr>
				<th colspan="5"><h1>Lista de informacion</h1></th>
			</tr>
			<tr>
				<td>
					<label>Titulo:</label>
					<input type="text" name="titulo">
				</td>
				<td>
					<input type="submit" name="enviar" value="buscar">
				</td>
			</tr>
		</table>
	</form>

	<table>
		<?php
		if (isset($_POST['enviar'])) {
			// mostrar...
		}else{
			$sql="select * from informacion";
			$resultado=mysqli_query($conexion,$sql);
			while($filas=mysqli_fetch_assoc($resultado))
		}
		?>
	</table>
</body>
</html>