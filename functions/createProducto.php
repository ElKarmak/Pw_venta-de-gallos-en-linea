<?php

include_once "../conetion.php";

if (isset($_POST['name_product'])) {



    $imagen = $_FILES['imagen_product']['tmp_name'];
    $image = addslashes(file_get_contents($imagen));

    $titulo = $_POST['name_product'];
    $descripcion = $_POST['description_product'];
    $precio = $_POST['price_product'];
    $unidades = $_POST['stock_product'];
    $categoria = $_POST['category_product'];

  $data = Database::query("INSERT INTO products (name, image, description, price, stock, category) VALUES ('{$titulo}','{$image}', '{$descripcion}', '{$precio}', '{$unidades}', '{$categoria}')");

  // Verificar si la ejecución fue exitosa
  if ($data) {

    header("Location: ../productosVenta.php");
  } else {
    echo "Error: " . Database::get_instance()->error;
  }
}
