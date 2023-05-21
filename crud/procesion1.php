<!DOCTYPE html>
<html>
<head>
	<title>Procesiones</title>
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
	$sql="select * from procesion";
	$resultado=mysqli_query($conexion,$sql);
	?>
	<br>
	<h1>Eventos</h1>
	<br>

	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Información</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($filas=mysqli_fetch_assoc($resultado)){
			?>
			<tr>
				<td><?php echo $filas ['nombre'] ?></td>
				<td><?php echo $filas ['informacion'] ?></td>
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