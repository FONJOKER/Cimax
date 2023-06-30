<?php

require_once("../../../models/Conexion.php");
  $resultado = 0;


  $nombre=$_POST["nombre"];


    $sentenciaMYSQL="SELECT * FROM niveles where nombre like '$nombre'";
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
    $sentenciaMYSQL->execute();
    $registros_sql=$sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);
    if(sizeof($registros_sql)>0)
    {
        $resultado+=1 ;
    }

    $valor=$_POST["valor"];


    $sentenciaMYSQL="SELECT * FROM niveles where valor like '$valor'";
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
    $sentenciaMYSQL->execute();
    $registros_sql=$sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);
    if(sizeof($registros_sql)>0)
    {
        $resultado+= 2;
    }


    

    echo  $resultado;
?>