<?php

class CarController extends BaseController {

  public function __construct() {

  }

  public function actionShowCarPage() {

    $carData = isset($_SESSION['session-car']) ? $_SESSION['session-car'] : [];

    $locals['items'] = $carData;

    //Yelu::log($carData);

    $this->showView('car/show', $locals);
  }

  public function actionAddToCar() {

    $itemId = filter_input(INPUT_GET, 'id');

    $carData = isset($_SESSION['session-car']) ? $_SESSION['session-car'] : [];

    if (array_key_exists($itemId, $carData)) {
      $carData[$itemId]['cantidad']++;
      $carData[$itemId]['total'] = $carData[$itemId]['cantidad'] * $carData[$itemId]['precio'];
    } else {
      $itemModel = $this->getModel('item');

      $item = $itemModel->getItemByid($itemId);

      $itemData = [
        'id' => $item['id'],
        'producto' => $item['producto'],
        'precio' => $item['precio'],
        'cantidad' => 1,
        'total' => $item['precio']
      ];

      $carData[$itemId] = $itemData;
    }

    $_SESSION['session-car'] = $carData;

    #Yelu::log($carData);

    #echo "Add";
    header('Content-Type: application/json');
    echo json_encode(['status' => TRUE]);
  }

  public function actionCheckoutPage() {

    $this->showView('car/checkout');
  }

  public function actionGetTotalItemsInCar() {
    $carData = isset($_SESSION['session-car']) ? $_SESSION['session-car'] : [];
    echo count($carData);
  }

  public function __desctruct() {

  }

}
