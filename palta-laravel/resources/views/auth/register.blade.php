@extends('layouts/plantilla')

<?php $title = "PALTA - Registrate"; ?>

@section('contenido')

<div class="container-fluid sectionHeader">
  <h1 class="text-center">Registrate</h1>
</div>

<div class="container form col-xs-8">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h5>{{ __('Completá los siguientes datos para empezar.') }}</h5>

              <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
                      @csrf

                      <div class="form-group text-center">
                          <label for="nombre" class="">{{ __('Nombre') }}</label>

                          <div class="col-md-offset-6">
                              <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                              @error('nombre')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group text-center">
                          <label for="apellido" class="">{{ __('Apellido') }}</label>

                          <div class="col-md-offset-6">
                              <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>

                              @error('apellido')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group text-center">
                          <label for="email" class="">{{ __('E-Mail') }}</label>

                          <div class="col-md-offset-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group text-center">
                          <label for="direccion" class="">{{ __('Dirección') }}</label>

                          <div class="col-md-offset-6">
                              <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>

                              @error('direccion')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group text-center">
                          <label for="localidad" class="">{{ __('Localidad') }}</label>

                          <div class="col-md-offset-6">
                              <input id="localidad" type="text" class="form-control @error('localidad') is-invalid @enderror" name="localidad" value="{{ old('localidad') }}" required autocomplete="localidad" autofocus>

                              @error('localidad')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group text-center">
                          <label for="telefono" class="">{{ __('Teléfono') }}</label>

                          <div class="col-md-offset-6">
                              <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

                              @error('telefono')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group text-center">
                          <label for="password" class="">{{ __('Password') }}</label>

                          <div class="col-md-offset-6">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group text-center">
                          <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                          <div class="col-md-offset-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class=" offset-md-4">
                              <button type="submit" class="btn btn-success btn-form">
                                  {{ __('Register') }}
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
        </div>
    </div>
</div>
@endsection
