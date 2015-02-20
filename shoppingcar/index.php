<?php

if (php_sapi_name() == 'cli-server') {
  $uri = $_SERVER['REQUEST_URI'];
  if ($uri != '/' && file_exists(__DIR__ . $uri)) {
    return false;
  }
}

require_once "../yelu/Yelu.php";

$yelu = new Yelu();

$yelu->init(require_once "./config/Application.php");
