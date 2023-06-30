 <!-- Header Start -->
 <div class="container-fluid page-header" >
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 200px">
                <h3 class="display-4 text-white text-uppercase">Registro</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="inicio">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Registro</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container ">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Registro</h5>
                <h1>Unete a nuestra gran familia</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form  method="POST" action="registro" id="formularioRegistro">
                            <?php
                                if(isset($_GET["id_redireccion"]))
                                {
                                    ?>
                                        <input type="hidden" name="id_redireccion" value="<?=$_GET["id_redireccion"]?>">
                                    <?php
                                }
                                else if(isset($_GET["id_redireccion_publicacion"]))
                                {
                                    ?>
                                        <input type="hidden" name="id_redireccion_publicacion" value="<?=$_GET["id_redireccion_publicacion"]?>">
                                    <?php
                                }
                            ?>
                           <div class="row">
                            <div class="control-group col">
                                    <label for="formFile" class="form-label">Nombre</label>
                                    <input type="text" class="form-control border-0 p-4" id="nombre" name="nombre" placeholder="Tu nombre" />
                                    <p id="nombre_error" class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col">
                                    <label for="formFile" class="form-label">Primer apellido</label>
                                    <input type="text" class="form-control border-0 p-4" id="apellido1" name="apellido1" placeholder="Tu apellido" />
                                    <p id="apellido1_error" class="help-block text-danger"></p>
                                </div>
                           </div>
                            <div class="row">
                                <div class="control-group col">
                                    <label for="formFile" class="form-label">Segundo apellido</label>
                                    <input type="text" class="form-control border-0 p-4" id="apellido2" name="apellido2" placeholder="Tu segundo apellido"  />
                                    <p id="apellido2_error" class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col">
                                    <label for="formFile" class="form-label">DNI</label>
                                    <input type="text" class="form-control border-0 p-4" id="dni" name="dni" placeholder="DNI/NIE"  />
                                    <p id="dni_error" class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="formFile" class="form-label">Correo electronico</label>
                                <input type="email" class="form-control border-0 p-4" id="email" name="email" placeholder="Correo electronico" />
                                <p id="email_error" class="help-block text-danger"></p>
                            </div>
                            <div class="row">
                                <div class="control-group col">
                                    <label for="formFile" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control border-0 p-4" id="pass" name="pass" placeholder="Password"/>
                                    <p id="pass_error" class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col">
                                    <label for="formFile" class="form-label">Confirmar contraseña</label>
                                    <input type="password" class="form-control border-0 p-4" id="pass2" name="pass2" placeholder="Confirma password"/>
                                    <p id="pass2_error" class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="button" onclick="validaRegistro()">Registrarse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    


    <!-- Contact End -->