@extends('layouts/plantilla')

@php
  $title="PALTA-Produtos";
@endphp

@section('contenido')
  <div class="container-fluid sectionHeader">
  <h1 class="text-center">Nuestros productos</h1>
</div>


<div class="container">
  <div class="row">
  @forelse ($productos as $producto)
 <div class="col-lg-3 col-md-4 col-xs-6 thumb filter {{$producto['id_categorias'] }} ">

      <h4>{{$producto["nombre"]}}</h4>
          <img class="img-thumbnail" src="/storage/{{$producto->imagen}}">
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
              <h4>${{$producto["precio"]}}</h4>
               <div class="botones-productos">

                 <a href="#" class="btn btn-success">Agregar al carrito</a>
               </div>

      </div>

  @empty
    <p>No hay productos disponibles</p>
  @endforelse

        </div>
      </div>


@endsection
