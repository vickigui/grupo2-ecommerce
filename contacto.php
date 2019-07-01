    <?php require "includes/header.php"; ?>

      <div class="container-fluid sectionHeader">
        <h1 class="text-center">Contactanos</h1>
      </div>

      <div class="container form col-xs-8 col-lg-5 formSection">
        <h4>Dejanos tu consulta y nos pondremos en contacto con vos</h4>
        <form action="index.php" method="post">
          <label for="name" id="name" class="items">
            <p>Nombre y apellido</p>
          </label>
          <input type="text" name="name" value="">

          <label for="mail" id="mail" class="items">
            <p>E-mail</p>
          </label>
          <input type="mail" name="mail" value="">

          <label for="telephone" id="telephone" class="items">
            <p>Teléfono</p>
          </label>
          <input type="tel" name="telephone" value="">

          <label for="contactMessage" id="contactMessage" class="contactMessage">
            <p>Dejanos tu consulta</p>
          </label>
          <textarea name="contactMessage" rows="8"></textarea>

          <button type="submit" name="button" class="btn btn-success btn-form">Enviar</button>
        </form>
      </div>

    <?php require "includes/footer.php"; ?>
