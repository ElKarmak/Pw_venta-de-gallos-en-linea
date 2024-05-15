<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sesión Administradores</title>
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <link rel="stylesheet" href="css/animations.css">
  <link rel="icon" href="img/Semental.jpeg" />
  <style>
    .container {
      padding: 20px;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
      /* Agregando sombra */
      border-radius: 10px;
      /* Bordes redondeados */
      background-color: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      z-index: 999;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }

    body {
      background-color: aliceblue;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: flex;
      color: black;
      width: 100%;
      height: 100vh;
    }

    button[type="button"] {
      display: block;
      margin: 0 auto;
      border: none;
      border-radius: 5px;
      background-color: hsl(61, 100%, 50%);
      /* Azul */
      font-size: 16px;
      cursor: pointer;
    }

    button[type="button"]:hover {
      background-color: #d3ed50;
      /* Azul oscuro */
    }

    h1,
    label {
      font-weight: bold;
    }



    footer {
        background-color: rgba(255, 255, 255, 0.5);
        text-emphasis-color: black;
        box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
      }

  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-center vh-100 align-items-center">
      <div class="col-md-4">
        <div class="container">
          <div class="card-body">
            <h1 class="card-title text-center mb-4">Admistradores</h1>

              <?= isset($_GET['error']) ? '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos</div>' : '' ?>

            <form id="login-form" class="text-center needs-validation" action="/functions/adminLogin.php" method="POST">



              <div class="mb-3 w-50 mx-auto">
                <label for="username" class="form-label">Usuario</label>
                <input id="input-text"  type="text" class="form-control" id="username" name="username"
                placeholder="admin"/>
              </div>
              <div class="mb-3 w-50 mx-auto">
                <label for="password" class="form-label">Contraseña</label>
                <input id="input-password"  type="password" class="form-control" id="password" name="password"
                placeholder="Admin123."/>
              </div>

              <div class="text-center">
                <button  id="btn-submit" type="button" class="btn btn-primary text-black py-2">
                  Iniciar Sesión
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

  <footer class="footer mt-auto py-3 text-center">

    <span class="text-muted"
      >Victor Manuel -
      <script>
        document.write(new Date().getFullYear());
      </script>
      . Todos los derechos reservados.</span
    >

</footer>

  <script src="/validate/js/login.js"></script>


</body>

</html>
