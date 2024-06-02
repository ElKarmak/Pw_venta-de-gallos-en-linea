<?php
session_start();

include_once "../conetion.php";
$userId = $_SESSION['user_id'];
$id = $_GET['id'];
$cantidad = $_GET['quantity'];


$data= Database::query("SELECT stock FROM products WHERE id = $id");


$stock = mysqli_fetch_assoc($data)['stock'];


if ($stock < $cantidad) {
  echo json_encode(array('error' => 'No hay Stock Disponible', 'success' => false, 'quantity' => $stock));
  die();
}



Database::query("UPDATE shopping_cart SET quantity = $cantidad WHERE product_id = $id AND user_id = $userId");

echo json_encode(array('quantity' => $cantidad, 'success' => true));
/*
  {
    "success": true
  }
*/
