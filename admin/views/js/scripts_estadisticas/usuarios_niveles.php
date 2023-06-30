<?php

require_once("../../../models/Conexion.php");

  function getColorByNumber($number) {
    // Convertimos el número a una cadena de texto
    $string = strval($number);
  
    // Calculamos el hash MD5 de la cadena de texto
    $hash = md5($string);
  
    // Extraemos los primeros 6 caracteres del hash como un valor hexadecimal
    $color = '#' . substr($hash, 0, 6);
  
    return $color;
  }

  $valores = array();


    $sentenciaMYSQL="SELECT COUNT(*) as total FROM `usuarios` group by id_nivel order by id_nivel ASC";
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
    $sentenciaMYSQL->execute();
    $registros_sql=$sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);

    foreach($registros_sql as $total)
    {
      $valores["totales"][]=$total["total"];
    }

    $sentenciaMYSQL="SELECT id,nombre FROM `niveles` order by id ASC";
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
    $sentenciaMYSQL->execute();
    $registros_sql=$sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);

    foreach($registros_sql as $nivel)
    {
      $valores["niveles"][]=$nivel["nombre"];
      $valores["colores"][] = getColorByNumber($nivel["id"]);
    }

echo json_encode($valores);
