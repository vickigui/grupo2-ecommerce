<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\RegistroController;


class RegistroController extends Controller
{
  public function registro () {
      return view('registro');
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

  public function registroUsuario () {
    if (!$errors && !empty($_POST)) {
      $datos = $db->prepare('INSERT INTO usuarios values (0, :nombre, :apellido, :mail, :address, :localidad, :tel, :password)');

      $datos->bindValue(":nombre", $_POST['nombre']);
      $datos->bindValue(":apellido", $_POST['apellido']);
      $datos->bindValue(":mail", $_POST['mail']);
      $datos->bindValue(":address", $_POST['address']);
      $datos->bindValue(":localidad", $_POST['localidad']);
      $datos->bindValue(":tel", $_POST['tel']);
      $passHash = password_hash($_POST['password'],PASSWORD_DEFAULT);
      $datos->bindValue(":password", $passHash);

      if($datos->execute()){
        header("Location: login.php");
        exit();
      };
    }
  }
}
