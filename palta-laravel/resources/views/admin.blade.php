@extends('layouts/admin')
@section('title', 'PALTA - Administrador')
@section('contenido')

  <div class="container-fluid sectionHeaderAdmin">
  <h1 class="text-center">Productos</h1>
  </div>


  <div class="container">
      <div class="row">
              @forelse ($productos as $producto)
              <div class="col-lg-3 col-md-4 col-xs-6 thumb filter {{$producto['id_categorias'] }} ">
                <img class="img-thumbnail" src="/storage/{{$producto->imagen}}">

                      <h4>{{$producto["nombre"]}}</h4>
                          <h4>Stock: {{$producto["stock"]}} k.</h4>
                          <h4>Precio: ${{$producto["precio"]}}</h4>
                           <div class="botones-productos">

                             <a href="#" class="btn btn-info">MODIFICAR</a>
                           </div>

              </div>

              @empty
                <p>No hay productos disponibles</p>
              @endforelse

        </div>
    </div>


  @endsection
