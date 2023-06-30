<?php

if(!isset($_SESSION["usuario"]))
{
    echo " <script> window.location='../login';</script>";
}

include_once("controllers/NivelesController.php");
include_once("controllers/NotificacionesController.php");
include_once("controllers/UsuarioRecibeNotificacionesController.php");
include_once("controllers/UsuariosController.php");

$funciones = new FuncionesController();

$niveles_model = new NivelesController();
$niveles = $niveles_model->ctrMostrarRegistros();

$notificaciones_model = new NotificacionesController();
$notificaciones = $notificaciones_model->ctrMostrarRegistros();

$usuario_recibe_notificaciones_model = new UsuarioRecibeNotificacionesController();
$usuarios_model = new UsuariosController();

if(isset($_POST) && sizeof($_POST)>0)
{

    if(isset($_POST["id"]))
    {
        $datos["mensaje"] = $_POST["mensaje"];
        $notificaciones_model->ctrEditarRegistros($datos,"id",$_POST["id"]);

        echo "<script> 
            window.location='notificaciones';
        </script>";
    }
    else if(isset($_POST["notificaciones_eliminar"]))
    {


        $usuario_recibe_notificaciones_model->ctrConsulta("DELETE FROM usuario_recibe_notificaciones where id_notificacion like '".$_POST["notificaciones_eliminar"]."'");

        $notificaciones_model->ctrConsulta("DELETE FROM notificaciones where id like '".$_POST["notificaciones_eliminar"]."'");

        echo "<script> 
            window.location='notificaciones';
        </script>";
    }
    else
    {
        $datos["mensaje"] = $_POST["mensaje"];
        $notificaciones_model->ctrInsertarRegistros($datos);
        $usuarios_notificar = $usuarios_model->ctrConsulta("SELECT * FROM `usuarios` where tipo like '".$_POST["tipo"]."' and id_nivel like '".$_POST["id_nivel"]."'");

        $max_id=$usuarios_model->ctrConsulta("SELECT MAX(id) as id FROM `notificaciones`");
        $nuevo_id = "".$max_id[0]["id"]."";

        foreach($usuarios_notificar as $usuario)
        {
            $datos= array();

            $datos["id_usuario"] = $usuario["id"];
            $datos["id_notificacion"] = $nuevo_id;
            $datos["fecha"] = date("Y-m-d");
            $datos["visto"] = 0;
            $usuario_recibe_notificaciones_model->ctrInsertarRegistros($datos);
        }

        

        echo "<script> 
            window.location='notificaciones';
        </script>";
    }
  
 
}



include_once("views/partials/notificaciones.view.php");