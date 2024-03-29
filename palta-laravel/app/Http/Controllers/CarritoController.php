<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\CarritoController;
use App\Carrito;
use App\Productos;
use App\carritosProductos;
use Auth;
use Illuminate\Http\Request;


class CarritoController extends Controller
{
  public function carrito () {
      return view('carrito');
    }

  public function index () {
  $carritos = Carrito::all()->where("user_id", Auth::id());

  return view('carritos.index', compact('carritos'));
}

  public function show ($id) {
    $carrito = Carrito::with("productos")->findOrFail($id);
    return view('carritos.show', compact('carrito'));
  }

  public function getCarrito () {
    $carrito = Carrito::with("productos")->where("user_id", Auth::id())->first();

    if (!$carrito) {
      $carrito = Carrito::create([
        'user_id' => Auth::id(),
        'fecha' => now(),
        'medioDePago' => "cash",
        'cantItems' => 0,
        'monto' => 0,
        'estado' => "activo"
      ]);
    }

    return $carrito;
  }

  public function agregarProducto (Request $req) {
    // dd($req);
    $producto = Productos::find($req["product_id"])->with("productos");
    $carrito = $this->getCarrito();
    $carrito->productos()->attach($req["product_id"], ['cantidad' => $req['cantidad']]);
    return redirect('/productos');
  }
  //
  public function borrarCarrito ($id) {
    $producto = Carrito::destroy($id);
    return redirect('carritos');
  }

  public function borrarProducto ($id) {
    $producto = carritosProductos::destroy($id);
    return redirect()->back();
  }

  public function editar ($id) {
    $carritos = carritosProductos::find($id);
    return view ('carritos/editar', compact('carritos'));
    }

  public function editarProducto (Request $request) {
    $producto = carritosProductos::find($request->id);
    $producto->cantidad = $request->cantidad;
    $producto->save();
    return redirect('carritos');
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
