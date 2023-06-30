 <!-- Header Start -->
 <div class="container-fluid page-header" >
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 200px">
                <h3 class="display-4 text-white text-uppercase">Login</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="inicio">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Login</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container ">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Login</h5>
                <h1>Inicia sesion</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form  method="POST" action="login" id="formularioLogin">
                            <?php
                                if(isset($_GET["id_redireccion"]))
                                {
                                    ?>
                                        <input type="hidden" name="id_redireccion" value="<?=$_GET["id_redireccion"]?>">
                                    <?php
                                }
                                if(isset($_GET["id_redireccion_publicacion"]))
                                {
                                    ?>
                                        <input type="hidden" name="id_redireccion_publicacion" value="<?=$_GET["id_redireccion_publicacion"]?>">
                                    <?php
                                }
                            ?>
                            <div class="control-group">
                                <label for="formFile" class="form-label">Correo electronico</label>
                                <input type="email" class="form-control border-0 p-4" id="email" name="email" placeholder="Correo electronico"/>
                                <p id="email_error" class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="formFile" class="form-label">Contraseña</label>
                                <input type="password" class="form-control border-0 p-4" id="pass" name="pass" placeholder="Password"/>
                                <p id="pass_error" class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <a href="recuperar">Has olvidado tu contraseña ?</a>
                            </div>
                            <p id="login_error" class="help-block text-danger text-center"> </p>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="button" onclick="validaLogin()">Iniciar sesion</button>
                                <?php
                                    if(isset($_GET["id_redireccion"]))
                                    {
                                        ?>
                                            <a class="btn btn-outline-primary py-3 px-5" href="index.php?ruta=registro&id_redireccion=<?=$_GET["id_redireccion"] ?>">Registrarse</a>
                                        <?php
                                    }
                                    else if(isset($_GET["id_redireccion_publicacion"]))
                                    {
                                        ?>
                                            <a class="btn btn-outline-primary py-3 px-5" href="index.php?ruta=registro&id_redireccion_publicacion=<?=$_GET["id_redireccion_publicacion"] ?>">Registrarse</a>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                            <a class="btn btn-outline-primary py-3 px-5" href="registro">Registrarse</a>
                                        <?php
                                    }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact End -->