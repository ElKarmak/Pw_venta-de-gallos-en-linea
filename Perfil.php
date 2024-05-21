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
$userId= $users['id'];
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

      .navbar {
        position: absolute;
        margin-bottom: 10px;
        background-color: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        z-index: 999;
        box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
      }

      .navbar-nav .nav-item .nav-link,
      .navbar-nav .nav-item a,
      .navbar-brand {
        font-size: 20px;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: bold;
        margin-bottom: 5px;
      }
      .navbar-nav .nav-item.dropdown:hover .dropdown-menu {
        display: block;
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
    <nav class="navbar navbar-expand-lg position-relative">
      <div class="container-fluid">
        <a class="navbar-brand text-black">
          <img class="icon-flu" src="/icons/iconoOrigin.svg" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a
                class="nav-link text-black"
                aria-current="page"
                href="/index.html"
              >
                <img
                  class="img-flu"
                  src="/icons/ic--baseline-home.svg"
                  alt=""
                />
              </a>
            </li>

            <!-- Dropdown menu for Categories -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-black"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img class="img-flu" src="/icons/icon_Category.svg" alt="" />
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Categoria 1</a></li>
                <li><a class="dropdown-item" href="#">Categoria 2</a></li>
                <li><a class="dropdown-item" href="#">Categoria 3</a></li>
                <!-- Add more categories as needed -->
              </ul>
            </li>
            <li class="nav-item">
              <a
                class="nav-link text-black"
                aria-current="page"
                href="/carrito.html"
              >
                <img class="img-flu" src="/icons/shoping-cart.svg" alt="" />
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link text-black"
                aria-current="page"
                href="/Perfil.html"
              >
                <img
                  class="img-flu"
                  src="/icons/majesticons--user.svg"
                  alt=""
                />
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link text-black"
                aria-current="page"
                href="/login.php"
              >
                <img
                  class="img-flu"
                  src="/icons/majesticons--login-line.svg"
                  alt=""
                />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6 mx-lg-auto">
          <div
            class="product-details-container d-flex justify-content-center align-items-center flex-column"
          >
            <h1 class="text-center mb-5">Perfil</h1>
            <img
              class="img-fluid text-center p-4"
              src="/img/Gallo2.jpeg"
              alt="Imagen del Producto"
            />
            <div class="align-content-center text-lg-start">
              <h4 class="card-title p-2">Nombre: Juan Pérez</h4>
              <h4 class="card-title p-2">
                Correo Electrónico: juan.perez@example.com
              </h4>
              <h4 class="card-title p-2">
                Dirección de Envío: Calle Principal #123, Ciudad, País
              </h4>

              <a href="/editarPerfil.php?id=<?php echo $userId;?>"
                ><button type="submit" class="btn btn-primary text-black">
                  <img
                    class="img-flu"
                    src="/icons/IconUpdate.svg"
                    alt=""
                  /></button
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer mt-auto py-3 text-center">
      <div class="container">
        <span class="text-muted"
          >Victor Manuel -
          <script>
            document.write(new Date().getFullYear());
          </script>
          . Todos los derechos reservados.</span
        >
      </div>
    </footer>

    <script src="./js/bootstrap.js"></script>
  </body>
</html>