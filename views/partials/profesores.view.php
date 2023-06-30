  <!-- Header Start -->
  <div class="container-fluid page-header" style="margin-bottom: 90px;">
      <div class="container">
          <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
              <h3 class="display-4 text-white text-uppercase">Profesores</h3>
              <div class="d-inline-flex text-white">
                  <p class="m-0 text-uppercase"><a class="text-white" href="inicio">Inicio</a></p>
                  <i class="fa fa-angle-double-right pt-1 px-3"></i>
                  <p class="m-0 text-uppercase">Profesores</p>
              </div>
          </div>
      </div>
  </div>
  <!-- Header End -->


        <!-- Team Start -->
        <div class="container-fluid py-4">
            <div class="container">
                <div class="text-center mb-5">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Profresores</h5>
                </div>
                <div class="row d-flex justify-content-center">
                <?php
                    foreach($profesores  as $profesor)
                    {
                        ?>
                            <div class="col-md-6 col-lg-3 text-center team mb-4">
                                <div class="team-item rounded overflow-hidden mb-2">
                                    <div class="team-img position-relative">
                                        <img class="img-fluid" src="<?= $profesor["imagen"] ?>" alt="" style="width: 255px; height:255px; object-fit: cover;">
                                        <div class="team-social">
                                            <a class="btn btn-outline-light  mx-1" href="index.php?ruta=blog&id_usuario=<?=$profesor["id"]?>">Mis publicaciones</a>
                                        </div>
                                    </div>
                                    <div class="bg-secondary p-4">
                                        <h5><?= $profesor["nombre"] ?> <?= $profesor["apellido1"] ?></h5>
                                        <p class="m-0">Nivel : <span class="text-primary mb-3"><?= $niveles_model->ctrMostrarCampo("nombre","id",$profesor["id_nivel"]) ?> </span></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Team End -->