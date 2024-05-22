<?php
include_once '../conetion.php';

session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  die();
}
$userId = $_SESSION['user_id'];

$id=$_GET['id'];


$data = Database::query("SELECT *FROM products WHERE id=$id");

$product = mysqli_fetch_assoc($data);

print_r($product['stock']);

if($product['stock'] > 0){
  $quantity = $product['stock'] - 1;
  Database::query("UPDATE products SET stock = $quantity WHERE id=$id");
  Database::query("INSERT INTO shopping_cart (user_id, product_id, quantity) VALUES ($userId, $id,1)");
  header("Location: ../indexp.php?success=added-to-cart");

}else{
  header("Location: ../indexp.php?error=no-stock");
}

?>
