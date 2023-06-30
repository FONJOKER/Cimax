<?php

require_once("../../../models/Conexion.php");

  $resultado = 0;

  $email=$_POST["email"];
  $id = $_POST["id"];


    $sentenciaMYSQL="SELECT * FROM usuarios where email like '$email' and id not like '$id'";
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
    $sentenciaMYSQL->execute();
    $registros_sql=$sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);
    if(sizeof($registros_sql)>0)
    {
        $resultado+=1 ;
    }

    $dni=$_POST["dni"];


    $sentenciaMYSQL="SELECT * FROM usuarios where dni like '$dni' and id not like '$id'";
    $sentenciaMYSQL=Conexion::conectar()->prepare($sentenciaMYSQL);
    $sentenciaMYSQL->execute();
    $registros_sql=$sentenciaMYSQL->fetchall(PDO::FETCH_ASSOC);
    if(sizeof($registros_sql)>0)
    {
        $resultado+= 2;
    }
    // $resultado="";

    // if(sizeof($registros_sql)>0)
    // {
        
    //   $resultado.="<div class='form-control'>";
      
    //   foreach ($registros_sql as $registro) {
    //       $resultado.='<p class="autosugerencia" onclick="coger_sugerencia(this.innerHTML)" >'.$registro["titulo"].'</p>';
          
    //   }
    //   $resultado.="<div>";

    // }


    

    echo  $resultado;
?>