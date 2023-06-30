<?php

if(!isset($_SESSION["usuario"]))
{
    echo " <script> window.location='../login';</script>";
}

include_once("controllers/CategoriasController.php");

$funciones = new FuncionesController();

$categorias_model = new CategoriasController();

$categorias = $categorias_model->ctrMostrarRegistros();


if(isset($_POST) && sizeof($_POST)>0)
{

    if(isset($_POST["id"]))
    {
        $datos["nombre"] = $_POST["nombre"];
        $categorias_model->ctrEditarRegistros($datos,"id",$_POST["id"]);

        if($_FILES["imagen"]["size"]>0)
        {
            $imagen_original =$categorias_model->ctrMostrarCampo("imagen","id",$_POST["id"]);
            if($imagen_original!="views/img/categorias/default.jpg")
            {
                unlink("../".$imagen_original);
            }
            $origen=$_FILES["imagen"]["tmp_name"];
            $destino='../views/img/categorias/publicacion-'.$_POST["id"].'.jpg';
            move_uploaded_file($origen,$destino);
            $datos["imagen"]='views/img/categorias/publicacion-'.$_POST["id"].'.jpg';
        }
        $categorias_model->ctrEditarRegistros($datos,"id",$_POST["id"]);
        

        echo "<script> 
            window.location='categorias';
        </script>";
    }
    else if(isset($_POST["categorias_eliminar"]))
    {
        $valores_eliminar[]=$_POST["categorias_eliminar"];
        $categorias_model->ctrBorrarRegistrosConImagen("id",$valores_eliminar);

        echo "<script> 
            window.location='categorias';
        </script>";
    }
    else
    {
        $datos["nombre"] = $_POST["nombre"];
        $categorias_model->ctrInsertarRegistros($datos);

        if(isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0)
        {
            $max_id=$categorias_model->ctrConsulta("SELECT MAX(id) as id FROM `categorias`");
            $nuevo_id = "".$max_id[0]["id"]."";
            $origen=$_FILES["imagen"]["tmp_name"];
            $destino='../views/img/categorias/publicacion-'.$nuevo_id.'.jpg';
            move_uploaded_file($origen,$destino);
            $datos["imagen"]='views/img/categorias/publicacion-'.$nuevo_id.'.jpg';
        }
        else
        {
            $max_id=$categorias_model->ctrConsulta("SELECT MAX(id) as id FROM `categorias`");
            $nuevo_id = "".$max_id[0]["id"]."";
            $datos["imagen"] = "views/img/categorias/default.jpg";
        }

        $categorias_model->ctrEditarRegistros($datos,"id",$nuevo_id);

        echo "<script> 
            window.location='categorias';
        </script>";
    }
  
 
}



include_once("views/partials/categorias.view.php");