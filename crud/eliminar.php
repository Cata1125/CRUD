<?php 
	$id=$_GET['id'];
	include("conexion.php");

	//delete from informacion where id=$id
	$sql="delete from informacion where id='".$id."'";
	$resultado=mysqli_query($conexion,$sql);

	if ($resultado) {
		echo "<script language ='JavaScript'>
					alert ('Los datos fueron eliminados a la bd');
					location.assign('yo.php');
					</script>";
	}else{
		echo "<script language ='JavaScript'>
					alert ('ERROR Los datos no fueron eliminados a la bd');
					location.assign('yo.php');
					</script>";
	}


?>



