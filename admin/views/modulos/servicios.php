<?php

if(!isset($_SESSION["usuario"]))
{
    echo " <script> window.location='../login';</script>";
}

include_once("controllers/ServiciosController.php");
include_once("controllers/NivelesController.php");
include_once("controllers/CategoriasController.php");
include_once("controllers/UsuariosController.php");
include_once("controllers/UsuariosSeEncargaServiciosController.php");

$funciones = new FuncionesController();

$servicios_model = new ServiciosController();
$niveles_model = new NivelesController();
$categorias_model = new CategoriasController();
$usuarios_model = new UsuariosController();
$usuarios_se_encarga_servicios_model = new UsuariosSeEncargaServiciosController();


$servicios = $servicios_model->ctrMostrarRegistros();
$niveles = $niveles_model->ctrMostrarRegistros();
$categorias = $categorias_model->ctrMostrarRegistros();
$profesores = $usuarios_model->ctrConsulta("SELECT * FROM usuarios where tipo not like 'cliente'");


if(isset($_POST) && sizeof($_POST)>0)
{

    // Aqui se editan los registros
    if(isset($_POST["id"]))
    {
        
        $datos["nombre"] = $_POST["nombre"];
        $datos["descripcion"] = $_POST["descripcion"];
        $datos["f_inicio"] = $_POST["f_inicio"];
        $datos["f_fin"] = $_POST["f_fin"];
        $datos["precio"] = $_POST["precio"];
        $datos["max_participantes"] = $_POST["max_participantes"];
        $datos["id_nivel"] = $_POST["id_nivel"];
        $datos["id_categoria"] = $_POST["id_categoria"];

        // Se comprueba si se ha subido una imagen nueva
        if($_FILES["imagen"]["size"]>0)
        {
            $imagen_original =$servicios_model->ctrMostrarCampo("imagen","id",$_POST["id"]);
            if($imagen_original!="views/img/servicios/default.jpg")
            {
                unlink("../".$imagen_original);
            }
            $origen=$_FILES["imagen"]["tmp_name"];
            $destino='../views/img/servicios/servicio-'.$_POST["id"].'.jpg';
            move_uploaded_file($origen,$destino);
            $datos["imagen"]='views/img/servicios/servicio-'.$_POST["id"].'.jpg';
        }

        // Se editan los registros
        $servicios_model->ctrEditarRegistros($datos,"id",$_POST["id"]);

        // Se actualizan los profesores a cargo del servicio
        $datos= array();
        if(isset($_POST["profesores"]) && sizeof($_POST["profesores"])>0){
            $valores_eliminar[]=$_POST["id"];
            $usuarios_se_encarga_servicios_model->ctrBorrarRegistros("id_servicio",$valores_eliminar);
            foreach($_POST["profesores"] as $profesor)
            {
                $datos["id_servicio"] = $_POST["id"];
                $datos["id_usuario"] = $profesor;
                $usuarios_se_encarga_servicios_model->ctrInsertarRegistros($datos);
            }
        }
        else
        {
            $valores_eliminar[]=$_POST["id"];
            $usuarios_se_encarga_servicios_model->ctrBorrarRegistros("id_servicio",$valores_eliminar);
        }

        echo "<script> 
            window.location='servicios';
        </script>";
    }
    else if(isset($_POST["servicio_eliminar"]))
    {

        // Se eliminan los datos del servicio y de los usuarios a cargo de ese servicio
        $valores_eliminar[]=$_POST["servicio_eliminar"];
        $usuarios_se_encarga_servicios_model->ctrBorrarRegistros("id_servicio",$valores_eliminar);
        $servicios_model->ctrBorrarRegistrosConImagen("id",$valores_eliminar);

        echo "<script> 
            window.location='servicios';
        </script>";
    }
    else
    {

        // Aqui se insertan los registros
        $datos["nombre"] = $_POST["nombre"];
        $datos["descripcion"] = $_POST["descripcion"];
        $datos["f_inicio"] = $_POST["f_inicio"];
        $datos["f_fin"] = $_POST["f_fin"];
        $datos["precio"] = $_POST["precio"];
        $datos["max_participantes"] = $_POST["max_participantes"];
        $datos["visualizaciones"] = 0;
        $datos["id_nivel"] = $_POST["id_nivel"];
        $datos["id_categoria"] = $_POST["id_categoria"];

        $servicios_model->ctrInsertarRegistros($datos);

        $max_id=$servicios_model->ctrConsulta("SELECT MAX(id) as id FROM `servicios`");
        $nuevo_id = "".$max_id[0]["id"]."";

        // Se elige la imagen en base a si se ha subido una imagen o no
        $datos= array();
        if($_FILES["imagen"]["size"]>0)
        {
            $origen=$_FILES["imagen"]["tmp_name"];
            $destino='../views/img/servicios/servicio-'.$nuevo_id.'.jpg';
            move_uploaded_file($origen,$destino);
            $datos["imagen"]='views/img/servicios/servicio-'.$nuevo_id.'.jpg';
            $servicios_model->ctrEditarRegistros($datos,"id",$nuevo_id);
        }
        else
        {
            $max_id=$servicios_model->ctrConsulta("SELECT MAX(id) as id FROM `servicios`");
            $nuevo_id = "".$max_id[0]["id"]."";
            $datos["imagen"] = "views/img/servicios/default.jpg";
            $servicios_model->ctrEditarRegistros($datos,"id",$nuevo_id);
        }


        // Se asignan los profesores a cargo en caso de que se hayan seleccionado registros
        $datos= array();
        if(isset($_POST["profesores"]) &&  sizeof($_POST["profesores"])>0){
            foreach($_POST["profesores"] as $profesor)
            {
                $datos["id_servicio"] = $nuevo_id;
                $datos["id_usuario"] = $profesor;
                $usuarios_se_encarga_servicios_model->ctrInsertarRegistros($datos);
            }
        }


        echo "<script> 
            window.location='servicios';
        </script>";
    }
  
 
}


include_once("views/partials/servicios.view.php");