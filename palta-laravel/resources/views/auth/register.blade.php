@extends('plantilla')
@section('titulo')
  PALTA - 100% Productos Orgánicos
@endsection


@section('contenido')
<div class="container-fluid sectionHeader">
  <h1 class="text-center">Registrate</h1>
</div>

  <div class="container form col-xs-8 col-lg-5 formSection">
    <h4>Completá los siguientes datos para empezar.</h4>
    <form action="" method="post">
      <label for="nombre" id="nombre" class="items">
        <p>Nombre</p>
      </label>
      <input type="text" name="nombre" value="">

      <label for="apellido" id="apellido" class="items">
        <p>Apellido</p>
      </label>
      <input type="text" name="apellido" value="">

      <label for="mail" id="mail" class="items">
        <p>E-mail</p>
      </label>
      <input type="mail" name="mail" value="">

      <label for="address" id="address" class="items">
        <p>Dirección</p>
      </label>
      <input type="text" name="address" value="">

      <label for="localidad" id="localidad" class="items">
        <p>Localidad</p>
      </label>
      <input type="text" name="localidad" value="">

      <label for="tel" id="tel" class="items">
        <p>Teléfono</p>
      </label>
      <input type="tel" name="tel" value="">

      <label for="password" id="password" class="items">
        <p>Contraseña</p>
      </label>
      <input type="password" name="password" value="">

      <label for="confirm" id="confirm" class="items">
        <p>Repetir contraseña</p>
      </label>
      <input type="password" name="confirm" value="">

      <button type="submit" name="button" class="btn btn-success btn-form">Enviar</button>
    </form>
  </div>

@endsection
