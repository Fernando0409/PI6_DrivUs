<?php
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['idEmpleado'],
		$_POST['email'],
		$_POST['nombre'],
		$_POST['aPaterno'],
		$_POST['aMaterno']
				);

	echo $obj->actualizar($datos);

 ?>
