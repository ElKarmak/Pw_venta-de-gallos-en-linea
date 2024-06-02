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
  <title>Método de Pago</title>
  <!-- Vincular Bootstrap CSS -->
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <style>
    .payment-method {
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .payment-method:hover {
      background-color: #f0f0f0;
    }

    .selected {
      border: 2px solid #007bff;
      background-color: #e9ecef;
    }

    .payment-method svg {
      margin-bottom: 10px;
    }
  </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

  <div class="card w-50">
    <div class="card-body">
      <h3 class="card-title text-center">Método de Pago</h3>
      <p class="card-text text-center">Selecciona tu método de pago preferido.</p>
      <div class="d-flex justify-content-around mt-4">

        <a href='/tarjetaCredito.php?total=<?php echo $total ?> '>
          <button>


            <div class="payment-method text-center p-3" id="method-card">


              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mb-2">
                <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                <line x1="2" x2="22" y1="10" y2="10"></line>
              </svg>
              Tarjeta de Crédito
            </div>



      </div>
      </button></a>
    </div>
  </div>

  <script src="./js/bootstrap.js"></script>


</body>

</html>
