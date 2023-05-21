<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Login</title>
	<?php
		include "menu.html";
	?>
</head>
<body>	
	
	<form action="login.php" method="post">
		<br>
		<br>
		<br>
		<label for="name" />Nombre:</label>
		<input name="name" id="name" placeholder="cata" type="text" />
		<br>
		<br>
		<label for="password" />Password:</label>
		<input name="password" id="password" placeholder="1234" type="password" />
		<input type="submit" value="Enviar" name="enviar" />
	</form>

	<?php 
		include("conexion.php");

		if(isset($_POST["enviar"])){
			$name = $_POST['name'];
			$password = $_POST['password'];

			//select * from usuarios 
			$sql='select * from usuarios where name ="'.$name.'"';
			$resultado=mysqli_query($conexion,$sql);

			if(empty($_POST['name'])|| empty($_POST['password'])){
				header('location: yo.php');
				echo "validacion de datos";
			}else{
				echo " error de datos";
			}
			
		}
			
	?>
	

		
	

</body>
</html>