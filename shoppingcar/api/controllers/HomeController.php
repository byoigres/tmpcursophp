<?php

class HomeController extends BaseController {

  public function __construct() {

  }

  public function actionHomePage() {
    return $this->showView("home", ["name" => "Sergio Flores"]);
  }

  public function __destruct() {

  }
}
