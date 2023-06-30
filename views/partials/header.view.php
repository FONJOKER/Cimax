<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cimax</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <!-- GAYDAMBQGAYDAIBAGQ2SANZTEA3TIIBWGEQDEMBAGYYSANZQEA3GGIBWHEQDMMZAGYYSANRTEA3DSIBWMYQDMZJAGIYCAID4IVZXIYJAMFYGY2LDMFRWS33OEB6AUMBQGAYDAMBRGAQCANRYEA3DCIBSGAQDOMZAGY4SANRUEA3GMIBSGAQDMNBAGY2SANZTEA3DCIBXGIQDOMRAGZTCANTDEAQHY2DBEBZWSZDPEBSGK43BOJZG63D4BIYDAMBQGAYDEMBAEA3GGIBWGEQDMNBAGYYSAMRQEA3TAIBWMYQDOMRAGIYCANDBEA3TKIBWMMQDMOJAGYYSANTFEAZDAIBAPRWGCZDBEBYG64RAJJ2WY2LBNYQHYCRQGAYDAMBQGMYCAIBUGYQDMMJAGY3SANRREA3DIIBWGEQDONJAGIYCANJZEAZTEIBTG4QDGNJAGM3SAMZWEAZTKIBTGQQCA7CGMFTWCZDBOUQFSMRXGU3TMNJUPQFDAMBQGAYDANBQEAQDKYJAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEB6FU7A= -->
    <link href="views/img/publico/fav-icon.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="views/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="views/css/style.css" rel="stylesheet">
    <!-- <script src="views/js/myValidation.js"></script> -->

    <!-- Scripts -->
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="views/js/fullcalendar-6.1.6/dist/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core/locales/es.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/locales/es.js"></script>

    <!-- DataTable -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.2.2/css/fixedColumns.dataTables.min.css" />


    	<!--  Editor enriquecido -->
	<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/translations/es.js"></script>



</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="inicio"><img src="views/img/publico/logo.jpg" height="100px" alt="" srcset=""></a>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Nuestro rocodromo</h6>
                        <small>C. Jose Manuel Carrion, 21002 Huelva</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Correo electronico</h6>
                        <small>contacto@cimax.com</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Telefono</h6>
                        <small>+34 661 88 93 85</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                
            </div>
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="inicio" class="text-decoration-none d-block d-lg-none">
                        <img src="views/img/publico/logo.jpg" height="100px" alt="" srcset="">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <?php
                                if(!isset($_SESSION["usuario"]))
                                {
                                    ?>
                                        <div class="navbar-nav py-0">
                                            <a href="inicio" class="nav-item nav-link active">Inicio</a>
                                            <a href="servicios" class="nav-item nav-link">Servicios</a>
                                            <a href="blog" class="nav-item nav-link">Blog</a>
                                            <a href="contacto" class="nav-item nav-link">Contacto</a>
                                        </div>
                                        <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="login">Iniciar sesion</a>
                                    <?php
                                }
                                elseif($_SESSION["usuario"]["tipo"]=="cliente")
                                {
                                    ?>
                                        <div class="navbar-nav py-0">
                                            <a href="inicio" class="nav-item nav-link active">Inicio</a>
                                            <a href="servicios" class="nav-item nav-link">Servicios</a>
                                            <a href="blog" class="nav-item nav-link">Blog</a>
                                            <a href="logout" class="nav-item nav-link">Cerrar Sesion</a>
                                        </div>
                                        <div class="">
                                            <a href="inicio" class=" btn btn-primary "><?=$_SESSION["usuario"]["nombre"]?> <?=$_SESSION["usuario"]["apellido1"]?>  </a>
                                        </div>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                        <div class="navbar-nav py-0">
                                            <a href="inicio" class="nav-item nav-link active">Inicio</a>
                                            <a href="servicios" class="nav-item nav-link">Servicios</a>
                                            <a href="blog" class="nav-item nav-link">Blog</a>
                                            <?php
                                                if($_SESSION["usuario"]["tipo"]=="administrador")
                                                {
                                                    ?>
                                                        <a href="admin" class="nav-item nav-link">Administracion</a>
                                                    <?php
                                                }
                                            ?>
                                            <a href="logout" class="nav-item nav-link">Cerrar Sesion</a>
                                        </div>
                                        <div class="">
                                            <a href="inicio" class=" btn btn-primary "><?=$_SESSION["usuario"]["nombre"]?> <?=$_SESSION["usuario"]["apellido1"]?>  </a>
                                        </div>

                                    <?php
                                     
                                }
                            ?>
                        
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->