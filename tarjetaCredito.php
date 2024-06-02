<?php
include_once "./conetion.php";
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  die();
}
$total = $_GET['total'];
$_SESSION['user_id'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarjeta de Crédito</title>
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <style>
    .form-container {
      border: 1px solid #ced4da;
      padding: 20px;
      border-radius: 5px;
      background-color: #f8f9fa;
      width: 100%;
      max-width: 400px;
    }
    .full-screen-container {
      height: 100vh;
    }
  </style>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center full-screen-container">
  <div class="form-container">
    <h2>Pago con Tarjeta de Crédito</h2>
    <form action="/functions/envio.php" method="GET">
      <input type="hidden" name="total" value="<?php echo $total; ?>">
      <div class="form-group">
        <label for="cardNumber">Número de Tarjeta</label>
        <input type="text" class="form-control" id="cardNumber" placeholder="Ingrese su número de tarjeta">
      </div>
      <div class="form-group">
        <label for="cardName">Nombre en la Tarjeta</label>
        <input type="text" class="form-control" id="cardName" placeholder="Ingrese el nombre tal como aparece en la tarjeta">
      </div>
      <div class="form-group">
        <label for="expiryDate">Fecha de Expiración</label>
        <input type="text" class="form-control" id="expiryDate" placeholder="MM/AA">
      </div>
      <div class="form-group">
        <label for="cvv">CVV</label>
        <input type="text" class="form-control" id="cvv" placeholder="CVV">
      </div>
      <div class="form-group p-2 text-center">
      <button type="submit" class="btn btn-primary">Pagar</button>
      </div>
    </form>
  </div>
</div>
<script src="./js/bootstrap.js"></script>
</body>
</html>
