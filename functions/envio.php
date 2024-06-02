<?php
include_once '../conetion.php';
session_start();
$total=$_GET['total'];



// Paso 1: Eliminar las comas
$cleanNumber = str_replace(',', '', $total);

// Paso 2: Convertir a número decimal
$decimalNumber = (float) $cleanNumber;


$idUser=$_SESSION['user_id'];

$data=Database::query("SELECT * FROM users WHERE id='$idUser'");


if($data &&$data->num_rows>0){
  $campos=$data->fetch_assoc();
  $email=$campos['email'];

}


//Recuperar los datos del carrito(id del producto y cantidad de productos) para el usuario logueado
$cartData = Database::query("
  SELECT
    products.id, products.name, products.price, products.category, products.description, products.image, shopping_cart.quantity
  FROM
    products
  INNER JOIN
    shopping_cart
  ON
    products.id = shopping_cart.product_id
  WHERE
    shopping_cart.user_id = $idUser
");


//Para cada producto del carrito, restar el stock de los productos
$products = mysqli_fetch_all($cartData, MYSQLI_ASSOC);


foreach ($products as $product) {
  $quantity = $product['quantity'];
  Database::query("UPDATE products SET stock = stock - $quantity WHERE id=$product[id]");
}



Database::query("DELETE FROM shopping_cart WHERE  user_id='$idUser'");


header('Location: ../carrito.php?sucess=true');

?>
