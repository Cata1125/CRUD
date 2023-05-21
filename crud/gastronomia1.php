<!DOCTYPE html>
<html>
<head>
	<title>Informacion gastronomica</title>
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
	$sql="select * from gastronomia";
	$resultados=mysqli_query($conexion,$sql);
	?>
	<br>
	<br>
	<h1>Informacion gastronomica de Popayan</h1>
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
				while($filas=mysqli_fetch_assoc($resultados)){
			?>
			<tr>
				<td><?php echo $filas ['nombreComida'] ?></td>
				<td><?php echo $filas ['descripcionComida'] ?></td>
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