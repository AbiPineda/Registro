<?php
  
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['usu_ctipo_usuario']) || $_SESSION['usu_ctipo_usuario'] != 1){
   
    header('location: ../../index.php');
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    <!-- ucfirst convierte la primera letra en mayusculas de una cadena -->
    Hola administrador <?php echo ucfirst($_SESSION['usu_cnombre']); ?>
    <a href="../../Controlador/CerrarSesion.php">
      <button type="button" name="button">Cerrar sesion</button>
    </a>
  </body>
</html>
