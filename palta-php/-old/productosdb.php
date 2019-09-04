<?php
 require_once "database/db.php";
 require_once "database/productos.php";

 $productos= allproducts($db);
?>

<?php require "includes/header.php"; ?>
  <div class="container-fluid sectionHeader">
    <h1 class="text-center">Nuestros productos</h1>
  </div>

  <div class="container">
  	<div class="row">
  		<div class="col-sm-12">
  			<div align="center">
			    <button class="btn btn-secondary active filter-button" data-filter="todo">Todo</button>
			    <button class="btn btn-secondary filter-button" data-filter="frutas">Frutas</button>
			    <button class="btn btn-secondary filter-button " data-filter="verduras">Verduras</button>
			    <button class="btn btn-secondary filter-button" data-filter="almacen">Almacen Orgánico</button>

 <?php foreach ($productos as $row){ ?>

          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter frutas ">
          <h4><?php echo $row['nombre'] ?></h4>
              <img class="img-thumbnail" src="images/productos/limon.jpg" alt="Limón">
                  <div class="selector-cantidad">
                    <select class="form-control" id="cantidad">
                         <option>0,25</option>
                         <option>0,50</option>
                         <option>0,75</option>
                         <option>1</option>
                         <option>2</option>
                     </select>
                    <label>Kilogramos</label>
                  </div>
                   <div class="botones-productos">
                     <a href="#" class="btn btn-outline-secondary">Quitar</a>
                     <a href="#" class="btn btn-success">Agregar</a>
                   </div>
          </div>
          <?php
           }
          ?>




                  </div>
				        </div>
  						</div>
  					</div>
  		    </div>
  		  </div>
  		</div>

  <?php require "includes/footer.php"; ?>
