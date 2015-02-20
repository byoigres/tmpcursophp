<?php

class AuthenticationController extends BaseController {

  public function __construct() {

  }

  public function actionLoginPage() {

    $locals = [
      'title' => 'Iniciar sesi&oacute;n',
      'message' => NULL
    ];

    if (isset($_SESSION['_login-message'])) {

      $locals['message'] = $_SESSION['_login-message'];
      unset($_SESSION['_login-message']);
    }

    $this->showView("auth/login", $locals);
  }

  public function authenticateAction() {
    $username = filter_input(INPUT_POST, "username");
    $password = filter_input(INPUT_POST, "password");

    if ($username != FALSE && $password != FALSE) {
      $userModel = $this->getModel("user");

      $user = $userModel->getUserByCredentials($username);

      if ($user != FALSE && password_verify($password, $user['hash'])) {
        $this->performLogin($user['id'], $user['usuario'], $user['nombre']);
      }

      $_SESSION['_login-message'] = "Credenciales invalidas";
      $this->redirect('/login');
    }

    $_SESSION['_login-message'] = "Es necesario especificar las credenciales";
    $this->redirect('/login');
  }

  public function actionLogout() {
    session_destroy();
    header('Location: /login');
  }

  public function actionRegisterPage() {

    $locals = [
    'title' => 'Registrar nuevo usuario',
    'message' => NULL
    ];

    if (isset($_SESSION['_register-message'])) {
      $locals['message'] = $_SESSION['_register-message'];
      unset($_SESSION['_register-message']);
    }

    $this->showView('auth/register', $locals);
  }

  public function registerAction() {

    $usuario = filter_input(INPUT_POST, "usuario");
    $nombre = filter_input(INPUT_POST, "nombre");
    $password = filter_input(INPUT_POST, "password");
    $password2 = filter_input(INPUT_POST, "password2");

    if($usuario != FALSE && $nombre != FALSE && $password != FALSE && $password2 != FALSE) {

      if ($password != $password2) {
        $_SESSION['_register-message'] = "Las contrase&ntilde;as deben ser iguales";
        $this->redirect('/register');
      }

      $userModel = $this->getModel('user');
      $hash = password_hash($password, PASSWORD_BCRYPT);
      Yelu::log("Encripted password is: $hash");
      Yelu::log("The verification is:", password_verify($password, $hash));

      $id = $userModel->register($usuario, $nombre, $hash);

      $this->performLogin($id, $usuario, $nombre);
    }

    $_SESSION['_register-message'] = "Todos los campos son requeridos";
    $this->redirect('/register');
  }

  private function performLogin($id, $usuario, $nombre) {
    $_SESSION['session-data']['id'] = $id;
    $_SESSION['session-data']['usuario'] = $usuario;
    $_SESSION['session-data']['nombre'] = $nombre;

    $this->redirect("/");
  }

  public function __destruct() {

  }
}
