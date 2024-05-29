<?php
include_once "../conetion.php";

$id = $_GET['id'];



$data= Database::query("DELETE FROM shopping_cart WHERE product_id = '{$id}'");

header("Location: ../carrito.php?product=deleted");
?>
