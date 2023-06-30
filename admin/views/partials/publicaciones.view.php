<main class="content">
	<div class="container-fluid p-0">

		<div class="row align-items-center">
			<h1 class="h3 mb-3"><strong>Administracion de :</strong> Publicaciones</h1>
			<button type="button" class="btn btn-primary ml-5" data-toggle="modal" id="insertar" data-target="#formularioInsertarModal">
				Insertar nueva publicacion
			</button>
		</div>
		


		<div class="row">
			<div class="col-12">


				<table id="tablaPublicaciones" class="table table-hover table-product" style="width:100%">
					<thead>
						<tr>
							<th class="text-start">ID</th>
							<th class="text-start">TITULO</th>
							<th class="text-start">DESCRIPCION CORTA</th>
							<th class="text-start">CATEGORIA</th>
							<th class="text-start">EDITAR</th>
							<th class="text-start">ELIMINAR</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($publicaciones as $publicacion) {
						?>
							<tr>
								<td><?= $publicacion["id"] ?></td>
								<td><?= $publicacion["titulo"] ?></td>
								<td><?= $publicacion["descripcion_corta"] ?></td>
								<td><?= $categorias_model->ctrMostrarCampo("nombre", "id", $publicacion["id_categoria"]) ?></td>
								<td>
									<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#formularioEditarPublicaciones<?= $publicacion["id"] ?>">
													<span class="mdi mdi-account-edit"></span>
												</button>
								</td>
								<td>
									<form action="publicaciones" method="post" id="#formularioEliminarPublicacion<?= $publicacion["id"] ?>">
										<input type="hidden" name="publicacion_eliminar" value="<?= $publicacion["id"] ?>">
										<a href=""></a>
										<span class=" btn btn-sm btn-danger mdi mdi-account-remove" onclick="validaEliminarPublicacion(<?= $publicacion['id'] ?>)"></span>
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
						<h5 class="modal-title" id="exampleModalFormTitle">Datos de la publicacion</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST" action="publicaciones" id="formularioInsertarPublicacion" enctype="multipart/form-data">
							<div class="control-group">
								<label for="formFile" class="form-label">Titulo</label>
								<input type="text" class="form-control border-1 p-4" id="titulo" name="titulo" placeholder="Titulo" />
								<p id="titulo_error" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Descripcion corta</label>
								<input type="text" class="form-control border-1 p-4" id="descripcion_corta" name="descripcion_corta" placeholder="Descripcion corta ..."/>
								<p id="descripcion_corta_error" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Descripcion larga</label>
								<textarea class="form-control" id="descripcion" name="descripcion" rows="7" placeholder="Descripcion larga ..." style="min-height: 400px;" > </textarea>
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
							<div class="row mt-3">
									<div class="col">
										<label for="formFile" class="form-label">Foto de la publicacion</label>
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
						<button type="button" class="btn btn-primary btn-pill" onclick="validaInsertarPublicacion(editor)">Insertar publicacion</button>
					</div>
				</div>
			</div>
		</div>
		
		<?php
		foreach ($publicaciones as $publicacion) {
		?>
			<div class="modal fade" id="formularioEditarPublicaciones<?= $publicacion["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalFormTitle">Datos de la publicacion</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" action="publicaciones" id="formularioEditarPublicacion<?= $publicacion["id"] ?>" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?= $publicacion["id"] ?>">
								<div class="control-group">
								<label for="formFile" class="form-label">Titulo</label>
								<input type="text" class="form-control border-1 p-4" id="titulo<?= $publicacion["id"] ?>" name="titulo" value="<?= $publicacion["titulo"] ?>" placeholder="titulo" />
								<p id="titulo_error<?= $publicacion["id"] ?>" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Descripcion corta</label>
								<input type="text" class="form-control border-1 p-4" id="descripcion_corta<?= $publicacion["id"] ?>" name="descripcion_corta"value="<?= $publicacion["descripcion_corta"] ?>"/>
								<p id="descripcion_corta_error<?= $publicacion["id"] ?>" class="help-block text-danger"></p>
							</div>

							<div class="control-group">
								<label for="formFile" class="form-label">Descripcion larga</label>
								<textarea class="form-control" id="descripcion<?= $publicacion["id"] ?>" name="descripcion" rows="7" placeholder="Descripcion..."> <?= $publicacion["descripcion"] ?> </textarea>
								<script>
										ClassicEditor
											.create( document.querySelector( '#descripcion<?= $publicacion["id"] ?>' ),{
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
								<p id="descripcion_error<?= $publicacion["id"] ?>" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Categoria</label>

								<select class="form-control" name="id_categoria" id="id_categoria<?= $publicacion["id"] ?>">
								<?php
										foreach ($categorias as $categoria) {
											if ($categoria["id"] == $publicacion["id_categoria"]) {
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
							<div class="row mt-3">
									<div class="col">
										<label for="formFile" class="form-label">Foto de la publicacion</label>
										<input class="form-control" type="file" id="imagen<?= $publicacion["id"] ?>" name="imagen">
									</div>
									<div class="col d-flex justify-content-center">
										<img src="../<?= $publicacion["imagen"] ?>" width="100px" alt="" srcset="">
									</div>
									<div class="col-12">
										<p id="imagen_error<?= $publicacion["id"] ?>" class="help-block text-danger"></p>
									</div>
								</div>

							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
							<button type="button" class="btn btn-primary btn-pill" onclick="validaEditarPublicacion(<?= $publicacion['id'] ?>,editor)">Editar publicacion</button>
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