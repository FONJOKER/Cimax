<?php

include_once("controllers/ServiciosController.php");
include_once("controllers/UsuariosController.php");
include_once("controllers/UsuariosInscribeServiciosController.php");
include_once("controllers/CategoriasController.php");
include_once("controllers/NivelesController.php");

$funciones = new FuncionesController();
$categorias_model = new CategoriasController();
$servicios_model = new ServiciosController();
$usuarios_model = new UsuariosController();
$usuarios_inscribe_servicios_controller = new UsuariosInscribeServiciosController();
$niveles_model = new NivelesController();

// DATOS DEL SERVICIO SELECCIONADO

if(!isset($_GET["id"]) && !isset($_POST["id"]))
{
    echo "<script> 
                window.location='404';
            </script>";
}


$niveles = $niveles_model->ctrMostrarRegistros();


if(isset($_GET["id"]))
{   
    $servicio = $servicios_model->ctrMostrarRegistro("id",$_GET["id"]);
    $usuarios_participantes = $usuarios_model->ctrConsulta("SELECT * FROM `usuarios` where id IN (SELECT id_usuario FROM `usuarios_inscribe_servicios` where id_servicio like '".$_GET["id"]."')");
}

if(isset($_POST["id"]))
{
    $servicio = $servicios_model->ctrMostrarRegistro("id",$_POST["id"]);
    $usuarios_participantes = $usuarios_model->ctrConsulta("SELECT * FROM `usuarios` where id IN (SELECT id_usuario FROM `usuarios_inscribe_servicios` where id_servicio like '".$_POST["id"]."')");
    
    if($_POST["accion"] == "inscribirme")
    {
        $nivel_servicio = $niveles_model->ctrMostrarCampo("valor","id",$servicio["id_nivel"]);
        $nivel_usuario = $niveles_model->ctrMostrarCampo("valor","id",$_SESSION["usuario"]["id_nivel"]);
        if($nivel_usuario<$nivel_servicio)
        {

        echo "<script> 
            Swal.fire({
            icon: 'error',
            title: 'Vaya...',
            text: 'Te falta nivel para este servicio',
            });
                </script>";
        }
        else
        {
            $datos["id_usuario"] = $_SESSION["usuario"]["id"];
            $datos["id_servicio"] = $servicio["id"];
            $datos["precio"] = $servicio["precio"];
            $datos["fecha"]=date("Y-m-d");
            $usuarios_inscribe_servicios_controller->ctrInsertarRegistros($datos);
        }
        
    }
    else
    {
        
        $servicio_inscrito = $usuarios_inscribe_servicios_controller->ctrConsulta("SELECT * FROM `usuarios_inscribe_servicios` where id_usuario like '".$_SESSION["usuario"]["id"]."' and id_servicio like '".$servicio["id"]."'");
        $valores_eliminar[]=$servicio_inscrito[0]["id"];
        $usuarios_inscribe_servicios_controller->ctrBorrarRegistros("id",$valores_eliminar);
    }

}




include_once("views/partials/servicio-detalle.view.php");