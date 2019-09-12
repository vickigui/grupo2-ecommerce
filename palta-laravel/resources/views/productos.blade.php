@extends('layouts/plantilla')

@php
  $title="PALTA-Productos";
@endphp

@section('contenido')
  <div class="container-fluid sectionHeader">
    <h1 class="text-center">Nuestros productos</h1>
  </div>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div align="center">
        <button class="btn btn-secondary active filter-button" data-filter="todo">Todo</button>
        <button class="btn btn-secondary filter-button" data-filter="fruta">Frutas</button>
        <button class="btn btn-secondary filter-button " data-filter="verdura">Verduras</button>
        {{-- <button class="btn btn-secondary filter-button" data-filter="almacen">Almacen Orgánico</button> --}}

          <div class="row">
            <div class="row">
                          @forelse ($productos as $producto)
                          <div class="col-lg-3 col-md-4 col-xs-6 thumb filter {{$producto->id_categorias }} ">
                           <form class="" action="{{url('/carritos/agregarProducto')}}" method="post">
                             @csrf
                             <input type="hidden" name="product_id" value="{{$producto->id}}">
                              <h4>{{$producto["nombre"]}}</h4>
                                  <img class="img-thumbnail" src="/storage/{{$producto->imagen}}">
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
                                      <h4>${{$producto["precio"]}}</h4>
                                       <div class="botones-productos">
                                          <button type="submit" class="btn btn-success">Agregar al carrito</button>
                                      </div>
                           </form>
                          </div>

                          @empty
                            <p>No hay productos disponibles</p>
                          @endforelse

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


                        @endsection
