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
        <div class="container py-4">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Actualmente</h5>
            <h1>En el rocodromo</h1>
        </div>
        <div class="row d-flex justify-content-center">
        <?php
                foreach($servicios_rocodromo as $servicio)
                {
                    ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="bg-secondary  rounded overflow-hidden mb-2">
                                <a class="h5" href="index.php?ruta=servicio-detalle&id=<?=$servicio["id"]?>"><img class="rounded mx-auto d-block" style="width: 100%; height:300px; object-fit: cover;" src="<?=$servicio["imagen"]?>" alt=""></a>
                                
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
            ?>
        </div>
    </div>
</div>
<!-- Courses End -->

<div class="container-fluid ">
        <div class="container py-4">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Proximamente</h5>
            <h1>En el exterior</h1>
        </div>
        <div class="row d-flex justify-content-center">
            
        <?php
                foreach($servicios_exterior as $servicio)
                {
                    ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="bg-secondary  rounded overflow-hidden mb-2">
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
            ?>
        </div>
        <div class="col-12 text-center mb-3">
                <a href="mas-servicios" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Ver mas salidas</a>
            </div>
    </div>
</div>
<!-- Courses End -->