<?php

include_once("controllers/PublicacionesController.php");
include_once("controllers/ServiciosController.php");
include_once("controllers/NivelesController.php");
include_once("controllers/CategoriasController.php");
include_once("controllers/UsuariosController.php");
include_once("controllers/NotificacionesController.php");
include_once("controllers/UsuarioRecibeNotificacionesController.php");
include_once("controllers/UsuariosInscribeServiciosController.php");
include_once("controllers/UsuariosSeEncargaServiciosController.php");
include_once("controllers/UsuarioComentaPublicacionesController.php");

// Controladores generales
$funciones = new FuncionesController();
$usuarios_model = new UsuariosController();
$niveles_model = new NivelesController();
$notificaciones_model = new NotificacionesController();
$usuario_recibe_notificaciones_model = new UsuarioRecibeNotificacionesController();
$usuarios_inscribe_servicios_controller = new UsuariosInscribeServiciosController();
$usuarios_se_encarga_servicios_model = new UsuariosSeEncargaServiciosController();
$publicaciones_model = new PublicacionesController();
$servicios_model = new ServiciosController();
$usuario_comenta_publicaciones_model = new UsuarioComentaPublicacionesController();

if(!isset($_SESSION["usuario"]))
{
    // Controladores vista publica
    $categorias_model = new CategoriasController();

    // DATOS DE LAS PUBLICACIONES ORDENADAS POR NUMERO DE VISUALIZACIONES
    $publicaciones = $publicaciones_model->ctrConsulta("SELECT * FROM publicaciones order by visualizaciones DESC limit 3");

    // PUBLICACION DESTACADA
    $publicacion_destacada = $publicaciones_model->ctrMostrarRegistro("id",4);

    // SERVICIOS DE FUERA DEL ROCODROMO CUYA FECHA DE INICIO ES SUPERIOR A LA ACTUAL
    $total_servicios = count( $publicaciones_model->ctrConsulta("SELECT * FROM servicios where id_categoria not like '4' and f_inicio > now() order by f_inicio ASC"));
    $servicios = $publicaciones_model->ctrConsulta("SELECT * FROM servicios where id_categoria not like '4' and f_inicio > now() order by f_inicio ASC limit 3");

    // DATOS DE CATEGORIAS
    $total_categorias = count( $categorias_model->ctrConsulta("SELECT c.id as id, c.nombre as nombre, c.imagen as imagen , COUNT(p.id_categoria) as total  FROM `categorias` as c INNER JOIN `publicaciones` as p on c.id = p.id_categoria group by p.id_categoria order by total desc"));
    $categorias = $categorias_model->ctrConsulta("SELECT c.id as id, c.nombre as nombre, c.imagen as imagen , COUNT(p.id_categoria) as total  FROM `categorias` as c INNER JOIN `publicaciones` as p on c.id = p.id_categoria group by p.id_categoria order by total desc limit 4");

    // DATOS DE PROFESORES
    $total_profesores = count($usuarios_model->ctrConsulta("SELECT * FROM usuarios where tipo not like 'cliente'"));
    $profesores = $usuarios_model->ctrConsulta("SELECT * FROM usuarios where tipo not like 'cliente' limit 4");

    // COMENTARIOS
    $comentarios = $usuario_comenta_publicaciones_model->ctrConsulta("SELECT * FROM usuarios_comenta_publicaciones ORDER BY FECHA DESC limit 5");
    include_once("views/partials/inicio.view.php");
}
else
{

    // Controladores extra vista privada
    $notificaciones_pendientes = $usuario_recibe_notificaciones_model->ctrConsulta("SELECT * FROM usuario_recibe_notificaciones where id_usuario like '".$_SESSION["usuario"]["id"]."'  and visto like 0 order by fecha_creacion DESC");
    $notificaciones_vistas = $usuario_recibe_notificaciones_model->ctrConsulta("SELECT * FROM usuario_recibe_notificaciones where id_usuario like '".$_SESSION["usuario"]["id"]."'  and visto like 1 order by fecha_creacion DESC");

    // Estadisticas empleado
    if($_SESSION["usuario"]["tipo"]!="cliente")
    {
        $total_publicaciones = count($publicaciones_model->ctrMostrarRegistros("id_usuario",$_SESSION["usuario"]["id"]));
        $total_servicios_actuales = count($usuarios_se_encarga_servicios_model->ctrConsulta("SELECT * FROM `usuarios_se_encarga_servicios` WHERE id_usuario LIKE '".$_SESSION["usuario"]["id"]."'  and id_servicio in (SELECT id FROM servicios WHERE (id_categoria not like 4 and f_inicio > now()) or (id_categoria  like 4 and f_fin >= now()))"));
        $total_servicios_anteriores = count($usuarios_se_encarga_servicios_model->ctrConsulta("SELECT * FROM `usuarios_se_encarga_servicios` WHERE id_usuario LIKE '".$_SESSION["usuario"]["id"]."'  and id_servicio in (SELECT id FROM servicios WHERE (id_categoria not like 4 and f_fin <= now()) or (id_categoria  like 4 and f_fin < now())) "));
    }
    else
    {
        $total_servicios_actuales = count($usuarios_se_encarga_servicios_model->ctrConsulta("SELECT * FROM `usuarios_inscribe_servicios` WHERE id_usuario LIKE '".$_SESSION["usuario"]["id"]."'  and id_servicio in (SELECT id FROM servicios WHERE (id_categoria not like 4 and f_inicio > now()) or (id_categoria  like 4 and f_fin >= now()))"));
        $total_servicios_anteriores = count($usuarios_se_encarga_servicios_model->ctrConsulta("SELECT * FROM `usuarios_inscribe_servicios` WHERE id_usuario LIKE '".$_SESSION["usuario"]["id"]."'  and id_servicio in (SELECT id FROM servicios WHERE (id_categoria not like 4 and f_fin <= now()) or (id_categoria  like 4 and f_fin < now()))  ")); 
    }
    if(isset($_POST) && sizeof($_POST)>0)
    {
        // Mandar notificaciones a los alumnos
        if(isset($_POST["id_servicio_notificar"]) && isset($_POST["mensaje"]))
        {
            $datos["mensaje"] = $_POST["mensaje"];
            $notificaciones_model->ctrInsertarRegistros($datos);
            $usuarios_notificar = $usuarios_inscribe_servicios_controller->ctrConsulta("SELECT * FROM `usuarios_inscribe_servicios` where id_servicio like '".$_POST["id_servicio_notificar"]."'");

            $max_id=$notificaciones_model->ctrConsulta("SELECT MAX(id) as id FROM `notificaciones`");
            $nuevo_id = "".$max_id[0]["id"]."";

            foreach($usuarios_notificar as $usuario)
            {
                $datos= array();

                $datos["id_usuario"] = $usuario["id_usuario"];
                $datos["id_notificacion"] = $nuevo_id;
                $datos["fecha"] = date("Y-m-d");
                $datos["visto"] = 0;
                $usuario_recibe_notificaciones_model->ctrInsertarRegistros($datos);
            }

            echo "<script> 
                Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Usuarios notificados',
                showConfirmButton: false,
                timer: 1500
                });
                </script>";
        }
        else
        {
            // EDITAR PERFIL

            $datos["nombre"] = $_POST["nombre"];
            $datos["apellido1"] = $_POST["apellido1"];
            $datos["apellido2"] = $_POST["apellido2"];
            $datos["dni"] = $_POST["dni"];
            $datos["email"] = $_POST["email"];
            if($_POST["pass"]!="")
            {
                $datos["pass"] = $funciones->ctrCifrar($_POST["pass"]);
            }

            if($_FILES["imagen"]["size"]>0)
            {
                $imagen_original =$usuarios_model->ctrMostrarCampo("imagen","id",$_SESSION["usuario"]["id"]);
                if($imagen_original!="views/img/usuarios/default.jpg")
                {
                    unlink($imagen_original);
                }
                $origen=$_FILES["imagen"]["tmp_name"];
                $destino='views/img/usuarios/usuario-'.$_SESSION["usuario"]["id"].'.jpg';
                move_uploaded_file($origen,$destino);
                $datos["imagen"]='views/img/usuarios/usuario-'.$_SESSION["usuario"]["id"].'.jpg';
            }
            $usuarios_model->ctrEditarRegistros($datos,"id",$_SESSION["usuario"]["id"]);
            $usuario = $usuarios_model->ctrMostrarRegistro("id",$_SESSION["usuario"]["id"]);
            $_SESSION["usuario"]=$usuario;

            echo "<script> 
                window.location='inicio';
            </script>";
        }

    }

    // Eliminar notificaciones
    if(isset($_GET["eliminar"]))
    {
        $valores_eliminar[]=$_SESSION["usuario"]["id"];
        $usuario_recibe_notificaciones_model->ctrBorrarRegistros("id_usuario",$valores_eliminar);
        echo "<script> 
                window.location='inicio';
            </script>";
    }
    include_once("views/partials/inicio-publico.view.php");
}
