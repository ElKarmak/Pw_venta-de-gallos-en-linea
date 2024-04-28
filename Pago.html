<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Pago paypal</title>
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="icon" href="img/Semental.jpeg">
  <style>
       body{
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

    /* Estilos para el marco del contenedor */
    #smart-button-container {
      padding: 20px; /* Espacio interno para separar el contenido del borde */
      border-radius: 10px; /* Hace que el borde del contenedor sea redondo */
      border:0; /* Puedes ajustar el grosor y color del borde según tus necesidades */
      width: 80%; /* Ancho del contenedor */
      max-width: 600px;
      height: auto; /* Alto del contenedor */
      margin: 100px auto 20px auto; /* Centra el contenedor horizontalmente */
      background-color: rgba(255, 255, 255, 0.5);
        box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }
    p {
      font-weight: bold;
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


      .icon-flu{
        height: 75px;
        border-radius: 5px;
      }

      .img-fluid{
      width: 50%;
      height: 40%px;
      border-radius: 40px;
    }
    .img-flu {
        height: 50px;

      }

      footer{
      background-color: rgba(255, 255, 255, 0.5);
      text-emphasis-color: black;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }
  </style>
  <script defer src="./js/bootstrap.js"></script>
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
              href="/loginUsers.html"
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
  <div class="tex-dark" id="smart-button-container">
    <div  style="text-align: center">
      <div class="text-white " id="paypal-button-container"></div>
    </div>
    <div style="text-align: center ">
      <p>¡Bienvenido a nuestro servicio de pagos!</p>
      <p>Por favor, sigue las instrucciones para completar tu pago.</p>
    </div>
  </div>

  <footer class="footer mt-auto py-3 text-center">
    <div class="container">
      <span class="text-muted">Victor Manuel - <script>document.write(new Date().getFullYear())</script>. Todos los derechos reservados.</span>
    </div>
  </footer>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD"
   data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"Ejemplo de botón","amount":{"currency_code":"USD","value":1}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            // Detalles completos disponibles
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            // Muestra un mensaje de éxito dentro de esta página web para el usuario
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>¡Gracias por tu pago!"</h3>';
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
</body>
</html>
