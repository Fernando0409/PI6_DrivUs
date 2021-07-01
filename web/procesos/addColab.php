<?php
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['aPaterno'],
		$_POST['aMaterno'],
		$_POST['nombre'],
		$_POST['email'],
		$_POST['birthday'],
		$_POST['telefono'],
		$_POST['colonia'],
		$_POST['calle'],
		$_POST['noCasa'],
		$_POST['cp']
		);

	echo $obj->registrarEmpleados($datos);

 ?>
