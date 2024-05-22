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

            <a href="/editarPerfil.php?id=<?php echo $userId; ?>"><button type="submit" class="btn btn-primary text-black">
                <img class="img-flu" src="/icons/IconUpdate.svg" alt="" /></button></a>
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
