  <!-- Header Start -->
  <div class="container-fluid page-header" style="margin-bottom: 90px;">
      <div class="container">
          <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
              <h3 class="display-4 text-white text-uppercase">Categorias del blog</h3>
              <div class="d-inline-flex text-white">
                  <p class="m-0 text-uppercase"><a class="text-white" href="inicio">Inicio</a></p>
                  <i class="fa fa-angle-double-right pt-1 px-3"></i>
                  <p class="m-0 text-uppercase">Categorias del blog</p>
              </div>
          </div>
      </div>
  </div>
  <!-- Header End -->


  <!-- Blog Start -->
  <div class="d-flex justify-content-center">
      <div class="col-10">
          <div class="row">
              <div class="col-lg-12">
                  <!-- Category Start -->
                  <div class="container-fluid py-4">
                      <div class="container ">
                          <div class="text-center mb-5">
                              <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">BLOG</h5>
                              <h1>Todas nuestras tematicas</h1>
                          </div>
                          <div class="row d-flex justify-content-center">
                              <?php
                                foreach ($categorias as $categoria) {
                                ?>
                                  <div class="col-lg-3 col-md-6 mb-4">
                                      <div class="cat-item position-relative overflow-hidden rounded mb-2">
                                          <img class="img-fluid" src="<?= $categoria["imagen"] ?>" style="width: 255px; height:200px; object-fit: cover;" alt="">
                                          <a class="cat-overlay text-white text-decoration-none" href="index.php?ruta=blog&id_categoria=<?= $categoria["id"] ?>">
                                              <h4 class="text-white font-weight-medium"><?= $categoria["nombre"] ?></h4>
                                              <span><?= count($publicaciones_model->ctrMostrarRegistros("id_categoria", $categoria["id"])) ?> Publicacione/es</span>
                                          </a>
                                      </div>
                                  </div>
                              <?php
                                }
                                ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Blog End -->