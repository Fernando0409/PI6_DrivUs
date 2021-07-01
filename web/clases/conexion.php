<?php
	class conectar{
		public function conexion(){
			$conexion=mysqli_connect('localhost',
										'root',
										'',
										'drivus_test');
			return $conexion;
		}
	}
