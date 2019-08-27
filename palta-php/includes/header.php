<?php
  session_start();
  include_once "database/db.php";

  // if(isset($_SESSION['usuario_id'])) {
  //   $login = $db->prepare('SELECT * FROM usuarios WHERE id_usuarios = :id');
  //   $login->bindValue(":id", $_SESSION['usuario_id']);
  //   $login->execute();
  //   $usuario = $login->fetch(PDO::FETCH_ASSOC);
  //
  //   $user = null;
  //
  //   if(count($usuario) > 0) {
  //     $user = $usuario;
  //   }
  // }
 ?>
 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PALTA - 100% Productos Orgánicos</title>

    <link rel="shortcut icon" href="images/common/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/common.css">
    <link rel="stylesheet" href="styles/common2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="styles/fontawesome/css/all.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </head>

  <body>
    <header>
     <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
       <a class="navbar-brand" href="index.php"><img src="images/common/logo-palta.png" width=80px;></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="nosotros.php">NOSOTROS</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="productos.php">PRODUCTOS</a>

             <!--div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  PRODUCTOS
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="productos.php">Verduras</a>
                  <a class="dropdown-item" href="productos.php">Fruta</a>
                  <a class="dropdown-item" href="productos.php">Almacén</a>
                </div>
              </div-->
           </li>
           <!--li class="nav-item">
             <a class="nav-link" href="promos.php">PROMOS</a>
           </li-->
           <li class="nav-item">
             <a class="nav-link" href="recetas.php">RECETAS</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="contacto.php">CONTACTO</a>
           </li>
         </ul>


         <div class="user">
           <div class="dropdown">
              <a class="nav-link dropdown-toggle user" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu user-nav" aria-labelledby="dropdownMenuLink">
                <?php if(isset($_SESSION['usuario_id'])): ?>
                  <a class="dropdown-item" href="perfil-usuario.php">Mi Perfil</a>
                  <a class="dropdown-item" href="logout.php">Cerrar Sesión</a>
                <?php else: ?>
                  <a class="dropdown-item" href="login.php">Login</a>
                  <a class="dropdown-item" href="registro.php">Registrate</a>
              <?php endif; ?>
              </div>
            </div>


         </div>

         <div class="carrito">
           <a class="nav-link" data-toggle="tooltip" title="Mi Carrito"  href="miCarrito.php">
             <i class="fas fa-shopping-cart"></i>
           </a>
         </div>
       </div>
     </nav>
   </header>
