    <!-- Header Start -->
    <div class="container-fluid page-header" style="">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 200px">
                <h3 class="display-4 text-white text-uppercase">Servicios</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Servicios</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
<div class="container-fluid ">
        <div class=" p-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Todos los servicios</h5>
            <h1>En el exterior</h1>
        </div>
        <div class="row d-flex justify-content-center pl-5 pr-5">
            
        <?php
                foreach($servicios_exterior as $servicio)
                {
                    if($servicio["f_fin"]<=date("Y-m-d"))
                    {
                        ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4 " >
                                <div class="rounded overflow-hidden mb-2 bg-secondary" style="filter:opacity(0.60);" >
                                <a class="h5" href="index.php?ruta=servicio-detalle&id=<?=$servicio["id"]?>"><img class="rounded mx-auto d-block"  style="width: 100%; height:300px; object-fit: cover;" src="<?=$servicio["imagen"]?>" alt=""></a>
                                    <div class="p-4">
                                        <div class="d-flex justify-content-between mb-3">
                                            <small class="m-0"><i class="fa fa-users text-primary mr-2"></i><?=$servicio["max_participantes"]?> Participantes</small>
                                            <small class="m-0"><i class="far fa-calendar text-primary mr-2"></i><?=$funciones->ctrFechaHumana($servicio["f_inicio"])?></small>
                                        </div>
                                        <a class="h5" href="index.php?ruta=servicio-detalle&id=<?=$servicio["id"]?>"><?=$servicio["nombre"]?></a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="m-0 "> Nivel : <small class=" text-primary mr-2"><?=$niveles_model->ctrMostrarCampo("nombre","id",$servicio["id_nivel"])?></small></h6>
                                                <h5 class="m-0"><?=$servicio["precio"]?>  €</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                    else

                    {
                        ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                                <div class="rounded overflow-hidden mb-2 bg-secondary">
                                <a class="h5" href="index.php?ruta=servicio-detalle&id=<?=$servicio["id"]?>"><img class="rounded mx-auto d-block"  style="width: 100%; height:300px; object-fit: cover;" src="<?=$servicio["imagen"]?>" alt=""></a>
                                    <div class=" p-4">
                                        <div class="d-flex justify-content-between mb-3">
                                            <small class="m-0"><i class="fa fa-users text-primary mr-2"></i><?=$servicio["max_participantes"]?> Participantes</small>
                                            <small class="m-0"><i class="far fa-calendar text-primary mr-2"></i><?=$funciones->ctrFechaHumana($servicio["f_inicio"])?></small>
                                        </div>
                                        <a class="h5" href="index.php?ruta=servicio-detalle&id=<?=$servicio["id"]?>"><?=$servicio["nombre"]?></a>
                                        <div class="border-top mt-4 pt-4">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="m-0 "> Nivel : <small class=" text-primary mr-2"><?=$niveles_model->ctrMostrarCampo("nombre","id",$servicio["id_nivel"])?></small></h6>
                                                <h5 class="m-0"><?=$servicio["precio"]?>  €</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
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
                                          <a class="page-link" href='index.php?ruta=mas-servicios&pagina=<?= $paginacion->ctrPaginaAnterior($pagina) ?><?php if (isset($filtro)) {echo $filtro;} ?>' aria-label="Previous">
                                              <span aria-hidden="true">&laquo;</span>
                                              <span class="sr-only">Anterior</span>
                                          </a>
                                          <?php
                                            for ($i = 1; $i <= $paginacion->numero_paginas; $i++) {
                                            ?>
                                      <li class="page-item"><a class="page-link" href="index.php?ruta=mas-servicios&pagina=<?= $i ?><?php if (isset($filtro)) {echo $filtro;} ?>"><?= $i ?></a></li>
                                  <?php
                                            }
                                    ?>
                                  <li class="page-item">
                                      <a class="page-link" href='index.php?ruta=mas-servicios&pagina=<?= $paginacion->ctrPaginaSiguiente(($pagina), $paginacion->numero_paginas) ?><?php if (isset($filtro)) {echo $filtro;} ?>' aria-label="Next">
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
    </div>
</div>
<!-- Courses End -->