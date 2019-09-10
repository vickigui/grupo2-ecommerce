@extends('layouts/plantilla')
@section('title', 'PALTA - Administrador')
@section('contenido')

{{--Acá va contenido--}}
<div class="container-fluid sectionHeader">
<h1 class="text-center">Nuevo Producto</h1>
</div>
<ul class="errores">
  @foreach ($errors-> all() as $error)
    <li>
      {{$error}}
    </li>
  @endforeach

</ul>


<div class="container form col-xs-8 col-lg-5 formSection">
    <h4>Completá los siguientes datos para cargar tu producto.</h4>
    <form enctype="multipart/form-data" action="/cargarProducto" method="post">
      @csrf
      <label for="nombre" id="nombre" class="items">
        <p>Nombre del producto</p>
      </label>
      <input type="text" name="nombre" value="{{old("nombre")}}">

      <label  class="items">
        <p>Categoria</p>
        <select class="" name="id_categorias">
          <option value="">Seleccioná una categoria</option>
          <option value="fruta">Fruta</option>
          <option value="verdura">Verdura</option>
          <option value="almacen">Almacén</option>

        </select>
      </label>
      <br>

      <label for="precio" id="precio" class="items">
        <p>Precio por kilo</p>
      </label>
      <input type="text" name="precio" value="{{old("precio")}}">

      <label for="stock" id="stock" class="items">
        <p>Cantidad</p>
      </label>
      <input type="text" name="stock" value="{{old("stock")}}">

      <label> Imagen
        <input type="file" name="imagen">
      </label>



      <button type="submit" name="button" class="btn btn-success btn-form">Guardar</button>
    </form>
    </div>





@endsection
