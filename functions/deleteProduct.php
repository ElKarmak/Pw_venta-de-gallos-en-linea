<?php

include_once "../conetion.php";

$id = $_GET['id'];

// Eliminar las filas dependientes en shopping_cart
Database::query("DELETE FROM shopping_cart WHERE product_id = '{$id}'");

// Luego eliminar el producto en products
Database::query("DELETE FROM products WHERE id = '{$id}'");

header("Location: ../productosVenta.php");

?>
