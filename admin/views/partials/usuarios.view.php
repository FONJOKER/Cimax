

<main class="content">
	<div class="container-fluid p-0">

		<div class="row align-items-center">
		<h1 class="h3 mb-3"><strong>Administracion de :</strong> Usuarios</h1>
		<button type="button" class="btn btn-primary ml-5" data-toggle="modal" id="insertar" data-target="#formularioInsertarModal">
			Insertar nuevo usuario
		</button>
		</div>

	
		<div class="row">
			<div class="col-12">


				<table id="tablaUsuarios" class="table table-hover table-product" style="width:100%">
					<thead>
						<tr>
							<th class="text-start">ID</th>
							<th class="text-start">NOMBRE</th>
							<th class="text-start">DNI</th>
							<th class="text-start">TIPO</th>
							<th class="text-start">NIVEL</th>
							<th class="text-start">EDITAR</th>
							<th class="text-start">BAJA</th>
							<th class="text-start">BORRAR</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($usuarios as $usuario) {
						?>
							<tr>
								<td><?= $usuario["id"] ?></td>
								<td><?= $usuario["nombre"] ?> <?= $usuario["apellido1"] ?> <?= $usuario["apellido2"] ?></td>
								<td><?= $usuario["dni"] ?></td>
								<td><?= $usuario["tipo"] ?></td>
								<td><?= $niveles_model->ctrMostrarCampo("nombre", "id", $usuario["id_nivel"]) ?></td>
								<td>
									<?php
									if ($usuario["tipo"] != "administrador") {
									?>
										<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#formularioEditarUsuarios<?= $usuario["id"] ?>">
										<span class="mdi mdi-account-edit"></span>
										</button>
									<?php
									}
									?>
								</td>
								<td>
									<?php
									if ($usuario["tipo"] != "administrador") {
										if($usuario["alta"]==1)
										{
											?>
												<form action="usuarios" method="post">
													<input type="hidden" name="usuario_baja" value="<?= $usuario["id"] ?>">
													<button type="submit" class="btn btn-sm btn-warning">
													<span class="mdi mdi-account-off"></span>
													</button>
												</form>
											<?php
										}
										else
										{
											?>
												<form action="usuarios" method="post">
													<input type="hidden" name="usuario_alta" value="<?= $usuario["id"] ?>">
													<button type="submit" class="btn btn-sm btn-success">
													<span class="mdi mdi-account-plus"></span>
													</button>
												</form>
											<?php
										}
									}
									?>

								</td>
								<td>
									<?php
									if ($usuario["tipo"] != "administrador") {
									?>
										<form action="usuarios" method="post" id="#formularioEliminarUsuario<?= $usuario["id"] ?>">
											<input type="hidden" name="usuario_eliminar" value="<?= $usuario["id"] ?>">
											<a href=""></a>	
											<span class=" btn btn-sm btn-danger mdi mdi-account-remove" onclick="validaEliminarUsuario(<?= $usuario['id'] ?>)"></span>
											<!-- <button class="btn btn-sm btn-danger" onclick="validaEliminar(this.form)" ><span class="mdi mdi-account-remove"></span></button> -->
										</form>
									<?php
									}
									?>

								</td>
								
							</tr>

						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- Form Modal -->
		<div class="modal fade" id="formularioInsertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalFormTitle">Datos del usuario</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST" action="usuarios" id="formularioInsertar">
							<div class="row mb-5">
							<div class="control-group col">
								<label for="formFile" class="form-label">Nombre</label>
								<input type="text" class="form-control border-1 p-4" id="nombre" name="nombre" placeholder="Nombre" />
								<p id="nombre_error" class="help-block text-danger"></p>
							</div>
							<div class="control-group col">
								<label for="formFile" class="form-label">Primer apellido</label>
								<input type="text" class="form-control border-1 p-4" id="apellido1" name="apellido1" placeholder="Apellido" />
								<p id="apellido1_error" class="help-block text-danger"></p>
							</div>
							</div>
							<div class="row mb-5">
							<div class="control-group col">
								<label for="formFile" class="form-label">Segundo apellido</label>
								<input type="text" class="form-control border-1 p-4" id="apellido2" name="apellido2" placeholder="Segundo apellido" />
								<p id="apellido2_error" class="help-block text-danger"></p>
							</div>
							<div class="control-group col">
								<label for="formFile" class="form-label">DNI</label>
								<input type="text" class="form-control border-1 p-4" id="dni" name="dni" placeholder="DNI/NIE (Y2757654Z o 2757654Z)" />
								<p id="dni_error" class="help-block text-danger"></p>
							</div>
							</div>
							<div class="control-group mb-5">
								<label for="formFile" class="form-label">Correo electronico</label>
								<input type="email" class="form-control border-1 p-4" id="email" name="email" placeholder="Correo electronico" />
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
									<option value="cliente">Cliente</option>
									<option value="empleado">Empleado</option>
									<option value="administrador">Administrador</option>
								</select>
							</div>

							<div class="control-group col">
								<label for="formFile" class="form-label">Nivel</label>

								<select class="form-control" name="id_nivel" id="id_nivel">
									<?php
									foreach ($niveles as $nivel) {
									?>
										<option value="<?= $nivel["id"] ?>"><?= $nivel["nombre"] ?></option>
									<?php
									}
									?>
								</select>
							</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary btn-pill" onclick="validaInsertarUsuario()">Insertar usuario</button>
					</div>
				</div>
			</div>
		</div>
		<?php
		foreach ($usuarios as $usuario) {
		?>
			<div class="modal fade" id="formularioEditarUsuarios<?= $usuario["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalFormTitle">Datos del usuario</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" action="usuarios" id="formularioEditarUsuario<?= $usuario["id"] ?>" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?= $usuario["id"] ?>">
								<div class="row mb-5">
								<div class="control-group col">
									<label for="formFile" class="form-label">Nombre</label>
									<input type="text" class="form-control border-1 p-4" id="nombre<?= $usuario["id"] ?>" name="nombre" value="<?= $usuario["nombre"] ?>" />
									<p id="nombre_error<?= $usuario["id"] ?>" class="help-block text-danger"></p>
								</div>
								<div class="control-group col">
									<label for="formFile" class="form-label">Primer apellido</label>
									<input type="text" class="form-control border-1 p-4" id="apellido1<?= $usuario["id"] ?>" name="apellido1" value="<?= $usuario["apellido1"] ?>" />
									<p id="apellido1_error<?= $usuario["id"] ?>" class="help-block text-danger"></p>
								</div>
								</div>
								<div class="row mb-5">
								<div class="control-group col">
									<label for="formFile" class="form-label">Segundo apellido</label>
									<input type="text" class="form-control border-1 p-4" id="apellido2<?= $usuario["id"] ?>" name="apellido2" value="<?= $usuario["apellido2"] ?>" />
									<p id="apellido2_error<?= $usuario["id"] ?>" class="help-block text-danger"></p>
								</div>
								<div class="control-group col">
									<label for="formFile" class="form-label">DNI</label>
									<input type="text" class="form-control border-1 p-4" id="dni<?= $usuario["id"] ?>" name="dni" value="<?= $usuario["dni"] ?>" />
									<p id="dni_error<?= $usuario["id"] ?>" class="help-block text-danger"></p>
								</div>
								</div>
								<div class="control-group mb-5">
									<label for="formFile" class="form-label">Correo electronico</label>
									<input type="email" class="form-control border-1 p-4" id="email<?= $usuario["id"] ?>" name="email" value="<?= $usuario["email"] ?>" />
									<p id="email_error<?= $usuario["id"] ?>" class="help-block text-danger"></p>
								</div>
								<div class="row mb-5">
								<div class="control-group col">
									<label for="formFile" class="form-label">Contraseña</label>
									<input type="password" class="form-control border-1 p-4" id="pass<?= $usuario["id"] ?>" name="pass" placeholder="Password" />
									<p id="pass_error<?= $usuario["id"] ?>" class="help-block text-danger"></p>
								</div>
								<div class="control-group col">
									<label for="formFile" class="form-label">Confirmar contraseña</label>
									<input type="password" class="form-control border-1 p-4" id="pass2<?= $usuario["id"] ?>" name="pass2" placeholder="Confirma password" />
									<p id="pass2_error<?= $usuario["id"] ?>" class="help-block text-danger"></p>
								</div>
								</div>
								<div class="row mb-5">
								<div class="control-group col">
									<label for="formFile" class="form-label">Tipo de usuario</label>

									<select class="form-control" name="tipo" id="tipo<?= $usuario["id"] ?>">
										<option value="cliente" <?php if ($usuario["tipo"] == "cliente") {
																	echo "selected";
																} ?>>Cliente</option>
										<option value="empleado" <?php if ($usuario["tipo"] == "empleado") {
																		echo "selected";
																	} ?>>Empleado</option>
										<option value="administrador" <?php if ($usuario["tipo"] == "administrador") {
																			echo "selected";
																		} ?>>Administrador</option>


									</select>
								</div>

								<div class="control-group col">
									<label for="formFile" class="form-label">Nivel</label>

									<select class="form-control" name="id_nivel" id="id_nivel<?= $usuario["id"] ?>">
										<?php
										foreach ($niveles as $nivel) {
											if ($nivel["id"] == $usuario["id_nivel"]) {
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
								<div class="row mt-3">
									<div class="col">
										<label for="formFile" class="form-label">Foto de perfil</label>
										<input class="form-control" type="file" id="imagen<?= $usuario["id"] ?>" name="imagen">
									</div>
									<div class="col d-flex justify-content-center">
										<img src="../<?= $usuario["imagen"] ?>" width="100px" alt="" srcset="">
									</div>
									<div class="col-12">
										<p id="imagen_error<?= $usuario["id"] ?>" class="help-block text-danger"></p>
									</div>
								</div>

							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
							<button type="button" class="btn btn-primary btn-pill" onclick="validaEditarUsuario(<?= $usuario['id'] ?>)">Editar usuario</button>
						</div>
					</div>
				</div>
			</div>
		<?php
		}
		?>

</main>


<script>

$(document).ready(function() {
  var table = $('#tablaUsuarios').DataTable();
  table.on('draw', function () {
    var previousButton = $('.paginate_button.previous');
    previousButton.text('Anterior');
  });
});

</script>