  <!-- Header Start -->
  <div class="container-fluid page-header" style="margin-bottom: 90px;">
      <div class="container">
          <div class="d-flex flex-column justify-content-center" style="min-height: 200px">
              <h3 class="display-4 text-white text-uppercase">Blog</h3>
              <div class="d-inline-flex text-white">
                  <p class="m-0 text-uppercase"><a class="text-white" href="inicio">Inicio</a></p>
                  <i class="fa fa-angle-double-right pt-1 px-3"></i>
                  <p class="m-0 text-uppercase">Blog</p>
              </div>
          </div>
      </div>
  </div>
  <!-- Header End -->


  <!-- Blog Start -->
  <div class="d-flex justify-content-center">
      <div class="col-10">
          <div class="row">
          </div>
          <div class="row">
              <?php
                if (isset($_POST["busqueda"]) || isset($_GET["id_usuario"]) || isset($_GET["id_categoria"])) {
                ?>
                  <div class="col-lg-12">
                  <?php
                } else {
                    ?>
                      <div class="col-lg-8">
                      <?php
                    }
                        ?>

                      <div class="row pb-3  d-flex justify-content-center">
                          <div class="col-12">
                              <?php
                                if (isset($_GET["id_categoria"])) {
                                ?>
                                  <h1 class="mb-3 text-center">Categoria : <span class="text-primary"><?= $categorias_model->ctrMostrarCampo("nombre", "id", $_GET["id_categoria"]) ?></span></h1>
                              <?php
                                } elseif (isset($_GET["id_usuario"])) {
                                ?>
                                  <h1 class="mb-3 text-center">Profesor : <span class="text-primary"><?= $usuarios_model->ctrMostrarCampo("nombre", "id", $_GET["id_usuario"]) ?> <?= $usuarios_model->ctrMostrarCampo("apellido1", "id", $_GET["id_usuario"]) ?></span></h1>
                              <?php
                                } elseif (isset($_POST["busqueda"])) {
                                ?>
                                  <h1 class="mb-3 text-center">Busqueda : <span class="text-primary"><?= $_POST["busqueda"] ?></span></h1>
                              <?php
                                } else {
                                ?>
                                  <div class="d-flex justify-content-between">
                                      <h1 class="mb-3">Publicaciones :<span class="text-primary"> populares</span></h1>
                                      <?php
                                        if (isset($_SESSION["usuario"]) && $_SESSION["usuario"]["tipo"] == "empleado") {
                                        ?>
                                          <button type="button" class="btn btn-primary" style="height: 50px;" data-toggle="modal" id="insertar" data-target="#formularioInsertarModal">
                                              Crear nueva publicacion
                                          </button>
                                      <?php
                                        }
                                        ?>

                                  </div>
                              <?php
                                }
                                ?>
                          </div>

                          <?php

                            if (sizeof($publicaciones) == 0) {
                            ?>
                              <div class="col-12">
                                  <div class="row d-flex align-items-center">
                                      <div class="col-3">
                                          <img class="img-fluid rounded-circle mx-auto mb-3" src="views/img/publico/no-encontrado.jpg" width="100%" alt="">
                                      </div>
                                      <div class="col-9">
                                          <h3 class="mb-3">Lo sentimos, no tenemos lo que estas buscando</h3>
                                      </div>
                                  </div>
                              </div>
                              <?php
                            } else {

                                if (isset($_POST["busqueda"]) || isset($_GET["id_usuario"]) || isset($_GET["id_categoria"])) {
                                    foreach ($publicaciones as $publicacion) {

                                ?>
                                      <div class="col-lg-4 mb-4">
                                          <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                              <img class="img-fluid" src="<?= $publicacion["imagen"] ?>" style="width: 100%; height:400px; object-fit: cover;" alt="">
                                              <a class="blog-overlay text-decoration-none" href="index.php?ruta=blog-detalle&id=<?= $publicacion["id"] ?>">
                                                  <h5 class="text-white mb-3"><?= $publicacion["titulo"] ?></h5>
                                                  <div class="row">
                                                      <div class="text-primary m-0 col-10"><?= $funciones->ctrFechaHumana($publicacion["fecha"]) ?></div>
                                                      <div class="text-primary m-0 col-2"><i class="fa fa-eye"><span class="ml-1"><?= $publicacion["visualizaciones"] ?></span></i>
                                                      </div>
                                                  </div>

                                              </a>
                                          </div>
                                      </div>
                                  <?php
                                    }
                                } else {
                                    foreach ($publicaciones as $publicacion) {

                                    ?>
                                      <div class="col-lg-6 mb-4">
                                          <div class="blog-item position-relative overflow-hidden rounded mb-2">
                                              <img class="img-fluid" src="<?= $publicacion["imagen"] ?>" style="width: 100%; height:400px; object-fit: cover;" alt="">
                                              <a class="blog-overlay text-decoration-none" href="index.php?ruta=blog-detalle&id=<?= $publicacion["id"] ?>">
                                                  <h5 class="text-white mb-3"><?= $publicacion["titulo"] ?></h5>
                                                  <div class="row">
                                                      <div class="text-primary m-0 col-10"><?= $funciones->ctrFechaHumana($publicacion["fecha"]) ?></div>
                                                      <div class="text-primary m-0 col-2"><i class="fa fa-eye"><span class="ml-1"><?= $publicacion["visualizaciones"] ?></span></i>
                                                      </div>
                                                  </div>

                                              </a>
                                          </div>
                                      </div>
                          <?php
                                    }
                                }
                            }
                            ?>
                      </div>
                      <?php
                        if ($paginacion->numero_paginas > 1) {
                        ?>
                          <div class="col-12">
                              <nav aria-label="Page navigation">
                                  <ul class="pagination pagination-lg justify-content-center mb-0">
                                      <li class="page-item">
                                          <a class="page-link" href='index.php?ruta=blog&pagina=<?= $paginacion->ctrPaginaAnterior($pagina) ?><?php if (isset($filtro)) {echo $filtro;} ?>' aria-label="Previous">
                                              <span aria-hidden="true">&laquo;</span>
                                              <span class="sr-only">Anterior</span>
                                          </a>
                                          <?php
                                            for ($i = 1; $i <= $paginacion->numero_paginas; $i++) {
                                            ?>
                                      <li class="page-item"><a class="page-link" href="index.php?ruta=blog&pagina=<?= $i ?><?php if (isset($filtro)) {echo $filtro;} ?>"><?= $i ?></a></li>
                                  <?php
                                            }
                                    ?>
                                  <li class="page-item">
                                      <a class="page-link" href='index.php?ruta=blog&pagina=<?= $paginacion->ctrPaginaSiguiente(($pagina), $paginacion->numero_paginas) ?><?php if (isset($filtro)) {echo $filtro;} ?>' aria-label="Next">
                                          <span aria-hidden="true">&raquo;</span>
                                          <span class="sr-only">Siguiente</span>
                                      </a>
                                  </li>
                                  </ul>
                              </nav>
                          </div>
                      <?php
                        }
                        ?>
                      </div>

                      <?php
                        if (!isset($_POST["busqueda"]) && !isset($_GET["id_usuario"]) && !isset($_GET["id_categoria"])) {
                        ?>

                          <div class="col-lg-4 mt-5 mt-lg-0">
                              <div class="mb-5">
                                  <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Busqueda</h3>
                                  <!-- Search Form -->
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
                      <?php
                        }
                        ?>

                  </div>
          </div>
      </div>
      <!-- Form Modal -->
      <div class="modal fade" id="formularioInsertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalFormTitle">Datos de la publicacion</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form method="POST" action="blog" id="formularioInsertarPublicacion" enctype="multipart/form-data">
                          <div class="control-group">
                              <label for="formFile" class="form-label">Titulo</label>
                              <input type="text" class="form-control border-1 p-4" id="titulo" name="titulo" placeholder="Titulo" />
                              <p id="titulo_error" class="help-block text-danger"></p>
                          </div>
                          <div class="control-group">
                              <label for="formFile" class="form-label">Descripcion corta</label>
                              <input type="text" class="form-control border-1 p-4" id="descripcion_corta" name="descripcion_corta" placeholder="Descripcion corta ..." />
                              <p id="descripcion_corta_error" class="help-block text-danger"></p>
                          </div>
                          <div class="control-group">
                              <label for="formFile" class="form-label">Descripcion larga</label>
                              <textarea class="form-control" id="descripcion" name="descripcion" rows="7" placeholder="Descripcion larga ..."> </textarea>
                              <script>
									let editor;
										ClassicEditor
										.create( document.querySelector( '#descripcion' ),{
												toolbar: [ 'heading','|','bold', 'italic','|','NumberedList','BulletedList','|','InsertTable','|','mediaEmbed' ,'|','undo','redo'],
												heading: {
													options: [
														{ model: 'paragraph', title: 'Parrafo', class: 'ck-heading_paragraph' },
														{ model: 'heading1', view: 'h1', title: 'Cabecera 1', class: 'ck-heading_heading1' },
														{ model: 'heading2', view: 'h2', title: 'Cabecera 2', class: 'ck-heading_heading2' },
														{ model: 'heading3', view: 'h3', title: 'Cabecera 3', class: 'ck-heading_heading3' },
													]
												},
												language: 'es',
											} )
											.then( newEditor => {
												editor = newEditor;
											} )
											.catch( error => {
												console.error( error );
											} );
								</script>
                              <p id="descripcion_error" class="help-block text-danger"></p>

                          </div>
                          <div class="control-group">
                              <label for="formFile" class="form-label">Categoria</label>

                              <select class="form-control" name="id_categoria" id="id_categoria">
                                  <?php
                                    foreach ($categorias as $categoria) {
                                    ?>
                                      <option value="<?= $categoria["id"] ?>"><?= $categoria["nombre"] ?></option>
                                  <?php
                                    }
                                    ?>
                              </select>
                          </div>
                          <div class="row mt-3">
                              <div class="col">
                                  <label for="formFile" class="form-label">Foto de la publicacion</label>
                                  <input class="form-control" type="file" id="imagen" name="imagen">
                              </div>
                              <div class="col-12">
                                  <p id="imagen_error" class="help-block text-danger"></p>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
                      <button type="button" class="btn btn-primary btn-pill" onclick="validaInsertarPublicacion(editor)">Insertar publicacion</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- Blog End -->