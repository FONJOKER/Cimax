<?php

include_once("controllers/PublicacionesController.php");
include_once("controllers/CategoriasController.php");
include_once("controllers/UsuariosController.php");

$funciones = new FuncionesController();

$publicaciones_model = new PublicacionesController();
$categorias_model = new CategoriasController();
$usuarios_model = new UsuariosController();

// PUBLICACIONES EN BASE DE SI SE USA ALGUN  FILTRO O NO

if(isset($_GET["id_categoria"]))
{
    $consulta = "SELECT * FROM publicaciones where id_categoria like '".$_GET["id_categoria"]."' order by visualizaciones DESC";
    $filtro = "&id_categoria=".$_GET["id_categoria"];
    $publicaciones = $publicaciones_model->ctrConsulta("SELECT * FROM publicaciones where id_categoria like '".$_GET["id_categoria"]."' order by visualizaciones DESC"); 
}
elseif(isset($_GET["id_usuario"]))
{
    $consulta = "SELECT * FROM publicaciones where id_usuario like '".$_GET["id_usuario"]."' order by visualizaciones DESC";
    $filtro = "&id_usuario=".$_GET["id_usuario"];
    $publicaciones = $publicaciones_model->ctrConsulta("SELECT * FROM publicaciones where id_usuario like '".$_GET["id_usuario"]."' order by visualizaciones DESC"); 
}
elseif(isset($_POST["busqueda"]))
{
    $consulta = "SELECT * FROM publicaciones where titulo like '%".$_POST["busqueda"]."%' or descripcion like '%".$_POST["busqueda"]."%' or descripcion_corta like '%".$_POST["busqueda"]."%' order by visualizaciones DESC";
    $filtro = "&busqueda=".$_POST["busqueda"];
    $publicaciones = $publicaciones_model->ctrConsulta("SELECT * FROM publicaciones where titulo like '%".$_POST["busqueda"]."%' or descripcion like '%".$_POST["busqueda"]."%' or descripcion_corta like '%".$_POST["busqueda"]."%' order by visualizaciones DESC"); 
}
else
{
    $consulta = "SELECT * FROM publicaciones order by visualizaciones DESC";
    $publicaciones = $publicaciones_model->ctrConsulta("SELECT * FROM publicaciones order by visualizaciones DESC");
}

// Comprobacion de que haya pagina

if(isset($_GET["pagina"]))
{
    $pagina=$_GET["pagina"];

}
else
{
    $pagina=1;
}

$paginacion = new PaginacionController(6,$publicaciones); 
$publicaciones = $publicaciones_model->ctrMostrarRegistrosPaginados($pagina-1,$paginacion->registros_por_pagina,$consulta); 


// DATOS DE LAS CATEGORIAS
$categorias = $categorias_model->ctrMostrarRegistros();

// DATOS DE LOS PROFESORES
$profesores = $usuarios_model->ctrConsulta("SELECT * FROM usuarios where tipo not like 'cliente'");

// PUBLICACIONES RECIENTES
$publicaciones_recientes = $publicaciones_model->ctrConsulta("SELECT * FROM publicaciones order by fecha DESC limit 3");

if(isset($_POST) && sizeof($_POST)>0 && !isset($_POST["busqueda"]))
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
            $destino='views/img/publicaciones/publicacion-'.$nuevo_id.'.jpg';
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
            window.location='blog';
        </script>";
  
}


include_once("views/partials/blog.view.php");