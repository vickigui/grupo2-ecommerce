
{{-- ARCHIVO DE VISTA --}}

@extends('layouts/plantilla')
@section('title', 'PALTA - Contacto')

@section('contenido')


<div class="container-fluid sectionHeader" align="center">
  <h1 class="text-center">¡Envianos tu consulta!</h1>
</div>

<div class="container">

  @if(session('message'))
  	<div class='alert alert-success'>
  		{{ session('message') }}
  	</div>
	@endif

  	<div class="col-12 col-md-6">
  		<form class="form-horizontal" method="post" action="/contacto">
  			{{ csrf_field() }}
  		<div class="form-group">
  			<label for="Name" >Nombre y Apellido:</label>
  			<input type="text" class="form-control" id="name" placeholder="Tu nombre" name="name" required>
  		 </div>

  		<div class="form-group">
  			<label for="email">E-mail:</label>
  			<input type="text" class="form-control" id="email" placeholder="ejemplo@mail.com" name="email" required>
  		</div>

      <div class="form-group">
  			<label for="email">Teléfono:</label>
  			<input type="tel" class="form-control" id="tel" placeholder="Número de teléfono" name="tel" required>
  		</div>

  		<div class="form-group">
  			<label for="message">Dejanos tu consulta:</label>
  			<textarea type="text" class="form-control luna-message" id="consulta" placeholder="Dejanos tu consulta acá" name="consulta" required></textarea>
  		</div>

  			<div class="form-group">
  				<button type="submit" class="btn btn-primary" value="Send">Enviar</button>
  			</div>
  		</form>
  	</div>
  </div>

@endsection
