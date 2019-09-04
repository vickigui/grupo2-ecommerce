<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'direccion' => ['required', 'string', 'max:255'],
            'localidad' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'numeric', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'email' => $data['email'],
            'direccion' => $data['direccion'],
            'localidad' => $data['localidad'],
            'telefono' => $data['telefono'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function validarErroresUsuario () {
      $errors = [];


      $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
      $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : "";
      $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
      $address = isset($_POST['address']) ? $_POST['address'] : "";
      $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : "";
      $tel = isset($_POST['tel']) ? $_POST['tel'] : "";
      $password = isset($_POST['password']) ? $_POST['password'] : "";
      $confirm = isset($_POST['confirm']) ? $_POST['confirm'] : "";

      $redirect = "";


      if ($_POST) {
        /* Nombre 3 o más caracteres */
        if (!$nombre) {
          $errors['nombre'] = "Debes ingresar un nombre.";
        } elseif (strlen($nombre) < 3) {
          $errors['nombre'] = "El nombre debe tener al menos 3 caracteres";
        }

        /* Apellido 3 o más caracteres */
        if (!$apellido) {
          $errors['apellido'] = "Debes ingresar un apellido.";
        } elseif (strlen($apellido) < 3) {
          $errors['apellido'] = "El apellido debe tener al menos 3 caracteres";
        }

        /* Email en formato válido */
        if (!$mail) {
          $errors['mail'] = "Debes ingresar un email.";
        } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
          $errors['mail'] = "El email deber tener un formato válido.";
        }

        /* Dirección 5 o más caracteres */
        if (!$address) {
          $errors['address'] = "Debes ingresar una dirección.";
        } elseif (strlen($address) < 5) {
          $errors['address'] = "Hay un error en la dirección";
        }

        /* Localidad 5 o más caracteres */
        if (!$localidad) {
          $errors['localidad'] = "Debes ingresar una localidad.";
        } elseif (strlen($localidad) < 5) {
          $errors['localidad'] = "Hay un error en la localidad";
        }

        /* Teléfono 8 o más caracteres */
        if (!$tel) {
          $errors['tel'] = "Debes ingresar un teléfono.";
        } elseif (strlen($tel) < 8) {
          $errors['tel'] = "Hay un error en el teléfono";
        }

        /* Password 8 o más caracteres */
        if (!$password) {
          $errors['password'] = "Debes ingresar una contraseña.";
        } elseif (strlen($password) < 8) {
          $errors['password'] = "La contraseña debe tener al menos 8 caracteres";
        }

        /*Validar password*/
        if (!$confirm) {
            $errors['confirm'] =  "Confirma la contraseña";
        } else if ($password != $confirm) {
          $errors['confirm'] =  "Las contraseñas no coinciden";
        }
      }
    }
}
