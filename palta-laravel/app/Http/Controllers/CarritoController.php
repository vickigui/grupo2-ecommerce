<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\CarritoController;
use App\Carrito;
use App\Productos;
use Auth;


class CarritoController extends Controller
{
  public function carrito () {
      return view('carrito');
    }

    public function index () {
    $carritos = Carrito::all();

    return view('carritos.index', compact('carritos'));
  }

  public function show ($id) {
    $carrito = Carrito::with("productos")->findOrFail($id);
    return view('carritos.show', compact('carrito'));
  }

// // borra carrito
//   public function borrar ($id){
//     $carrito = Carrito::findOrFail($id);
//     $carrito->delete();
//
//     return view('carritos.index', compact('carrito'));
// }

  // public function index () {
  //   $productos = Carrito::find(72)->user->direccion;
  //   return view('carritos.index', compact('productos'));
  // }

  // public function index () {
  //   $productos = Carrito::find(Auth::id())->productos;
  //   return view('carritos.index', compact('productos'));
  // }

  // public function productoAlCarrito() {
  //   $carrito = new Carrito();
  //   $productos = Productos::all();
  //
  //   return $carrito->productos_id = $productos->id;
  // }

  // public function crearCarrito () {
  //   $carrito = new Carrito;
  //   $carrito = [
  //     'user_id' => Auth::id(),
  //     'fecha' => now(),
  //     'medioDePago' => null,
  //     'cantItems' => null,
  //     'monto' => null
  //   ];
  //   return view('carritos.micarrito', compact('carrito'));
  // }


  //
  // public function () {
  //
  // }


  //
  // public function listadoCarrito () {
  //
  // }

  // public function listaCarrito () {
  //
  //     return view('carritos.index', compact('listaProductos'));
  //   }


//
// // borra carrito
//   public function borrar ($id){
//     $carrito = Carrito::findOrFail($id);
//     $carrito->delete();
//
//     return view('carritos.index', compact('carrito'));
// }



//de aca para abajo carrito, no anda nada

// public function carrito(Request $request)
//     {
//         $carrito = $request->carrito;
//
//         $response = Carrito::create([
//             "carritos_id" => $carrito->id,
//             "producto_idProducto" => $request->producto_idProducto
//
//
//
//         ]);
//          $notificacion = array(
//             'message' => ' añadido al carrito de compras',
//             'alert-type' => 'success');
//
//         if ($response) {
//             return Redirect::back()->with($notificacion);
//         }else{
//             return back();
//         }
//
//     }
//
//     public function __construct(){
//         $this->middleware("carrito");
//     }
//
//     public function index(Request $request,$name){
//
//
//     $carrito = $request->carrito;
//
//     $productos = $carrito->productos()->get();
//
//      $total = $carrito->total();
//
//
//      $user =User::select() ->where('name','=',$name)->first();
//      return view("carritos.show",compact('productos','total','user'));
//
//    }
//
}
