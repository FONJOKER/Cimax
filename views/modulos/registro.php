<?php
include("controllers/UsuariosController.php");

$funciones = new FuncionesController; 

if(isset($_POST) && sizeof($_POST)>0)
{
   
    $funciones->ctrCompruebaRegistro();
 
}

include_once("views/partials/registro.view.php");