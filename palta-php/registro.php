<?php require "includes/header.php";

  $errors = [];

  $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
  $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
  $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
  $address = isset($_POST['address']) ? $_POST['address'] : "";
  $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : "";
  $tel = isset($_POST['tel']) ? $_POST['tel'] : "";
  $password = isset($_POST['password']) ? $_POST['password'] : "";
  $confirm = isset($_POST['confirm']) ? $_POST['confirm'] : "";

  if ($_POST) {
    /* Nombre 3 o más caracteres */
    if (!$nombre) {
      $errors['nombre'] = "Debes ingresar un nombre.";
    } elseif (strlen($nombre) < 3) {
      $errors['nombre'] = "El nombre debe tener al menos 3 caracteres";
    }

    /* Apellido 3 o más caracteres */
    if (!$apellido) {
      $errors['apellido'] = "Debes ingresar un apellido.";
    } elseif (strlen($apellido) < 3) {
      $errors['apellido'] = "El apellido debe tener al menos 3 caracteres";
    }

    /* Email en formato válido */
    if (!$mail) {
      $errors['mail'] = "Debes ingresar un email.";
    } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $errors['mail'] = "El email deber tener un formato válido.";
    }

    /* Dirección 5 o más caracteres */
    if (!$address) {
      $errors['address'] = "Debes ingresar una dirección.";
    } elseif (strlen($address) < 5) {
      $errors['address'] = "Hay un error en la dirección";
    }

    /* Localidad 5 o más caracteres */
    if (!$localidad) {
      $errors['localidad'] = "Debes ingresar una localidad.";
    } elseif (strlen($localidad) < 5) {
      $errors['localidad'] = "Hay un error en la localidad";
    }


    /* Teléfono 8 o más caracteres */
    if (!$tel) {
      $errors['tel'] = "Debes ingresar un teléfono.";
    } elseif (strlen($tel) < 8) {
      $errors['tel'] = "Hay un error en el teléfono";
    }

    /* Password 8 o más caracteres */
    if (!$password) {
      $errors['password'] = "Debes ingresar una contraseña.";
    } elseif (strlen($password) < 8) {
      $errors['password'] = "La contraseña debe tener al menos 8 caracteres";
    }

    /*Validar password*/
    if (!$confirm) {
        $errors['confirm'] =  "Confirma la contraseña";
    } else if ($_POST["password"] !== $_POST["confirm"]) {
      $errors['confirm'] =  "Las contraseñas no coinciden";
    }
  }

?>

<!--
  <div class="errors">
    <ul>
      <?php foreach ($errors as $field => $error) : ?>
        <li><?php echo $error ?></li>
      <?php endforeach ?>
    </ul>
  </div>
  -->

  <?php
  $datos = $db->prepare('INSERT INTO usuarios values (0, :nombre, :apellido, :mail, :address, :localidad, :tel, :password)');

  $datos->bindValue(":nombre", $nombre);
  $datos->bindValue(":apellido", $apellido);
  $datos->bindValue(":mail", $mail);
  $datos->bindValue(":address", $address);
  $datos->bindValue(":localidad", $localidad);
  $datos->bindValue(":tel", $tel);
  $datos->bindValue(":password", $password);

  $datos->execute();
   ?>



<div class="container-fluid sectionHeader">
  <h1 class="text-center">Registrate</h1>
</div>

  <div class="container form col-xs-8 col-lg-5 formSection">
    <h4>Completá los siguientes datos para empezar.</h4>
    <form action="" method="post">
      <label for="nombre" id="nombre" class="items">
        <p>Nombre</p>
      </label>
      <input type="text" name="nombre" value="<?php echo $nombre ?>">
      <?php if (isset($errors['nombre'])) : ?>
        <p class="errors"><?php echo $errors['nombre'] ?></p>
      <?php endif; ?>

      <label for="apellido" id="apellido" class="items">
        <p>Apellido</p>
      </label>
      <input type="text" name="apellido" value="<?php echo $apellido ?>">
      <?php if (isset($errors['apellido'])) : ?>
        <p class="errors"><?php echo $errors['apellido'] ?></p>
      <?php endif; ?>

      <label for="mail" id="mail" class="items">
        <p>E-mail</p>
      </label>
      <input type="mail" name="mail" value="<?php echo $mail ?>">
      <?php if (isset($errors['mail'])) : ?>
        <p class="errors"><?php echo $errors['mail'] ?></p>
      <?php endif; ?>

      <label for="address" id="address" class="items">
        <p>Dirección</p>
      </label>
      <input type="text" name="address" value="<?php echo $address ?>">
      <?php if (isset($errors['address'])) : ?>
        <p class="errors"><?php echo $errors['address'] ?></p>
      <?php endif; ?>

      <label for="localidad" id="localidad" class="items">
        <p>Localidad</p>
      </label>
      <input type="text" name="localidad" value="<?php echo $localidad ?>">
      <?php if (isset($errors['localidad'])) : ?>
        <p class="errors"><?php echo $errors['localidad'] ?></p>
      <?php endif; ?>

      <label for="tel" id="tel" class="items">
        <p>Teléfono</p>
      </label>
      <input type="tel" name="tel" value="<?php echo $tel ?>">
      <?php if (isset($errors['tel'])) : ?>
        <p class="errors"><?php echo $errors['tel'] ?></p>
      <?php endif; ?>

      <label for="password" id="password" class="items">
        <p>Contraseña</p>
      </label>
      <input type="password" name="password" value="<?php echo $password ?>">
      <?php if (isset($errors['password'])) : ?>
        <p class="errors"><?php echo $errors['password'] ?></p>
      <?php endif; ?>

      <label for="confirm" id="confirm" class="items">
        <p>Repetir contraseña</p>
      </label>
      <input type="password" name="confirm" value="<?php echo $confirm ?>">
      <?php if (isset($errors['confirm'])) : ?>
        <p class="errors"><?php echo $errors['confirm'] ?></p>
      <?php endif; ?>

      <button type="submit" name="button" class="btn btn-success btn-form">Enviar</button>
    </form>
  </div>

<?php require "includes/footer.php"; ?>
