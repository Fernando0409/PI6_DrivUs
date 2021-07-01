<?php
	require_once '../logica/root.php';

	$id = $_POST['idCoche'];
	$modelo = $_POST['modeloU'];
	$km = $_POST['kilometrajeU'];
	$precio = $_POST['precioU'];
	$estado = $_POST['estadoU'];

	$sql = "UPDATE vehiculos set modelo = '$modelo', velocidad = '$km',
				precio = '$precio', estado = '$estado' WHERE id='$id'";

		mysqli_query($conn, $sql);
		header('location: ../carList.php')

?>
