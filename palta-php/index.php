<?php require "includes/header.php";
?>

<main role="main">

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     <li data-target="#myCarousel" data-slide-to="1"></li>
     <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img class="img-responsive" src="images/common/slider-home/verduras.jpg">

       <div class="container">
         <div class="carousel-caption text-left">
           <h1>Bienvenido!</h1>
           <p>Hacé tu vida más saludable y práctica armando tu canasta semanal.</p>
           <p><a class="btn btn-lg btn-primary" href="registro.php" role="button">Registrate ahora!</a></p>
         </div>
       </div>
     </div>
     <div class="carousel-item">
       <img class="img-responsive" src="images/common/slider-home/picada.jpg">
       <div class="container">
         <div class="carousel-caption">
           <h1>Tenemos recetas para vos</h1>
           <p>Descargá de nuestra sección las recetas más ricas para hacer con los ingredientes mas sanos.</p>
           <p><a class="btn btn-lg btn-primary" href="recetas.php" role="button">Conocé más</a></p>
         </div>
       </div>
     </div>
     <div class="carousel-item">
        <img class="img-responsive" src="images/common/slider-home/citrico.jpg">
        <div class="container">
         <div class="carousel-caption text-right">
           <h1>Para combatir al invierno.</h1>
           <p>Preparate todos los días 1 vaso de jugo cítrico para mejorar tu sistema inmunológico!.</p>
           <p><a class="btn btn-lg btn-primary" href="productos.php" role="button">Ver Productos</a></p>
         </div>
       </div>
     </div>
   </div>
   <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Anterior</span>
   </a>
   <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Siguiente</span>
   </a>
 </div>


 <!-- Marketing messaging and featurettes
 ================================================== -->
 <!-- Wrap the rest of the page in another container to center all the content. -->

 <div class="container marketing">

   <!-- Three columns of text below the carousel -->
<h2 class="featurette-heading">Estas canastas<br> <span class="text-muted">No te pueden faltar</span></h2>

   <div class="row">
           <div class="col-md-4">
             <div class="card mb-4 shadow-sm">
               <img class="bd-placeholder-img rounded" width="100%" height="225" src="images/common/vegetables.jpg">
               <div class="card-body">
                 <h2>Canasta nº1</h2>
                 <p class="card-text">
                   <ul>
                      <li>VERDURITAS PARA SOPA 1 paquete</li>
                      <li>PAPA 1kg.</li>
                      <li>BATATA 500 gr.</li>
                      <li>ZAPALLO ANCO 1 unidad</li>
                      <li>ZANAHORIA 600 gr.</li>
                      <li>CEBOLLA 600 gr.</li>
                      <li>MORRON ROJO 1 unidad</li>
                      <li>TOMATES CHERRY 150 gr</li>
                      <li>y más!</li>
                   </ul>
               </p>
                 <div class="d-flex justify-content-between align-items-center float-right">
                   <div class="btn-group">
                     <a href="productos.php"><button type="button" class="btn btn-sm btn-outline-success">Ver más</button></a>
                    <a href="carrito.php"> <button type="button" class="btn btn-sm btn-outline-success">Comprar</button></a>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-md-4">
             <div class="card mb-4 shadow-sm">
               <img class="bd-placeholder-img rounded" width="100%" height="225" src="images/common/frutas.jpg">
               <div class="card-body">
                 <h2>Canasta nº2</h2>
                 <p class="card-text">
                   <ul>
                      <li>VERDURITAS PARA SOPA 1 paquete</li>
                      <li>PAPA 1kg.</li>
                      <li>BATATA 500 gr.</li>
                      <li>ZAPALLO ANCO 1 unidad</li>
                      <li>ZANAHORIA 600 gr.</li>
                      <li>CEBOLLA 600 gr.</li>
                      <li>MORRON ROJO 1 unidad</li>
                      <li>TOMATES CHERRY 150 gr</li>
                      <li>REPOLLITOS DE BRUCELAS 250 gr.</li>
                      <li>ZAPALLITOS 600 gr</li>
                      <li>TOMATE REDONDO 600 gr.</li>
                      <li>REPOLLO COLORADO 1/4 unidad.</li>
                      <li>REMOLACHA 500 gr</li>
                      <li>PUERRO 250 gr</li>
                      <li>LIMON 3 unidades</li>
                      <li>MANDARINA NOVA 700 gr.</li>
                      <li>PERAS 700 gr.</li>
                   </ul></p>
                 <div class="d-flex justify-content-between align-items-center float-right">
                   <div class="btn-group">
                     <a href="productos.php"><button type="button" class="btn btn-sm btn-outline-success">Ver más</button></a>
                    <a href="carrito.php"> <button type="button" class="btn btn-sm btn-outline-success">Comprar</button></a>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-md-4">
             <div class="card mb-4 shadow-sm">
              <img class="bd-placeholder-img rounded" width="100%" height="225" src="images/common/almacen.jpg">
               <div class="card-body">
                 <h2>Canasta nº3</h2>
                 <p class="card-text">
                   <ul>
                      <li>VERDURITAS PARA SOPA 1 paquete</li>
                      <li>PAPA 1kg.</li>
                      <li>BATATA 500 gr.</li>
                      <li>ZAPALLO ANCO 1 unidad</li>
                      <li>ZANAHORIA 600 gr.</li>
                      <li>CEBOLLA 600 gr.</li>
                      <li>MORRON ROJO 1 unidad</li>
                      <li>TOMATES CHERRY 150 gr</li>
                      <li>REPOLLITOS DE BRUCELAS 250 gr.</li>
                      <li>ZAPALLITOS 600 gr</li>
                      <li>TOMATE REDONDO 600 gr.</li>
                      <li>REPOLLO COLORADO 1/4 unidad.</li>
                      <li>REMOLACHA 500 gr</li>
                      <li>PUERRO 250 gr</li>
                      <li>LIMON 3 unidades</li>
                      <li>MANDARINA NOVA 700 gr.</li>
                      <li>PERAS 700 gr.</li>
                   </ul></p>
                 <div class="d-flex justify-content-between align-items-center float-right">
                   <div class="btn-group">
                     <a href="productos.php"><button type="button" class="btn btn-sm btn-outline-success">Ver más</button></a>
                    <a href="carrito.php"> <button type="button" class="btn btn-sm btn-outline-success">Comprar</button></a>
                   </div>
                 </div>
               </div>
             </div>
           </div>



         </div>
   <!-- START THE FEATURETTES -->

   <hr class="featurette-divider">

   <div class="row featurette">
     <div class="col-md-7">
       <h2 class="featurette-heading">Recetas organicas.<br> <span class="text-muted">Para esta época.</span></h2>
       <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
       <a href="recetas.php"><button type="button" class="btn btn-info ">Conocé Más</button></a>
     </div>
     <div class="col-md-5">
       <img src="images/recetas/pie.jpg" alt="">
     </div>
   </div>

   <hr class="featurette-divider">

   <div class="row featurette">
     <div class="col-md-5">
       <img src="images/nosotros.jpg" alt="">
     </div>
     <div class="col-md-7 bg-white">
       <h2 class="featurette-heading">Elegimos lo mejor. <span class="text-muted">Tenemos lo mejor.</span></h2>
       <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
     </div>

   </div>

   <hr class="featurette-divider">

   <!-- /END THE FEATURETTES -->

 </div><!-- /.container -->
</main>


<?php require "includes/footer.php"; ?>
