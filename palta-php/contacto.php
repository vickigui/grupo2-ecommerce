    <?php require "includes/header.php";

      $errors = [];

      $user = isset($_POST['user']) ? $_POST['user'] : "";
      $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
      $tel = isset($_POST['tel']) ? $_POST['tel'] : "";
      $contactMessage = isset($_POST['contactMessage']) ? $_POST['contactMessage'] : "";

      if ($_POST) {
        /* Nombre 3 o más caracteres */
        if (!$user) {
          $errors['user'] = "Debes ingresar un nombre.";
        } elseif (strlen($user) < 3) {
          $errors['user'] = "El nombre debe tener al menos 3 caracteres";
        }

        /* Email en formato válido */
        if (!$mail) {
          $errors['mail'] = "Debes ingresar un email.";
        } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
          $errors['mail'] = "El email deber tener un formato válido.";
        }

        /* Teléfono 8 o más caracteres */
        if (!$tel) {
          $errors['tel'] = "Debes ingresar un teléfono.";
        } elseif (strlen($tel) < 8) {
          $errors['tel'] = "Hay un error en el teléfono";
        }

        /* Password 8 o más caracteres */
        if (!$contactMessage) {
          $errors['contactMessage'] = "Debes ingresar un mensaje.";
        } elseif (strlen($contactMessage) < 20) {
          $errors['contactMessage'] = "Creemos que hay un error en el mensaje!";
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


      <div class="container-fluid sectionHeader">
        <h1 class="text-center">Contactanos</h1>
      </div>

      <div class="container form col-xs-8 col-lg-5 formSection">
        <h4>Dejanos tu consulta y nos pondremos en contacto con vos</h4>
        <form action="" method="post">
          <label for="user" id="user" class="items">
            <p>Nombre y apellido</p>
          </label>
          <input type="text" name="user" value="">
          <?php if (isset($errors['user'])) : ?>
            <p class="errors"><?php echo $errors['user'] ?></p>
          <?php endif; ?>

          <label for="mail" id="mail" class="items">
            <p>E-mail</p>
          </label>
          <input type="mail" name="mail" value="">
          <?php if (isset($errors['mail'])) : ?>
            <p class="errors"><?php echo $errors['mail'] ?></p>
          <?php endif; ?>

          <label for="telephone" id="telephone" class="items">
            <p>Teléfono</p>
          </label>
          <input type="tel" name="telephone" value="">
          <?php if (isset($errors['tel'])) : ?>
            <p class="errors"><?php echo $errors['tel'] ?></p>
          <?php endif; ?>

          <label for="contactMessage" id="contactMessage" class="contactMessage">
            <p>Dejanos tu consulta</p>
          </label>
          <textarea name="contactMessage" rows="8"></textarea>
          <?php if (isset($errors['contactMessage'])) : ?>
            <p class="errors"><?php echo $errors['contactMessage'] ?></p>
          <?php endif; ?>

          <button type="submit" name="button" class="btn btn-success btn-form">Enviar</button>
        </form>
      </div>

    <?php require "includes/footer.php"; ?>
