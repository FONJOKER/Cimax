<?php

include("controllers/UsuariosController.php");
$funciones = new FuncionesController; 

// LLAMADA A LA FUNCION DE LGOJN

if(isset($_POST) && sizeof($_POST)>0)
{

    $funciones->ctrCompruebaLogin();

}


include_once("views/partials/login.view.php");