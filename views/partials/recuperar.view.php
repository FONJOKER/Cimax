 <!-- Header Start -->
 <div class="container-fluid page-header" >
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 200px">
                <h3 class="display-4 text-white text-uppercase">Recuperar Contraseña</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="inicio">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Recuperar Contraseña</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container ">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Recuperar contraseña</h5>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form  method="POST" action="recuperar" id="formularioRecuperar">
                            <div class="control-group">
                                <label for="formFile" class="form-label">Correo electronico</label>
                                <input type="email" class="form-control border-0 p-4" id="email" name="email" placeholder="Correo electronico"/>
                                <p id="email_error" class="help-block text-danger"></p>
                            </div>
                            <p id="login_error" class="help-block text-danger text-center"> </p>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="button" onclick="validaRecuperar()">Recuperar contraseña</button>
                                <a class="btn btn-outline-primary py-3 px-5" href="login">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact End -->