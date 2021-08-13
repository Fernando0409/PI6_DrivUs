<?php
  require_once 'logica/root.php';

  session_start();
  if(isset($_SESSION['username']))
    header('location: index.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Iniciar Sesion - Drivus</title>
    <style>
      .login, .image{
        min-height: 100vh;
      }

      .bg-image {
        background-color: black;
        background-image: url('resources/img/imgLogin.jpeg');
        background-size: cover;
        background-position: center center;
        }
    </style>

  </head>
  <body>
    <div class="container-fluid">
      <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>
        <!-- The content half -->
        <div class="col-md-6 bg-light">
          <div class="login d-flex align-items-center py-5">
              <!-- Demo content-->
              <div class="container">
                <div class="row">
                  <div class="col-lg-10 col-xl-7 mx-auto">
                    <h3 class="display-4">Iniciar Sesion</h3>
                    <form action="logica/funciones/ingresar.php" method="post">
                      <div class="form-group mb-3">
                        <input type="email" name="email"  placeholder="Correo Electronico" required autofocus autocomplete="off "class="form-control rounded-pill border-0 shadow-sm px-4">
                      </div>
                      <div class="form-group mb-3">
                        <input type="password" name="pass"  placeholder="Contraseña" required autocomplete="off" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                      </div>
                      <div class="custom-control custom-checkbox mb-3">
                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                        <label for="customCheck1" class="custom-control-label">Remember password</label>
                      </div>
                      <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
                    </form>
                  </div>
                </div>
              </div><!-- End -->
            </div>
        </div><!-- End -->
      </div>
    </div>
  </body>
</html>