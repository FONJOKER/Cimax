<?php

include_once("controllers/ServiciosController.php");
include_once("controllers/CategoriasController.php");
include_once("controllers/NivelesController.php");

$funciones = new FuncionesController();
$categorias_model = new CategoriasController();
$servicios_model = new ServiciosController();
$niveles_model = new NivelesController();

// DATOS DE SERVICIOS EN ROCODROMO DE ESTE MES
$servicios_rocodromo = $servicios_model->ctrConsulta("SELECT * FROM servicios WHERE id_categoria like 4 and month(f_inicio) = month(now()) order by f_inicio ASC limit 6");

// PROXIMOS SERVICIOS CUYA FECHA DE INICIO SEA MAYOR A LA ACTUAL
$servicios_exterior = $servicios_model->ctrConsulta("SELECT * FROM servicios where id_categoria not like '4' and f_inicio > now() order by f_inicio ASC limit 6");


include_once("views/partials/servicios.view.php");