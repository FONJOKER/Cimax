<?php

if(!isset($_SESSION["usuario"]))
{
    echo " <script> window.location='../login';</script>";
}

include_once("controllers/NivelesController.php");

$funciones = new FuncionesController();

$niveles_model = new NivelesController();

$niveles = $niveles_model->ctrMostrarRegistros();


if(isset($_POST) && sizeof($_POST)>0)
{

    if(isset($_POST["id"]))
    {
        $datos["nombre"] = $_POST["nombre"];
        $datos["valor"] = $_POST["valor"];
        $niveles_model->ctrEditarRegistros($datos,"id",$_POST["id"]);

        echo "<script> 
            window.location='niveles';
        </script>";
    }
    else if(isset($_POST["niveles_eliminar"]))
    {
        $niveles_model->ctrConsulta("DELETE FROM niveles where id like '".$_POST["niveles_eliminar"]."'");

        echo "<script> 
            window.location='niveles';
        </script>";
    }
    else
    {
        $datos["nombre"] = $_POST["nombre"];
        $datos["valor"] = $_POST["valor"];

        $niveles_model->ctrInsertarRegistros($datos);

        echo "<script> 
            window.location='niveles';
        </script>";
    }
  
 
}



include_once("views/partials/niveles.view.php");