@extends('layouts/plantilla')
@section('title', 'PALTA - Mi Carrito')

@section('contenido')

  <main>
    <div class="container-fluid sectionHeader">
      <h1 class="text-center">Mis carritos</h1>
    </div>
  <!-- tabla de productos comprados -->
  <div class="container">

  <div class="table-responsive">
        <table class="table table-hover table-bordered table-fixed">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Fecha de compra</th>
            <th scope="col">Medio de pago</th>
            <th scope="col">Cantidad de Items</th>
            <th scope="col">Estado</th>
            <th scope="col">Total</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($carritos as $carrito)

            <tr>
              <th scope="row">
                <a href="{{ route('carritos.show', $carrito->id) }}"><button type="button" class="btn btn-sm btn-outline-success"><i class="far fa-edit"></i></button></a>
                <a href="/carritos/borrarCarrito/{{$carrito->id}}">
                  <button type="button" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
                  </button>
                </a>
              </th>

              <td>{{ $carrito->fecha }}</td>
              <td>{{ $carrito->medioDePago }}</td>
              <td>{{ $carrito->cantItems }}</td>
              <td>{{ $carrito->estado }}</td>
              <td>${{ $carrito->monto }}</td>
            </tr>
          @endforeach

        </tbody>
        <thead>
          <tr>
            <th scope="col"></th>
            <th colspan="2">Total</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
      </table>

      <br>
  </div>
  </div>
  <!-- Domicilio de entrega -->
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="card mb-4 shadow-sm">

              <div class="card-body">
                <h4 class="card-title strog">Domicilio de entrega</h5>
                <p class="card-text">{{Auth::user()->direccion}}, {{Auth::user()->localidad}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href=""><button type="button" class="btn btn-sm btn-outline-success"><i class="far fa-edit"></i></button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
  <!-- dias y horarios -->
          <div class="col-lg-6 col-md-6">
            <div class="card mb-4 shadow-sm">

              <div class="card-body">
                <h4 class="card-title strog">Día y horario de entrega</h5>
                <p class="card-text">
                  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
    <label class="form-check-label" for="exampleRadios1">
      Martes 14hs. a 18hs.
    </label>

  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2">
      Jueves 14hs. a 18hs.
    </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option3"
  <label class="form-check-label" for="exampleRadios1">
  Sábado 14hs. a 18hs.
  </label>

  </div>

                </p>
    </div>

    </div>
      </div>
  <!-- botoneras pago/cancelar/cont -->
  <div class="container">
    <div class="button-pantalla">
      <div class="row justify-content-end">
        <div class="btn-group" role="group" aria-label="Basic example">
          <a href="{{ url('/') }}"> <button type="button" class="btn btn-outline-success">Cancelar</button></a>
          <a href="#"><button type="button" class="btn btn-success">Pagar</button></a>
          <a href="{{ url('/productos') }}"><button type="button" class="btn btn-outline-success">Continuar Comprando</button></a>
        </div>
      </div>
    </div>

    <div class="button-movil container-fluid">
      <button type="button" class="btn btn-success btn-lg btn-block">PAGAR</button>
      <a href="{{ url('/productos') }}">
        <button type="button" class="btn btn-outline-success btn-lg btn-block">CONTINUAR COMPRANDO</button>
      </a>
      <a href="{{ url('/') }}">
        <button type="button" class="btn btn-outline-success btn-lg btn-block">CANCELAR</button>
      </a>
    </div>
  </div>

  </main>
@endsection
