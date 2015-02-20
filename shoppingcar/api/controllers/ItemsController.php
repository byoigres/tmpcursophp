<?php

class ItemsController extends BaseController {

  public function __construct() {

  }

  public function actionList() {

    $locals = [];

    $page = filter_input(INPUT_GET, 'page');
    $category = filter_input(INPUT_GET, 'category');

    $page = $page != NULL ? $page : 1;

    $items = $this->getModel('item');

    $totalItems = intVal($items->getTotalItems($category));

    Yelu::log("Total items por categoria: $totalItems");

    $itemsPerPage = 9;

    $locals['category'] = $category;
    $locals['maxPages'] = intVal(ceil($totalItems / $itemsPerPage));
    $locals['currentPage'] = $page;

    Yelu::log("Pagina actual: ", $locals['currentPage']);

    $start = ($itemsPerPage * $page) - $itemsPerPage;

    $locals['items'] = $items->getItemsPerPage($start, $itemsPerPage, $category);

    #Yelu::log($locals);

    $this->showView('items/list', $locals);
  }

  public function actionDetail() {

    $itemId = filter_input(INPUT_GET, 'id');

    $itemModel = $this->getModel('item');

    $item = $itemModel->getItemById($itemId);

    Yelu::log($item);

    $this->showView('items/details', [
      "item" => $item
    ]);
  }

  public function actionCategories() {

    $this->showView('items/categories');
  }

  public function __destruct() {

  }
}
