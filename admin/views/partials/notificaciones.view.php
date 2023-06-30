<main class="content">
	<div class="container-fluid p-0">

		<div class="row align-items-center">
			<h1 class="h3 mb-3"><strong>Administracion de :</strong> Notificaciones</h1>
			<button type="button" class="btn btn-primary ml-5" data-toggle="modal" id="insertar" data-target="#formularioInsertarModal">
				Mandar notificacion
			</button>
		</div>


		<div class="row">
			<div class="col-12">


				<table id="tablaNotificaciones" class="table table-hover table-product" style="width:100%">
					<thead>
						<tr>
							<th class="text-start">ID</th>
							<th class="text-start">MENSAJE</th>
							<th class="text-start">EDITAR</th>
							<th class="text-start">ELIMINAR</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($notificaciones as $notificacion) {
						?>
							<tr>
								<td><?= $notificacion["id"] ?></td>
								<td><?= $notificacion["mensaje"] ?></td>
								<td>
									<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#formularioEditarNotificaciones<?= $notificacion["id"] ?>">
										<span class="mdi mdi-account-edit"></span>
									</button>
								</td>
								<td>
									<form action="notificaciones" method="post" id="formularioEliminarNotificacion<?= $notificacion["id"] ?>">
										<input type="hidden" name="notificaciones_eliminar" value="<?= $notificacion["id"] ?>">
										<span class=" btn btn-sm btn-danger mdi mdi-account-remove" onclick="validaEliminarNotificacion(<?= $notificacion['id'] ?>)"></span>
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
						<h5 class="modal-title" id="exampleModalFormTitle">Datos de la notificacion</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST" action="notificaciones" id="formularioMandarNotificacion">
							<div class="control-group">
								<label for="formFile" class="form-label">Mensaje</label>
								<textarea class="form-control" id="mensaje" name="mensaje" rows="7" placeholder="Mensaje a enviar a los usuarios..."> </textarea>
								<script>
									let editor;
										ClassicEditor
										.create( document.querySelector( '#mensaje' ),{
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
								<p id="mensaje_error" class="help-block text-danger"></p>
								
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Tipo de usuario</label>

								<select class="form-control" name="tipo" id="tipo">
									<option value="%">Todos los usuarios</option>
									<option value="cliente">Cliente</option>
									<option value="empleado">Empleado</option>
								</select>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Nivel</label>
								<select class="form-control" name="id_nivel" id="id_nivel">
									<option value="%">Todos los niveles</option>
									<?php
									foreach ($niveles as $nivel) {
									?>
										<option value="<?= $nivel["id"] ?>"><?= $nivel["nombre"] ?></option>
									<?php
									}
									?>
								</select>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary btn-pill" onclick="validaMandarNotificacion(editor)">Mandar notificacion</button>
					</div>
				</div>
			</div>
		</div>
		<?php
		foreach ($notificaciones as $notificacion) {
		?>
			<div class="modal fade" id="formularioEditarNotificaciones<?= $notificacion["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalFormTitle">Datos de la notificacion</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" action="notificaciones" id="formularioEditarNotificacion<?= $notificacion["id"] ?>">
								<input type="hidden" name="id" value="<?= $notificacion["id"] ?>">
								<div class="control-group">
								<label for="formFile" class="form-label">Mensaje</label>
								<textarea class="form-control" id="mensaje<?= $notificacion["id"] ?>" name="mensaje" rows="7" placeholder="Mensaje a enviar a los usuarios..."> <?= $notificacion["mensaje"] ?> </textarea>
								<script>
										ClassicEditor
										.create( document.querySelector( '#mensaje<?= $notificacion["id"] ?>' ),{
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
								<p id="mensaje_error<?= $notificacion["id"] ?>" class="help-block text-danger"></p>
							</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
							<a class="btn btn-primary btn-pill" onclick="validaEditarNotificacion(<?= $notificacion['id'] ?>,editor)">Editar Notificacion</a>
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
		var table = $('#tablaPublicaciones').DataTable();
		table.on('draw', function() {
			var previousButton = $('.paginate_button.previous');
			previousButton.text('Anterior');
		});
	});
</script>