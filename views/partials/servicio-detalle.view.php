    <!-- Header Start -->
    <div class="container-fluid page-header" style="">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 200px">
                <h3 class="display-4 text-white text-uppercase"><?= $servicio["nombre"] ?></h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"><?= $servicio["nombre"] ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-fluid ">
        <div class=" py-5">
            <div class="row d-flex justify-content-center ">
                <div class="col-lg-5 col-md-12">
                    <div class="text-center mb-5">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Detalles del servicio</h5>
                        <h1><?= $servicio["nombre"] ?></h1>
                    </div>
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="<?= $servicio["imagen"] ?>" style="width: 100%; height:500px; object-fit: cover;" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i><?= count($usuarios_inscribe_servicios_controller->ctrMostrarRegistros("id_servicio", $servicio["id"])) ?> / <?= $servicio["max_participantes"] ?> Participantes</small>
                                <small class="m-0"><i class="far fa-calendar text-primary mr-2"></i><?= $funciones->ctrFechaHumana($servicio["f_inicio"]) ?> - <?= $funciones->ctrFechaHumana($servicio["f_fin"]) ?></small>
                            </div>
                            <a class="h5" href="index.php?ruta=servicio-detalle&id=<?= $servicio["id"] ?>"><?= $servicio["nombre"] ?></a>
                            <p><?= $servicio["descripcion"] ?></p>
                            <div class="col-12 d-flex justify-content-around">
                                <a href="servicios" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Todos los servicios</a>
                                <?php
                                if (!isset($_SESSION["usuario"])) {
                                    if (count($usuarios_inscribe_servicios_controller->ctrMostrarRegistros("id_servicio", $servicio["id"])) >= $servicio["max_participantes"]) {
                                ?>
                                        <a href="login" class="btn btn-dark py-md-2 px-md-4 font-weight-semi-bold mt-2 disabled">Servicio completo</a>
                                    <?php
                                    } else {
                                        if($servicio["f_fin"]<=date("Y-m-d"))
                                            {
                                                ?>
                                                    <a href="index.php?ruta=login&id_redireccion=<?=$servicio["id"] ?>" class="btn btn-dark disabled py-md-2 px-md-4 font-weight-semi-bold mt-2">Finalizado</a>
                                                <?php
                                            }
                                            else

                                            {
                                                ?>
                                                    <a href="index.php?ruta=login&id_redireccion=<?=$servicio["id"] ?>" class="btn btn-info py-md-2 px-md-4 font-weight-semi-bold mt-2">Inscribirme</a>
                                                <?php
                                            }
                                    }
                                } elseif ($_SESSION["usuario"]["tipo"] != "cliente") {
                                    if(count($usuarios_participantes)>0)
                                    {
                                        ?>
                                            <button type="button" class="btn btn-info py-md-2 px-md-4 font-weight-semi-bold mt-2" onclick="verAlumnos()">Ver Alumnos</button>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                            <button type="button" class="btn btn-info py-md-2 px-md-4 font-weight-semi-bold mt-2 disabled">Sin Alumnos</button>
                                        <?php
                                    }
                                } else {
                                    if($servicio["f_fin"]<=date("Y-m-d"))
                                    {
                                        ?>
                                            <form action="servicio-detalle" method="post">
                                                <input type="hidden" name="id" value="<?= $servicio["id"] ?>">
                                                <input type="hidden" name="accion" value="inscribirme">
                                                <button type="submit" class="btn btn-dark disabled py-md-2 px-md-4 font-weight-semi-bold mt-2">Finalizado</button>
                                            </form>
                                        <?php
                                    }
                                    else
                                    {
                                        if (count($usuarios_inscribe_servicios_controller->ctrMostrarRegistros("id_servicio", $servicio["id"])) >= $servicio["max_participantes"]) {
                                            ?>
                                                <a href="login" class="btn btn-dark py-md-2 px-md-4 font-weight-semi-bold mt-2 disabled">Servicio completo</a>
                                                <?php
                                            } else {
                                                if ($usuarios_inscribe_servicios_controller->ctrConsulta("SELECT * FROM `usuarios_inscribe_servicios` where id_usuario like '" . $_SESSION["usuario"]["id"] . "' and id_servicio like '" . $servicio["id"] . "'")) {
                                                ?>
                                                    <form action="servicio-detalle" method="post">
                                                        <input type="hidden" name="id" value="<?= $servicio["id"] ?>">
                                                        <input type="hidden" name="accion" value="cancelar">
                                                        <button type="submit" class="btn btn-danger py-md-2 px-md-4 font-weight-semi-bold mt-2">Cancelar Inscripcion</button>
                                                    </form>
                                                <?php
                                                } else {
                                                    ?>
                                                        <form action="servicio-detalle" method="post">
                                                            <input type="hidden" name="id" value="<?= $servicio["id"] ?>">
                                                            <input type="hidden" name="accion" value="inscribirme">
                                                            <button type="submit" class="btn btn-info py-md-2 px-md-4 font-weight-semi-bold mt-2">Inscribirme</button>
                                                        </form>
                                                    <?php
                                                }
                                            } 
                                    }
                                }
                                ?>

                            </div>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0 "> Nivel : <small class=" text-primary mr-2"><?= $niveles_model->ctrMostrarCampo("nombre", "id", $servicio["id_nivel"]) ?></small></h6>
                                    <h6 class="m-0 "> Categoria : <small class=" text-primary mr-2"><?= $categorias_model->ctrMostrarCampo("nombre", "id", $servicio["id_categoria"]) ?></small></h6>
                                    <h5 class="m-0"><?= $servicio["precio"] ?> €</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12" id="tablaAlumnos" style="display: none; transition: display 0.5s ease-in-out;">
                    <div class="text-center mb-5">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">PARTICIPANTES</h5>
                        <h1>Informacion de los alumnos</h1>
                    </div>
                    <table class="table" id="alumnos">
                        <thead>
                            <tr class="table-success">
                                <th >ID</th>
                                <th class="w-75">Nombre</th>
                                <th >Nivel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($usuarios_participantes as $usuario) {
                            ?>
                                <tr>
                                    <td scope="row"><?= $usuario["id"] ?></td>
                                    <td><?= $usuario["nombre"] ?> <?= $usuario["apellido1"] ?> <?= $usuario["apellido2"] ?></td>
                                    <td><?= $niveles_model->ctrMostrarCampo("nombre", "id", $usuario["id_nivel"]) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row d-flex justify-content-center" id="alumnos">

            </div>
            
        </div>
    </div>


    </script>
    <!-- Courses End -->