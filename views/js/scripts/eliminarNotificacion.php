<?php
session_start();
require_once("../../../models/Conexion.php");


  $id = $_POST["id"];
  $id_usuario = $_SESSION["usuario"]["id"];

  if($id == "todos")
  {
    $sentenciaMYSQL="DELETE  FROM usuario_recibe_notificaciones where id_usuario like '$id_usuario'";
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
    $sentenciaMYSQL->execute();
  }
  else
  {
    $sentenciaMYSQL="DELETE  FROM usuario_recibe_notificaciones where id like '$id' and id_usuario like '$id_usuario'";
    $sentenciaMYSQL=$conexion_pdo->prepare($sentenciaMYSQL);
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
  }

?>