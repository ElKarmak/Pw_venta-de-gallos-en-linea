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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Datos de Envío</title>
  <link rel="icon" href="img/Semental.jpeg" />
  <link rel="stylesheet" href="/css/bootstrap.css" />

  <link rel="stylesheet" href="/css/animations.css">
  <style>
    body {
      background-color: aliceblue;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: black;
      width: 100%;
      min-height: 100vh;
      position: relative;
    }

    .container {
      max-width: 500px;
      margin: 50px auto;
      padding: 20px;
      border-radius: 8px;
      background-color: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      z-index: 1000;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }

    h2 {
      margin-bottom: 30px;
      color: black;
      /* Azul */
      text-align: center;
    }

    .form-group {
      margin-bottom: 25px;
    }

    h2,
    label {
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="number"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ced4da;
      /* Borde gris */
      border-radius: 5px;
      background-color: #f8f9fa;
      /* Fondo gris claro */
    }

    button[type="submit"] {
      display: block;
      margin: 0 auto;
      border: none;
      border-radius: 5px;
      background-color: hsl(61, 100%, 50%);
      /* Azul */
      font-size: 16px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #d3ed50;
      /* Azul oscuro */
    }

    @media (max-width: 576px) {
      .container {
        padding: 15px;
        max-width: calc(100% - 30px);
      }
    }


    .img-fluid {
      width: 175px;
      height: 125px;
    }

    .img-flu {
      height: 50px;
    }

    .icon-flu {
      height: 75px;
      border-radius: 5px;
    }

    footer {
      background-color: rgba(255, 255, 255, 0.5);
      text-emphasis-color: black;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }
  </style>
</head>

<body>

  <?php
  include_once './menuUser.php';
  ?>
  <div class="container text-center">
    <h2>Datos de Envío</h2>

    <form id="envio-form" class="needs-validation" action="./functions/envio.php?total=<?php echo $total?>" method="POST">

      <div class="form-group">
        <label for="phone">Teléfono:</label>
        <input id="input-phone-number" name="telephone" type="tel" class="form-control text-center" placeholder="Ingrese su número de telefono" />
      </div>
      <div class="form-group">
        <label for="address">Calle</label>
        <input id="input-calle" name="calle" type="text" class="form-control text-center" placeholder="Calle" />
      </div>

      <div class="form-group">
        <label for="address">Numero de casa</label>
        <input id="input-number-home" name="home-number" type="text" class="form-control text-center" placeholder="Numero" />
      </div>


      <div class="form-group">
        <label for="country">País:</label>
        <select name="city" id="input-contry" class="custom-select text-center">
          <option value="">Seleccionar País</option>
          <option value="mx">México</option>
        </select>
      </div>
      <div class="form-group">
        <label for="post-code">Código Postal:</label>
        <input id="input-postal-code" type="text" class="form-control text-center" i placeholder="Ingrese su Código Postal" />
      </div>


        <button id="btn-submit" type="button" class="btn" style=" border-color:black; color: black;">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
            <path fill="currentColor" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0a2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0a2 2 0 0 1-4 0" />
          </svg>
        </button>


    </form>
  </div>
  <footer class="footer mt-auto py-3 text-center">
    <span class="text-muted">Victor Manuel -
      <script>
        document.write(new Date().getFullYear());
      </script>
      . Todos los derechos reservados.
    </span>
  </footer>
  <script src="/validate/js/detallesEnvio.js"></script>
  <script src="/js/bootstrap.js"></script>
</body>

</html>
