<?php require "includes/header.php";
require_once("php/config.php");

$errors = [];
$redirect = "";
$mensaje = "";


$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$id_categorias = isset($_POST['id_categorias']) ? $_POST['id_categorias'] : "";
$precio = isset($_POST['precio']) ? $_POST['precio'] : "";
$stock = isset($_POST['stock']) ? $_POST['stock'] : "";
$imagen = isset($_FILES['imagen']) ? $_FILES['imagen'] : "";



if ($_POST) {
  /* Nombre 3 o más caracteres */
  if (!$nombre) {
    $errors['nombre'] = "Debes ingresar un nombre.";
  }


  /* Email en formato válido */
  if (!$id_categorias) {
    $errors['id_categorias'] = "Debes ingresar una categoria.";
  }

  /* Dirección 5 o más caracteres */
  if (!$precio) {
    $errors['precio'] = "Debes ingresar un precio.";
  }

  /* Localidad 5 o más caracteres */
  if (!$stock) {
    $errors['stock'] = "Debes ingresar stock.";
  }

  // Imagen del proyecto, es obligatoria.
  if (!$imagen) {
    $errors['imagen'] = "Debes subir una imagen para tu producto.";
  } elseif ($imagen["error"] != UPLOAD_ERR_OK) {
    $errors['imagen'] = "Ocurrió un error al subir la imagen del producto.";
  }
}


if (!$errors && !empty($_POST)) {
  // Tomamos los datos originales de la imagen.
  $oldPath = $imagen["tmp_name"];
  $oldName = $imagen["name"];
  $extension = pathinfo($oldName, PATHINFO_EXTENSION);

  // Formamos el nuevo nombre y el nuevo path a donde quedará guardada.
  $newName = uniqid('product-img-') . "." . $extension;
  $newPath = IMAGE_DIR . $newName;

  // Guardamos la imagen en su path final y la agregamos al array de usuario.
  move_uploaded_file($oldPath, $newPath);

  $datos = $db->prepare('INSERT INTO productos values (NULL, :nombre, :cantidad, :categoria, :precio, :stock, :imagen)');

  $datos->bindValue(":nombre", $_POST['nombre']);
  $datos->bindValue(":cantidad", 0);
  $datos->bindValue(":categoria", $_POST['id_categorias']);
  $datos->bindValue(":precio", $_POST['precio']);
  $datos->bindValue(":stock", $_POST['stock']);
  $datos->bindValue(":imagen", $newName);


  if($datos->execute()){
    $mensaje = "El producto se cargó correctamente";
  };
}
   ?>



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
    <form enctype="multipart/form-data" action="" method="post">
      <label for="nombre" id="nombre" class="items">
        <p>Nombre del producto</p>
      </label>
      <input type="text" name="nombre" value="<?php echo $nombre ?>">
      <?php if (isset($errors['nombre'])) : ?>
        <p class="errors"><?php echo $errors['nombre'] ?></p>
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
      <input type="text" name="precio" value="<?php echo $precio ?>">
      <?php if (isset($errors['precio'])) : ?>
        <p class="errors"><?php echo $errors['precio'] ?></p>
      <?php endif; ?>

      <label for="stock" id="stock" class="items">
        <p>Stock</p>
      </label>
      <input type="text" name="stock" value="<?php echo $stock ?>">
      <?php if (isset($errors['stock'])) : ?>
        <p class="errors"><?php echo $errors['stock'] ?></p>
      <?php endif; ?>

      <label> Imagen
        <input type="file" name="imagen">
      </label>

      <?php if (isset($errors['imagen'])) : ?>
        <p class="errors"><?php echo $errors['imagen'] ?></p>
      <?php endif; ?>

      <button type="submit" name="button" class="btn btn-success btn-form">Guardar</button>
    </form>
  </div>
</main>
<?php require "includes/footer.php"; ?>
