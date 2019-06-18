<?php require "includes/header.php"; ?>

  <div class="container form col-xs-8 col-lg-5 formSection">
    <div class="jumbotron">
      <h1>INICIAR SESIÓN</h1>
    </div>
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

<?php require "includes/footer.php"; ?>
