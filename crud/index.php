<!DOCTYPE html>
<html>
<head>
	<title>Informacion turistica</title>
	<?php
		include "menu.html";
	?>
	
	<script type="text/javascript">
		function confirmar(){
			return confirm ('Eliminar informacion?');
		}
	</script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<?php
	include("conexion.php");
	//select * from informacion 
	$sql="select * from informacion";
	$resultado=mysqli_query($conexion,$sql);
	?>
	<br>
	<h1>Informacion turistica de Popayan</h1>
	<div style="text-align:center;">
	<table>
		<thead>
			<br>
			<tr>
				<th>Titulo</th>
				<th>Información</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($filas=mysqli_fetch_assoc($resultado)){
			?>
			<tr>
				
				<td><?php echo $filas ['titulo'] ?></td>
				<td><?php echo $filas ['texto'] ?></td>
				
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>
<div style="text-align:center;">
 <table>
   <tr>
    <td>
		<img src="imagenes/foto2.jpg" >
    </td>
   </tr>
 </table>
</div>
	<?php
		mysqli_close($conexion);
	?>
</body>
</html>