 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-2 pb-2">
            <div class="col-lg-12 col-md-12">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 pb-4">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Como contactarnos</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>C. Jose Manuel Carrion, 21002 Huelva</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+34 661 88 93 85</p>
                        <p><i class="fa fa-envelope mr-2"></i>contacto@cimax.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="https://www.facebook.com/cimaxclimbing/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square" href="https://www.instagram.com/cimax_climbing/?hl=es"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Nuestras publicaciones</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <?php
                                foreach($categorias as $categoria)
                                {
                                    ?>
                                        <a class="text-white mb-2" href="index.php?ruta=blog&id_categoria=<?=$categoria["id"]?>"><i class="fa fa-angle-right mr-2"></i><?= $categoria["nombre"] ?></a>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">cimax.com</a>. Todos los derechos reservados. Diseñado por  <a href="https://www.linkedin.com/in/julian-fagadau-4834951a0/">Julian Fagadau</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="views/lib/easing/easing.min.js"></script>
    <script src="views/lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Data Table -->
            <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js"></script>


    <!-- Contact Javascript File -->
    <script src="views/mail/jqBootstrapValidation.min.js"></script>
    <script src="views/mail/contact.js"></script>

    <!-- Libreria para imprimiir -->
    <script src="views/js/Imprimir/html2pdf.bundle.min.js"></script>




    <!-- Template Javascript -->
    <script src="views/js/main.js"></script>
    <script src="views/js/myJs.js"></script>

    <script>
        cargaCalendarioCliente();
    </script>

<script>

    </script>



</body>

</html>