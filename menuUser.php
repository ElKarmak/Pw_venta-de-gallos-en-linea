<style>

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

    .icon-flu {
      height: 75px;
      border-radius: 5px;
      ;
    }

    .img-fluid {
      max-height: 100vh;
      max-width: auto;
    }

    .img-flu {
      height: 50px;
    }

    a {
      margin-right: 25px;
    }

    #imagen {
      width: 100%;
      height: 58%;

    }

    .texto {
      padding-left: 20px;
      font-weight: bold;
      border-radius: 10px;
    }


</style>

<nav class="navbar navbar-expand-lg position-relative">
    <div class="container-fluid">
      <img class="icon-flu" src="/icons/iconoOrigin.svg" alt="" />
      <a class="texto navbar-brand text-black">
        Venta de Gallos
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-black p-xl-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorías
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/indexp.php?category=primer nivel">Primer Nivel</a></li>
              <li><a class="dropdown-item" href="/indexp.php?category=segundo nivel">Segundo Nivel</a></li>
              <li><a class="dropdown-item" href="/indexp.php?category=tercer nivel">Tercer Nivel</a></li>
              <li><a class="dropdown-item" href="/indexp.php?category=todos">Todos</a></li>
              <!-- Add more categories as needed -->
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/indexp.php">
              <img class="img-flu" src="/icons/ic--baseline-home.svg" alt="" />
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/carrito.php">
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
