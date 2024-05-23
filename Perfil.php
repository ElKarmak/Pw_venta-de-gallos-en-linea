<?php
include_once "./conetion.php";
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  die();
}
// Realizamos la consulta para obtener los datos del usuario correspondiente logueado
$response = Database::query("SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'");
$users = $response->fetch_assoc();
$userId = $users['id'];
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Perfil</title>
  <link rel="icon" href="img/Semental.jpeg" />
  <link rel="stylesheet" href="./css/bootstrap.css" />
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

    .product-details-container {
      padding: 30px;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
      /* Agregando sombra */
      border-radius: 10px;
      /* Bordes redondeados */
      background-color: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      z-index: 999;
      margin-top: 20px;
      margin-bottom: 40px;
    }

    .product-details img {
      max-width: 100%;
      height: auto;
      margin-bottom: 20px;
    }


    button[type="submit"] {
      display: block;
      margin: 0 auto;
      border: none;
      border-radius: 5px;
      background-color: hsl(61, 100%, 50%);
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #d3ed50;
    }

    h2,
    h1,
    h4 label {
      font-weight: bold;
    }

    .icon-flu {
      height: 75px;
      border-radius: 5px;
    }

    .img-fluid {
      width: 50%;
      height: 40%px;
      border-radius: 40px;
    }

    .img-flu {
      height: 50px;
    }

    footer {
      background-color: rgba(255, 255, 255, 0.5);
      text-emphasis-color: black;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-90 overflow-x-hidden">

  <?php
  include_once './menuUser.php';
  ?>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6 mx-lg-auto">
        <div class="product-details-container d-flex justify-content-center align-items-center flex-column">
          <h1 class="text-center mb-5">Perfil</h1>
          <img class="img-fluid text-center p-4" src="/img/Gallo2.jpeg" alt="Imagen del Producto" />
          <div class="align-content-center text-lg-start">
            <h4 class="card-title p-2">Nombre: Juan Pérez</h4>
            <h4 class="card-title p-2">
              Correo Electrónico: juan.perez@example.com
            </h4>
            <h4 class="card-title p-2">
              Dirección de Envío: Calle Principal #123, Ciudad, País
            </h4>
            <div class="d-flex justify-content-center">
              <a href="/editarPerfil.php?id=<?php echo $userId; ?>"><button id="submit" type="button" class="btn" style=" border-color:black; color: black;">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M5 17.808v-.839q0-.619.36-1.159q.361-.539.97-.837q1.416-.679 2.834-1.018q1.417-.34 2.836-.34q.675 0 1.354.084t1.367.238l-.829.834q-.485-.067-.946-.111q-.46-.045-.946-.045q-1.335 0-2.646.319t-2.546.916q-.38.202-.593.494Q6 16.637 6 16.97v.647h5.846v1H5.808q-.343 0-.576-.233T5 17.808m9.23 1.384v-.73q0-.332.135-.633q.133-.3.35-.518l4.848-4.828q.148-.149.306-.2q.157-.052.315-.052q.172 0 .337.064t.302.193l.925.945q.123.148.187.307q.065.16.065.32t-.061.322t-.191.31l-4.829 4.83q-.217.217-.517.347q-.301.131-.633.131h-.73q-.344 0-.576-.232t-.232-.576m6.885-5.133l-.925-.944zm-6 5.056h.95l3.467-3.473l-.47-.475l-.455-.488l-3.492 3.486zm3.948-3.948l-.456-.488l.925.963zM12 11.385q-1.237 0-2.119-.882T9 8.385t.881-2.12T12 5.386t2.119.88t.881 2.12t-.881 2.118t-2.119.882m0-1q.825 0 1.413-.588T14 8.385t-.587-1.413T12 6.385t-1.412.587T10 8.385t.588 1.412t1.412.588m0-2"/></svg>
                </button>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer mt-auto py-3 text-center">
    <div class="container">
      <span class="text-muted">Victor Manuel -
        <script>
          document.write(new Date().getFullYear());
        </script>
        . Todos los derechos reservados.
      </span>
    </div>
  </footer>

  <script src="./js/bootstrap.js"></script>
</body>

</html>
