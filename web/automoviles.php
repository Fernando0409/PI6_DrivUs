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
    <title>Automoviles - DrivUs</title>

  </head>
  <body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">BBBootstrap</span> </a>
                <div class="nav_list">
                  <a href="index.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Inicio</span> </a>
                  <a href="usuarios.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Clientes</span> </a>
                  <a href="automoviles.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Automoviles</span> </a>
                  <a href="colaboradores.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Colaboradores</span> </a>
                  <a href="reportes.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Reportes</span> </a>
                  <a href="prestamos.php" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Prestamos</span> </a>
                </div>
            </div>
            <a href="logica/funciones/salir.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Cerrar Sesion</span> </a>
        </nav>
    </div>

    <main>
      <div class="perfil">
        <a href="carList.php"><button type="button" class="btn btn-info">Lista de Automoviles</button> </a> <br>
        <a href="addCar.php"><button type="button" class="btn btn-info">Añadir automovil</button></a>
      </div>
    </main>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
