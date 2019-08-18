<?php
class Producto
{
  private $id_producto;
  private $nombre;
  private $cantidad;
  private $precio;
  private $id_categoria;
  private $stock;

  public function __construct($nombre, $cantidad, $precio, $id_categoria,$stock)
{
  $this->nombre = $nombre;
  $this->cantidad = $cantidad;
  $this->precio= $precio;
  $this->stock= $stock;
  $this->id_categoria;
}

public function setId_producto($id_producto)
{
  $this->$id_producto= $id_producto;
}
public function getId_producto()
{
  return $this->id_producto;
}
public function setNombre($nombre)
{
  $this->nombre=$nombre;
}
public function getNombre()
{
  return $this->nombre;
}
public function setCantidad($cantidad)
{
  $this->cantidad=$cantidad;
}
public function getCantidad()
{
  return $this->cantidad;
}
public function setPrecio($precio)
{
  $this->precio=$precio;
}
public function getPrecio()
{
  return $this->precio;
}
public function set($id_categoria)
{
  $this->id_categoria=$id_categoria;
}
public function getId_categoria()
{
  return $this->id_categoria;
}
public function setStock($stock)
{
  $this->stock=$stock;
}
public function getStock()
{
  return $this->stock;
}
}
 ?>
