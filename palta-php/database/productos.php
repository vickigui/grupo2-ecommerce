<?php
require_once "db.php";

function allproducts($db) {
  $stmt = $db->prepare("SELECT * FROM productos");
  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function addProduct($db, $data) {
  $datos = $db->prepare('INSERT INTO productos values (0, :nombre, :cantidad, :categoria, :precio, :stock)');

  $datos->bindValue(":nombre", $data['nombre']);
  $datos->bindValue(":cantidad", $data['cantidad']);
  $datos->bindValue(":categoria", $data['id_categorias']);
  $datos->bindValue(":precio", $data['precio']);
  $datos->bindValue(":stock", $data['stock']);

  return $datos->execute();
}

?>
