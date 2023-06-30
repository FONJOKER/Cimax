    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5" >
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <?php
                for ($i = 1; $i < sizeof($publicaciones); $i++) {
                ?>
                    <li data-target="#header-carousel" data-slide-to="<?= $i ?>"></li>
                <?php

                }
                ?>
            </ol>
            <div class="carousel-inner " style="height: 75vh;">
                <div class="carousel-item active" style="height: 75vh;">
                    <img class="position-relative w-100" src="<?= $publicaciones[0]["imagen"] ?>"style="object-fit: cover; wdith: 100%; height:100%;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4"><?= $publicaciones[0]["titulo"] ?></h1>
                            <h5 class="text-white text-uppercase mb-md-3"><?= $publicaciones[0]["descripcion_corta"] ?></h5>
                            <a href="index.php?ruta=blog-detalle&id=<?= $publicaciones[0]["id"] ?>" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Leer Mas</a>
                        </div>
                    </div>
                </div>
                <?php
                for ($i = 1; $i < sizeof($publicaciones); $i++) {
                ?>

                    <div class="carousel-item" style="height: 75vh;">
                        <img class="position-relative w-100" src="<?= $publicaciones[$i]["imagen"] ?>" style=" object-fit: cover; wdith: 100%; height:100%;">
                        <div class="carousel-caption d-flex align-items-center justify-content-center">
                            <div class="p-5" style="width: 100%; max-width: 900px;">
                                <h1 class="display-3 text-white mb-md-4"><?= $publicaciones[$i]["titulo"] ?></h1>
                                <h5 class="text-white text-uppercase mb-md-3"><?= $publicaciones[$i]["descripcion_corta"] ?></h5>
                                <a href="index.php?ruta=blog-detalle&id=<?= $publicaciones[$i]["id"] ?>" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Leer Mas</a>
                            </div>
                        </div>
                    </div>
                <?php

                }
                ?>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid pb-5">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="<?= $publicacion_destacada["imagen"] ?>" alt="">
                </div>
                <div class="col-lg-5">
                    <div class="text-left mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;"><?= $publicacion_destacada["titulo"] ?></h5>
                        <h1><?= $publicacion_destacada["descripcion_corta"] ?></h1>
                    </div>
                    <p><?= substr($publicacion_destacada["descripcion"], 0, 250); ?>...</p>
                    <a href="index.php?ruta=blog-detalle&id=<?= $publicacion_destacada["id"] ?>" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Leer Mas</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    
        <!-- Courses Start -->
        <div class="container-fluid py-4 ">
            <div class="container  ">
                <div class="text-center mb-5">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Salidas</h5>
                    <h1>Proximas salidas</h1>
                </div>
                <div class="row d-flex justify-content-center">
                    <?php
                    foreach ($servicios as $servicio) {
                    ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="rounded overflow-hidden mb-2">
                                <a class="h5" href="index.php?ruta=servicio-detalle&id=<?= $servicio["id"] ?>"><img class="rounded mx-auto d-block" src="<?= $servicio["imagen"] ?>"  style="width: 100%; height:300px; object-fit: cover;"alt=""></a>

                                <div class="bg-secondary p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0"><i class="fa fa-users text-primary mr-2"></i><?= $servicio["max_participantes"] ?> Participantes</small>
                                        <small class="m-0"><i class="far fa-calendar text-primary mr-2"></i><?= $funciones->ctrFechaHumana($servicio["f_inicio"]) ?></small>
                                    </div>
                                    <a class="h5" href="index.php?ruta=servicio-detalle&id=<?= $servicio["id"] ?>"><?= $servicio["nombre"] ?></a>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="m-0 "> Nivel : <small class=" text-primary mr-2"><?= $niveles_model->ctrMostrarCampo("nombre", "id", $servicio["id_nivel"]) ?></small></h6>
                                            <h5 class="m-0"><?= $servicio["precio"] ?> €</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <?php
                    if($total_servicios > 3)
                    {
                        ?>
                            <div class="row d-flex justify-content-center">
                            <a href="servicios" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Ver todas las salidas</a>
                            </div>
                        <?php 
                    }
                ?>
            </div>
        </div>
        <!-- Courses End -->

    <!-- Category Start -->
    <div class="container-fluid py-4">
        <div class="container ">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">BLOG</h5>
                <h1>Explora nuestras tematicas</h1>
            </div>
            <div class="row d-flex justify-content-center">
                <?php
                    foreach ($categorias as $categoria) 
                    {
                        ?>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="cat-item position-relative overflow-hidden rounded mb-2">
                                    <img class="img-fluid" src="<?= $categoria["imagen"] ?>" style="width: 100%; height:200px; object-fit: cover;" alt="">
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
            <?php
                    if($total_categorias > 4)
                    {
                        ?>
                            <div class="row d-flex justify-content-center">
                            <a href="categorias" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Ver todas las categorias</a>
                            </div>
                        <?php 
                    }
                ?>
        </div>
    </div>
        <!-- Category End -->

        <!-- Registration Start -->
        <div class="container-fluid bg-registration py-4" style="margin: 30px 0;">
            <div class="" >
                <div class="row d-flex justify-content-around pt-4 pb-4">
                    <div class="col-lg-4 col-md-11 mb-5 mb-lg-0">
                        <div class="pt-5">
                            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Quieres aprender a escalar</h5>
                            <h1 class="text-white">Tenemos todo lo que necesitas</h1>
                        </div>
                        <p class="text-white">En nuestras instalaciones contaras con todo el material necesario para aprender a escalar y desarrollar tus habiliades. Personal cualificado estara 
                            a tu disposicion en todo momento, podras crecer progresivamente bajo la supervision de nuestros profesionales.
                        </p>
                        <ul class="list-inline text-white m-0">
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Cursos para todos los niveles</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Entrenamientos personalizados</li>
                            <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Actividades al aire libre donde poner en practica todo lo aprendido</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 col-md-11" >
                        <div class="card border-0">
                            <div class="card-header bg-light text-center p-4">
                                <h1 class="m-0">Registrate ya !!</h1>
                            </div>
                            <div class="card-body rounded-bottom bg-primary p-5">
                                <form  method="POST" action="registro" id="formularioRegistro">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control border-0 p-4" id="nombre" name="nombre" placeholder="Tu nombre" />
                                    <p id="nombre_error" class="help-block text-light"></p>
                                </div>
                                <div class="col">
                                <input type="text" class="form-control border-0 p-4" id="apellido1" name="apellido1" placeholder="Tu apellido" />
                                <p id="apellido1_error" class="help-block text-light"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control border-0 p-4" id="apellido2" name="apellido2" placeholder="Tu segundo apellido"  />
                                <p id="apellido2_error" class="help-block text-light"></p>
                                </div>
                                <div class="col">
                                <input type="text" class="form-control border-0 p-4" id="dni" name="dni" placeholder="DNI / NIE"  />
                                <p id="dni_error" class="help-block text-light"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" name="email" placeholder="Correo electronico" />
                                <p id="email_error" class="help-block text-light"></p>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="password" class="form-control border-0 p-4" id="pass" name="pass" placeholder="Password"/>
                                <p id="pass_error" class="help-block text-light"></p>
                                </div>
                                <div class="col">
                                <input type="password" class="form-control border-0 p-4" id="pass2" name="pass2" placeholder="Confirma password"/>
                                <p id="pass2_error" class="help-block text-light"></p>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-dark btn-block border-0 py-3" type="button" onclick="validaRegistro()">Registrarse</button>
                            </div>
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration End -->


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
                                        <img class="img-fluid" src="<?= $profesor["imagen"] ?>" alt="" style="width: 100%; height:255px; object-fit: cover;">
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
                <?php
                    if($total_profesores > 4)
                    {
                        ?>
                            <div class="row d-flex justify-content-center">
                            <a href="profesores" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Ver todos los profesores</a>
                            </div>
                        <?php 
                    }
                ?>
            </div>
        </div>
        <!-- Team End -->

        


        <!-- Testimonial Start -->
        <div class="container-fluid py-4">
            <div class="container ">
                <div class="text-center mb-5">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">COMENTARIOS</h5>
                    <h1>Que piensan nuestros clientes</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="owl-carousel testimonial-carousel">
                            <?php
                                foreach($comentarios as $comentario)
                                {
                                    ?>
                                        <div class="text-center">
                                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                                            <h4 class="font-weight-normal mb-4"><?=$comentario["comentario"]?></h4>
                                            <img class="img-fluid mx-auto mb-3" src="<?=$usuarios_model->ctrMostrarCampo("imagen","id",$comentario["id_usuario"])?>" alt="">
                                            <h5 class="m-0">
                                                <?=$usuarios_model->ctrMostrarCampo("nombre","id",$comentario["id_usuario"])?>
                                                <?=$usuarios_model->ctrMostrarCampo("apellido1","id",$comentario["id_usuario"])?>
                                                <?=$usuarios_model->ctrMostrarCampo("apellido2","id",$comentario["id_usuario"])?>
                                            </h5>
                                            <span class="text-primary"><?=$niveles_model->ctrMostrarCampo("nombre","id",$usuarios_model->ctrMostrarCampo("id_nivel","id",$comentario["id_usuario"]))?></span>
                                        </div>
                                    <?php
                                }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Blog Start -->
        <!-- <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <div class="text-center mb-5">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Our Blog</h5>
                    <h1>Latest From Our Blog</h1>
                </div>
                <div class="row pb-3">
                    <div class="col-lg-4 mb-4">
                        <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="views/img/blog-1.jpg" alt="">
                            <a class="blog-overlay text-decoration-none" href="">
                                <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                <p class="text-primary m-0">Jan 01, 2050</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="views/img/blog-2.jpg" alt="">
                            <a class="blog-overlay text-decoration-none" href="">
                                <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                <p class="text-primary m-0">Jan 01, 2050</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="blog-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="views/img/blog-3.jpg" alt="">
                            <a class="blog-overlay text-decoration-none" href="">
                                <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                <p class="text-primary m-0">Jan 01, 2050</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog End -->