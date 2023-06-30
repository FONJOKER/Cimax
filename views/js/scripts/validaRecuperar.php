<?php

require_once("../../../models/Conexion.php");

  $resultado = 0;

  $email=$_POST["email"];

    $sentenciaMYSQL="SELECT * FROM `usuarios` where email like '".$_POST["email"]."' and alta = 1";
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
    $sentenciaMYSQL->execute();
    $registros_sql=$sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);


    if(sizeof($registros_sql)==0)
    {
        $resultado+=1 ;
    }

    echo $resultado;

?>