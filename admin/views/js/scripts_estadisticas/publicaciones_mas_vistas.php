<?php

require_once("../../../models/Conexion.php");

  $valores = array();


    $sentenciaMYSQL="SELECT titulo,visualizaciones FROM `publicaciones` order by visualizaciones DESC limit 10";
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
    $sentenciaMYSQL->execute();
    $registros_sql=$sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);

    foreach($registros_sql as $publicacion)
    {
      $valores["titulos"][]=$publicacion["titulo"];
      $valores["visualizaciones"][] = $publicacion["visualizaciones"];
    }

echo json_encode($valores);
