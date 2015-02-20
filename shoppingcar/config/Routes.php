<?php

return [
  [
    "method" => "GET",
    "path" => "/",
    "handler" => [
      "class" => "HomeController",
      "action" => "actionHomePage"
    ]
  ],
  [
    "method" => "GET",
    "path" => "/login",
    "handler" => [
      "class" => "AuthenticationController",
      "action" => "actionLoginPage"
    ],
    "auth" => FALSE
  ],
  [
    "method" => "GET",
    "path" => "/logout",
    "handler" => [
      "class" => "AuthenticationController",
      "action" => "actionLogout"
    ]
  ],
  [
    "method" => "POST",
    "path" => "/authenticate",
    "handler" => [
      "class" => "AuthenticationController",
      "action" => "authenticateAction"
    ],
    "auth" => FALSE
  ],
  [
    "method" => "GET",
    "path" => "/register",
    "handler" => [
      "class" => "AuthenticationController",
      "action" => "actionRegisterPage"
    ],
    "auth" => FALSE
  ],
  [
    "method" => "POST",
    "path" => "/new",
    "handler" => [
      "class" => "AuthenticationController",
      "action" => "registerAction"
    ],
    "auth" => FALSE
  ],
  [
    "method" => "GET",
    "path" => "/items",
    "handler" => [
      "class" => "ItemsController",
      "action" => "actionList"
    ]
  ],
  [
    "method" => "GET",
    "path" => "/items/detalle",
    "handler" => [
      "class" => "ItemsController",
      "action" => "actionDetail"
    ]
  ],
  [
    "method" => "GET",
    "path" => "/categories",
    "handler" => [
      "class" => "ItemsController",
      "action" => "actionCategories"
    ]
  ],
  [
    "method" => "GET",
    "path" => "/car/add",
    "handler" => [
      "class" => "CarController",
      "action" => "actionAddToCar"
    ]
  ],
  [
    "method" => "GET",
    "path" => "/car",
    "handler" => [
      "class" => "CarController",
      "action" => "actionShowCarPage"
    ]
  ],
  [
    "method" => "GET",
    "path" => "/car/checkout",
    "handler" => [
      "class" => "CarController",
      "action" => "actionCheckoutPage"
    ]
  ],
  [
    "method" => "GET",
    "path" => "/car/items",
    "handler" => [
      "class" => "CarController",
      "action" => "actionGetTotalItemsInCar"
    ]
  ]
];
