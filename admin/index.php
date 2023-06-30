<?php

session_start();


if(!isset($_SESSION["usuario"]))
{
    echo " <script> window.location='../login';</script>";
}
else
{
    if($_SESSION["usuario"]["tipo"] == "cliente")
    {
        echo " <script> window.location='../inicio';</script>";
    }
}

// error_reporting(0);

include("controllers/ctrPlantilla.php");
include("controllers/FuncionesController.php");
include("controllers/PaginacionController.php");

$plantilla_controller = new ctrPlantillaController();
// $paginacion = new PaginacionController(4,$datos); // $datos es un array de datos con todos los datos de la tabla sin paginar


