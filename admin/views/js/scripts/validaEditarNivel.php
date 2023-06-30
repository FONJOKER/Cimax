<?php

require_once("../../../models/Conexion.php");

  $resultado = 0;

  $nombre=$_POST["nombre"];
  $id = $_POST["id"];


    $sentenciaMYSQL="SELECT * FROM niveles where nombre like '$nombre' and id not like '$id'";
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
    $sentenciaMYSQL->execute();
    $registros_sql=$sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);
    if(sizeof($registros_sql)>0)
    {
        $resultado+=1 ;
    }

    $valor=$_POST["valor"];


    $sentenciaMYSQL="SELECT * FROM niveles where valor like '$valor' and id not like '$id'";
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
    $sentenciaMYSQL->execute();
    $registros_sql=$sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);
    if(sizeof($registros_sql)>0)
    {
        $resultado+= 2;
    }
    echo  $resultado;
?>