<?php
require_once "database/db.php";
require_once "database/productos.php";

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : "";
$id_categorias = isset($_POST['id_categorias']) ? $_POST['id_categorias'] : "";
$precio = isset($_POST['precio']) ? $_POST['precio'] : "";
$stock = isset($_POST['stock']) ? $_POST['stock'] : "";



if ($_POST) {
  /* Nombre*/
  if (!$nombre) {
    $errors['nombre'] = "Debes ingresar un nombre.";
  }

  /* Cantidad*/
  if (!$cantidad) {
    $errors['cantidad'] = "Debes ingresar una cantidad.";
  }

  /* Categorías*/
  if (!$id_categorias) {
    $errors['id_categorias'] = "Debes ingresar una categoria.";
  }

  /* Precio */
  if (!$precio) {
    $errors['precio'] = "Debes ingresar un precio.";
  }

  /* Stock¡ */
  if (!$stock) {
    $errors['stock'] = "Debes ingresar stock.";
  }
}


if (!$errors && !empty($_POST)) {

  if(addProduct($db, $_POST)){
    $mensaje = "El producto se cargó correctamente";
  };
}
   ?>



<?php require "includes/header.php"; ?>
<div class="container-fluid sectionHeader">
  <h1 class="text-center">Cargar Producto</h1>
</div>

<?php if (!empty($mensaje)): ?>
  <div class="alert alert-success text-center" role="alert">
    <p><?= $mensaje ?></p>
  </div>
<?php endif; ?>

  <div class="container form col-xs-8 col-lg-5 formSection">
    <h4>Completá los siguientes datos para cargar tu producto.</h4>
    <form action="" method="post">
      <label for="nombre" id="nombre" class="items">
        <p>Nombre del producto</p>
      </label>
      <input type="text" name="nombre" value="">
      <?php if (isset($errors['nombre'])) : ?>
        <p class="errors"><?php echo $errors['nombre'] ?></p>
      <?php endif; ?>

      <label for="cantidad" id="cantidad" class="items">
        <p>Cantidad</p>
      </label>
      <input type="text" name="cantidad" value="">
      <?php if (isset($errors['cantidad'])) : ?>
        <p class="errors"><?php echo $errors['cantidad'] ?></p>
      <?php endif; ?>

      <label for="id_categorias" id="id_categorias" class="items">
        <p>Categoria</p>
        <select class="" name="id_categorias">
          <option value="fruta">Fruta</option>
          <option value="verdura">Verdura</option>
          <option value="almacen">Almacén</option>
          <?php if (isset($errors['id_categorias'])) : ?>
            <p class="errors"><?php echo $errors['id_categorias'] ?></p>
          <?php endif; ?>
        </select>
      </label>
      <br>

      <label for="precio" id="precio" class="items">
        <p>Precio por kilo</p>
      </label>
      <input type="text" name="precio" value="">
      <?php if (isset($errors['precio'])) : ?>
        <p class="errors"><?php echo $errors['precio'] ?></p>
      <?php endif; ?>

      <label for="stock" id="stock" class="items">
        <p>Stock</p>
      </label>
      <input type="text" name="stock" value="">
      <?php if (isset($errors['stock'])) : ?>
        <p class="errors"><?php echo $errors['stock'] ?></p>
      <?php endif; ?>

      <button type="submit" name="button" class="btn btn-success btn-form">Guardar</button>
    </form>
  </div>
</main>
<?php require "includes/footer.php"; ?>
