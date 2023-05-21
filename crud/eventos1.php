<!DOCTYPE html>
<html>
<head>
	<title>Eventos </title>
	<?php
		include "menu.html";
	?>
	<script type="text/javascript">
		function confirmar(){
			return confirm ('Eliminar informacion?');
		}
	</script>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
<?php
	include("conexion.php");
	//select * from informacion 
	$sql="select * from eventos";
	$resultado=mysqli_query($conexion,$sql);
	?>
	<h1>Eventos</h1>

	<table>
		<thead>
			<tr>
				<th>Evento</th>
				<th>Descripción</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($filas=mysqli_fetch_assoc($resultado)){
			?>
			<tr>
				<td><?php echo $filas ['evento'] ?></td>
				<td><?php echo $filas ['descripcion'] ?></td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
	<?php
		mysqli_close($conexion);
	?>
</body>
</html>