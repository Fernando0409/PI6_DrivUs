<?php
	require_once '../logica/root.php';

	// Caputuro los datos del coche
	$datos=array(
		$_POST['placas'],
		$_POST['marca'],
		$_POST['modelo'],
		$_POST['anio'],
		$_POST['color'],
		$_POST['cambio'],
		$_POST['asientos'],
		$_POST['puertas'],
		$_POST['acondicionado'],
		$_POST['km'],
		$_POST['precio'],
		$_POST['status'],
		$_POST['descripcion'],
		$_POST['inventario']
		);

	// Caputuro los valores de la Imagen
	$nameFile = $_FILES['file']['name'];
	$typeFile = $_FILES['file']['type'];
	$sizeFile = $_FILES['file']['size'];

	if($typeFile == "image/jpeg" || $typeFile == "image/jpg" || $typeFile == "image/png" || $typeFile == "image/gif"){
		//								C:\xampp\htdocs\PI6_DrivUs\web\resources\img_coches
		$carpetaDestino = $_SERVER['DOCUMENT_ROOT'].'/PI6_DrivUs/web/resources/img_coches/';
		move_uploaded_file($_FILES['file']['tmp_name'], $carpetaDestino.$nameFile);

		$sql = "INSERT INTO vehiculos(placas, marca, modelo, year, color,
			cambio, asientos, puertas, aire_acondicionado, velocidad, precio,
			 estado, descripcion, inventario, url_imagen)
			 VALUES('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]',
				 '$datos[5]', '$datos[6]', '$datos[7]', '$datos[8]', '$datos[9]', '$datos[10]',
				 '$datos[11]', '$datos[12]', '$datos[13]', '$nameFile')";

		mysqli_query($conn, $sql);
		header('location: ../carList.php');
	}
/*
	$sql = "INSERT INTO autos (marca, modelo, year, color, combustible, cambio, asientos, puertas, bolsa_aire,
									acondicionado, kilometraje, motor, placas, precio, estado, descripcion) VALUES('{$marca}',
									'{$modelo}', '{$year}', '{$color}','{$combustible}', '{$cambio}', '{$asientos}', '{$puertas}', '{$bolsa_aire}', '{$acondicionado}', '{$km}', '{$motor}', '{$placas}', '{$precio}', '{$status}', '{$descripcion}')";
									*/



 ?>
