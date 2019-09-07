@extends('layouts/plantilla')
@section('title', 'PALTA - Mi Carrito')

@section('contenido')
    <div class='container'>
        <div class='jumbotron'>
            <h1>Eliminar Producto</h1>
            <p>Introduce todos los datos para eliminar un producto en la base de datos.</p>
        </div>
        <form name='formularioeliminar' action='{{'carrito/destroy'}}' method='get'>
        <div class='form-group'>
          
            <label for='id'>Introduce el id del producto:</label>
            <input type='number' class='form-control' placeholder='Introduce el id' name='id' value="{{$carrito->id}}"><br>

            </div>
        <div class='botons-group'>
            <input type='submit' name='eliminar' value='ELIMINAR'>
            <input type="button" onclick="history.back()" name="volver" value="VOLVER">
        </div>
        </form>
    </div>

  </body>
  </html>
@endsection
