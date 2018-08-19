<?php
 session_start();

  if($_SESSION['usu_ctipo_usuario'] == 1){
    header('location: ../index.php');
  }else if($_SESSION['usu_ctipo_usuario'] == 2){
    header('location: ../index.php');
  }
  
 ?>

