<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
      @yield('titulo')
    </title>

    <link rel="shortcut icon" href="images/common/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/common2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/css/fontawesome/css/all.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
       $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
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
             <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/nosotros">NOSOTROS</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/productos">PRODUCTOS</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/recetas">RECETAS</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/contacto">CONTACTO</a>
           </li>
         </ul>


         <div class="user">
           <div class="dropdown">
              <a class="nav-link dropdown-toggle user" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu user-nav" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="/perfil">Mi Perfil</a>
                <a class="dropdown-item" href="/login">Login</a>
                <a class="dropdown-item" href="/register">Registrate</a>
                <a class="dropdown-item" href="/">Cerrar Sesión</a>
              </div>
            </div>


         </div>

         <div class="carrito">
           <a class="nav-link" data-toggle="tooltip" title="Mi Carrito"  href="/carrito">
             <i class="fas fa-shopping-cart"></i>
           </a>
         </div>
       </div>
     </nav>
   </header>

@yield('contenido')

<footer>
  <section class="section main">
    <div class="container">
      <div class="row">

        <div class="col-md-4 hidden-sm-down">
          <h1 class="title">PALTA</h1>
          <p>Una empresa comprometida con el medio ambiente y las futuras generaciones. Desde 2003 somos productores de hortalizas, frutas,  hierbas aromáticas y una gran variedad de productos de almacen de calidad.</p>
        </div>

        <div class="col-md-4 col-sm-12">
          <h1 class="title">Contacto</h1>
          <p><i class="fas fa-phone"></i> 0-800-88-PALTA </p>
          <p><i class="fab fa-lg fa-whatsapp"></i> +54 911 6900-7083</p>
          <p><a href="#" target="_blank" ><i class="fas fa-envelope"></i> verduleria@palta.com</a></p>
          <p><i class="fas fa-map"></i> Av. de los Lagos 345, Nordelta, Tigre</p>
          <p><a href="/faq" >Preguntas Frecuentes</a></p>
        </div>

        <div class="col-md-4 col-sm-12">
          <h1 class="title">Seguinos</h1>
          <p>Seguinos en nuestras redes sociales para enterarte de todas las novedades.</p>
          <p><a href="#" target="_blank"><i class="fab fa-lg fa-facebook-square"></i>Facebook</a></p>
          <p><a href="#" target="_blank" ><span class="icon is-medium is-left"><i class="fab fa-lg fa-instagram"></i> Instagram</a></p>
        </div>

      </div>
    </div>
  </section>

  <section class="section copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="level-item">
            <span><i class="fas fa-copyright"></i> 2019 PALTA 100% Orgánicos</span>
          </div>
        </div>
        <div class="col-md-4 hidden-sm-down">
          <div class="item">
            <img src="images/common/logo-organico-argentina.png" class="footer-logo">
          </div>
          <div class="item">
            <img src="images/common/logo-palta.png" class="footer-logo">
          </div>
        </div>
      </div>
    </div>
  </section>
</footer>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
</html>
