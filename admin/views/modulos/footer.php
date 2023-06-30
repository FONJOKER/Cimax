<?php
include_once("controllers/CategoriasController.php");

$categorias_model = new CategoriasController();

$categorias = $categorias_model->ctrMostrarRegistros();

include_once("views/partials/footer.view.php");