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
	<h1>Procesion</h1>
	<a href="agregarProcesion.php">Nueva informacion</a><br><br>

	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>Nombre</th>
				<th>Información</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($filas=mysqli_fetch_assoc($resultado)){
			?>
			<tr>
				<td><?php echo $filas ['id'] ?></td>
				<td><?php echo $filas ['nombre'] ?></td>
				<td><?php echo $filas ['informacion'] ?></td>
				<td> 
					<?php 
						echo "<a href='editar.php?id=".$filas['id']." EDITAR </a>";
					?>
					-
					<?php 
						echo "<a href='eliminar.php?id=".$filas['id']."'onclick ='return confirmar()'> ELIMINAR </a>";
					?>
				</td>
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