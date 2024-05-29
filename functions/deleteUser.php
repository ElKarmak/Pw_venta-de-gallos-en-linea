<?php
session_start();
include_once "../conetion.php";

// Obtener el ID del usuario a eliminar...
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$userId = $_SESSION['user_id'];

// Verificar si el usuario actual es el mismo que se va a eliminar
if ($userId == $id) {
  header("Location: ../listaUser.php?error=delete-yourself");
  exit();
} else {
  
  $data = Database::query("DELETE FROM shopping_cart WHERE user_id = $id");

  if ($data) {
    $data = Database::query("DELETE FROM users WHERE id = $id");
    if ($data) {
      header("Location: ../listaUser.php?success=deleted");
    } else {
      header("Location: ../listaUser.php?error=unknown");
    }
  } else {
    header("Location: ../listaUser.php?error=unknown");
  }
}
