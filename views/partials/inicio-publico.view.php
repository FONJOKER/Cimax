 <!-- Header Start -->
 <div class="container-fluid page-header">
     <div class="container" id="container">
         <div class="d-flex flex-column justify-content-center" style="min-height: 200px">
             <h3 class="display-4 text-white text-uppercase"><?= $_SESSION["usuario"]["nombre"] ?> <?= $_SESSION["usuario"]["apellido1"] ?></h3>
             <div class="d-inline-flex text-white">
                 <p class="m-0 text-uppercase"><a class="text-white" href="inicio">Inicio</a></p>
                 <i class="fa fa-angle-double-right pt-1 px-3"></i>
                 <p class="m-0 text-uppercase">Mi Perfil</p>
             </div>
         </div>
     </div>
 </div>
 <!-- Header End -->

 <!-- Contact Start -->
 <div class="container-fluid">
     <div class=" p-5">
         <div class="row d-flex justify-content-between">
             <!-- CONTENEDOR NAVEGACION -->
             <div class="col-lg-4 col-md-12 col-sm-12" id="menu">
                 <!-- Tarjeta del usuario con menu -->
                 <div class="col-12">
                     <div class="card mb-3 p-3">
                         <div class="text-right">
                             <a class="btn btn-primary " onclick="imprimir('tarjeta-usuario')"> <i class="fa fa-print"></i></a>
                         </div>
                         <div class="row ">
                             <div class="col-md-12 d-flex justify-content-center">
                                 <img src="<?= $_SESSION["usuario"]["imagen"] ?>" style=" max-width:20vw; max-height:20vw; width: 15vw; height:15vw; object-fit: cover;" class=" rounded-circle horizontal-img" alt="Image">
                             </div>
                             <div class="col-md-12 p-3">
                                 <div class="card-body">
                                     <h3 class="text-center"> <?= $_SESSION["usuario"]["nombre"] ?> <?= $_SESSION["usuario"]["apellido1"] ?> <?= $_SESSION["usuario"]["apellido2"] ?> </h3>
                                     <p class="text-center"><?= $_SESSION["usuario"]["email"] ?></p>
                                     <p class="text-center text-primary"><?= strtoupper($niveles_model->ctrMostrarCampo("nombre", "id", $_SESSION["usuario"]["id_nivel"])) ?></p>
                                     <hr>
                                     <nav class="navbar navbar-expand-xl bg-light navbar-light py-3 py-lg-0 px-0 ">
                                         <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarCollapse">
                                             <div class="navbar-nav py-0">
                                                 <a href="#" class="nav-item nav-link text-center  position-relative " id="botonNotificaciones" onclick="verNotificaciones()">
                                                     <i class="fa fa-bell">
                                                     </i>
                                                     <?php
                                                        if (count($notificaciones_pendientes) > 0) {
                                                        ?>
                                                         <span id="cuenta_notificaciones" class="position-absolute top-100 badge rounded-pill bg-primary text-light" style="padding: 5px 10px; top:10%; left:40%"><?= count($notificaciones_pendientes) ?></span>
                                                     <?php
                                                        }
                                                        ?>
                                                 </a>
                                                 <a href="#" class="nav-item nav-link" id="botonCalendario" onclick="verCalendario()">Calendario</a>
                                                 <a href="#" class="nav-item nav-link " id="botonEditar" onclick="verEditarPerfil()">Editar Perfil</a>
                                             </div>
                                         </div>
                                     </nav>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Estadisticas usuario -->
                 <div class="col-12">
                     <div class="card border-success mb-3">
                         <div class="card-header">Estadisticas</div>
                         <div class="card-body ">
                             <?php
                                if ($_SESSION["usuario"]["tipo"] != "cliente") {
                                ?>
                                 <p>Servicios actuales : <span class="text-success"><?= $total_servicios_actuales ?></span></p>
                                 <p>Servicios anteriores : <span class="text-success"><?= $total_servicios_anteriores ?></span></p>
                                 <p>Publicaciones : <span class="text-success"><?= $total_publicaciones ?></span></p>
                             <?php
                                } else {
                                ?>
                                 <p>Servicios actuales : <span class="text-success"><?= $total_servicios_actuales ?></span></p>
                                 <p>Servicios anteriores : <span class="text-success"><?= $total_servicios_anteriores ?></span></p>
                             <?php
                                }
                                ?>
                             <p>Creacion del perfil : <span class="text-success"> <?= $funciones->ctrFechaHumana($_SESSION["usuario"]["f_creacion"]) ?> </span></p>
                             <p>Ultimo acceso : <span class="text-success"> <?= $funciones->ctrFechaHumana($_SESSION["usuario"]["f_acceso"]) ?> </span></p>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- CONTENEDOR CONTENIDO  -->
             <div class="col-lg-8 col-md-12">
                 <!-- Notificaciones pendieentes -->
                 <div class="row justify-content-center d-none mb-3" id="notificacionesPendientes">
                     <div class="col-11">
                         <h1 class="d-flex justify-content-between">Pendientes
                             <span>
                                 <button class="btn btn-primary" onclick="verNotificacionesVistas()">Ver notificaciones anteriores</button>
                                 <a class="btn btn-danger" href="index.php?ruta=inicio&eliminar=todos"><i class="fa fa-trash"></i></a>
                                 <!-- <button class="btn btn-danger" onclick='eliminarNotificacion("todos")'><i class="fa fa-trash"></i></button> -->
                             </span>
                         </h1>
                         <?php
                            if (sizeof($notificaciones_pendientes) > 0) {
                                foreach ($notificaciones_pendientes as $notificacion) {
                            ?>
                                 <div class="alert alert-success" role="alert" id="notificacion<?= $notificacion["id"] ?>">
                                     <span class="btn" style="position: absolute; left : 95%; top: -5%;" onclick='eliminarNotificacion(<?= $notificacion["id"] ?>)'><b>x</b></span>
                                     <p><?= $notificaciones_model->ctrMostrarCampo("mensaje", "id", $notificacion["id_notificacion"]) ?></p>
                                 </div>
                             <?php
                                }
                            } else {
                                ?>
                             <div class="alert alert-warning" role="alert">
                                 <p>No tienes notificaciones nuevas por ver</p>
                             </div>
                         <?php
                            }
                            ?>
                     </div>
                 </div>

                 <!-- Notificaciones vistas -->
                 <div class="row justify-content-center d-none mb-3" id="notificacionesVistas">
                     <div class="col-lg-11 col-md-12">
                         <h1>Vistas</h1>
                         <?php
                            if (sizeof($notificaciones_vistas) > 0) {
                                foreach ($notificaciones_vistas as $notificacion) {
                            ?>
                                 <div class="alert alert-dark" role="alert" id="notificacion<?= $notificacion["id"] ?>">
                                     <span class="btn" style="position: absolute; left : 95%; top: -5%;" onclick='eliminarNotificacion(<?= $notificacion["id"] ?>)'><b>x</b></span>
                                     <p><?= $notificaciones_model->ctrMostrarCampo("mensaje", "id", $notificacion["id_notificacion"]) ?></p>
                                 </div>
                             <?php
                                }
                            } else {
                                ?>
                             <div class="alert alert-warning" role="alert">
                                 <p>No tienes notificaciones anteriores por ver</p>
                             </div>
                         <?php
                            }
                            ?>
                     </div>
                 </div>

                 <!-- Formulario de edicion de perfil -->
                 <div class="row justify-content-center d-none mb-3" id="formEditar">
                     <div class="col-lg-11 col-md-12">
                         <div class="contact-form bg-secondary rounded p-3">
                             <div id="success"></div>
                             <form method="POST" action="inicio" id="formularioEditarPerfil" enctype="multipart/form-data">
                                 <div class="row">
                                     <div class="control-group col">
                                         <label for="formFile" class="form-label">Nombre</label>
                                         <input type="text" class="form-control border-0 p-4" id="nombre" name="nombre" placeholder="Tu nombre" value="<?= $_SESSION["usuario"]["nombre"] ?>" />
                                         <p id="nombre_error" class="help-block text-danger"></p>
                                     </div>
                                     <div class="control-group col">
                                         <label for="formFile" class="form-label">Primer apellido</label>
                                         <input type="text" class="form-control border-0 p-4" id="apellido1" name="apellido1" placeholder="Tu apellido" value="<?= $_SESSION["usuario"]["apellido1"] ?>" />
                                         <p id="apellido1_error" class="help-block text-danger"></p>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="control-group col">
                                         <label for="formFile" class="form-label">Segundo apellido</label>
                                         <input type="text" class="form-control border-0 p-4" id="apellido2" name="apellido2" placeholder="Tu segundo apellido" value="<?= $_SESSION["usuario"]["apellido2"] ?>" />
                                         <p id="apellido2_error" class="help-block text-danger"></p>
                                     </div>
                                     <div class="control-group col">
                                         <label for="formFile" class="form-label">DNI</label>
                                         <input type="text" class="form-control border-0 p-4" id="dni" name="dni" placeholder="Tu DNI/NIE (Y2757654Z o 2757654Z)" value="<?= $_SESSION["usuario"]["dni"] ?>" />
                                         <p id="dni_error" class="help-block text-danger"></p>
                                     </div>
                                 </div>
                                 <div class="control-group">
                                     <label for="formFile" class="form-label">Correo electronico</label>
                                     <input type="email" class="form-control border-0 p-4" id="email" name="email" placeholder="Correo electronico" value="<?= $_SESSION["usuario"]["email"] ?>" />
                                     <p id="email_error" class="help-block text-danger"></p>
                                 </div>
                                 <div class="row">
                                     <div class="control-group col">
                                         <label for="formFile" class="form-label">Contraseña</label>
                                         <input type="password" class="form-control border-0 p-4" id="pass" name="pass" placeholder="Password" />
                                         <p id="pass_error" class="help-block text-danger"></p>
                                     </div>

                                     <div class="control-group col">
                                         <label for="formFile" class="form-label">Confirmar contraseña</label>
                                         <input type="password" class="form-control border-0 p-4" id="pass2" name="pass2" placeholder="Confirma password" />
                                         <p id="pass2_error" class="help-block text-danger"></p>
                                     </div>
                                 </div>
                                 <div class="control-group">
                                     <label for="formFile" class="form-label">Foto de perfil</label>
                                     <input class="form-control border-0 pt-2 pb-2" type="file" id="imagen" name="imagen">
                                     <p id="imagen_error" class="help-block text-danger"></p>
                                 </div>
                                 <div class="text-center">
                                     <button class="btn btn-primary  py-2 px-5" type="button" onclick='validaEditarPerfil(<?= $_SESSION["usuario"]["id"] ?>)'>Actualizar perfil</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>

                 <!-- Calendario -->
                 <div class="row justify-content-center p-3">
                     <div class="col-lg-11 col-md-12" style="height: 100%;" id="calendario"></div>
                 </div>
             </div>
         </div>
     </div>
 </div>





 <!-- Modal detalle servicio-->
 <div class="modal fade" id="modal-servicio" tabindex="-1" aria-labelledby="modal-evento-titulo" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content" style="border-radius: 25px; padding:10px;">
             <div class="modal-header">
                 <h5 class="modal-title" style="width:100%; text-align: center;" id="modal-evento-titulo">Título del evento</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">

                 <img id="modal-evento-imagen" class="img-fluid mb-3" style="border-radius: 25px; padding:10px; width: 100%; height:450px; object-fit: cover;" src="" width="100%" alt="Imagen del evento">
                 <div class="d-flex justify-content-between mb-3">
                     <p id="modal-evento-contenido" style=" padding:10px;">Contenido del evento</p>
                 </div>
                 <div class="modal-footer d-flex justify-content-around">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                     <a id="modal-evento-enlace" href="http://" class="btn btn-primary">Ver detalles</a>
                     <?php
                        if ($_SESSION["usuario"]["tipo"] == "empleado") {
                        ?>
                         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalNotificaciones">
                             Mandar notificaciones
                         </button>
                     <?php
                        }
                        ?>

                 </div>
             </div>
         </div>
     </div>

     <!-- Model notificar alumnnos -->
     <!-- Button trigger modal -->


     <!-- Modal -->
     <div class="modal fade" id="modalNotificaciones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered ">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Notificar alumnos</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <form action="inicio" method="POST" id="mandarNotificacion">
                     <div class="modal-body">
                         <input class="form-control" type="hidden" name="id_servicio_notificar" id="id_servicio_notificar">
                         <textarea class="form-control" name="mensaje" id="mensaje" cols="30" rows="3"></textarea>
                         <script>
                             let editor;
                             ClassicEditor
                                 .create(document.querySelector('#mensaje'), {
                                     toolbar: ['heading', '|', 'bold', 'italic', '|', 'NumberedList', 'BulletedList', '|', 'InsertTable', '|', 'mediaEmbed', '|', 'undo', 'redo'],
                                     heading: {
                                         options: [{
                                                 model: 'paragraph',
                                                 title: 'Parrafo',
                                                 class: 'ck-heading_paragraph'
                                             },
                                             {
                                                 model: 'heading1',
                                                 view: 'h1',
                                                 title: 'Cabecera 1',
                                                 class: 'ck-heading_heading1'
                                             },
                                             {
                                                 model: 'heading2',
                                                 view: 'h2',
                                                 title: 'Cabecera 2',
                                                 class: 'ck-heading_heading2'
                                             },
                                             {
                                                 model: 'heading3',
                                                 view: 'h3',
                                                 title: 'Cabecera 3',
                                                 class: 'ck-heading_heading3'
                                             },
                                         ]
                                     },
                                     language: 'es',
                                 })
                                 .then(newEditor => {
                                     editor = newEditor;
                                 })
                                 .catch(error => {
                                     console.error(error);
                                 });
                         </script>
                         <p id="mensaje_error" class="help-block text-danger"></p>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                         <button type="button" class="btn btn-primary" onclick="validaMandarNotificacion(editor)">Notificar</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>

 </div>

 <!-- Tarjeta del usuario a imprimir-->

 <div class="d-none">

     <div class="col-12 text-center" id="tarjeta-usuario">
         <div class="card mb-3 p-3" style="width: 500px; height: auto;">
             <div class="row">
                 <div class="col-md-12 d-flex justify-content-center">
                     <img src="<?= $_SESSION["usuario"]["imagen"] ?>" style=" max-width:20vw; max-height:20vw; width: 15vw; height:15vw; object-fit: cover;" class=" rounded-circle horizontal-img" alt="Image">
                 </div>
                 <div class="col-md-12 p-3">
                     <div class="card-body">
                         <h3 class="text-center"> <?= $_SESSION["usuario"]["nombre"] ?> <?= $_SESSION["usuario"]["apellido1"] ?> <?= $_SESSION["usuario"]["apellido2"] ?> </h3>
                         <p class="text-center"><?= $_SESSION["usuario"]["email"] ?></p>
                         <p class="text-center text-primary"><?= strtoupper($niveles_model->ctrMostrarCampo("nombre", "id", $_SESSION["usuario"]["id_nivel"])) ?></p>
                         <p class="text-center">Creacion del perfil : <span class="text-success"> <?= $funciones->ctrFechaHumana($_SESSION["usuario"]["f_creacion"]) ?> </span></p>
                         <hr>
                         <div class="text-center pb-3">
                             <img src="views/img/publico/Codigo-QR.png" style="width: 40%;" alt="" srcset="">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>




 <!-- Contact End -->