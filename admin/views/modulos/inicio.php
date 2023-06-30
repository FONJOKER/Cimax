<?php

if(!isset($_SESSION["usuario"]))
{
    echo " <script> window.location='../login';</script>";
}

include_once("controllers/PublicacionesController.php");
include_once("controllers/ServiciosController.php");

$funciones = new FuncionesController();

$publicaciones_model = new PublicacionesController();
$servicios_model = new ServiciosController();

$publicaciones = $publicaciones_model->ctrConsulta("SELECT * FROM publicaciones order by visualizaciones DESC limit 3");
$publicacion_destacada = $publicaciones_model->ctrMostrarRegistro("id",4);

$servicios = $publicaciones_model->ctrConsulta("SELECT * FROM servicios where id_categoria not like '4' and f_inicio > now() order by f_inicio ASC limit 3");


include_once("views/partials/inicio.view.php");