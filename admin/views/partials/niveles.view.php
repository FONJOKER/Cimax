<main class="content">
	<div class="container-fluid p-0">

		<div class="row align-items-center">
			<h1 class="h3 mb-3"><strong>Administracion de :</strong> Niveles</h1>
			<button type="button" class="btn btn-primary ml-5" data-toggle="modal" id="insertar" data-target="#formularioInsertarModal">
				Insertar nuevo nivel
			</button>
		</div>


		<div class="row">
			<div class="col-12">


				<table id="tablaNiveles" class="table table-hover table-product" style="width:100%">
					<thead>
						<tr>
							<th class="text-start">ID</th>
							<th class="text-start">NOMBRE</th>
							<th class="text-start">VALOR</th>
							<th class="text-start">EDITAR</th>
							<th class="text-start">ELIMINAR</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($niveles as $nivel) {
						?>
							<tr>
								<td><?= $nivel["id"] ?></td>
								<td><?= $nivel["nombre"] ?></td>
								<td><?= $nivel["valor"] ?></td>
								<td>
									<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#formularioEditarNiveles<?= $nivel["id"] ?>">
										<span class="mdi mdi-account-edit"></span>
									</button>
								</td>
								<td>
									<form action="niveles" method="post" id="formularioEliminarNivel<?= $nivel["id"] ?>">
										<input type="hidden" name="niveles_eliminar" value="<?= $nivel["id"] ?>">
										<span class=" btn btn-sm btn-danger mdi mdi-account-remove" onclick="validaEliminarNivel(<?= $nivel['id'] ?>)"></span>
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
						<h5 class="modal-title" id="exampleModalFormTitle">Datos del nivel</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST" action="niveles" id="formularioInsertarNivel">
							<div class="control-group">
								<label for="formFile" class="form-label">Nombre</label>
								<input type="text" class="form-control border-1 p-4" id="nombre" name="nombre" placeholder="Nombre del nivel" />
								<p id="nombre_error" class="help-block text-danger"></p>
							</div>
							<div class="control-group">
								<label for="formFile" class="form-label">Valor</label>
								<input type="number" class="form-control border-1 p-4" id="valor" name="valor" placeholder="Valor del nivel" />
								<p id="valor_error" class="help-block text-danger"></p>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary btn-pill" onclick="validaInsertarNivel()">Insertar nivel</button>
					</div>
				</div>
			</div>
		</div>
		<?php
		foreach ($niveles as $nivel) {
		?>
			<div class="modal fade" id="formularioEditarNiveles<?= $nivel["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalFormTitle">Datos del nivel</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" action="niveles" id="formularioEditarNivel<?= $nivel["id"] ?>">
								<input type="hidden" name="id" value="<?= $nivel["id"] ?>">
								<div class="control-group">
									<label for="formFile" class="form-label">Nombre</label>
									<input type="text" class="form-control border-1 p-4" id="nombre<?= $nivel["id"] ?>" name="nombre" value="<?= $nivel["nombre"] ?>" placeholder="Nombre del nivel" />
									<p id="nombre_error<?= $nivel["id"] ?>" class="help-block text-danger"></p>
								</div>
								<div class="control-group">
									<label for="formFile" class="form-label">Valor</label>
									<input type="text" class="form-control border-1 p-4" id="valor<?= $nivel["id"] ?>" name="valor" value="<?= $nivel["valor"] ?>" placeholder="Valor del nivel" />
									<p id="valor_error<?= $nivel["id"] ?>" class="help-block text-danger"></p>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
							<button type="button" class="btn btn-primary btn-pill" onclick="validaEditarNivel(<?= $nivel['id'] ?>)">Editar nivel</button>
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