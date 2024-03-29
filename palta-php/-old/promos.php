<?php require "includes/header.php"; ?>

  <div class="container-fluid">

    <div class="container-fluid sectionHeader">
      <h1 class="text-center">Promos</h1>
    </div>

    <div class="text-right">

      <ul class="nav nav-pills success nav-fill">
        <li class="nav-item">
          <a class="nav-link btn btn-outline-success" href="#">Verduras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-success active" href="#">Frutas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-success" href="#">Almacen</a>
        </li>

    </div>
    <br>
    <div class="main">
<div class="card-group">

  <div class="card col-sm-12 col-md-6 col-lg-4">
  <img src="images/palta.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Canasta 1</h5>
    <div class="text-right">
      <select class="form-control" id="cantidad">
           <option>1</option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
           <option>5</option>
         </select>
      <a href="#" class="btn btn-success">Quitar</a>
      <a href="#" class="btn btn-success">Agregar</a>
    </div>
  </div>
</div>
<div class="card col-sm-12 col-md-6 col-lg-4">
<img src="images/palta.jpg" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Canasta 2</h5>
  <div class="text-right">
    <select class="form-control" id="cantidad">
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
         <option>5</option>
       </select>
    <a href="#" class="btn btn-success">Quitar</a>
    <a href="#" class="btn btn-success">Agregar</a>
  </div>
</div>
</div>
<div class="card col-sm-12 col-md-6 col-lg-4">
<img src="images/palta.jpg" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Canasta 3</h5>
  <div class="text-right">
    <select class="form-control" id="cantidad">
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
         <option>5</option>
       </select>
    <a href="#" class="btn btn-success">Quitar</a>
    <a href="#" class="btn btn-success">Agregar</a>
  </div>
</div>
</div>
<div class="card col-sm-12 col-md-6 col-lg-4">
<img src="images/palta.jpg" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Canasta 4</h5>
  <div class="text-right">
    <select class="form-control" id="cantidad">
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
         <option>5</option>
       </select>
    <a href="#" class="btn btn-success">Quitar</a>
    <a href="#" class="btn btn-success">Agregar</a>
  </div>
</div>
</div>


</div>



    </div>


  <div class="text-right">

    <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-success">Cancelar</button>
      <button type="button" class="btn btn-success">Finalizar</button>
      <button type="button" class="btn btn-success">Seguir Comprando</button>
    </div>
  </div>


</div>

<?php require "includes/footer.php"; ?>
