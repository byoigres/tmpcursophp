<?php

class UserModel extends BaseModel {

  public function getUserByCredentials($username) {
    $dbh = $this->getConnection();

    $sth = $dbh->prepare("SELECT id, usuario, nombre, hash FROM usuarios WHERE usuario = :usuario");

    $sth->bindParam("usuario", $username, PDO::PARAM_STR);
    $sth->execute();

    return $sth->fetch();
  }

  public function register($usuario, $nombre, $password) {
    $dbh = $this->getConnection();

    $sth = $dbh->prepare("INSERT INTO usuarios (usuario, nombre, hash) VALUES(:usuario, :nombre, :password)");

    $sth->bindParam("usuario", $usuario, PDO::PARAM_STR);
    $sth->bindParam("nombre", $nombre, PDO::PARAM_STR);
    $sth->bindParam("password", $password, PDO::PARAM_STR);
    $sth->execute();
    return $dbh->lastInsertId();
  }
}
