<?php

include_once("controllers/ServiciosController.php");
include_once("controllers/CategoriasController.php");
include_once("controllers/NivelesController.php");

$funciones = new FuncionesController();
$categorias_model = new CategoriasController();
$servicios_model = new ServiciosController();
$niveles_model = new NivelesController();


// PROXIMOS SERVICIOS CUYA FECHA DE INICIO SEA MAYOR A LA ACTUAL
$consulta = "SELECT * FROM servicios where id_categoria not like '4' order by f_inicio DESC";
$servicios_exterior = $servicios_model->ctrConsulta($consulta);

if(isset($_GET["pagina"]))
{
    $pagina=$_GET["pagina"];

}
else
{
    $pagina=1;
}

$paginacion = new PaginacionController(8,$servicios_exterior); 
$servicios_exterior = $servicios_model->ctrMostrarRegistrosPaginados($pagina-1,$paginacion->registros_por_pagina,$consulta); 


include_once("views/partials/mas-servicios.view.php");