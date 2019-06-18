<?php require "includes/header.php"; ?>

<main>
  <div class="jumbotron jumbotron-fluid">
    <h1 class="display-4 text-center">Iniciar sesión</h1>
  </div>
  <div class="container form col-xs-8 col-lg-5 formSection">
    <h4>Dejanos tu consulta y nos pondremos en contacto con vos</h4>
    <form action="index.php" method="post">
      <label for="mail" id="mail" class="items">
        <p>E-mail</p>
      </label>
      <input type="mail" name="mail" value="">

      <label for="password" id="password" class="items">
        <p>Contraseña</p>
      </label>
      <input type="password" name="password" value="">

      <button type="submit" name="button" class="btn btn-success btn-form">Ingresar</button>
    </form>
  </div>
</main>

<?php require "includes/footer.php"; ?>
