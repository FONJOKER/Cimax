<!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
<div class="content-wrapper">
	<div class=" content d-flex justify-content-center">
		<div class="col-6" style="background-color: white; padding:1vw; border-radius: 1%;">
			<form method="POST" action="editar-perfil" id="formularioEditarPerfil" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $_SESSION["usuario"]["id"] ?>">
				<div class="row mb-5">
					<div class="control-group col">
						<label for="formFile" class="form-label">Nombre</label>
						<input type="text" class="form-control border-1 p-4" id="nombre" name="nombre" value="<?= $_SESSION["usuario"]["nombre"] ?>" />
						<p id="nombre_error" class="help-block text-danger"></p>
					</div>
					<div class="control-group col">
						<label for="formFile" class="form-label">Primer apellido</label>
						<input type="text" class="form-control border-1 p-4" id="apellido1" name="apellido1" value="<?= $_SESSION["usuario"]["apellido1"] ?>" />
						<p id="apellido1_error" class="help-block text-danger"></p>
					</div>
				</div>
				<div class="row mb-5">
				<div class="control-group col">
					<label for="formFile" class="form-label">Segundo apellido</label>
					<input type="text" class="form-control border-1 p-4" id="apellido2" name="apellido2" value="<?= $_SESSION["usuario"]["apellido2"] ?>" />
					<p id="apellido2_error" class="help-block text-danger"></p>
				</div>
				<div class="control-group col">
					<label for="formFile" class="form-label">DNI</label>
					<input type="text" class="form-control border-1 p-4" id="dni" name="dni" value="<?= $_SESSION["usuario"]["dni"] ?>" />
					<p id="dni_error" class="help-block text-danger"></p>
				</div>
				</div>
				<div class="control-group mb-5">
					<label for="formFile" class="form-label">Correo electronico</label>
					<input type="email" class="form-control border-1 p-4" id="email" name="email" value="<?= $_SESSION["usuario"]["email"] ?>" />
					<p id="email_error" class="help-block text-danger"></p>
				</div>
				<div class="row mb-5">
				<div class="control-group col">
					<label for="formFile" class="form-label">Contraseña</label>
					<input type="password" class="form-control border-1 p-4" id="pass" name="pass" placeholder="Password" />
					<p id="pass_error" class="help-block text-danger"></p>
				</div>
				<div class="control-group col">
					<label for="formFile" class="form-label">Confirmar contraseña</label>
					<input type="password" class="form-control border-1 p-4" id="pass2" name="pass2" placeholder="Confirma password" />
					<p id="pass2_error" class="help-block text-danger"></p>
				</div>
				</div>
				<div class="row mb-5">
				<div class="control-group col">
					<label for="formFile" class="form-label">Tipo de usuario</label>

					<select class="form-control" name="tipo" id="tipo">
						<option value="cliente" <?php if ($_SESSION["usuario"]["tipo"] == "cliente") {
													echo "selected";
												} ?>>Cliente</option>
						<option value="empleado" <?php if ($_SESSION["usuario"]["tipo"] == "empleado") {
														echo "selected";
													} ?>>Empleado</option>
						<option value="administrador" <?php if ($_SESSION["usuario"]["tipo"] == "administrador") {
															echo "selected";
														} ?>>Administrador</option>


					</select>
				</div>

				<div class="control-group col">
					<label for="formFile" class="form-label">Nivel</label>

					<select class="form-control" name="id_nivel" id="id_nivel">
						<?php
						foreach ($niveles as $nivel) {
							if ($nivel["id"] == $_SESSION["usuario"]["id_nivel"]) {
						?>
								<option value="<?= $nivel["id"] ?>" selected><?= $nivel["nombre"] ?></option>
							<?php
							} else {
							?>
								<option value="<?= $nivel["id"] ?>"><?= $nivel["nombre"] ?></option>
						<?php
							}
						}
						?>
					</select>
				</div>
				</div>
				<div class="row mt-3 mb-5">
					<div class="col">
						<label for="formFile" class="form-label">Foto de perfil</label>
						<input class="form-control" type="file" id="imagen" name="imagen">
					</div>
					<div class="col d-flex justify-content-center">
						<img src="../<?= $_SESSION["usuario"]["imagen"] ?>" width="100px" alt="" srcset="">
					</div>
					<div class="col-12">
						<p id="imagen_error" class="help-block text-danger"></p>
					</div>
				</div>
				<hr>
				<div class="mt-3" style="text-align: end;">
					<button type="button" class="btn btn-primary btn-pill"  onclick="validaEditarPerfil(<?= $_SESSION['usuario']['id'] ?>)"> Editar Perfil</button>
				</div>
			</form>
		</div>
	</div>

</div>