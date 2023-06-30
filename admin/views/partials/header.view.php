<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Mono - Responsive Admin & Dashboard Template</title>
	<!-- theme meta -->
	<meta name="theme-name" content="mono" />
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
	<link href="views/plugins/material/css/materialdesignicons.min.css" rel="stylesheet" />
	<link href="views/plugins/simplebar/simplebar.css" rel="stylesheet" />
	<!-- PLUGINS CSS STYLE -->
	<link href="views/plugins/nprogress/nprogress.css" rel="stylesheet" />
	<link href="views/plugins/prism/prism.css" rel="stylesheet" />
	<link href="views/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" />
	<link href="views/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
	<link href="views/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
	<link href="views/plugins/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet" />
  	<link href="views/plugins/owl-carousel/assets/owl.theme.default.css" rel="stylesheet" />
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

	
	<!-- <link href="views/plugins/toaster/toastr.min.css" rel="stylesheet" /> -->
	<!-- GAYDAMBQGAYDAIBAGQ2SANZTEA3TIIBWGEQDEMBAGYYSANZQEA3GGIBWHEQDMMZAGYYSANRTEA3DSIBWMYQDMZJAGIYCAID4IVZXIYJAMFYGY2LDMFRWS33OEB6AUMBQGAYDAMBRGAQCANRYEA3DCIBSGAQDOMZAGY4SANRUEA3GMIBSGAQDMNBAGY2SANZTEA3DCIBXGIQDOMRAGZTCANTDEAQHY2DBEBZWSZDPEBSGK43BOJZG63D4BIYDAMBQGAYDEMBAEA3GGIBWGEQDMNBAGYYSAMRQEA3TAIBWMYQDOMRAGIYCANDBEA3TKIBWMMQDMOJAGYYSANTFEAZDAIBAPRWGCZDBEBYG64RAJJ2WY2LBNYQHYCRQGAYDAMBQGMYCAIBUGYQDMMJAGY3SANRREA3DIIBWGEQDONJAGIYCANJZEAZTEIBTG4QDGNJAGM3SAMZWEAZTKIBTGQQCA7CGMFTWCZDBOUQFSMRXGU3TMNJUPQFDAMBQGAYDANBQEAQDKYJAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEAQCAIBAEB6FU7A= -->
	<!-- MONO CSS -->
	<link id="main-css-href" rel="stylesheet" href="views/css/style.css" />
	<!-- FAVICON -->
	<link href="../views/img/publico/fav-icon.jpg" rel="shortcut icon" />
	<!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="views/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="views/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
	<script src="views/plugins/nprogress/nprogress.js"></script>
	<script src="views/js/myJs.js"></script>

	<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- Select multiple css -->
	<link href="views/plugins/select2/css/select2.min.css" rel="stylesheet" />

	<!--  Editor enriquecido -->
	<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/translations/es.js"></script>

	<!-- Select con busqueda -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
</head>

