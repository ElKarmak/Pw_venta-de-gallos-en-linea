<?php
include_once "../conetion.php";


$username = $_POST['username'];
$password = $_POST['password'];


$data = Database::query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");


if($data->num_rows > 0){
  $row = $data->fetch_assoc();
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['role'] = $row['role'];
  $_SESSION['user_id'] = $row['id'];

  if ($row['role'] == 'Administrador') {
    header("Location: ../productosVenta.php");
    die();
  }

  if ($row['role'] == 'Usuario') {
    header("Location: ../indexp.php");
    die();
  }
}


header("Location: ../login.php?error=1");
