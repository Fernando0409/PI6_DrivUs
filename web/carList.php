<?php
  require_once 'logica/root.php';

  session_start();
  if(!isset($_SESSION['username']))
    header('location: login.php');
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php require_once 'scripts.php'; ?>
		<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
		<title>DrivUs - Lista de coches</title>
	</head>
	<body id="body-pd">
		<header class="header" id="header">
				<div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
				<div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
		</header>
		<div class="l-navbar" id="nav-bar">
				<nav class="nav">
						<div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">DrivUs</span> </a>
								<div class="nav_list">
                  <a href="index.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Inicio</span> </a>
                  <!--a href="usuarios.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Clientes</span> </a-->
                  <a href="automoviles.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Automoviles</span> </a>
                  <a href="colaboradores.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Colaboradores</span> </a>
                  <!--a href="reportes.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Reportes</span> </a-->
                  <!--a href="prestamos.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Prestamos</span> </a-->
                </div>
						</div>
						<a href="logica/funciones/salir.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Cerrar Sesion</span> </a>
				</nav>
		</div>

		<div class="container1">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card text-center">
                        <div class="card-header">
                            Lista de Vehiculos - DrivUs
                        </div>
                        <div class="card-body">
                            <a href="addCar.php"><span class="btn btn-primary">
                                Agregar nuevo <span class="fa fa-plus-circle"></span></a>
                            </span>
                            <hr>
                            <div id="tableDatatable"></div>
                        </div>
                        <div class="card-footer text-muted">
                            By DrivUs
                        </div>
                    </div>
                </div> <!-- Col-sm-12-->
            </div>
        </div> <!-- container -->

        <!-- Modal -->
        <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar informacion</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p> Simbologia del estado del coche: <br> Disponible(1) <br> Ocupado(2) <br> Reparacion(3) </p>
                    <form id="formEditarCoche" method="post" action="procesos/updateCar.php">
                        <input type="text" id="idCoche" name="idCoche" hidden>

                        <label for="modeloU">Modelo</label>
                        <input type="text" class="form-control input-xs" id="modeloU" name="modeloU">

                        <label for="kilometrajeU">Velocidad</label>
                        <input type="text" class="form-control input-xs" id="kilometrajeU" name="kilometrajeU">

                        <label for="precioU">Precio</label>
                        <input type="text" class="form-control input-xs" id="precioU" name="precioU">

                        <label for="estadoU">Estado</label>
                        <input type="text" class="form-control input-xs" id="estadoU" name="estadoU">

                        <button type="submit" class="btn btn-warning">Actualizar datos</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal para ver los datos de coches -->
        <div class="modal fade" id="modalVer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informacion del coche</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </div>

				<script src="js/main.js"></script>
	</body>
</html>

<script>
    $(document).ready(function(){
        $('#tableDatatable').load('tableCar.php');
    })
</script>

<!-- Actualiza los coches -->
<script>
	$(document).ready(function(){
		$('#btnActualizarCoche').click(function(){
			datos=$('#formEditarCoche').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/updateCar.php",
				success:function(r){
					if(r==1){
						$('#tableDatatable').load('tableCar.php');
						alertify.success("Actualizado con exito :D");
					}else{
						alertify.error("Fallo al actualizar :(");
					}
				}
			});
		});
	});
</script>

<!-- Obtiene los datos -->
<script>
	function agregarDatos(idCoche){
        $.ajax({
            type:"POST",
            data:"idCoche="+idCoche,
            url:'procesos/getDataCar.php',
            success:function(r){
                datos = jQuery.parseJSON(r);
                $('#idCoche').val(datos['id']);
                $('#modeloU').val(datos['modelo']);
                $('#kilometrajeU').val(datos['velocidad']);
                $('#precioU').val(datos['precio']);
                $('#estadoU').val(datos['estado']);
            }
        });
    }

    function eliminarDatos(idCoche){
        alertify.confirm('Eliminar Coche', '¿Continuar?',
                function(){
                    $.ajax({
                        type:"POST",
                        data:"idCoche="+idCoche,
                        url:'procesos/deleteCar.php',
                         success:function(r){
                             if(r==1){
                                alertify.success("Eliminado con exito");
                                $('#tableDatatable').load('tableCar.php');
                             }
                            else
                              alertify.error("No se pudo proceder.")
                        }
                    });
                },
                function(){
                });
    }
</script>
