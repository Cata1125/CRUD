<!DOCTYPE html>
<html>
<head>
	<title>Hoteles</title>
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
	//select * from hoteles 
	$sql="select * from hoteles";
	$resultadoo=mysqli_query($conexion,$sql);
	?>
	<br>
	<br>
	<h1>Hoteles</h1>
	<br>

	<table>
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Información</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($filas=mysqli_fetch_assoc($resultadoo)){
			?>
			<tr>
				<td><?php echo $filas ['nombreHotel'] ?></td>
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