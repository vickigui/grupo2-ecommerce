@extends('layouts/plantilla')
@section('title', 'PALTA - Mi Carrito')

@section('contenido')


  <main>
    <div class="container-fluid sectionHeader">
      <h1 class="text-center">Mi carrito</h1>
    </div>
        <p>{{dd($carrito)}}</p>

  </main>
@endsection
