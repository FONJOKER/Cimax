<?php

if(!isset($_SESSION["usuario"]))
{
    echo " <script> window.location='../login';</script>";
}

include_once("controllers/PublicacionesController.php");
include_once("controllers/CategoriasController.php");

$funciones = new FuncionesController();

$publicaciones_model = new PublicacionesController();
$categorias_model = new CategoriasController();

$publicaciones = $publicaciones_model->ctrMostrarRegistros();
$categorias = $categorias_model->ctrMostrarRegistros();


if(isset($_POST) && sizeof($_POST)>0)
{

    if(isset($_POST["id"]))
    {
        
        $datos["titulo"] = $_POST["titulo"];
        $datos["descripcion_corta"] = $_POST["descripcion_corta"];
        $datos["descripcion"] = $_POST["descripcion"];
        $datos["id_categoria"] = $_POST["id_categoria"];

        if($_FILES["imagen"]["size"]>0)
        {
            $imagen_original =$publicaciones_model->ctrMostrarCampo("imagen","id",$_POST["id"]);
            if($imagen_original!="views/img/publicaciones/default.jpg")
            {
                unlink("../".$imagen_original);
            }
            $origen=$_FILES["imagen"]["tmp_name"];
            $destino='../views/img/publicaciones/publicacion-'.$_POST["id"].'.jpg';
            move_uploaded_file($origen,$destino);
            $datos["imagen"]='views/img/publicaciones/publicacion-'.$_POST["id"].'.jpg';
        }
        $publicaciones_model->ctrEditarRegistros($datos,"id",$_POST["id"]);

        echo "<script> 
            window.location='publicaciones';
        </script>";
    }
    else if(isset($_POST["publicacion_eliminar"]))
    {
        $valores_eliminar[]=$_POST["publicacion_eliminar"];
        $publicaciones_model->ctrBorrarRegistrosConImagen("id",$valores_eliminar);

        echo "<script> 
            window.location='publicaciones';
        </script>";
    }
    else
    {

        $datos["titulo"] = $_POST["titulo"];
        $datos["descripcion_corta"] = $_POST["descripcion_corta"];
        $datos["descripcion"] = $_POST["descripcion"];
        $datos["visualizaciones"] = 0;
        $datos["id_usuario"] = $_SESSION["usuario"]["id"];
        $datos["fecha"]=date("Y-m-d");
        $datos["id_categoria"] = $_POST["id_categoria"];

        $publicaciones_model->ctrInsertarRegistros($datos);

        $datos= array();
        $max_id=$publicaciones_model->ctrConsulta("SELECT MAX(id) as id FROM `publicaciones`");
        $nuevo_id = "".$max_id[0]["id"]."";
        if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0)
        {
            $origen=$_FILES["imagen"]["tmp_name"];
            $destino='../views/img/publicaciones/publicacion-'.$nuevo_id.'.jpg';
            move_uploaded_file($origen,$destino);
            $datos["imagen"]='views/img/publicaciones/publicacion-'.$nuevo_id.'.jpg';
        }
        else
        {
            $max_id=$publicaciones_model->ctrConsulta("SELECT MAX(id) as id FROM `publicaciones`");
            $nuevo_id = "".$max_id[0]["id"]."";
            $datos["imagen"] = "views/img/publicaciones/default.jpg";
        }

        $publicaciones_model->ctrEditarRegistros($datos,"id",$nuevo_id);

        echo "<script> 
            window.location='publicaciones';
        </script>";

    }
  
 
}


include_once("views/partials/publicaciones.view.php");