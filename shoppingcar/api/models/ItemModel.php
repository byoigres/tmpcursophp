<?php

class ItemModel extends BaseModel {

  public function __construct() {

  }

  public function getTotalItems($category) {

    $dbh = $this->getConnection();

    $sql = 'SELECT COUNT(*) AS total FROM items';

    if (!is_null($category)) {
      $sql .= ' AS I INNER JOIN item_categories AS C ON I.categoria = C.id WHERE I.categoria = :category';
    }

    $sql .= ';';

    $sth = $dbh->prepare($sql);

    if (!is_null($category)) {
      $sth->bindParam('category', $category, PDO::PARAM_INT);
    }

    $sth->execute();

    return $sth->fetchColumn(0);
  }

  public function getItemsPerPage($start, $itemsPerPage, $category) {

    $dbh = $this->getConnection();

    $sql = "SELECT I.id, producto, descripcion, precio, C.id As categoria_id, C.name AS categoria FROM items AS I INNER JOIN item_categories AS C ON I.categoria = C.id ";

    if (!is_null($category)) {
      $sql .= " WHERE categoria = :categoria ";
    }

    $sql .= " LIMIT :start, :itemsperpage";

    $sth = $dbh->prepare($sql);
    $sth->bindParam('start', $start, PDO::PARAM_INT);
    $sth->bindParam('itemsperpage', $itemsPerPage, PDO::PARAM_INT);

    if (!is_null($category)) {
      $sth->bindParam('categoria', $category, PDO::PARAM_INT);
    }

    $sth->execute();

    return $sth->fetchAll();
  }

  public function getItemById($id) {

    $dbh = $this->getConnection();

    $sth = $dbh->prepare("SELECT id, producto, descripcion, precio, categoria FROM items WHERE id = :id");
    $sth->bindParam('id', $id, PDO::PARAM_INT);
    $sth->execute();
    return $sth->fetch();
  }

  public function __destruct() {

  }

}
