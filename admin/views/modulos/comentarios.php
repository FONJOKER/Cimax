<?php

if(!isset($_SESSION["usuario"]))
{
    echo " <script> window.location='../login';</script>";
}

include_once("controllers/UsuarioComentaPublicacionesController.php");
include_once("controllers/UsuariosController.php");
include_once("controllers/PublicacionesController.php");
include_once("controllers/NotificacionesController.php");
include_once("controllers/UsuarioRecibeNotificacionesController.php");

$funciones = new FuncionesController();

$usuario_comenta_publicaciones_model = new UsuarioComentaPublicacionesController();
$usuarios_model = new UsuariosController();
$publicaciones_model = new PublicacionesController();
$notificaciones_model = new NotificacionesController();
$usuario_recibe_notificaciones_model = new UsuarioRecibeNotificacionesController();

$publicaciones = $publicaciones_model->ctrConsulta("SELECT * FROM PUBLICACIONES ORDER BY TITULO ASC");
$comentarios = $usuario_comenta_publicaciones_model->ctrMostrarRegistros();

if(isset($_POST["id_publicacion"]))
{

        $datos = array();
        $datos["id_usuario"]=$_SESSION["usuario"]["id"];
        $datos["id_publicacion"]=$_POST["id_publicacion"];
        $datos["comentario"]=$_POST["comentario"];
        $datos["fecha"]=date('Y-m-d');

        $usuario_comenta_publicaciones_model->ctrInsertarRegistros($datos);

        echo "<script> 
            window.location='comentarios';
        </script>";
}
else if(isset($_POST["id_comentario_editar"]))
{
        $datos = array();
        $datos["mensaje"]="Un administrador ha editado tu comentario.<br>";
        $datos["mensaje"].="Publicacion : <b>".$publicaciones_model->ctrMostrarCampo("titulo","id",$_POST["id_publicacion_comentario"])."</b><br>";
        $datos["mensaje"].="Comentario : <b>".$usuario_comenta_publicaciones_model->ctrMostrarCampo("comentario","id",$_POST["id_comentario_editar"])."</b>";
        $notificaciones_model->ctrInsertarRegistros($datos);
        $max_id=$notificaciones_model->ctrConsulta("SELECT MAX(id) as id FROM `notificaciones`");
        $nuevo_id = "".$max_id[0]["id"]."";

        $datos = array();
        $datos["id_usuario"] = $usuario_comenta_publicaciones_model->ctrMostrarCampo("id_usuario","id",$_POST["id_comentario_editar"]);
        $datos["id_notificacion"] = $nuevo_id;
        $datos["fecha"] = date("Y-m-d");
        $datos["visto"] = 0;
        $usuario_recibe_notificaciones_model->ctrInsertarRegistros($datos);

        $datos = array();
        $datos["comentario"]=$_POST["comentario"];

        $usuario_comenta_publicaciones_model->ctrEditarRegistros($datos,"id",$_POST["id_comentario_editar"]);

        echo "<script> 
            window.location='comentarios';
        </script>";
}
else if(isset($_POST["id_comentario_borrar"]))
{
    $datos = array();
    $datos["mensaje"]="Un administrador ha borrado tu comentario.<br>";
    $datos["mensaje"].="Publicacion : <b>".$publicaciones_model->ctrMostrarCampo("titulo","id",$_POST["id_publicacion_comentario"])."</b><br>";
    $datos["mensaje"].="Comentario : <b>".$usuario_comenta_publicaciones_model->ctrMostrarCampo("comentario","id",$_POST["id_comentario_borrar"])."</b>";
    $notificaciones_model->ctrInsertarRegistros($datos);
    $max_id=$notificaciones_model->ctrConsulta("SELECT MAX(id) as id FROM `notificaciones`");
    $nuevo_id = "".$max_id[0]["id"]."";

    $datos = array();
    $datos["id_usuario"] = $usuario_comenta_publicaciones_model->ctrMostrarCampo("id_usuario","id",$_POST["id_comentario_borrar"]);
    $datos["id_notificacion"] = $nuevo_id;
    $datos["fecha"] = date("Y-m-d");
    $datos["visto"] = 0;
    $usuario_recibe_notificaciones_model->ctrInsertarRegistros($datos);

    $valores_eliminar[]=$_POST["id_comentario_borrar"];
    $usuario_comenta_publicaciones_model->ctrBorrarRegistros("id",$valores_eliminar);

    echo "<script> 
            window.location='comentarios';
    </script>";
}



include_once("views/partials/comentarios.view.php");