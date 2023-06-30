<?php

session_start();

require_once("../../../models/Conexion.php");

  $id_usuario = $_SESSION["usuario"]["id"];


    $sentenciaMYSQL="UPDATE usuario_recibe_notificaciones  SET visto=1  where id_usuario like '$id_usuario'";
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
    $sentenciaMYSQL->execute();
?>