 <!-- Header Start -->
 <div class="container-fluid page-header" >
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 200px">
                <h3 class="display-4 text-white text-uppercase">Contacto</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="inicio">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contacto</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contactanos</h5>
                <h1>Para cualquier duda o sugerencia</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form  method="POST" action="contacto" id="formularioContacto">
                            <div class="control-group">
                                <label for="formFile" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control border-0 p-4" id="nombre" name="nombre" placeholder="Tu nombre" />
                                <p id="nombre_error" class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="formFile" class="form-label">Correo electronico</label>
                                <input type="email" class="form-control border-0 p-4" id="email" name="email" placeholder="Correo electronico"/>
                                <p id="email_error" class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="formFile" class="form-label">Numero de telefono</label>
                                <input type="text" class="form-control border-0 p-4" id="telefono" name="telefono" placeholder="Numero de telefono"/>
                                <p id="telefono_error" class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="formFile" class="form-label">Asunto</label>
                                <input type="text" class="form-control border-0 p-4" id="asunto" name="asunto" placeholder="Asunto"/>
                                <p id="asunto_error" class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <label for="formFile" class="form-label">Mensaje</label>
                                <textarea class="form-control border-0 py-3 px-4" rows="5" id="mensaje" name="mensaje" placeholder="Mensaje"></textarea>
                                <p id="mensaje_error" class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="button" onclick="validaContacto()">Enviar mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact End -->