@extends('layouts/admin')
@section('title', 'PALTA - Administrador')
@section('contenido')

  <div class="container-fluid sectionHeaderAdmin">
  <h1 class="text-center">Productos</h1>
  </div>


  <div class="container">
      <div class="row">
              @forelse ($productos as $producto)
              <div class="col-lg-3 col-md-4 col-xs-6 thumb filter {{$producto['id_categorias'] }} text-center">
                <img class="img-thumbnail" src="/storage/{{$producto->imagen}}">
                  <h2>{{$producto["nombre"]}}</h2>
                  <p>Stock: {{$producto["stock"]}} k.</p>
                  <p>Precio: ${{$producto["precio"]}}</p>
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
