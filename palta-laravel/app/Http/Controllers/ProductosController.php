<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\ProductosController;
use App\Productos;
use Illuminate\Http\Request;


class ProductosController extends Controller
{
  public function listaProductos () {
      $productos = Productos::all();
      return view('productos', compact('productos'));
    }

  public function nuevoProducto () {
    return view("cargarProducto");
  }

  public function cargarProductos(Request $form ){
    $reglas=[
        "nombre"=>"required|string|max:255|unique:productos",
        "stock"=>"numeric|required|min:0|max:10",
        "precio"=>"required|min:0|integer",
        "id_categorias"=>"required",

      ];

      $mensaje=[
        "required"=>"El campo :attribute es requerido",
        "string"=>"El campo :attribute debe ser un texto",
        "min"=>"El campo :attribute tiene un minimo de :min",
        "max"=>"El campo :attribute tiene un maximo de :max",
        "numeric"=> "El campo :attribute debe ser un numero",
        "unique"=>"El campo :attribute se encuentra repetido",
        "imagen"=>"file",

      ];

      $this->validate($form,$reglas,$mensaje);

      $producto = new Productos();

      $ruta=$form ->file("imagen")->store("public");
      $nombreArchivo= basename($ruta);

      $producto->nombre=$form["nombre"];
      $producto->stock=$form["stock"];
      $producto->precio=$form["precio"];
      $producto->id_categorias=$form["id_categorias"];
      $producto->imagen=$nombreArchivo;

      $producto->save();


      return redirect("/productos");
    }


}
