@extends('layouts/plantilla')
@section('title', 'PALTA - Editar Producto')
@section('contenido')

{{--Acá va contenido--}}
<div class="container-fluid sectionHeader">
<h1 class="text-center">Editar Producto</h1>
</div>


<div class="container form col-xs-8 col-lg-5 formSection">
    <form enctype="multipart/form-data" action="{{url('/carritos/editarProducto')}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$carritos->id}}">

      <br>

      <div class="selector-cantidad">
        <select class="form-control" id="cantidad" name="cantidad">
             <option value="0.25">0,25</option>
             <option value="0.50">0,50</option>
             <option value="0.75">0,75</option>
             <option value="1">1</option>
             <option value="2">2</option>
         </select>
        <label>Kilogramos</label>
      </div>


      <button type="submit" name="button" class="btn btn-success btn-form">Guardar</button>
    </form>
    </div>





@endsection
