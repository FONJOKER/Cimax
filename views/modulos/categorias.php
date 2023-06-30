<?php

include_once("controllers/CategoriasController.php");
include_once("controllers/PublicacionesController.php");

$funciones = new FuncionesController();

$categorias_model = new CategoriasController();
$publicaciones_model = new PublicacionesController();

// DATOS DE CATEGORIAS
$categorias = $categorias_model->ctrConsulta("SELECT c.id as id, c.nombre as nombre, c.imagen as imagen , COUNT(p.id_categoria) as total  FROM `categorias` as c INNER JOIN `publicaciones` as p on c.id = p.id_categoria group by p.id_categoria order by total desc");


include_once("views/partials/categorias.view.php");