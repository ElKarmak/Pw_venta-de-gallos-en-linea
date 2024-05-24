<?php

include_once "../conetion.php";

$id = $_GET['id'];
$image = $_FILES['imagen_product']['tmp_name'] ?? null;
$name = $_POST['name_product'];
$description = $_POST['description_product'];
$spricy = $_POST['price_product'];
$stock = $_POST['stock_product'];
$categorys = $_POST['category_product'];

if($image != null){
  $image = addslashes(file_get_contents($image));
  $sql = Database::query("UPDATE products SET name='$name', image='$image', description='$description',  price='$spricy', stock='$stock', category='$categorys' WHERE id='$id'");
}else{

  $sql = Database::query("UPDATE products SET name='$name', description='$description',  price='$spricy', stock='$stock', category='$categorys' WHERE id='$id'");
}

header("Location: ../productosVenta.php");




?>
