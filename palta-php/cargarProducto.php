<?php require "includes/header.php";

  $errors = [];

  $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";

  $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : "";

  $id_categoria = isset($_POST['id_categoria']) ? $_POST['id_categoria'] : "";

  $confirm = isset($_POST['confirm']) ? $_POST['confirm'] : "";


  if ($_POST) {
    /* Nombre 3 o más caracteres */
    if (!$nombre) {
      $errors['nombre'] = "Debes ingresar un nombre.";
    } elseif (strlen($nombre) < 3) {
      $errors['nombre'] = "El nombre debe tener al menos 3 caracteres";
    }


    /* cantidad mas de 1 kg */
    if (!$cantidad) {
      $errors['cantidad'] = "Debes ingresar cantidad.";
    } elseif (strlen($cantidad) < 0) {
      $errors['cantidad'] = "Debe haber mas de un 1 kg";
    }

    /* categoria */
    if (!$id_categoria) {
      $errors['id_categoria'] = "Debes ingresar una categoria.";
    } elseif (strlen($id_categoria) < 0) {
      $errors['cantidad'] = "Debe ingrasar una categoria";
    }

    /* precio mayor a 0*/
    if (!$precio) {
      $errors['precio'] = "Debes ingresar precio.";
    } elseif (strlen($precio) < 0) {
      $errors['precio'] = "Debe valer mas de 0";
    }
    /* stock mayor a 0*/
    if (!$stock) {
      $errors['stock'] = "Debes ingresar stock.";
    } elseif (strlen($stock) < 0) {
      $errors['stock'] = "Debe valer mas de 0";
    }



    $datos = $db->prepare('INSERT INTO productos values (0, :nombre, :cantidad, :id_categorias, :precio, :stock)');

    $datos->bindValue(":nombre", $nombre);
    $datos->bindValue(":cantidad", $cantidad);
    $datos->bindValue(":id_categorias", $id_categorias);
    $datos->bindValue(":precio", $precio);
    $datos->bindValue(":stock", $stock);


    $datos->execute();


   ?>



<div class="container-fluid sectionHeader">
  <h1 class="text-center">Cargar Producto</h1>
</div>

  <div class="container form col-xs-8 col-lg-5 formSection">
    <h4>Completá los siguientes datos para cargar tu producto.</h4>
    <form action="" method="post">
      <label for="nombre" id="nombre" class="items">
        <p>Nombre</p>
      </label>
      <input type="text" name="nombre" value="<?php echo $nombre ?>">
      <?php if (isset($errors['nombre'])) : ?>
        <p class="errors"><?php echo $errors['nombre'] ?></p>
      <?php endif; ?>

      <label for="cantidad" id="cantidad" class="items">
        <p>Cantidad</p>
      </label>
      <input type="text" name="cantidad" value="<?php echo $cantidad ?>">
      <?php if (isset($errors['cantidad'])) : ?>
        <p class="errors"><?php echo $errors['cantidad'] ?></p>
      <?php endif; ?>

      <label for="id_categoias" id="id_categorias" class="items">
        <p>Categorias</p>
      </label>
      <input type="id_categorias" name="id_categorias" value="<?php echo $id_categorias ?>">
      <?php if (isset($errors['id_categorias'])) : ?>
        <p class="errors"><?php echo $errors['id_categorias'] ?></p>
      <?php endif; ?>

      <label for="precio" id="precio" class="items">
        <p>Precio</p>
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

      <button type="submit" name="button" class="btn btn-success btn-form">Guardar</button>
    </form>
  </div>

<?php require "includes/footer.php"; ?>
