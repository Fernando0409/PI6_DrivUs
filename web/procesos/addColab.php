<?php
	require_once '../logica/root.php';
	$datos=array(
		$_POST['email'],
		$_POST['pass'],
		$_POST['nombre'],
		$_POST['aPaterno'],
		$_POST['aMaterno']
		);

		// Caputuro los valores de la Imagen
		$nameFile = $_FILES['file']['name'];
		$typeFile = $_FILES['file']['type'];
		$sizeFile = $_FILES['file']['size'];

		if($typeFile == "image/jpeg" || $typeFile == "image/jpg" || $typeFile == "image/png" || $typeFile == "image/gif"){
			//								C:\xampp\htdocs\PI6_DrivUs\web\resources\img_coches
			$carpetaDestino = $_SERVER['DOCUMENT_ROOT'].'/PI6_DrivUs/web/resources/img_coches/';
			move_uploaded_file($_FILES['file']['tmp_name'], $carpetaDestino.$nameFile);

			// Encriptacion
			$password = md5($datos[1]);

			$sql = "INSERT INTO empleado(email, password, nombre, aPaterno, aMaterno, url_image)
				 VALUES('$datos[0]', '$password', '$datos[2]', '$datos[3]', '$datos[4]', '$nameFile')";

			mysqli_query($conn, $sql);
			header('location: ../colaboradoresList.php');
		}
 ?>
