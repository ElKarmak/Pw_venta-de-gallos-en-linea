<?php
include_once "../conetion.php";


$username = $_POST['username'];
$password = $_POST['password'];


$data = Database::query("SELECT * FROM admins WHERE username = '$username' AND password = '$password'");


if($data->num_rows > 0){
  $row = $data->fetch_assoc();
  session_start();
  $_SESSION['username'] = $row['username'];
  header("Location: ../productosVenta.php");
  die();
}


header("Location: ../loginAdminstrdores.php?error=1");
