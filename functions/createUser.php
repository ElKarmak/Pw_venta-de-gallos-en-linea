<?php
include_once "../conetion.php";

if (isset($_POST['name_user'])) {

  $name = $_POST['name_user'];
  $email = $_POST['name_email'];
  $password = $_POST['name_password'];
  $confir_password = $_POST['name_confirm_password'];

  if ($password == $confir_password) {
    header("Location: /crearUsuario.php");
    exit;
  }
  $data = Database::query("INSERT INTO users (username,email, password ) VALUES ('{$name}','{$email}', '{$password}')");
  header("Location: /login.php");
  exit();
}
