<?php

include_once "../conetion.php";

$id = $_GET['id'];



$data = Database::query("DELETE FROM products WHERE id = '{$id}'");

header("Location: ../productosVenta.php");


?>
