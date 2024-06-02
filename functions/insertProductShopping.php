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



if($product['stock'] > 0){
   // Verificar si el producto ya está en el carrito del usuario
   $cartData = Database::query("SELECT * FROM shopping_cart WHERE user_id = $userId AND product_id = $id");
   $cartItem = mysqli_fetch_assoc($cartData);

   if($cartItem){
     // Si el producto ya está en el carrito, incrementar la cantidad
     $newQuantity = $cartItem['quantity'] + 1;
     Database::query("UPDATE shopping_cart SET quantity = $newQuantity WHERE user_id = $userId AND product_id = $id");
   }else{
     // Si el proyecto no está en el carrito, agregarlo
     Database::query("INSERT INTO shopping_cart (user_id, product_id, quantity) VALUES ($userId, $id, 1)");
   }

  // $quantity = $product['stock'] - 1;
  // Database::query("UPDATE products SET stock = $quantity WHERE id=$id");
  header("Location: ../indexp.php?success=added-to-cart");

}else{
  header("Location: ../indexp.php?error=no-stock");
}

?>
