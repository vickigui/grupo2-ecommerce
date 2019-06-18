<?php require "includes/header.php"; ?>

<div class="jumbotron jumbotron-fluid">
  <h1 class="display-4 text-center">¡ Registrate !</h1>
</div>
  <div class="container form col-xs-8 col-lg-5 formSection">
    <h4>Completá los siguientes datos para empezar.</h4>
    <form action="index.php" method="post">
      <label for="name" id="name" class="items">
        <p>Nombre y apellido</p>
      </label>
      <input type="text" name="name" value="">

      <label for="mail" id="mail" class="items">
        <p>E-mail</p>
      </label>
      <input type="mail" name="mail" value="">

      <label for="password" id="password" class="items">
        <p>Contraseña</p>
      </label>
      <input type="password" name="password" value="">

      <label for="password" id="password" class="items">
        <p>Repetir contraseña</p>
      </label>
      <input type="password" name="password" value="">

      <button type="submit" name="button" class="btn btn-success btn-form">Enviar</button>
    </form>
  </div>

<?php require "includes/footer.php"; ?>
