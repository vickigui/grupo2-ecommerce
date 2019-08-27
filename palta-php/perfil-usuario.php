<?php require "includes/header.php";?>

<main>
  <div class="container-fluid sectionHeader">
    <h1 class="text-center">Mi perfil</h1>
  </div>
<!-- tabla de productos comprados -->
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div align="center">
        <button class="btn btn-secondary">Mi perfil</button>
        <button class="btn btn-secondary">Favoritos</button>
        <a href="logout.php"><button class="btn btn-secondary" type="button">Cerrar sesión</button></a>
      </div>
    </div>
  </div>

  <br>

  <div class="text-center">
    <h4 class="card-title strog"><?= $usuario['nombre'] . " " . $usuario['apellido']?></h4>
    <h5>Mail:</h5>
    <p><?= $usuario['email']?></p>
    <h5>Dirección:</h5>
    <p><?= $usuario['direccion']?></p>
    <h5>Localidad:</h5>
    <p><?= $usuario['localidad']?></p>
    <h5>Teléfono:</h5>
    <p><?= $usuario['celular']?></p>
    <a href=""><button type="button" class="btn btn-sm btn-outline-success"><i class="far fa-edit"></i></button></a>
  </div>

  <br>


  </div>


<?php require "includes/footer.php"; ?>
