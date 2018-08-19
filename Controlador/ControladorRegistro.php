<?php

  $nombre   = $_POST['nombre'];
  $apellido   = $_POST['apellido'];
  $correo  = $_POST['correo'];
  $usuario   = $_POST['usuario'];
  $tipo  = $_POST['tipo'];
  $contrasena = $_POST['contraseña'];
  $contrasena2 = $_POST['contraseña2'];

  if(empty($correo) || empty($contrasena) || empty($contrasena2))
  {

    echo 'error_1'; 

  }else{

    if($contrasena == $contrasena2){

      if(filter_var($correo, FILTER_VALIDATE_EMAIL)) {

        # Incluimos la clase usuario
        require_once('../Conexion/Usuario.php');

        # Creamos un objeto de la clase usuario
        $usuario = new Usuario();

        # Llamamos al metodo login para validar los datos en la base de datos
        $usuario -> registroUsuario($usuario, $correo, $contrasena);


      }else{
        echo 'error_4';
      }


    }else{
      echo 'error_2';
    }

  }

?>
