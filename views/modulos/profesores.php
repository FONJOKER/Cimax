<?php

include_once("controllers/PublicacionesController.php");
include_once("controllers/UsuariosController.php");
include_once("controllers/NivelesController.php");


$funciones = new FuncionesController();

$publicaciones_model = new PublicacionesController();
$usuarios_model = new UsuariosController();
$niveles_model = new NivelesController();

// DATOS DE PROFESORES
$profesores = $usuarios_model->ctrConsulta("SELECT * FROM usuarios where tipo not like 'cliente'");


include_once("views/partials/profesores.view.php");