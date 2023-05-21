<!DOCTYPE html>
<html>
<head>
	<title>Informacion turistica</title>
	<?php
		include "menu1.html";
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
	$sql="select * from informacion";
	$resultado=mysqli_query($conexion,$sql);
	?>
	<h1>Informacion turistica de Popayan</h1>
	<a href="agregar.php">Nueva informacion</a><br><br>

	<table>
		<thead>
			<tr>
				<th>No.</th>
				<th>Titulo</th>
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
				<td><?php echo $filas ['titulo'] ?></td>
				<td><?php echo $filas ['texto'] ?></td>
				<td> 
					<?php 
						echo "<a href='editar.php?id=".$filas['id']."''> EDITAR </a>";
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