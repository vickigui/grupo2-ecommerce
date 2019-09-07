@extends('layouts/plantilla')

<?php $title = "PALTA - Mi Perfil"; ?>


@section('contenido')

    <div class="container-fluid sectionHeader">
      <h1 class="text-center">Mi perfil</h1>
    </div>
  <div class="container">
    <div class="text-center">
      <h4 class="card-title strog">{{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</h4>
      <h5>Mail:</h5>
      <p>{{ Auth::user()->email }}</p>
      <h5>Dirección:</h5>
      <p>{{ Auth::user()->direccion }}</p>
      <h5>Localidad:</h5>
      <p>{{ Auth::user()->localidad }}</p>
      <h5>Teléfono:</h5>
      <p>{{ Auth::user()->telefono }}</p>

    </div>

    <br>


    </div>


@endsection
