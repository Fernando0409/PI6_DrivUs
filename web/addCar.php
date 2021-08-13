<?php
  require_once 'logica/root.php';

  session_start();
  if(!isset($_SESSION['username']))
    header('location: login.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Colaboradores - DrivUs</title>

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
                <a href="index.php" class="nav_link active"> <i class='bx bx-home-alt nav_icon'></i> <span class="nav_name">Inicio</span> </a>
                <!--a href="usuarios.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Clientes</span> </a-->
                <a href="automoviles.php" class="nav_link"> <i class='bx bxs-car nav_icon'></i> <span class="nav_name">Automoviles</span> </a>
                <a href="colaboradores.php" class="nav_link"> <i class='bx bx-user-circle nav_icon'></i> <span class="nav_name">Colaboradores</span> </a>
                <!--a href="reportes.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Reportes</span> </a-->
                <!--a href="prestamos.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Prestamos</span> </a-->
              </div>
          </div>
            <a href="logica/funciones/salir.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Cerrar Sesion</span> </a>
        </nav>
    </div>

    <form action="procesos/addCar.php" method="post" enctype="multipart/form-data">
      <div class="fila">
        <div class="mb-3">
          <label for="marca" class="form-label">Imagen: </label>
          <input type="file" class="form-control" id="file" name="file">
        </div>
        <div class="mb-3">
            <label for="placas" class="form-label">Placas: </label>
            <input type="text" class="form-control" id="placas" name="placas" required>
        </div>
        <div class="mb-3">
          <label for="marca" class="form-label">Marca: </label>
          <input type="text" class="form-control" id="nombre" name="marca" required>
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo: </label>
            <input type="text" class="form-control" id="nombre" name="modelo" required>
        </div>
      </div>

      <div class="fila">
          <div class="mb-3">
            <label for="color" class="form-label">Color: </label>
            <input type="text" class="form-control" id="color" name="color" required>
        </div>
          <div class="mb-3">
              <label for="cambio" class="form-label">Cambio: </label> <br>
              <select class="custom-select" name="cambio">
                  <option value="estandar">Estandar</option>
                  <option value="automatico">Automatico</option>
              </select>
          </div>
          <div class="mb-3">
              <label for="asiento" class="form-label">Asientos: </label>
              <input type="text" class="form-control" id="asientos" name="asientos" required>
          </div>
          <div class="mb-3">
              <label for="marca" class="form-label">Puertas: </label> <br>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="puertas" id="puertas" value="2">
                  <label class="form-check-label" for="puertas"> 2 </label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="puertas" id="puertas1" value="4">
                  <label class="form-check-label" for="puertas1"> 4 </label>
              </div>
          </div>
      </div>

      <div class="fila">
        <div class="mb-3">
            <label for="anio" class="form-label">A&ntilde;o: </label>
            <input type="text" class="form-control" id="anio" name="anio" required>
        </div>
          <div class="mb-3">
              <label for="marca" class="form-label">Aire acondicionado: </label>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="acondicionado" id="acondicionado1" value="yes">
                  <label class="form-check-label" for="acondicionado1"> Si </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="acondicionado" id="acondicionado2" value="no">
                  <label class="form-check-label" for="acondicionado2"> No </label>
              </div>
          </div>
          <div class="mb-3">
              <label for="km" class="form-label">Kilometraje: </label>
              <input type="text" class="form-control" id="km" name="km" required>
          </div>
      </div>

      <div class="fila">
          <div class="mb-3">
              <label for="precio" class="form-label">Precio: </label>
              <input type="text" class="form-control" id="precio" name="precio" required>
          </div>
          <div class="mb-3">
              <label for="marca" class="form-label">Estado del auto: </label>
              <select class="custom-select" name="status">
                  <option value="1">Disponible</option>
                  <option value="2">Ocupado</option>
                  <option value="3">Reparacion</option>
              </select>
          </div>
          <div class="mb-3">
              <label for="inventario" class="form-label">inventario: </label>
              <input type="text" class="form-control" id="precio" name="inventario" required>
          </div>
      </div>

      <div class="fila">
          <div class="mb-3">
              <label for="descripcion" class="form-label">Descripci&oacute;n: </label>
              <textarea type="text" class="form-control" id="descripcion" name="descripcion" rows="5" style="width: 400px;"></textarea>
          </div>
      </div>

      <button type="submit" class="btn btn-primary">Guardar datos</button>
    </form>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
