<?php
include_once '../conetion.php';
session_start();
$total=$_GET['total'];

print_r($_GET['total']);


// Paso 1: Eliminar las comas
$cleanNumber = str_replace(',', '', $total);

// Paso 2: Convertir a número decimal
$decimalNumber = (float) $cleanNumber;


$idUser=$_SESSION['user_id'];

$data=Database::query("SELECT * FROM users WHERE id='$idUser'");


if($data &&$data->num_rows>0){
  $campos=$data->fetch_assoc();
  $email=$campos['email'];

}

if(isset($_POST['telephone'])){
  $telephone = $_POST['telephone'];
  $calle=$_POST['calle'];
  $home_number=$_POST['home-number'];
  $ciyt=$_POST['city'];
  $post_code=$_POST['post-code'];


  $data=Database::query("INSERT INTO shipping_details (user_id, total ,email ,telephone, street, home_number, city, postal_code)
    VALUES ($idUser, $decimalNumber, '$email', '$telephone', '$calle', '$home_number', '$ciyt', '$post_code')");

header("Location: ../tipoPago.php?total={$total}");
}
