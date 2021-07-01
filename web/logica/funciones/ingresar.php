<?php
  require_once '../root.php';
  session_start();

  $user = false;
  $correo = mysqli_real_escape_string($conn, $_POST['email']);  // Puede ser el email o username
  $pass = mysqli_real_escape_string($conn, $_POST['pass']);

  $passEncrip = md5($pass);
  $correoEncrip = md5($correo);

  if(!empty($correoEncrip) && !empty($passEncrip)){
    $query = "SELECT COUNT(*) AS contar FROM empleado WHERE email = ? AND password = ?";

    //$query = "SELECT COUNT(*) AS contar FROM usuarios WHERE nombre = '{$correo}' AND password='{$pass}'";
    $result = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($result, 'ss', $correoEncrip, $passEncrip);
    $ok = mysqli_stmt_execute($result);

    if($ok){
      $username = "";
      $sql = "SELECT * FROM empleado WHERE email = '$correoEncrip'";
      $result = mysqli_query($conn, $sql);

      while ($user = mysqli_fetch_array($result)) {
        $username = $user['nombre'];
      }
      $_SESSION['username'] = $username;
      header('location: ../../index.php');
    }
  }
?>
