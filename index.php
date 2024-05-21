<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tienda de Productos</title>
  <link rel="icon" href="img/Semental.jpeg" />
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <script defer src="./js/bootstrap.js"></script>
  <style>
    .parrafoAltura {
      display: -webkit-box;
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 2;
      overflow: none;

      height: 40px;
    }


    body {
      background-color: aliceblue;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: flex;
      color: black;
      width: 100%;
      min-height: 110vh;

    }

    .product-card {
      display: block;
      width: auto;

      padding: 15px;
      margin-bottom: 20px;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
      background-color: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
    }

    .product-image {
      max-width: 100%;
      height: 100%;
      margin-bottom: 10px;
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

    .product-card {
      background-color: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      min-width: 303%;
      min-height: 100%;
      padding-bottom: 20px;
    }

    .botones[type="button"] {
      display: block;
      border: 1px;
      border-radius: 10px;
      font-size: 10px;
      cursor: pointer;
    }

    .botones[type="button"]:hover {
      background-color: wheat;
    }

    h2,
    h1,
    h4,
    button label {
      font-weight: bold;
    }

    .navbar-brand::img-icon {
      width: 50%;
    }

    .img-fluid {
      max-height: 100vh;
      max-width: auto;
    }

    .img-fluid {
      min-height: 35vh;
      min-width: auto;
    }

    .img-flu {
      height: 50px;
    }

    .icon-flu {
      height: 75px;
      border-radius: 5px;
      ;
    }

    .principal-container {
      display: ruby-base-container;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
      padding-top: 50px;
      padding-block: 80px;
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
      <img class="icon-flu" src="/icons/iconoOrigin.svg" alt="" />
      <a class="texto navbar-brand text-black">
        venta de gallos
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <!-- Dropdown menu for Categories -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-black p-xl-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

              <li><a class="dropdown-item" href="#">Primer Nivel</a></li>
              <li><a class="dropdown-item" href="#">Segundo Nivel</a></li>
              <li><a class="dropdown-item" href="#">Tercer Nivel</a></li>
              <li><a class="dropdown-item" href="#">Todos</a></li>
              <!-- Add more categories as needed -->
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/index.php">
              <img class="img-flu" src="/icons/ic--baseline-home.svg" alt="" />
            </a>
          </li>


          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/carrito.html">
              <img class="img-flu" src="/icons/shoping-cart.svg" alt="" />
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/Perfil.php">
              <img class="img-flu" src="/icons/majesticons--user.svg" alt="" />
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/functions/cerrarSesionUsers.php">
              <img class="img-flu" src="/icons/majesticons--login-line.svg" alt="" />
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="principal-container row justify-content-center">
    <div class="container row">
      <h1 class="text-center mb-5">Disponibles</h1>

      <div style="
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 10px;
          ">

        <div class="col-md-4" style="cursor: pointer">
          <div class="product-card" onclick="window.location.href='/inspecionarProducto.html'">
            <img class="img-fluid" src="/img/GalloTienda1.jpg" alt="Producto 1" class="product-image" />
            <h2 class="mt-3">Regulay Gray</h2>
            <h4>$ 30000</h4>
            <p>Diponible: 5</p>
            <h6>Descripción</h6>
            <p class="parrafoAltura">Se caracterisa por es una ave de color grewrwr3rwr4343552rwqd</p>
            <div class="center">
              <button type="button" class="botones btn" onclick="alert('Botón presionado! Jajajajaa *_*'); event.stopPropagation();">
                <img t class="img-flu" src="/icons/shoping-cart.svg" alt="" />
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-4" style="cursor: pointer">
          <div class="product-card" onclick="window.location.href='/inspecionarProducto.html'">
            <img class="img-fluid" src="/img/GalloTienda2.jpg" alt="Producto 1" class="product-image" />
            <h2 class="mt-3">Hatch</h2>
            <h4>$ 30000</h4>
            <p>Diponible: 5</p>
            <h6>Descripción</h6>
            <p class="parrafoAltura">Se caracterisa por es una ave de color </p>
            <div class="center">
              <button type="button" class="botones btn" onclick="alert('Botón presionado! Jajajajaa *_*'); event.stopPropagation();">
                <img t class="img-flu" src="/icons/shoping-cart.svg" alt="" />
              </button>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>


  <footer class="footer mt-auto py-3 text-center">
    <div class="container">
      <span class="text-muted">Victor Manuel - <script>
          document.write(new Date().getFullYear())
        </script>. Todos los derechos reservados.</span>
    </div>
  </footer>
</body>

</html>
