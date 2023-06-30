<div class="content-wrapper">
  <div class="content">

    <!-- Colores Principales -->
    <div class="card card-default">
      <div class="card-header">
        <h2>Formulario</h2>
        <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-alert-1" role="button" aria-expanded="false" ria-controls="collapse-alert-1"></a>
      </div>
      <div class="card-body">
        <div class="collapse" id="collapse-alert-1">
          <pre class="language-html mb-4">
            <code >
            &lt;div class="col-lg-8"&gt;
              &lt;div class="contact-form bg-secondary rounded p-5"&gt;
                  &lt;div id="success"&gt;&lt;/div&gt;
                  &lt;form method="POST" action="registro" id="formularioRegistro"&gt;
                      &lt;div class="row"&gt;
                          &lt;div class="control-group col"&gt;
                              &lt;label for="formFile" class="form-label"&gt;Nombre&lt;/label&gt;
                              &lt;input type="text" class="form-control border-0 p-4" id="nombre" name="nombre" placeholder="Tu nombre"&gt;
                              &lt;p id="nombre_error" class="help-block text-danger"&gt;&lt;/p&gt;
                          &lt;/div&gt;
                          &lt;div class="control-group col"&gt;
                              &lt;label for="formFile" class="form-label"&gt;Primer apellido&lt;/label&gt;
                              &lt;input type="text" class="form-control border-0 p-4" id="apellido1" name="apellido1" placeholder="Tu apellido"&gt;
                              &lt;p id="apellido1_error" class="help-block text-danger"&gt;&lt;/p&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div class="row"&gt;
                          &lt;div class="control-group col"&gt;
                              &lt;label for="formFile" class="form-label"&gt;Segundo apellido&lt;/label&gt;
                              &lt;input type="text" class="form-control border-0 p-4" id="apellido2" name="apellido2" placeholder="Tu segundo apellido"&gt;
                              &lt;p id="apellido2_error" class="help-block text-danger"&gt;&lt;/p&gt;
                          &lt;/div&gt;
                          &lt;div class="control-group col"&gt;
                              &lt;label for="formFile" class="form-label"&gt;DNI&lt;/label&gt;
                              &lt;input type="text" class="form-control border-0 p-4" id="dni" name="dni" placeholder="DNI/NIE"&gt;
                              &lt;p id="dni_error" class="help-block text-danger"&gt;&lt;/p&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div class="control-group"&gt;
                          &lt;label for="formFile" class="form-label"&gt;Correo electronico&lt;/label&gt;
                          &lt;input type="email" class="form-control border-0 p-4" id="email" name="email" placeholder="Correo electronico"&gt;
                          &lt;p id="email_error" class="help-block text-danger"&gt;&lt;/p&gt;
                      &lt;/div&gt;
                      &lt;div class="row"&gt;
                          &lt;div class="control-group col"&gt;
                              &lt;label for="formFile" class="form-label"&gt;Contraseña&lt;/label&gt;
                              &lt;input type="password" class="form-control border-0 p-4" id="pass" name="pass" placeholder="Password"&gt;
                              &lt;p id="pass_error" class="help-block text-danger"&gt;&lt;/p&gt;
                          &lt;/div&gt;
                          &lt;div class="control-group col"&gt;
                              &lt;label for="formFile" class="form-label"&gt;Confirmar contraseña&lt;/label&gt;
                              &lt;input type="password" class="form-control border-0 p-4" id="pass2" name="pass2" placeholder="Confirma password"&gt;
                              &lt;p id="pass2_error" class="help-block text-danger"&gt;&lt;/p&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div class="text-center"&gt;
                          &lt;button class="btn btn-primary py-3 px-5" type="button" onclick="validaRegistro()"&gt;Registrarse&lt;/button&gt;
                      &lt;/div&gt;
                  &lt;/form&gt;
              &lt;/div&gt;
          &lt;/div&gt;
            </code>
          </pre>
        </div>
        <div class="row">
          <div class="col-12">
          <img src="../views/img/publico/formulario.png" style="width: 100%; height:auto; object-fit: cover;" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>