<?php
include_once "../conetion.php";


$username = $_POST['username'];
$password = $_POST['password'];



$data = Database::query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");


if($data->num_rows > 0){
  $row = $data->fetch_assoc();
  session_start();
  $_SESSION['username'] = $row['username'];
  header("Location: ../index.php");
  die();
}


header("Location: ../loginUsers.php?error=1");
