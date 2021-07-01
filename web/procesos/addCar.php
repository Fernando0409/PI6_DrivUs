<?php
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

/*

	$sql = "INSERT INTO autos (marca, modelo, year, color, combustible, cambio, asientos, puertas, bolsa_aire,
									acondicionado, kilometraje, motor, placas, precio, estado, descripcion) VALUES('{$marca}', '{$modelo}', '{$year}', '{$color}','{$combustible}', '{$cambio}', '{$asientos}', '{$puertas}', '{$bolsa_aire}', '{$acondicionado}', '{$km}', '{$motor}', '{$placas}', '{$precio}', '{$status}', '{$descripcion}')";

									*/
	$datos=array(
		$_POST['marca'],
		$_POST['modelo'],
		$_POST['anio'],
		$_POST['color'],
		$_POST['combustible'],
		$_POST['cambio'],
		$_POST['asientos'],
		$_POST['puertas'],
		$_POST['aire'],
		$_POST['acondicionado'],
		$_POST['km'],
		$_POST['motor'],
		$_POST['placas'],
		$_POST['precio'],
		$_POST['status'],
		$_POST['descripcion']
		);

	echo $obj->registrarCoches($datos);

 ?>
