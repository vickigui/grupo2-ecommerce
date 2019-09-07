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
      $messages = [
        'required' => 'El campo :attribute es obligatorio.',
        'string' => 'El campo :attribute debe ser texto.',
        'max' => 'El campo :attribute tiene más caracteres que los permitidos.',
        'min' => 'El campo :attribute es muy corto.',
        'mail' => 'El campo :attribute debe ser un e-mail.',
        'unique' => 'El campo :attribute ya está en nuestra base de datos.',
        'numeric' => 'El formato del campo :attribute es incorrecto.',
        'confirmed' => 'Las contraseñas no coinciden.',

      ];
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'min:3', 'max:255'],
            'apellido' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'direccion' => ['required', 'string', 'min:7', 'max:255'],
            'localidad' => ['required', 'string', 'min:7', 'max:255'],
            'telefono' => ['required', 'numeric'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], $messages);
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
}
