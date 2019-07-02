<?php require "includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script
      src="https://code.jquery.com/jquery-1.12.4.js"
      integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
      crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/common.css">

    <title> Verduleria Online</title>
  </head>
  <body>
    <header>
      <?php require "includes/header.php"; ?>
    </header>
    <main>
      <div class="container">
        <div class="container-fluid sectionHeader">
    <h1 class="text-center">Nuestros Productos</h1>
        </div>
        <div class="text-right">
          <ul class="nav nav-pills success nav-fill">
            <li class="nav-item">
              <a class="nav-link btn btn-outline-success" href="#frutas">Frutas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-outline-success active" href="#verduras">Verduras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-outline-success" href="#almacen">Almacen Orgánico</a>
            </li>
          </ul>
        </div>
      </div>
        <br>
        <section>
          <ul>
            <li class="d-inline">
              <div class="container">
                <h2 id="frutas">Frutas</h2>
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <div class="card mb-4 shadow-sm">
                    <img src="images/productos/limon.jpg" alt="foto limón">
                  <a href="">
                    <h4> Limón </h4>
                  </a>
                  Descripción/Precio por cantidad
                    <div class="text-right">
                      <select class="form-control" id="cantidad">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                         </select>
                      <a href="#" class="btn btn-secondary">Quitar</a>
                      <a href="#" class="btn btn-success">Agregar</a>
                    </div>
                    </div>
                  </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card mb-4 shadow-sm">
                    <img src="images/productos/banana.jpg" alt="foto banana">
                    <a href="#">
                      <h4> Banana </h4>
                    </a>
                    Descripción/Precio por cantidad
                    <div class="text-right">
                      <select class="form-control" id="cantidad">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                         </select>
                      <a href="#" class="btn btn-secondary">Quitar</a>
                      <a href="#" class="btn btn-success">Agregar</a>
                    </div>
                    </div>
                  </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card mb-4 shadow-sm">
                    <img src="images/productos/manzana.jpg" alt="foto manzana">
                    <a href="#">
                      <h4> Manzana </h4>
                    </a>
                  Descripción/Precio por cantidad
                    <div class="text-right">
                      <select class="form-control" id="cantidad">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                         </select>
                      <a href="#" class="btn btn-secondary">Quitar</a>
                      <a href="#" class="btn btn-success">Agregar</a>
                    </div>
                    </div>
                  </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card mb-4 shadow-sm">
                    <img src="images/productos/mandarina.jpg" alt="foto mandarina">
                  <a href="#">
                    <h4> Mandarina </h4>
                  </a>
                  Descripción/Precio por cantidad
                  <div class="text-right">
                    <select class="form-control" id="cantidad">
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5</option>
                       </select>
                    <a href="#" class="btn btn-secondary">Quitar</a>
                    <a href="#" class="btn btn-success">Agregar</a>
                  </div>
                    </div>
                  </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card mb-4 shadow-sm">
                    <img src="images/productos/pera.jpg" alt="foto pera">
                  <a href="#">
                    <h4> Pera </h4>
                  </a>
                  Descripción/Precio por cantidad
                  <div class="text-right">
                    <select class="form-control" id="cantidad">
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5</option>
                       </select>
                    <a href="#" class="btn btn-secondary">Quitar</a>
                    <a href="#" class="btn btn-success">Agregar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </li>
        </section>
        <section>
          <ul>
            <li class="d-inline">
              <div class="container">
                <h2 id="verduras"> Verduras</h2>
                  <div class="row">
                    <div class="col-lg-4 col-md-6">
                      <div class="card mb-4 shadow-sm">
                      <img src="images/productos/lechuga.jpg" alt="foto lechuga">
                    <a href="#">
                      <h4> Lechuga </h4>
                    </a>
                    Descripción/Precio por cantidad
                    <div class=" text-right">
                      <select class="form-control" id="cantidad">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                         </select>
                      <a href="#" class="btn btn-secondary">Quitar</a>
                      <a href="#" class="btn btn-success">Agregar</a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="card mb-4 shadow-sm">
                      <img src="images/productos/batata.jpg" alt="foto batata">
                    <a href="#">
                      <h4> Batata </h4>
                    </a>
                    Descripción/Precio por cantidad
                      <div class="text-right">
                        <select class="form-control" id="cantidad">
                             <option>1</option>
                             <option>2</option>
                             <option>3</option>
                             <option>4</option>
                             <option>5</option>
                           </select>
                        <a href="#" class="btn btn-secondary">Quitar</a>
                        <a href="#" class="btn btn-success">Agregar</a>
                      </div>
                    </div>
                  </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-4 shadow-sm">
                <img src="images/productos/cebolla.jpg" alt="foto cebolla">
                <a href="#">
                  <h4> Cebolla </h4>
                </a>
                Descripción/Precio por cantidad
                <div class="text-right">
                  <select class="form-control" id="cantidad">
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       <option>5</option>
                     </select>
                  <a href="#" class="btn btn-secondary">Quitar</a>
                  <a href="#" class="btn btn-success">Agregar</a>
                </div>
                </div>
              </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-4 shadow-sm">
                <img src="images/productos/morron.jpg" alt="foto morron">
                <a href="#">
                  <h4> Morrón </h4>
                </a>
                Descripción/Precio por cantidad
                <div class="text-right">
                  <select class="form-control" id="cantidad">
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       <option>5</option>
                     </select>
                  <a href="#" class="btn btn-secondary">Quitar</a>
                  <a href="#" class="btn btn-success">Agregar</a>
                </div>
                </div>
              </div>
            <div class="col-lg-4 col-md-6">
              <div class="card mb-4 shadow-sm">
                <img src="images/productos/papa.jpg" alt="foto papa">
                <a href="#">
                  <h4> Papa </h4>
                </a>
                Descripción/Precio por cantidad
                <div class="text-right">
                  <select class="form-control" id="cantidad">
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       <option>5</option>
                     </select>
                  <a href="#" class="btn btn-secondary">Quitar</a>
                  <a href="#" class="btn btn-success">Agregar</a>
              </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="card mb-4 shadow-sm">
                  <img src="images/productos/tomate.jpg" alt="foto tomate">
                  <a href="#">
                    <h4> Tomate </h4>
                  </a>
                  Descripción/Precio por cantidad
                  <div class="text-right">
                    <select class="form-control" id="cantidad">
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5</option>
                       </select>
                    <a href="#" class="btn btn-secondary">Quitar</a>
                    <a href="#" class="btn btn-success">Agregar</a>
                </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card mb-4 shadow-sm">
                    <img src="images/productos/zanahoria.jpg" alt="foto zanahoria">
                    <a href="#">
                      <h4> Zanahoria </h4>
                    </a>
                    Descripción/Precio por cantidad
                    <div class="text-right">
                      <select class="form-control" id="cantidad">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                         </select>
                      <a href="#" class="btn btn-secondary">Quitar</a>
                      <a href="#" class="btn btn-success">Agregar</a>
                  </div>
                    </div>
                  </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card mb-4 shadow-sm">
                    <img src="images/productos/zapallo.jpg" alt="foto zapallo">
                    <a href="#">
                      <h4> Zapallo </h4>
                    </a>
                    Descripción/Precio por cantidad
                    <div class="text-right">
                      <select class="form-control" id="cantidad">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                         </select>
                      <a href="#" class="btn btn-secondary">Quitar</a>
                      <a href="#" class="btn btn-success">Agregar</a>
                  </div>
                    </div>
                  </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card mb-4 shadow-sm">
                    <img src="images/productos/zucchini.jpg" alt="foto zucchini">
                    <a href="#">
                      <h4> Zucchini </h4>
                    </a>
                    Descripción/Precio por cantidad
                    <div class="text-right">
                      <select class="form-control" id="cantidad">
                           <option>1</option>
                           <option>2</option>
                           <option>3</option>
                           <option>4</option>
                           <option>5</option>
                         </select>
                      <a href="#" class="btn btn-secondary">Quitar</a>
                      <a href="#" class="btn btn-success">Agregar</a>
                    </div>
                    </div>
                  </div>
                </li>
              </ul>
</section>
<section>
  <div class="container">
    <h2 id="almacen"> Almacén orgánico </h2>
    <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="card mb-4 shadow-sm">
        <img src="images/productos/huevos.jpg" alt="foto huevos">
        <a href="#">
          <h4> Huevos </h4>
        </a>
        Descripción/Precio por cantidad
        <div class="text-right">
          <select class="form-control" id="cantidad">
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
             </select>
          <a href="#" class="btn btn-secondary">Quitar</a>
          <a href="#" class="btn btn-success">Agregar</a>
      </div>
                 </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
  </body>
</html>


<?php require "includes/footer.php"; ?>

