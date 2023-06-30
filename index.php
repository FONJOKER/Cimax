<?php

session_start();
// Pruebas
if(isset($_SESSION["usuario"]) && $_SESSION["usuario"]["tipo"] == "administrador")
{
    // echo "<script>
    //         window.location='admin';
    //     </script>";
}

// error_reporting(0);

include("controllers/ctrPlantilla.php");
include("controllers/FuncionesController.php");
include("controllers/PaginacionController.php");

$plantilla_controller = new ctrPlantillaController();
// $paginacion = new PaginacionController(4,$datos); // $datos es un array de datos con todos los datos de la tabla sin paginar



