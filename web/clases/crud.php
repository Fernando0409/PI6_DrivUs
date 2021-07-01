<?php

	class crud{

		public function registrarCoches($datos){
			$obj = new conectar();
			$conexion=$obj->conexion();

			$sql = "INSERT INTO vehiculos (marca, modelo, year, color, combustible, cambio, asientos, puertas,
			bolsa_aire, acondicionado, kilometraje, motor, placas, precio, estado, descripcion) VALUES (
				'$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]',
				'$datos[4]', '$datos[5]','$datos[6]','$datos[7]',
				'$datos[8]', '$datos[9]', '$datos[10]', '$datos[11]',
				'$datos[12]', '$datos[13]', '$datos[14]', '$datos[15]')";

			return mysqli_query($conexion, $sql);
		}

		public function registrarEmpleados($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql = "INSERT INTO empleados ( aPaterno, aMaterno, nombre, email, birthday, telefono, colonia, calle, noCasa, cp)
							VALUES ( '$datos[0]',
									 '$datos[1]',
									 '$datos[2]',
									 '$datos[3]',
									 '$datos[4]',
									 '$datos[5]',
									 '$datos[6]',
									 '$datos[7]',
									 '$datos[8]',
									 '$datos[9]')";

			return mysqli_query($conexion, $sql);
		}

		public function obtenerDatos($idEmpleado){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql = "SELECT id, email, nombre, aPaterno, aMaterno FROM empleado WHERE id = '$idEmpleado'";
			$result = mysqli_query($conexion, $sql);
			$ver = mysqli_fetch_row($result);

			$datos = array(
				'id' => $ver[0],
				'email' => $ver[1],
				'nombre' => $ver[2],
				'aPaterno' => $ver[3],
				'aMaterno' => $ver[4],
			);
			return $datos;
		}

		public function obtenerDatosCoche($idCoche){
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql = "SELECT id, modelo, velocidad, precio, estado FROM vehiculos WHERE id = '$idCoche'";
			$result = mysqli_query($conexion, $sql);
			$ver = mysqli_fetch_row($result);

			$datos = array(
				'id' => $ver[0],
				'modelo' => $ver[1],
				'velocidad' => $ver[2],
				'precio' => $ver[3],
				'estado' => $ver[4],
			);
			return $datos;
		}

		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE empleado set email='$datos[1]',
										nombre='$datos[2]',
										aPaterno='$datos[3]',
										aMaterno='$datos[4]',
						where id='$datos[0]'";
			return mysqli_query($conexion,$sql);
		}

		public function actualizarCoche($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE vehiculos set modelo='$datos[1]',
									velocidad='$datos[2]',
									precio='$datos[3]',
									estado='$datos[4]',
						where id='$datos[0]'";

			return mysqli_query($conexion,$sql);
		}

		public function eliminar($idEmpleado){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql = "DELETE FROM empleado WHERE id='$idEmpleado'";
			return mysqli_query($conexion, $sql);
		}

		public function eliminarCoche($idCoche){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql = "DELETE FROM vehiculos WHERE id='$idCoche'";
			return mysqli_query($conexion, $sql);
		}

	}
