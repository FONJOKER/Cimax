 <!--  Modal de edicion de publicacion -->
 <div class="modal fade" id="formularioEditarPublicaciones<?= $publicacion["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalFormTitle">Datos de la publicacion</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form method="POST" action="blog-detalle" id="formularioEditarPublicacion<?= $publicacion["id"] ?>" enctype="multipart/form-data">
                     <input type="hidden" name="id" value="<?= $publicacion["id"] ?>">
                     <div class="control-group">
                         <label for="formFile" class="form-label">Titulo</label>
                         <input type="text" class="form-control border-1 p-4" id="titulo<?= $publicacion["id"] ?>" name="titulo" value="<?= $publicacion["titulo"] ?>" placeholder="titulo" />
                         <p id="titulo_error<?= $publicacion["id"] ?>" class="help-block text-danger"></p>
                     </div>
                     <div class="control-group">
                         <label for="formFile" class="form-label">Descripcion corta</label>
                         <input type="text" class="form-control border-1 p-4" id="descripcion_corta<?= $publicacion["id"] ?>" name="descripcion_corta" value="<?= $publicacion["descripcion_corta"] ?>" />
                         <p id="descripcion_corta_error<?= $publicacion["id"] ?>" class="help-block text-danger"></p>
                     </div>

                     <div class="control-group">
                         <label for="formFile" class="form-label">Descripcion larga</label>
                         <textarea class="form-control" id="descripcion<?= $publicacion["id"] ?>" name="descripcion" rows="7" placeholder="Descripcion..."> <?= $publicacion["descripcion"] ?> </textarea>
                         <script>
                             let editor;
                             ClassicEditor
                                 .create(document.querySelector('#descripcion<?= $publicacion["id"] ?>'), {
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
                         <p id="descripcion_error<?= $publicacion["id"] ?>" class="help-block text-danger"></p>
                     </div>
                     <div class="control-group">
                         <label for="formFile" class="form-label">Categoria</label>

                         <select class="form-control" name="id_categoria" id="id_categoria<?= $publicacion["id"] ?>">
                             <?php
                                foreach ($categorias as $categoria) {
                                    if ($categoria["id"] == $publicacion["id_categoria"]) {
                                ?>
                                     <option value="<?= $categoria["id"] ?>" selected><?= $categoria["nombre"] ?></option>
                                 <?php
                                    } else {
                                    ?>
                                     <option value="<?= $categoria["id"] ?>"><?= $categoria["nombre"] ?></option>
                             <?php
                                    }
                                }
                                ?>
                         </select>
                     </div>
                     <div class="row mt-3">
                         <div class="col">
                             <label for="formFile" class="form-label">Foto de la publicacion</label>
                             <input class="form-control" type="file" id="imagen<?= $publicacion["id"] ?>" name="imagen">
                         </div>
                         <div class="col d-flex justify-content-center">
                             <img src="<?= $publicacion["imagen"] ?>" width="100px" alt="" srcset="">
                         </div>
                         <div class="col-12">
                             <p id="imagen_error<?= $publicacion["id"] ?>" class="help-block text-danger"></p>
                         </div>
                     </div>

                 </form>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
                 <button type="button" class="btn btn-primary btn-pill" onclick="validaEditarPublicacion(<?= $publicacion['id'] ?>,editor)">Editar publicacion</button>
             </div>
         </div>
     </div>
 </div>

 <!-- Header Start -->
 <div class="container-fluid page-header" style="margin-bottom: 90px;">
     <div class="container">
         <div class="d-flex flex-column justify-content-center" style="min-height: 200px">
             <h3 class="display-4 text-white text-uppercase"><?= $publicacion["titulo"] ?></h3>
             <div class="d-inline-flex text-white">
                 <p class="m-0 text-uppercase"><a class="text-white" href="inicio">Inicio</a></p>
                 <i class="fa fa-angle-double-right pt-1 px-3"></i>
                 <p class="m-0 text-uppercase"><?= $publicacion["titulo"] ?></p>
                                
             </div>
         </div>
     </div>
 </div>
 <!-- Header End -->


 <!-- Detail Start -->
 <div class="d-flex justify-content-center">
     <div class="col-12">
         <div class="row d-flex justify-content-around">
             <div class="col-xl-7 col-lg-6">
                 <div class="pb-3">
                     <div class="mb-5">
                         <h6 class="text-primary mb-3"><?= $funciones->ctrFechaHumana($publicacion["fecha"]) ?></h6>
                         <h1 class="mb-5"><?= $publicacion["titulo"] ?></h1>
                         <div>
                            <span class="d-flex justify-content-end" style="position: absolute; width: 90%;">
                                <?php
                                    if (isset($_SESSION["usuario"]) && $autor["id"] == $_SESSION["usuario"]["id"]) {
                                    ?>
                                    <div class="row mt-3 d-flex justify-content-center">
                                        <button type="button" class="btn btn-info  m-2" data-toggle="modal" data-target="#formularioEditarPublicaciones<?= $publicacion["id"] ?>">
                                            <span class=""><i class="fa fa-pen"></i></span>
                                        </button>
                                        <form action="blog-detalle" method="post" id="formularioEliminarPublicacion<?= $publicacion["id"] ?>">
                                            <input type="hidden" name="publicacion_eliminar" value="<?= $publicacion["id"] ?>">
                                            <span class=" btn  btn-danger m-2" onclick="validaEliminarPublicacion(<?= $publicacion['id'] ?>)"> <i class="   fa fa-trash"></i></span>
                                            <!-- <button class="btn btn-sm btn-danger" onclick="validaEliminar(this.form)" ><span class="mdi mdi-account-remove"></span></button> -->
                                        </form>
                                    </div>
                                <?php
                                    }
                                    ?>
                            </span>
                            <img class="img-fluid rounded w-100 mb-4" src="<?= $publicacion["imagen"] ?>" style="width: 100%; height:auto; object-fit: cover;" alt="Image">
                        </div>
                         <h3><?= $publicacion["descripcion_corta"] ?></h3>
                         <p><?= $publicacion["descripcion"] ?></p>
                     </div>
                 </div>
                <hr>
                <!-- Comentar -->
                 <div class="mb-3">
                     <?php
                        if(!isset($_SESSION["usuario"]))
                        {
                            ?>
                                <div>
                                    <h3 class="d-flex justify-content-between">Quieres dejar un comentario ? <a href="index.php?ruta=login&id_redireccion_publicacion=<?=$publicacion["id"] ?>" class="btn btn-outline-primary"> Comentar</a></h3>
                                </div>
                            <?php
                        }
                        else
                        {
                            ?>
                                <div>
                                    <form action="blog-detalle" method="post" id="formularioInsertarComentario">
                                        <h3 class="d-flex justify-content-between">Nuevo Comentario <button type="button" class="btn btn-outline-primary" onclick="validaInsertarComentario()"> Comentar</button></h3>
                                        <div class="media mb-4">
                                            <img src="<?= $_SESSION["usuario"]["imagen"] ?>" alt="Image" class="img-fluid rounded-circle mr-3 mt-1" style=" max-width:100px; max-height:100px; width: 100px; height:100px; object-fit: cover;">
                                            <div class="media-body">
                                                <input type="hidden" name="id_publicacion_comentar" value="<?=$publicacion["id"] ?>">
                                                <textarea name="comentario" id="comentario" cols="30" rows="4" class="form-control" maxlength="175" placeholder="Dejanos tu comentario..." style="resize:none;" onkeyup ="cuentaLetras()"></textarea>
                                                <p id="comentario_error" class="help-block text-danger"></p>
                                                <p id="comentario_caracteres" class="help-block text-dark"></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <?php
                        }
                     ?>
                 </div>
                 <!-- Comentarios actuales -->
                 <div>
                        <?php
                            if(count($comentarios)==0)
                            {
                                ?>
                                    <div class="alert alert-dark p-5" role="alert">
                                    <b>No hay nigun comentario !!</b> Se el primero en comentar
                                    </div>
                                <?php

                            }
                            else
                            {
                                if(count($comentarios)==1)
                                {
                                    ?>
                                        <h5><i>1 Comentario</i></h5>
                                        <hr>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                        <h5><i><?=count($comentarios)?> Comentarios</i></h5>
                                        <hr>
                                    <?php
                                }
                                foreach($comentarios as $comentario)
                                {
                                    ?>

                                        <div class="media mb-4 p-3 border border-secondary rounded ">
                                            <img src="<?= $usuarios_model->ctrMostrarCampo("imagen","id",$comentario["id_usuario"])?>" style=" max-width:100px; max-height:100px; width: 100px; height:100px; object-fit: cover;" class="img-fluid rounded-circle mr-3 mt-1"
                                                style="width: 100px;">
                                            <div class="media-body">
                                                <h6>
                                                    <?= $usuarios_model->ctrMostrarCampo("nombre","id",$comentario["id_usuario"])?> 
                                                    <?= $usuarios_model->ctrMostrarCampo("apellido1","id",$comentario["id_usuario"])?> 
                                                    <?= $usuarios_model->ctrMostrarCampo("apellido2","id",$comentario["id_usuario"])?>
                                                     <small><i><?=$funciones->ctrFechaHumana($comentario["fecha"])?></i></small></h6>
                                                <textarea name="comentario" id="comentario<?=$comentario['id'] ?>" cols="30" rows="4" class="form-control" readonly maxlength="175" placeholder="Dejanos tu comentario..." style="resize:none;" onkeyup ="cuentaLetrasEditar(<?=$comentario['id'] ?>)"> <?=$comentario["comentario"]?></textarea>
                                                <p id="comentario_error<?=$comentario['id'] ?>" class="help-block text-danger"></p>
                                                <?php
                                                    if(isset($_SESSION["usuario"]) && (($comentario["id_usuario"]==$_SESSION["usuario"]["id"] || $publicacion["id_usuario"] == $_SESSION["usuario"]["id"]) || $_SESSION["usuario"]["tipo"]=="administrador"))
                                                    {
                                                        ?>
                                                            <form action="blog-detalle" method="post" id="formularioEliminarComentario<?=$comentario['id'] ?>">
                                                                <input type="hidden" name="id_comentario_borrar" value="<?=$comentario["id"] ?>">
                                                                <input type="hidden" name="id_publicacion" value="<?=$publicacion["id"] ?>">
                                                                <button class="btn btn-sm btn btn-outline-info" onclick="editarComentario(<?=$comentario['id'] ?>)">Editar comentario</button>
                                                                <button type="button" class="btn btn-sm btn btn-outline-danger" onclick="validaEliminarComentario(<?=$comentario['id'] ?>)">Borrar comentario</button>
                                                            </form>

                                                            <form action="blog-detalle" method="post" id="formularioEditarComentario<?=$comentario['id'] ?>" style="display: none;">
                                                                <input type="hidden" name="id_comentario_editar" value="<?=$comentario["id"] ?>">
                                                                <input type="hidden" name="id_publicacion" value="<?=$publicacion["id"] ?>">
                                                                <input type="hidden" name="comentario" id="nuevo_comentario<?=$comentario["id"] ?>" value="">
                                                                <button class="btn btn-sm btn btn-outline-success" onclick="validaEditarComentario(<?=$comentario['id'] ?>)">Editar</button>
                                                                <button type="button" class="btn btn-sm btn btn-outline-danger" onclick="cancelarEdicion(<?=$comentario['id'] ?>,'<?=$comentario['comentario']?>')">Cancelar</button>
                                                            </form>
                                                        <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    <?php
                                }
                            }
                        ?>
                 </div>
             </div>

             <div class="col-xl-3 col-lg-4 mt-5 mt-lg-0">
                 <!-- Author Bio -->
                 <div class="d-flex flex-column text-center bg-dark rounded mb-5 py-5 px-4">
                     <h3 class="text-white mb-3">Autor :</h3>
                     <img src="<?= $autor["imagen"] ?>" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px; height:100px; object-fit: cover;">
                     <h3 class="text-primary mb-3"><?= $autor["nombre"] ?> <?= $autor["apellido2"] ?></h3>
                     <div class="text-center">
                         <p class="text-white m-0">Correo: <span class="text-primary mb-3"><?= $autor["email"] ?> </span></p>
                         <p class="text-white m-0">Nivel : <span class="text-primary mb-3"><?= $niveles_model->ctrMostrarCampo("nombre", "id", $autor["id_nivel"]) ?> </span></p>
                     </div>

                 </div>


                 <!-- Search Form -->
                 <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Busqueda</h3>
                 <div class="mb-5">
                     <form action="blog" method="post">
                         <div class="input-group">
                             <input type="text" name="busqueda" class="form-control form-control-lg" placeholder="Buscar...">
                             <div class="input-group-append">
                                 <button class="input-group-text bg-transparent text-primary" type="submit"><i class="fa fa-search"></i></button>
                             </div>
                         </div>
                     </form>
                 </div>

                 <!-- Category List -->
                 <div class="mb-5">
                     <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categorias</h3>
                     <ul class="list-group list-group-flush">
                         <?php
                            foreach ($categorias as $categoria) {
                            ?>
                             <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                 <a href="index.php?ruta=blog&id_categoria=<?= $categoria["id"] ?>" class="text-decoration-none h6 m-0"><?= $categoria["nombre"] ?></a>
                                 <span class="badge badge-primary badge-pill"><?= count($publicaciones_model->ctrMostrarRegistros("id_categoria", $categoria["id"])) ?></span>
                             </li>
                         <?php
                            }
                            ?>
                     </ul>
                 </div>

                 <!-- Recent Post -->
                 <div class="mb-5">
                     <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Publicaciones Recientes</h3>
                     <?php

                        foreach ($publicaciones_recientes  as $publicacion) {
                        ?>
                         <a class="d-flex align-items-center text-decoration-none mb-3" href="index.php?ruta=blog-detalle&id=<?= $publicacion["id"] ?>">
                             <img class="img-fluid rounded" src="<?= $publicacion["imagen"] ?>" style="width: 80px; height:80px; object-fit: cover;" alt="">
                             <div class="pl-3">
                                 <h6 class="m-1"><?= $publicacion["titulo"] ?></h6>
                                 <small><?= $funciones->ctrFechaHumana($publicacion["fecha"]) ?></small>
                             </div>
                         </a>
                     <?php
                        }

                        ?>
                 </div>

                 <!-- Tag Cloud -->
                 <div class="mb-5">
                     <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Profesores</h3>
                     <div class="d-flex flex-wrap m-n1">
                         <?php
                            foreach ($profesores  as $profesor) {
                            ?>
                             <a href="index.php?ruta=blog&id_usuario=<?= $profesor["id"] ?>" class="btn btn-outline-primary m-1"><?= $profesor["nombre"] ?> <?= $profesor["apellido1"] ?></a>
                         <?php
                            }
                            ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Detail End -->