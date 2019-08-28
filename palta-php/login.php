<?php require "includes/header.php";

  //Traer usuario con el mail y confirmar pass

if (!empty($_POST['mail']) && !empty($_POST['password'])) {
  $logIn = $db->prepare('SELECT * FROM usuarios WHERE email = :email');
  $logIn->bindValue(":email", $_POST['mail']);
  $logIn->execute();
  $usuario = $logIn->fetch(PDO::FETCH_ASSOC);

  $mensaje = "";

  if (count($usuario) > 0 && password_verify($_POST["password"], $usuario["pass"])) {
      $_SESSION["usuario_id"] = $usuario["id_usuarios"];
      header("Location: index.php");
      exit();
  } else {
      $mensaje = "Los datos no son correctos";
  }
}
?>

<main>
  <div class="container-fluid sectionHeader">
    <h1 class="text-center">Iniciar Sesión</h1>
  </div>

  <div class="container form col-xs-8 col-lg-5 formSection">
    <form action="" method="post">
      <label for="mail" id="mail" class="items">
        <p>E-mail</p>
      </label>
      <input type="mail" name="mail" value="">

      <label for="password" id="password" class="items">
        <p>Contraseña</p>
      </label>
      <input type="password" name="password" value="">

      <button type="submit" name="button" class="btn btn-success btn-form">Ingresar</button>

      <?php if (!empty($mensaje)) :?>
        <p class="errors"><?= $mensaje ?></p>
      <?php endif; ?>

      <div class="createAccount">
        <p>¿Aún no tienes cuenta?</p>
        <a href="registro.php">¡Creala ahora!</a>
      </div>
    </form>

  </div>
</main>

<?php require "includes/footer.php"; ?>
