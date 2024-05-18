<?php
include_once "../conetion.php";

if (isset($_POST['name_user'])) {

  $name = $_POST['name_user'];
  $email = $_POST['name_email'];
  $password = $_POST['name_password'];
  $confir_password = $_POST['name_confirm_password'];
  $type_user = $_POST['name_type_user'];


  if (empty($name) || empty($email) || empty($password) || empty($confir_password) || empty($type_user)) {
    echo "Please fill in all the fields";
  }

  if ($password !== $confir_password) {
    header("Location: /crearUsuarioAdmin.php");
    exit;
  }



  $data = Database::query("INSERT INTO users (username,email, password ,role) VALUES ('{$name}','{$email}', '{$password}','{$type_user}')");

  header("Location: /crearUsuarioAdmin.php");
}
