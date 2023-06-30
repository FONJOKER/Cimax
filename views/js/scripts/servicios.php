<?php

session_start();

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

  if($_SESSION["usuario"]["tipo"]=="cliente")
  {
    $tabla_subconsulta = "usuarios_inscribe_servicios";
  }
  else
  {
    $tabla_subconsulta = "usuarios_se_encarga_servicios";
  }


  $sentenciaMYSQL="SELECT id ,nombre as 'title', descripcion, imagen, f_inicio as 'start', f_fin as 'end' FROM `servicios` where id IN (SELECT id_servicio FROM `".$tabla_subconsulta."` where id_usuario like '".$_SESSION["usuario"]["id"]."')";
  $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
  $sentenciaMYSQL->execute();
  $registros_sql=$sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);

  foreach($registros_sql as $registro)
  {
    $numero = $registro["id"];
    $registro["color"] = getColorByNumber($numero);
    $registros_nuevos[] = $registro;
  }

  header("Content-Type: application/json");
  echo json_encode($registros_nuevos);

  ?>