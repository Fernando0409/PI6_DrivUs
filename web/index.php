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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/plotly-latest.min.js"></script>
    <script src="js/chart.js"></script>
    <title>Bienvenido - DrivUs</title>

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

    <main>

      <div class="info_tarjetas">
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
          <div class="card-header">Coches Rentados</div>
          <div class="card-body">
            <h5 class="card-title">Success card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
          <div class="card-header">Ganancias</div>
          <div class="card-body">
            <h5 class="card-title">Success card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
          <div class="card-header">Reportes</div>
          <div class="card-body">
            <h5 class="card-title">Success card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>

      <div class="down">
        <div class="graficas" style="display:flex; margin-top:40px">
                <div id="grafica1">
                    <canvas id="myChart" width="350" height="200"></canvas>
                </div>
                <div id="grafica2">
                    <canvas id="myChart1" width="350" height="200"></canvas>
                </div>
                <div id="grafica3">
                    <canvas id="myChart2" width="350" height="200"></canvas>
                </div>
            </div>
        <!--<div class="row">
          <div class="col-sm-6">
            <div class="opciones">
              <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Rentar coche</a>
                <a href="#" class="list-group-item list-group-item-action">Estado de coches</a>
                <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="graficas">
                  <div id="cargaLineal"></div>
            </div>
          </div>
        </div-->
      </div>
    </main>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/charts.js"></script>

    <script>
      $(document).ready(function() {
        $('#cargaLineal').load('graficas/lineal.php');
      });
    </script>
  </body>
</html>
