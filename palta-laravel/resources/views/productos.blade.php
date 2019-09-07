@extends('plantilla')
@section('titulo')
  PALTA - Producto
@endsection


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



@endsection
