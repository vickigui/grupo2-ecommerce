<?php require "includes/header.php";
  session_start();

  //Traer usuario con el mail y confirmar pass

if (!empty($_POST['mail']) && !empty($_POST['password'])) {
  $logIn = $db->prepare("SELECT id_usuarios, email, password FROM usuarios WHERE email IS :email");
  $logIn->bindValue(":email", $_POST['mail']);
  $logIn->execute();
  $usuario = $logIn->fetch(PDO::FETCH_ASSOC);

  $redirect = " ";

  if (count($usuario) > 0 && password_verify($_POST["password"], $usuario["pass"])) {
    $_SESSION["usuario_id"] = $usuario["id"];
    $redirect = "index.php";
  } else {
    $redirect = "login.php";
  }
}


?>

<main>
  <div class="container-fluid sectionHeader">
    <h1 class="text-center">Iniciar Sesión</h1>
  </div>

  <div class="container form col-xs-8 col-lg-5 formSection">
    <form action="<?php if (!empty($redirect)): echo $redirect; endif; ?>" method="post">
      <label for="mail" id="mail" class="items">
        <p>E-mail</p>
      </label>
      <input type="mail" name="mail" value="">

      <label for="password" id="password" class="items">
        <p>Contraseña</p>
      </label>
      <input type="password" name="password" value="">

      <button type="submit" name="button" class="btn btn-success btn-form">Ingresar</button>

      <div class="createAccount">
        <p>¿Aún no tienes cuenta?</p>
        <a href="registro.php">¡Creala ahora!</a>
      </div>
    </form>
  </div>
</main>

<?php require "includes/footer.php"; ?>
