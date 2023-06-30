<?php

require_once("../../../models/Conexion.php");

  $valores = array();

  for($i=1;$i<=12;$i++)
  {
    $sentenciaMYSQL="SELECT COUNT(*) as total FROM `publicaciones` WHERE MONTH(fecha) = $i and YEAR(NOW())";
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
    $sentenciaMYSQL->execute();
    $registros_sql=$sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);

    $valores["totales"][]=$registros_sql[0]["total"];
  }

  $valores["meses"]=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

echo json_encode($valores);
