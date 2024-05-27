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


<style>
  .text {
    position: relative;
    display: inline-block;
    color: black;
    font-size: 20px;
    text-decoration: none;
    overflow: hidden;
  }

  .text::before,
  .text::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.1);
    z-index: -1;
    border-radius: 50%;
    animation: bubble 3s infinite;
    opacity: 0;
  }

  .text::after {
    animation-delay: 1.5s;
  }

  @keyframes bubble {
    0% {
      transform: scale(0.5);
      opacity: 1;
    }

    50% {
      transform: scale(1.1);
      opacity: 1;
    }

    100% {
      transform: scale(2.5);
      opacity: 1;
    }
  }
</style>


<?php
include_once './conetion.php';
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  die();
}
$nameUser = $_SESSION['username'];
?>

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
      <ul class="navbar-nav ms-auto" style="padding-right: 20px; padding-left: 20px; padding-top: 20px;">


        <li class="nav-item dropdown" style="padding-top: 15px;">

          <a class="text nav-link  text-black " style="font-size: 1.2em; font-weight: bold; color: #000;">
            Bienvenido: <?php echo $nameUser; ?>
          </a>

        </li>



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



        <li class="nav-item dropdown">
          <a class="nav-link text-black p-xl-4" aria-current="page" href="/listaUser.php">
            Usuarios
          </a>
        </li>






        <li class="nav-item">
          <a class="nav-link text-black" aria-current="page" href="/indexp.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
              <rect width="4" height="6" x="10" y="14" fill="currentColor" fill-opacity="0">
                <animate fill="freeze" attributeName="fill-opacity" begin="0.9s" dur="0.15s" values="0;0.3" />
              </rect>
              <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path stroke-dasharray="21" stroke-dashoffset="21" d="M5 21H19">
                  <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="21;0" />
                </path>
                <path stroke-dasharray="15" stroke-dashoffset="15" d="M5 21V8M19 21V8">
                  <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.2s" dur="0.2s" values="15;0" />
                </path>
                <path stroke-dasharray="24" stroke-dashoffset="24" d="M9 21V13H15V21">
                  <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.4s" dur="0.4s" values="24;0" />
                </path>
                <path stroke-dasharray="26" stroke-dashoffset="26" d="M2 10L12 2L22 10">
                  <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.4s" values="26;0" />
                </path>
              </g>
            </svg>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-black" aria-current="page" href="/productosVenta.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
              <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor">
                <path d="M2 12.4c0-3.017 0-4.525.946-5.463C3.893 6 5.416 6 8.462 6h1.076c3.047 0 4.57 0 5.516.937S16 9.383 16 12.4v3.2c0 3.017 0 4.525-.946 5.463c-.947.937-2.47.937-5.516.937H8.462c-3.046 0-4.57 0-5.516-.937S2 18.617 2 15.6z" />
                <path d="M15.538 16h.923c2.611 0 3.917 0 4.728-.82S22 13.04 22 10.4V7.6c0-2.64 0-3.96-.811-4.78S19.072 2 16.46 2h-.923c-2.612 0-3.917 0-4.728.82c-.71.717-.799 1.817-.81 3.847M6 12h3m-3 5h5m-.5-14l4 3.5" />
              </g>
            </svg>
          </a>
        </li>








        <li class="nav-item">
          <a class="nav-link text-black" aria-current="page" href="/crearProducto.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
              <path fill="currentColor" d="M11 17h2v-4h4v-2h-4V7h-2v4H7v2h4zm1 5q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
            </svg>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-black" aria-current="page" href="/crearUsuarioAdmin.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 512 512">
              <path fill="currentColor" d="M208 16A112.127 112.127 0 0 0 96 128v79.681a80.236 80.236 0 0 0 9.768 38.308l27.455 50.333L60.4 343.656A79.725 79.725 0 0 0 24 410.732V496h288v-32H56v-53.268a47.836 47.836 0 0 1 21.841-40.246l97.66-63.479l-41.64-76.341A48.146 48.146 0 0 1 128 207.681V128a80 80 0 0 1 160 0v79.681a48.146 48.146 0 0 1-5.861 22.985L240.5 307.007l71.5 46.476v-38.166l-29.223-19l27.455-50.334A80.23 80.23 0 0 0 320 207.681V128A112.127 112.127 0 0 0 208 16m216 384v-64h-32v64h-64v32h64v64h32v-64h64v-32z" />
            </svg>
          </a>
        </li>





        <li class="nav-item">
          <a class="nav-link text-black" aria-current="page" href="/carrito.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
              <path fill="currentColor" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0a2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2a1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0a2 2 0 0 1-4 0" />
            </svg>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" aria-current="page" href="/Perfil.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 256 256">
              <path fill="currentColor" d="M230.92 212c-15.23-26.33-38.7-45.21-66.09-54.16a72 72 0 1 0-73.66 0c-27.39 8.94-50.86 27.82-66.09 54.16a8 8 0 1 0 13.85 8c18.84-32.56 52.14-52 89.07-52s70.23 19.44 89.07 52a8 8 0 1 0 13.85-8M72 96a56 56 0 1 1 56 56a56.06 56.06 0 0 1-56-56" />
            </svg>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" aria-current="page" href="/functions/cerrarSesionUsers.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
              <path fill="currentColor" d="M12 21v-2h7V5h-7V3h9v18zm-2-4l-1.375-1.45l2.55-2.55H3v-2h8.175l-2.55-2.55L10 7l5 5z" />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
