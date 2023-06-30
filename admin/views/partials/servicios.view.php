<main class="content">
	<div class="container-fluid p-0">
	<div class="form-group">
		<div class="row align-items-center">
			<h1 class="h3 mb-3"><strong>Administracion de :</strong> Servicios</h1>
			<button type="button" class="btn btn-primary ml-5" data-toggle="modal" id="insertar" data-target="#formularioInsertarModal">
				Insertar nuevo servicio
			</button>
		</div>


		<div class="row">
			<div class="col-12">


				<table id="tablaServicios" class="table table-hover table-product" style="width:100%">
					<thead>
						<tr>
							<th class="text-start">ID</th>
							<th class="text-start">NOMBRE</th>
							<th class="text-start">FECHA DE INICIO</th>
							<th class="text-start">FECHA DE FINALIZACION</th>
							<th class="text-start">PRECIO</th>
							<th class="text-start">MAX PARTICIPANTES</th>
							<th class="text-start">NIVEL</th>
							<th class="text-start">CATEGORIA</th>
							<th class="text-start">EDITAR</th>
							<th class="text-start">ELIMINAR</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($servicios as $servicio) {
						?>
							<tr>
								<td><?= $servicio["id"] ?></td>
								<td><?= $servicio["nombre"] ?></td>
								<td><?= $servicio["f_inicio"] ?></td>
								<td><?= $servicio["f_fin"] ?></td>
								<td><?= $servicio["precio"] ?></td>
								<td><?= $servicio["max_participantes"] ?></td>
								<td><?= $niveles_model->ctrMostrarCampo("nombre", "id", $servicio["id_nivel"]) ?></td>
								<td><?= $categorias_model->ctrMostrarCampo("nombre", "id", $servicio["id_categoria"]) ?></td>
								<td>
									<?php
										if(strtotime($servicio["f_inicio"]) > strtotime(date("Y/m/d")))
										{
											?>
												<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#formularioEditarServicios<?= $servicio["id"] ?>">
													<span class="mdi mdi-account-edit"></span>
												</button>
											<?php
										}
									?>
								</td>
								<td>
									<form action="servicios" method="post" id="#formularioEliminarServicio<?= $servicio["id"] ?>">
										<input type="hidden" name="servicio_eliminar" value="<?= $servicio["id"] ?>">
										<a href=""></a>
										<span class=" btn btn-sm btn-danger mdi mdi-account-remove" onclick="validaEliminarServicio(<?= $servicio['id'] ?>)"></span>
										<!-- <button class="btn btn-sm btn-danger" onclick="validaEliminar(this.form)" ><span class="mdi mdi-account-remove"></span></button> -->
									</form>
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
						<h5 class="modal-title" id="exampleModalFormTitle">Datos del servicio</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST" action="servicios" id="formularioInsertarServicio" enctype="multipart/form-data">
							<div class="control-group">
								<label for="formFile" class="form-label">Nombre</label>
								<input type="text" class="form-control border-1 p-4" id="nombre" name="nombre" placeholder="Nombre" />
								<p id="nombre_error" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Descripcion</label>
								<textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Descripcion..."></textarea>
								<script>
									let editor;
										ClassicEditor
										.create( document.querySelector( '#descripcion' ),{
												toolbar: [ 'heading','|','bold', 'italic','|','NumberedList','BulletedList','|','InsertTable','|','mediaEmbed' ,'|','undo','redo'],
												heading: {
													options: [
														{ model: 'paragraph', title: 'Parrafo', class: 'ck-heading_paragraph' },
														{ model: 'heading1', view: 'h1', title: 'Cabecera 1', class: 'ck-heading_heading1' },
														{ model: 'heading2', view: 'h2', title: 'Cabecera 2', class: 'ck-heading_heading2' },
														{ model: 'heading3', view: 'h3', title: 'Cabecera 3', class: 'ck-heading_heading3' },
													]
												},
												language: 'es',
											} )
											.then( newEditor => {
												editor = newEditor;
											} )
											.catch( error => {
												console.error( error );
											} );
								</script>
								<p id="descripcion_error" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Fecha Inicio</label>
								<input type="date" class="form-control border-1 p-4" id="f_inicio" name="f_inicio"/>
								<p id="f_inicio_error" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Fecha Fin</label>
								<input type="date" class="form-control border-1 p-4" id="f_fin" name="f_fin"/>
								<p id="f_fin_error" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Precio</label>
								<input type="number" class="form-control border-1 p-4" id="precio" name="precio" placeholder="0.00" />
								<p id="precio_error" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Participantes Maximos</label>
								<input type="number" class="form-control border-1 p-4" id="max_participantes" name="max_participantes" placeholder="0" />
								<p id="max_participantes_error" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
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

							<div class="control-group">
								<label for="formFile" class="form-label">Categoria</label>

								<select class="form-control" name="id_categoria" id="id_categoria">
									<?php
									foreach ($categorias as $categoria) {
									?>
										<option value="<?= $categoria["id"] ?>"><?= $categoria["nombre"] ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="control-group col-12 p-0 ">
								<label for="formFile" class="form-label">Profesores</label>
								<div class="form-group  ">
								<select class="js-example-basic-multiple form-control " style="width: 100%;"  name="profesores[]" multiple="multiple">
									<?php
										foreach($profesores as $profesor)
										{
											?>
												<option value="<?= $profesor["id"]?>"><?= $profesor["nombre"]?> <?= $profesor["apellido1"]?></option>
											<?php
										}
									?>
								</select>
								</div>
							</div>
							<div class="row mt-3">
									<div class="col">
										<label for="formFile" class="form-label">Foto de Servicio</label>
										<input class="form-control" type="file" id="imagen" name="imagen">
									</div>
									<div class="col-12">
										<p id="imagen_error" class="help-block text-danger"></p>
									</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary btn-pill" onclick="validaInsertarServicio(editor)">Insertar servicio</button>
					</div>
				</div>
			</div>
		</div>
		<?php
		foreach ($servicios as $servicio) {
		?>
			<div class="modal fade" id="formularioEditarServicios<?= $servicio["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalFormTitle">Datos del servicio</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" action="servicios" id="formularioEditarServicio<?= $servicio["id"] ?>" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?= $servicio["id"] ?>">
								<div class="control-group">
								<label for="formFile" class="form-label">Nombre</label>
								<input type="text" class="form-control border-1 p-4" id="nombre<?= $servicio["id"] ?>" name="nombre" value="<?= $servicio["nombre"] ?>" placeholder="Nombre" />
								<p id="nombre_error<?= $servicio["id"] ?>" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Descripcion</label>
								<textarea class="form-control" id="descripcion<?= $servicio["id"] ?>" name="descripcion" rows="3" placeholder="Descripcion..."> <?= $servicio["descripcion"] ?> </textarea>
								<script>
										ClassicEditor
											.create( document.querySelector( '#descripcion<?= $servicio["id"] ?>' ),{
												toolbar: [ 'heading','|','bold', 'italic','|','NumberedList','BulletedList','|','InsertTable','|','mediaEmbed' ,'|','undo','redo'],
												heading: {
													options: [
														{ model: 'paragraph', title: 'Parrafo', class: 'ck-heading_paragraph' },
														{ model: 'heading1', view: 'h1', title: 'Cabecera 1', class: 'ck-heading_heading1' },
														{ model: 'heading2', view: 'h2', title: 'Cabecera 2', class: 'ck-heading_heading2' },
														{ model: 'heading3', view: 'h3', title: 'Cabecera 3', class: 'ck-heading_heading3' },
													]
												},
												language: 'es',
											} )
											.then( newEditor => {
												editor = newEditor;
											} )
											.catch( error => {
												console.error( error );
											} );
								</script>
								<p id="descripcion_error<?= $servicio["id"] ?>" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Fecha Inicio</label>
								<input type="date" class="form-control border-1 p-4" id="f_inicio<?= $servicio["id"] ?>" name="f_inicio"value="<?= $servicio["f_inicio"] ?>"/>
								<p id="f_inicio_error<?= $servicio["id"] ?>" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Fecha Fin</label>
								<input type="date" class="form-control border-1 p-4" id="f_fin<?= $servicio["id"] ?>" name="f_fin" value="<?= $servicio["f_fin"] ?>"/>
								<p id="f_fin_error<?= $servicio["id"] ?>" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Precio</label>
								<input type="number" class="form-control border-1 p-4" id="precio<?= $servicio["id"] ?>" name="precio" placeholder="0.00" value="<?= $servicio["precio"] ?>" />
								<p id="precio_error<?= $servicio["id"] ?>" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Participantes Maximos</label>
								<input type="number" class="form-control border-1 p-4" id="max_participantes<?= $servicio["id"] ?>" name="max_participantes" placeholder="0" value="<?= $servicio["max_participantes"] ?>" />
								<p id="max_participantes_error<?= $servicio["id"] ?>" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Nivel</label>
									<select class="form-control" name="id_nivel" id="id_nivel<?= $usuario["id"] ?>">
										<?php
										foreach ($niveles as $nivel) {
											if ($nivel["id"] == $servicio["id_nivel"]) {
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

							<div class="control-group">
								<label for="formFile" class="form-label">Categoria</label>

								<select class="form-control" name="id_categoria" id="id_categoria<?= $servicio["id"] ?>">
								<?php
										foreach ($categorias as $categoria) {
											if ($categoria["id"] == $servicio["id_categoria"]) {
										?>
												<option value="<?= $categoria["id"] ?>" selected><?= $categoria["nombre"] ?></option>
											<?php
											} else {
											?>
												<option value="<?= $categoria["id"] ?>"><?= $categoria["nombre"] ?></option>
										<?php
											}
										}
										?>
								</select>
							</div>
							<div class="control-group col-12 p-0 ">
								<label for="formFile" class="form-label">Profesores</label>
								<div class="form-group  ">
								<select class="js-example-basic-multiple form-control " style="width: 100%;"  name="profesores[]" multiple="multiple">
									<?php
										foreach($profesores as $profesor)
										{
											if($usuarios_se_encarga_servicios_model->ctrConsulta("SELECT * FROM `usuarios_se_encarga_servicios` WHERE id_servicio like '".$servicio["id"]."' and id_usuario like '".$profesor["id"]."';"))
											{
												?>
													<option value="<?= $profesor["id"]?>" selected><?= $profesor["nombre"]?> <?= $profesor["apellido1"]?></option>
												<?php
											}
											else
											{
												?>
													<option value="<?= $profesor["id"]?>"><?= $profesor["nombre"]?> <?= $profesor["apellido1"]?></option>
												<?php
											}
											
										}
									?>
								</select>
								</div>
							</div>
							<div class="row mt-3">
									<div class="col">
										<label for="formFile" class="form-label">Foto de Servicio</label>
										<input class="form-control" type="file" id="imagen<?= $servicio["id"] ?>" name="imagen">
									</div>
									<div class="col d-flex justify-content-center">
										<img src="../<?= $servicio["imagen"] ?>" width="100px" alt="" srcset="">
									</div>
									<div class="col-12">
										<p id="imagen_error<?= $servicio["id"] ?>" class="help-block text-danger"></p>
									</div>
								</div>

							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
							<button type="button" class="btn btn-primary btn-pill" onclick="validaEditarServicio(<?= $servicio['id'] ?>,editor)">Editar servicio</button>
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
		var table = $('#tablaservicios').DataTable();
		table.on('draw', function() {
			var previousButton = $('.paginate_button.previous');
			previousButton.text('Anterior');
		});
	});
</script>