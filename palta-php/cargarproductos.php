
<?php
//require "includes/header.php";
require_once 'autoload.php';

?>


  <div class="container-fluid sectionHeader">
    <h1 class="text-center">Cargar Producto</h1>
  </div>

  <div class="container">
    <div class="row justify-content-center">
				<div class="col-10">
					<h2></h2>
					<form method="post">
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Producto:</label>
									<input type="text" class="form-control" placeholder="Ej: Tomate" name="nombre">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Cantidad:</label>
									<input type="text" class="form-control" placeholder="Ej: 1" name="cantidad">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Precio:</label>
									<input type="text" class="form-control" placeholder="Ej: 8" name="precio">
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Categoria:</label>
									<select class="form-control" name="id_categoria">
										<option value="">Elegí la categoria</option>
										<?php foreach ($categorias as $categoria): ?>
											<option value="<?php echo $categoria->getID() ?>"><?php echo $categoria->getCategoria() ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-primary">GUARDAR</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<?php if (isset($saved)): ?>
				<div
					class="alert <?php echo $saved ? 'alert-success' : 'alert-danger'?>"
				>
					<?php echo $saved ? '¡Producto guardado con éxito!' : '¡No se pudo guardar el producto!' ?>
				</div>
			<?php endif; ?>
		</div>

  </div>


  <?php require "includes/footer.php"; ?>
