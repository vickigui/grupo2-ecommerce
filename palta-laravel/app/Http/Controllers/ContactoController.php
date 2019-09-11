<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\ContactoController;
use App\Contacto;
use Illuminate\Http\Request;


class ContactoController extends Controller {
  public function ConsultaIndex() {
    return view('contacto');
  }

  // agrego validacion
  public function GuardarConsulta(Request $form ){
    $reglas=[
      'Nombre' => 'required|string|min:2',
      'email'=> 'required|email',
      'telefono' => 'required|min:8',
      'consulta' => 'required|string||min:4|max:140',
      ];

    $mensaje=[
      "required"=>"El campo :attribute es requerido.",
      "string"=>"El campo :attribute debe ser un texto",
      "min"=>"El campo :attribute tiene un minimo de :min",
      "max"=>"El campo :attribute tiene un maximo de :max",
      ];

      $this->validate($form,$reglas,$mensaje);

      $contacto= new Contacto();

      $contacto->nombre=$form["nombre"];
      $contacto->email=$form["email"];
      $contacto->telfono=$form["telefono"];

      $contacto->save();

      return redirect("/contacto");
  }
}
