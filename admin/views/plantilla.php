<?php


require_once("views/modulos/header.php");

if(isset($_GET["ruta"]))
{
    $rutas = array(	
        "inicio",
        "login",
        "logout",
        "editar-perfil",
        "usuarios",
        "servicios",
        "categorias",
        "niveles",
        "notificaciones",
        "publicaciones",
        "comentarios",
        "estilos-privados",
        "estilos-publicos",
    );

    if(in_array($_GET['ruta'], $rutas))
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