<body class="navbar-fixed sidebar-fixed" id="body">
	<!-- <div id="toaster"></div> -->
	<!-- ====================================
    ——— WRAPPER
    ===================================== -->
	<div class="wrapper">
		<!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
		<aside class="left-sidebar sidebar-dark" id="left-sidebar">
			<div id="sidebar" class="sidebar sidebar-with-footer">
				<!-- Aplication Brand -->
				<div class="app-brand">
					<a href="inicio">
						<p><b><span style="color: #959595;">C</span><span style="color: white;">IMA</span><span style="color: #84AB3D;">X</span></b></p>
						<span class="brand-name">ADMINISTRACION</span>
					</a>
				</div>
				<!-- begin sidebar scrollbar -->
				<div class="sidebar-left" data-simplebar style="height: 100%;">
					<!-- sidebar menu -->
					<ul class="nav sidebar-inner" id="sidebar-menu">
						<li class="section-title">
							UTILIDADES
						</li>
						<li>
							<a class="sidenav-item-link" href="../">
								<i class="mdi mdi-web"></i>
								<span class="nav-text ">Apartado publico</span>
							</a>
						</li>
						<li id="inicio">
						<a class="sidenav-item-link" href="inicio">
								<i class="mdi mdi-chart-line"></i>
								<span class="nav-text ">Estadisticas</span>
							</a>
						</li>
						<li class="section-title">
							ADMINISTRACION
						</li>
						<li id="usuarios">
							<a class="sidenav-item-link" href="usuarios">
								<i class="mdi mdi-account-group"></i>
								<span class="nav-text">Usuarios</span>
							</a>
						</li>
						<li id="servicios">
							<a class="sidenav-item-link" href="servicios">
								<i class="mdi mdi-atlassian"></i>
								<span class="nav-text">Servicios</span>
							</a>
						</li>
						<li id="publicaciones">
							<a class="sidenav-item-link" href="publicaciones">
								<i class="mdi mdi-newspaper"></i>
								<span class="nav-text">Publicaciones</span>
							</a>
						</li>
						<li id="niveles">
							<a class="sidenav-item-link" href="niveles">
								<i class="mdi mdi-signal-cellular-3"></i>
								<span class="nav-text">Niveles</span>
							</a>
						</li>
						<li id="categorias">
							<a class="sidenav-item-link" href="categorias">
								<i class="mdi mdi-tag-text-outline"></i>
								<span class="nav-text">Categorias</span>
							</a>
						</li>
						<li id="notificaciones">
							<a class="sidenav-item-link" href="notificaciones">
								<i class="mdi mdi-message-bulleted"></i>
								<span class="nav-text">Notificaciones</span>
							</a>
						</li>
						<li id="comentarios">
							<a class="sidenav-item-link" href="comentarios">
								<i class="mdi mdi-comment"></i>
								<span class="nav-text">Comentarios</span>
							</a>
						</li>
						<!-- GUIAS DE ESTILO -->
						<li class="section-title">
							GUIAS DE ESTILO
						</li>

						<!-- Guia de estilo del apartado privado -->
						<li id="estilos-privados" class="has-sub" >
							<a id="estilos-privados2" class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
								<i class="mdi mdi-folder-outline"></i>
								<span class="nav-text">Plantilla privada</span> <b class="caret"></b>
							</a>
							<ul class="collapse active" id="ui-elements" data-parent="#sidebar-menu">
								<div class="sub-menu">
									<li class="">
										ESTETICA
									</li>
									<li id="spr-colores">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-colores">
											<span class="nav-text">Colores</span>
										</a>
									</li>
									<li id="spr-fuentes">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-fuentes">
											<span class="nav-text">Fuentes</span>
										</a>
									</li>
									<li class="">
										ELEMENTOS HTML
									</li>
									<li id="spr-alertas">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-alertas">
											<span class="nav-text">Alertas</span>
										</a>
									</li>
									<li id="spr-insignias">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-insignias">
											<span class="nav-text">Insignias</span>
										</a>
									</li>
									<li id="spr-navegacion">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-navegacion">
											<span class="nav-text">Navegacion</span>
										</a>
									</li>
									<li class="has-sub">
										<a id="boton" class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#buttons" aria-expanded="false" aria-controls="buttons">
											<span class="nav-text">Botones</span> <b class="caret"></b>
										</a>
										<ul class="collapse" id="buttons">
											<div class="sub-menu">
												<li id="spr-boton-defecto">
													<a href="index.php?ruta=estilos-privados&elemento=spr-boton-defecto">Boton por defecto</a>
												</li>
												<li id="spr-boton-desplegable">
													<a href="index.php?ruta=estilos-privados&elemento=spr-boton-desplegable">Boton desplegable</a>
												</li>
												<li id="spr-boton-grupo">
													<a href="index.php?ruta=estilos-privados&elemento=spr-boton-grupo">Grupo de botones</a>
												</li>
												<li id="spr-boton-sociales">
													<a href="index.php?ruta=estilos-privados&elemento=spr-boton-sociales">Botones sociales</a>
												</li>
												<li id="spr-boton-enviar">
													<a href="index.php?ruta=estilos-privados&elemento=spr-boton-enviar">Botones de enviar</a>
												</li>
											</div>
										</ul>
									</li>
									<li id="spr-tarjetas">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-tarjetas">
											<span class="nav-text">Tarjetas</span>
										</a>
									</li>
									<li id="spr-carousel">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-carousel">
											<span class="nav-text">Carousel</span>
										</a>
									</li>
									<li id="spr-desplegable">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-desplegable">
											<span class="nav-text">Desplegable</span>
										</a>
									</li>
									<!-- <li>
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-editor">
											<span class="nav-text">Editor</span>
										</a>
									</li> -->
									<li id="spr-lista-grupo">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-lista-grupo">
											<span class="nav-text">Grupo de listas</span>
										</a>
									</li>
									<li id="spr-modal">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-modal">
											<span class="nav-text">Modal</span>
										</a>
									</li>
									<li id="spr-paginacion">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-paginacion">
											<span class="nav-text">Paginacion</span>
										</a>
									</li>
									<li id="spr-popover-tooltip">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-popover-tooltip">
											<span class="nav-text">Popover y Tooltip</span>
										</a>
									</li>
									<li id="spr-barra-progreso">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-barra-progreso">
											<span class="nav-text">Barra de progreso</span>
										</a>
									</li>
									<li id="spr-spinner">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-spinner">
											<span class="nav-text">Spinner</span>
										</a>
									</li>
									<li id="spr-switches">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-switches">
											<span class="nav-text">Switches</span>
										</a>
									</li>
									<li id="spr-tablas-boostrap">
										<a href="index.php?ruta=estilos-privados&elemento=spr-tablas-boostrap">Tablas Boostrap</a>
									</li>
									<!-- <li class="has-sub">
										<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#tables" aria-expanded="false" aria-controls="tables">
											<span class="nav-text">Tablas</span> <b class="caret"></b>
										</a>
										<ul class="collapse" id="tables">
											<div class="sub-menu">
											<li>
													<a href="index.php?ruta=estilos-privados&elemento=spr-tablas-boostrap">Tablas Boostrap</a>
												</li>
												
												<li>
													<a href="index.php?ruta=estilos-privados&elemento=spr-data-tables">Data Tables</a>
												</li>
											</div>
										</ul>
									</li> -->
									<li id="spr-menu">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-menu">
											<span class="nav-text">Menu</span>
										</a>
									</li>
									<li id="spr-notificaciones">
										<a class="sidenav-item-link" href="index.php?ruta=estilos-privados&elemento=spr-notificaciones">
											<span class="nav-text">Notificaciones</span>
										</a>
									</li>
									<li class="has-sub">
										<a id="icono" class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons" aria-expanded="false" aria-controls="icons">
											<span class="nav-text">Iconos</span> <b class="caret"></b>
										</a>
										<ul class="collapse" id="icons">
											<div class="sub-menu">
												<li id="spr-iconos">
													<a href="index.php?ruta=estilos-privados&elemento=spr-iconos">Iconos</a>
												</li>
												<li id="spr-icono-banderas">
													<a href="index.php?ruta=estilos-privados&elemento=spr-icono-banderas">Banderas</a>
												</li>
											</div>
										</ul>
									</li>
									<li class="has-sub">
										<a id="form" class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms" aria-expanded="false" aria-controls="forms">
											<span class="nav-text">Formularios</span> <b class="caret"></b>
										</a>
										<ul class="collapse" id="forms">
											<div class="sub-menu">
												<li id="spr-form-basic-input">
													<a href="index.php?ruta=estilos-privados&elemento=spr-form-basic-input">Input Basicos</a>
												</li>
												<li id="spr-form-input-group">
													<a href="index.php?ruta=estilos-privados&elemento=spr-form-input-group">Grupo de imputs</a>
												</li>
												<li id="spr-form-checkbox-radio">
													<a href="index.php?ruta=estilos-privados&elemento=spr-form-checkbox-radio">Checkbox y Radio</a>
												</li>
												<li id="spr-form-validation">
													<a href="index.php?ruta=estilos-privados&elemento=spr-form-validation">Validacion</a>
												</li>
												<li id="spr-form-advance">
													<a href="index.php?ruta=estilos-privados&elemento=spr-form-advance">Formularios Avanzados</a>
												</li>
											</div>
										</ul>
									</li>
									<li class="has-sub">
										<a id="widget" class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#widgets" aria-expanded="false" aria-controls="widgets">
											<span class="nav-text">Widgets</span> <b class="caret"></b>
										</a>
										<ul class="collapse" id="widgets">
											<div class="sub-menu">
												<li id="spr-widgets-general">
													<a href="index.php?ruta=estilos-privados&elemento=spr-widgets-general">Widgets generales</a>
												</li>
												<li id="spr-widget-estadisticas">
													<a href="index.php?ruta=estilos-privados&elemento=spr-widget-estadisticas">Estadisticas</a>
												</li>
											</div>
										</ul>
									</li>
								</div>
							</ul>
						</li>

						<!-- Guia de estilo del apartado Publico -->
						<li id="estilos-publicos" class="has-sub">
							<a id="estilos-publicos2" class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements2" aria-expanded="false" aria-controls="ui-elements">
								<i class="mdi mdi-folder-outline"></i>
								<span class="nav-text">Plantilla publica</span> <b class="caret"></b>
							</a>
							<ul class="collapse" id="ui-elements2" data-parent="#sidebar-menu">
								<div class="sub-menu">
								<li class="">
									ESTETICA
								</li>
								<li id="spp-colores">
									<a class="sidenav-item-link" href="index.php?ruta=estilos-publicos&elemento=spp-colores">
										<span class="nav-text">Colores</span>
									</a>
								</li>
								<li id="spp-fuentes">
									<a class="sidenav-item-link" href="index.php?ruta=estilos-publicos&elemento=spp-fuentes">
										<span class="nav-text">Fuentes</span>
									</a>
								</li>
								<li class="">
									ELEMENTOS HTML
								</li>
								<li id="spp-carrousel">
									<a class="sidenav-item-link" href="index.php?ruta=estilos-publicos&elemento=spp-carrousel">
										<span class="nav-text">Carrousel</span>
									</a>
								</li>
								<li id="spp-destacada">
									<a class="sidenav-item-link" href="index.php?ruta=estilos-publicos&elemento=spp-destacada">
										<span class="nav-text">Publicacion Destacada</span>
									</a>
								</li>
								<li id="spp-banner">
									<a class="sidenav-item-link" href="index.php?ruta=estilos-publicos&elemento=spp-banner">
										<span class="nav-text">Banner</span>
									</a>
								</li>
								<li id="spp-cards">
									<a class="sidenav-item-link" href="index.php?ruta=estilos-publicos&elemento=spp-cards">
										<span class="nav-text">Cards</span>
									</a>
								</li>
								<li id="spp-formulario">
									<a class="sidenav-item-link" href="index.php?ruta=estilos-publicos&elemento=spp-formulario">
										<span class="nav-text">Formulario</span>
									</a>
								</li>
								<li id="spp-menu">
									<a class="sidenav-item-link" href="index.php?ruta=estilos-publicos&elemento=spp-menu">
										<span class="nav-text">Menu</span>
									</a>
								</li>
								<li id="spp-navegacion">
									<a class="sidenav-item-link" href="index.php?ruta=estilos-publicos&elemento=spp-navegacion">
										<span class="nav-text">Navegacion</span>
									</a>
								</li>
								</div>
							</ul>
						</li>
					</ul>

				</div>
			</div>
		</aside>



		<!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
		<div class="page-wrapper">

			<!-- Header -->
			<header class="main-header" id="header">
				<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
					<!-- Sidebar toggle button -->
					<button id="sidebar-toggler" class="sidebar-toggle">
						<span class="sr-only">Toggle navigation</span>
					</button>

					<span class="page-title">Panel</span>

					<div class="navbar-right ">

						<!-- NOTIFICACIONES -->
						<ul class="nav navbar-nav">

							</li>
							<!-- User Account -->
							<li class="dropdown user-menu">
								<button class="dropdown-toggle nav-link" data-toggle="dropdown">
									<img src="../<?= $_SESSION["usuario"]["imagen"] ?>" class="user-image rounded-circle" alt="User Image" />
									<span class="d-none d-lg-inline-block"><?= $_SESSION["usuario"]["nombre"] ?> <?= $_SESSION["usuario"]["apellido1"] ?></span>
								</button>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<a class="dropdown-link-item" href="editar-perfil">
											<i class="mdi mdi-account-outline"></i>
											<span class="nav-text">Editar perfil</span>
										</a>
									</li>
									<li class="dropdown-footer">
										<a class="dropdown-link-item" href="logout"> <i class="mdi mdi-logout"></i> <span class="nav-text">Cerrar Sesion</span></a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>


			</header>