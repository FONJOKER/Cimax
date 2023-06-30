<?php

require_once("views/modulos/header.php");

if(isset($_GET["ruta"]))
{
    $rutas = array(	
        "inicio",
        "servicios",
        "blog",
        "categorias",
        "profesores",
        "blog-detalle",
        "servicios",
        "mas-servicios",
        "servicio-detalle",
        "contacto",
        "login",
        "recuperar",
        "registro",
        "logout"
    );

    if(in_array($_GET['ruta'], $rutas))
    {
        require_once("views/modulos/".$_GET["ruta"].".php");
    }
    elseif($_GET["ruta"]=="admin")
    {
        require_once("views/modulos/".$_GET["ruta"].".php");
    }
    else
    {
        require_once("views/modulos/404.php");
    }
    
}
else
{

    require_once("views/modulos/inicio.php");
    
}

require_once("views/modulos/footer.php");



?>