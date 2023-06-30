<main class="content">
	<div class="container-fluid p-0">

		<div class="row align-items-center">
			<h1 class="h3 mb-3"><strong>Administracion de :</strong> Comentarios</h1>
			<button type="button" class="btn btn-primary ml-5" data-toggle="modal" id="insertar" data-target="#formularioInsertarModal">
				Insertar comentario
			</button>
		</div>


		<div class="row">
			<div class="col-12">


				<table id="tablaComentarios" class="table table-hover table-product" style="width:100%">
					<thead>
						<tr>
							<th class="text-start">ID</th>
							<th class="text-start">USUARIO</th>
							<th class="text-start">PUBLICACION</th>
							<th class="text-start">COMENTARIO</th>
							<th class="text-start" style="width: 150px;">FECHA</th>
							<th class="text-start">EDITAR</th>
							<th class="text-start">ELIMINAR</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($comentarios as $comentario) {
						?>
							<tr>
								<td><?= $comentario["id"] ?></td>
								<td><?= $usuarios_model->ctrMostrarCampo("nombre","id",$comentario["id_usuario"]) ?> <?= $usuarios_model->ctrMostrarCampo("apellido1","id",$comentario["id_usuario"]) ?></td>
								<td><?= $publicaciones_model->ctrMostrarCampo("titulo","id",$comentario["id_publicacion"] )?></td>
								<td><?= $comentario["comentario"] ?></td>
								<td><?=$funciones->ctrFechaHumana($comentario["fecha"])?></td>
								<td>
									<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#formularioEditarComentarios<?= $comentario["id"] ?>">
										<span class="mdi mdi-account-edit"></span>
									</button>
								</td>
								<td>
									<form action="comentarios" method="post" id="formularioEliminarComentario<?= $comentario["id"] ?>">
										<input type="hidden" name="id_comentario_borrar" value="<?=$comentario["id"] ?>">
										<input type="hidden" name="id_publicacion_comentario" value="<?=$comentario["id_publicacion"] ?>">
										<span class=" btn btn-sm btn-danger mdi mdi-account-remove" onclick="validaEliminarComentario(<?= $comentario['id'] ?>)"></span>
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
						<h5 class="modal-title" id="exampleModalFormTitle">Datos del comentario</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST" action="comentarios" id="formularioInsertarComentario">
							<div class="control-group">
								<label for="formFile" class="form-label">Comentario</label>
								<textarea name="comentario" id="comentario" cols="30" rows="4" class="form-control" maxlength="175" placeholder="Dejanos tu comentario..." style="resize:none;" onkeyup ="cuentaLetras()"></textarea>
								<p id="comentario_error" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Publicaciones</label>

								<select class="form-control" data-live-search="true" name="id_publicacion" id="id_publicacion_comentar">
									<?php
									foreach ($publicaciones as $publicacion) {
									?>
										<option value="<?= $publicacion["id"] ?>"><?= $publicacion["titulo"] ?></option>
									<?php
									}
									
									?>
								</select>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary btn-pill" onclick="validaInsertarComentario()">Insertar comentario</button>
					</div>
				</div>
			</div>
		</div>
		<?php
		foreach ($comentarios as $comentario) {
		?>
			<div class="modal fade" id="formularioEditarComentarios<?= $comentario["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalFormTitle">Datos del comentario</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" action="comentarios" id="formularioEditarComentario<?= $comentario["id"] ?>">
							<input type="hidden" name="id_comentario_editar" value="<?=$comentario["id"] ?>">
							<input type="hidden" name="id_publicacion_comentario" value="<?=$comentario["id_publicacion"] ?>">
								<div class="control-group">
									<label for="formFile" class="form-label">Comentario</label>
									<textarea name="comentario" id="comentario<?= $comentario["id"] ?>" cols="30" rows="4" class="form-control" maxlength="175" placeholder="Dejanos tu comentario..." style="resize:none;" onkeyup ="cuentaLetrasEditar(<?=$comentario['id'] ?>)"><?= $comentario["comentario"] ?></textarea>
									<p id="comentario_error<?= $comentario["id"] ?>" class="help-block text-danger"></p>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
							<button type="button" class="btn btn-primary btn-pill" onclick="validaEditarComentario(<?= $comentario['id'] ?>)">Editar comentario</button>
						</div>

					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</main>