<main class="content">
	<div class="container-fluid p-0">

		<div class="row align-items-center">
			<h1 class="h3 mb-3"><strong>Administracion de :</strong> Categorias</h1>
			<button type="button" class="btn btn-primary ml-5" data-toggle="modal" id="insertar" data-target="#formularioInsertarModal">
				Insertar nueva Categoria
			</button>
		</div>


		<div class="row">
			<div class="col-12">


				<table id="tablaCategorias" class="table table-hover table-product" style="width:100%">
					<thead>
						<tr>
							<th class="text-start">ID</th>
							<th class="text-start">NOMBRE</th>
							<th class="text-start">IMAGEN</th>
							<th class="text-start">EDITAR</th>
							<th class="text-start">ELIMINAR</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($categorias as $categoria) {
						?>
							<tr>
								<td><?= $categoria["id"] ?></td>
								<td><?= $categoria["nombre"] ?></td>
								<td><img src="../<?= $categoria["imagen"] ?>" alt="" sizes="" srcset=""></td>
								<td>
									<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#formularioEditarCategorias<?= $categoria["id"] ?>">
										<span class="mdi mdi-account-edit"></span>
									</button>
								</td>
								<td>
									<form action="categorias" method="post" id="formularioEliminarCategoria<?= $categoria["id"] ?>">
										<input type="hidden" name="categorias_eliminar" value="<?= $categoria["id"] ?>">
										<span class=" btn btn-sm btn-danger mdi mdi-account-remove" onclick="validaEliminarCategoria(<?= $categoria['id'] ?>)"></span>
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
						<h5 class="modal-title" id="exampleModalFormTitle">Datos de la categoria</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="POST" action="categorias" id="formularioInsertarCategoria" enctype="multipart/form-data">
							<div class="control-group">
								<label for="formFile" class="form-label">Nombre</label>
								<input type="text" class="form-control border-1 p-4" id="nombre" name="nombre" placeholder="Nombre de la categoria" />
								<p id="nombre_error" class="help-block text-danger"></p>
							</div>
							<div class="row mt-3">
								<div class="col">
									<label for="formFile" class="form-label">Foto la Categoria</label>
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
						<button type="button" class="btn btn-primary btn-pill" onclick="validaInsertarCategoria()">Insertar categoria</button>
					</div>
				</div>
			</div>
		</div>
		<?php
		foreach ($categorias as $categoria) {
		?>
			<div class="modal fade" id="formularioEditarCategorias<?= $categoria["id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalFormTitle">Datos de la categoria</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form method="POST" action="categorias" id="formularioEditarCategoria<?= $categoria["id"] ?>" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?= $categoria["id"] ?>">
								<div class="control-group">
									<label for="formFile" class="form-label">Nombre</label>
									<input type="text" class="form-control border-1 p-4" id="nombre<?= $categoria["id"] ?>" name="nombre" value="<?= $categoria["nombre"] ?>" placeholder="Nombre del categoria" />
									<p id="nombre_error<?= $categoria["id"] ?>" class="help-block text-danger"></p>
								</div>
								<div class="row mt-3 d-flex">
									<div class="col" style="padding-top: 75px;">
										<label for="formFile" class="form-label">Foto de la categoria</label>
										<input class="form-control" type="file" id="imagen<?= $categoria["id"] ?>" name="imagen">
									</div>
									<div class="col d-flex justify-content-center">
										<img src="../<?= $categoria["imagen"] ?>" width="300px" alt="" srcset="">
									</div>
									<div class="col-12">
										<p id="imagen_error<?= $categoria["id"] ?>" class="help-block text-danger"></p>
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancelar</button>
							<button type="button" class="btn btn-primary btn-pill" onclick="validaEditarCategoria(<?= $categoria['id'] ?>)">Editar categoria</button>
						</div>

					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</main>