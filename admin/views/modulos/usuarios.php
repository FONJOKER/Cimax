<?php

if(!isset($_SESSION["usuario"]))
{
    echo " <script> window.location='../login';</script>";
}

include_once("controllers/UsuariosController.php");
include_once("controllers/NivelesController.php");

$funciones = new FuncionesController();

$usuarios_model = new UsuariosController();
$niveles_model = new NivelesController();

$usuarios = $usuarios_model->ctrMostrarRegistros();
$niveles = $niveles_model->ctrMostrarRegistros();


if(isset($_POST) && sizeof($_POST)>0)
{

    if(isset($_POST["id"]))
    {
        
        $datos["nombre"] = $_POST["nombre"];
        $datos["apellido1"] = $_POST["apellido1"];
        $datos["apellido2"] = $_POST["apellido2"];
        $datos["dni"] = $_POST["dni"];
        $datos["email"] = $_POST["email"];
        if($_POST["pass"]!="")
        {
            $datos["pass"] = $funciones->ctrCifrar($_POST["pass"]);
        }
        $datos["tipo"] = $_POST["tipo"];
        $datos["id_nivel"] = $_POST["id_nivel"];

        if($_FILES["imagen"]["size"]>0)
        {
            $imagen_original =$usuarios_model->ctrMostrarCampo("imagen","id",$_POST["id"]);
            if($imagen_original!="views/img/usuarios/default.jpg")
            {
                unlink("../".$imagen_original);
            }
            $origen=$_FILES["imagen"]["tmp_name"];
            $destino='../views/img/usuarios/usuario-'.$_POST["id"].'.jpg';
            move_uploaded_file($origen,$destino);
            $datos["imagen"]='views/img/usuarios/usuario-'.$_POST["id"].'.jpg';
        }
        $usuarios_model->ctrEditarRegistros($datos,"id",$_POST["id"]);

        echo "<script> 
            window.location='usuarios';
        </script>";
    }
    else if(isset($_POST["usuario_eliminar"]))
    {
        $valores_eliminar[]=$_POST["usuario_eliminar"];
        $usuarios_model->ctrBorrarRegistrosConImagen("id",$valores_eliminar);

        echo "<script> 
            window.location='usuarios';
        </script>";
    }
    else if(isset($_POST["usuario_baja"]))
    {
        $datos["alta"]=0;
        $usuarios_model->ctrEditarRegistros($datos,"id",$_POST["usuario_baja"]);

        echo "<script> 
            window.location='usuarios';
        </script>";
    }
    else if(isset($_POST["usuario_alta"]))
    {
        $datos["alta"]=1;
        $usuarios_model->ctrEditarRegistros($datos,"id",$_POST["usuario_alta"]);

        echo "<script> 
            window.location='usuarios';
        </script>";
    }
    else
    {
        $datos["nombre"] = $_POST["nombre"];
        $datos["apellido1"] = $_POST["apellido1"];
        $datos["apellido2"] = $_POST["apellido2"];
        $datos["dni"] = $_POST["dni"];
        $datos["email"] = $_POST["email"];
        $datos["pass"] = $funciones->ctrCifrar($_POST["pass"]);
        $datos["tipo"] = $_POST["tipo"];
        $datos["id_nivel"] = $_POST["id_nivel"];
        $datos["imagen"] = "views/img/usuarios/default.jpg";
        $datos["f_creacion"]=date("Y-m-d");
        $datos["f_acceso"]=date("Y-m-d");
        $usuarios_model->ctrInsertarRegistros($datos);

        echo "<script> 
            window.location='usuarios';
        </script>";
    }
  
 
}


include_once("views/partials/usuarios.view.php");