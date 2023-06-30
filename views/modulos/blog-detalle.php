<?php

include_once("controllers/PublicacionesController.php");
include_once("controllers/CategoriasController.php");
include_once("controllers/UsuariosController.php");
include_once("controllers/NivelesController.php");
include_once("controllers/UsuarioComentaPublicacionesController.php");
include_once("controllers/NotificacionesController.php");
include_once("controllers/UsuarioRecibeNotificacionesController.php");

$funciones = new FuncionesController();

$publicaciones_model = new PublicacionesController();
$categorias_model = new CategoriasController();
$usuarios_model = new UsuariosController();
$niveles_model = new NivelesController();
$usuario_comenta_publicaciones_model = new UsuarioComentaPublicacionesController();
$notificaciones_model = new NotificacionesController();
$usuario_recibe_notificaciones_model = new UsuarioRecibeNotificacionesController();


if(isset($_POST) && sizeof($_POST)>0)
{

    if(isset($_POST["id_publicacion_comentar"]))
    {

            $datos = array();
            $datos["id_usuario"]=$_SESSION["usuario"]["id"];
            $datos["id_publicacion"]=$_POST["id_publicacion_comentar"];
            $datos["comentario"]=$_POST["comentario"];
            $datos["fecha"]=date('Y-m-d');

            $usuario_comenta_publicaciones_model->ctrInsertarRegistros($datos);

            echo "<script> 
                window.location='index.php?ruta=blog-detalle&id=".$_POST["id_publicacion_comentar"]."';
            </script>";
    }
    else if(isset($_POST["id"]))
    {
        $datos = array();
        $datos["titulo"] = $_POST["titulo"];
        $datos["descripcion_corta"] = $_POST["descripcion_corta"];
        $datos["descripcion"] = $_POST["descripcion"];
        $datos["id_categoria"] = $_POST["id_categoria"];

        if($_FILES["imagen"]["size"]>0)
        {
            $imagen_original =$publicaciones_model->ctrMostrarCampo("imagen","id",$_POST["id"]);
            if($imagen_original!="views/img/publicaciones/default.jpg")
            {
                unlink($imagen_original);
            }
            $origen=$_FILES["imagen"]["tmp_name"];
            $destino='views/img/publicaciones/publicacion-'.$_POST["id"].'.jpg';
            move_uploaded_file($origen,$destino);
            $datos["imagen"]='views/img/publicaciones/publicacion-'.$_POST["id"].'.jpg';
        }
        $publicaciones_model->ctrEditarRegistros($datos,"id",$_POST["id"]);

        echo "<script> 
            window.location='index.php?ruta=blog-detalle&id=".$_POST["id"]."';
        </script>";
        }
    else if(isset($_POST["id_comentario_borrar"]))
    {
        if($_SESSION["usuario"]["id"]!= $usuario_comenta_publicaciones_model->ctrMostrarCampo("id_usuario","id",$_POST["id_comentario_borrar"]))
        {   
            $datos = array();
            $datos["mensaje"]="Un administrador ha borrado tu comentario.<br>";
            $datos["mensaje"].="Publicacion : <b>".$publicaciones_model->ctrMostrarCampo("titulo","id",$_POST["id_publicacion"])."</b><br>";
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
        }

        $valores_eliminar[]=$_POST["id_comentario_borrar"];
        $usuario_comenta_publicaciones_model->ctrBorrarRegistros("id",$valores_eliminar);

        echo "<script> 
                window.location='index.php?ruta=blog-detalle&id=".$_POST["id_publicacion"]."';
            </script>";
    }
    else if(isset($_POST["id_comentario_editar"]))
    {
            if($_SESSION["usuario"]["id"]!= $usuario_comenta_publicaciones_model->ctrMostrarCampo("id_usuario","id",$_POST["id_comentario_editar"]))
            {   
                $datos = array();
                $datos["mensaje"]="Un administrador ha editado tu comentario.<br>";
                $datos["mensaje"].="Publicacion : <b>".$publicaciones_model->ctrMostrarCampo("titulo","id",$_POST["id_publicacion"])."</b><br>";
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
            }

            $datos = array();
            $datos["comentario"]=$_POST["comentario"];
            $datos["fecha"]=date('Y-m-d');

 

            $usuario_comenta_publicaciones_model->ctrEditarRegistros($datos,"id",$_POST["id_comentario_editar"]);

            echo "<script> 
                window.location='index.php?ruta=blog-detalle&id=".$_POST["id_publicacion"]."';
            </script>";
    }
    else if(isset($_POST["publicacion_eliminar"]))
    {
        $valores_eliminar[]=$_POST["publicacion_eliminar"];
        $publicaciones_model->ctrBorrarRegistrosConImagen("id",$valores_eliminar);

        echo "<script> 
            window.location='blog';
        </script>";
    }
  
 
}


// INCREMENTO DE VISUALIZACIONES
$datos["visualizaciones"]=$publicaciones_model->ctrMostrarCampo("visualizaciones","id",$_GET["id"]) +1;
$publicaciones_model->ctrEditarRegistros($datos,"id",$_GET["id"]);

// DATOS DE LA PUBLICACION
$publicacion = $publicaciones_model->ctrMostrarRegistro("id",$_GET["id"]);
$categorias = $categorias_model->ctrMostrarRegistros();
$comentarios = $usuario_comenta_publicaciones_model->ctrConsulta("SELECT * FROM usuarios_comenta_publicaciones WHERE id_publicacion like '".$_GET["id"]."' order by fecha_creacion DESC");

// DATOS DE USUARIOS
$profesores = $usuarios_model->ctrMostrarRegistros("tipo","empleado");

// DATOS DEL AUTOR DE LA PUBLICACION
$autor = $usuarios_model->ctrMostrarRegistro("id",$publicacion["id_usuario"]);

// DATOS DE LAS PUBLICACIONES RECIENTES
$publicaciones_recientes = $publicaciones_model->ctrConsulta("SELECT * FROM publicaciones order by fecha DESC limit 3");


include_once("views/partials/blog-detalle.view.php");