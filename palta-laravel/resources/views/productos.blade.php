@extends('layouts/plantilla')

<<<<<<< HEAD
@php
  $title="PALTA-Produtos";
@endphp
=======
<?php $title = "PALTA - Producto"; ?>
>>>>>>> d8101d9c184c0da7cbf7e40277970eeaf3bcba14

@section('contenido')
<h1>Productos</h1>
<ul>
  @forelse ($productos as $producto)
    <li>
      {{$producto["nombre"]}}
    </li>

  @empty
    <p>NO hay productos disponibles</p>
  @endforelse
</ul>

<<<<<<< HEAD
        </div>
      </div>


=======


<<<<<<< HEAD
    	  			<div align="center">
    				    <button class="btn btn-secondary active filter-button" data-filter="todo">Todo</button>
    				    <button class="btn btn-secondary filter-button" data-filter="frutas">Frutas</button>
    				    <button class="btn btn-secondary filter-button " data-filter="verduras">Verduras</button>
    				    <button class="btn btn-secondary filter-button" data-filter="almacen">Almacen Orgánico</button>

    						<div class="row">
    							<div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb filter frutas ">
                        <img class="img-thumbnail" src="images/productos/canasta1.jpg" alt="Canasta">
                            <div class="selector-cantidad">
                              <select class="form-control" id="cantidad">
                                  <option>1</option>
                                   <option>2</option>
                               </select>
                              <label>Canasta</label>
                            </div>
                             <div class="botones-productos">
                               <a href="#" class="btn btn-outline-secondary">Quitar</a>
                               <a href="#" class="btn btn-success">Agregar</a>
                             </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6 thumb filter frutas ">
                        <img class="img-thumbnail" src="images/productos/canasta2.jpg" alt="Canasta">
                            <div class="selector-cantidad">
                              <select class="form-control" id="cantidad">
                                  <option>1</option>
                                   <option>2</option>
                               </select>
                              <label>Canasta</label>
                            </div>
                             <div class="botones-productos">
                               <a href="#" class="btn btn-outline-secondary">Quitar</a>
                               <a href="#" class="btn btn-success">Agregar</a>
                             </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6 thumb filter frutas ">
                        <img class="img-thumbnail" src="images/productos/canasta3.jpg" alt="Canasta">
                            <div class="selector-cantidad">
                              <select class="form-control" id="cantidad">
                                  <option>1</option>
                                   <option>2</option>
                               </select>
                              <label>Canasta</label>
                            </div>
                             <div class="botones-productos">
                               <a href="#" class="btn btn-outline-secondary">Quitar</a>
                               <a href="#" class="btn btn-success">Agregar</a>
                             </div>
                    </div>


                          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter frutas ">
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
                          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter frutas ">
                              <img class="img-thumbnail" src="images/productos/banana.jpg" alt="Banana">
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
                          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter frutas ">
                              <img class="img-thumbnail" src="images/productos/manzana.jpg" alt="Manzana">
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
                          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter frutas ">
                              <img class="img-thumbnail" src="images/productos/mandarina.jpg" alt="Mandarina">
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

                          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter verduras ">
                              <img class="img-thumbnail" src="images/productos/lechuga.jpg" alt="Lechuga">
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
                          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter verduras ">
                              <img class="img-thumbnail" src="images/productos/batata.jpg" alt="Batata">
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
                          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter verduras ">
                              <img class="img-thumbnail" src="images/productos/cebolla.jpg" alt="cebolla">
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
                          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter verduras ">
                              <img class="img-thumbnail" src="images/productos/morron.jpg" alt="morron">
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

                          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter almacen ">
                              <img class="img-thumbnail" src="images/productos/huevos.jpg" alt="huevos">
                                  <div class="selector-cantidad">
                                    <select class="form-control" id="cantidad">
                                         <option>1/2</option>
                                         <option>1</option>
                                         <option>2</option>
                                     </select>
                                    <label>Docena</label>
                                  </div>
                                   <div class="botones-productos">
                                     <a href="#" class="btn btn-outline-secondary">Quitar</a>
                                     <a href="#" class="btn btn-success">Agregar</a>
                                   </div>
                          </div>
                          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter almacen ">
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




    					        </div>


    						</div>
    					</div>
    		    </div>
    		  </div>
    		</div>
  <script>
  let modalId = $('#image-gallery');

  $(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

  // build key actions
  $(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

  //Filter Button

  $(document).ready(function(){

  $(".filter-button").click(function(){
      var value = $(this).attr('data-filter');

      if(value == "todo")
      {
          //$('.filter').removeClass('hidden');
          $('.filter').show('1000');
      }
      else
      {
  //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
  //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
          $(".filter").not('.'+value).hide('3000');
          $('.filter').filter('.'+value).show('3000');

      }
  });

  });
  </script>


=======
>>>>>>> 70524d8c5a88b378648f541d4314f5965f05f426
>>>>>>> d8101d9c184c0da7cbf7e40277970eeaf3bcba14
@endsection
