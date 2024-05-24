<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Crear Usuario</title>
  <link rel="icon" href="img/Semental.jpeg" />
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <link rel="stylesheet" href="/css/animations.css">
  <script defer src="./js/bootstrap.js"></script>
  <style>
    body {
      background-color: aliceblue;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: flex;
      color: black;
      width: 100%;
      height: 100vh;
      position: relative;
    }


    .container {
      margin-top: 20px;
      margin-bottom: 20px;
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



    /* Ajusta el ancho de los inputs */
    .form-control {
      width: 100%;
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
    h1,label {
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
      .icon-flu{
        height: 75px;
        border-radius: 5px;
      }
      footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.5);
        text-emphasis-color: black;
        box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
      }
      .footer{
        box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
      }


  </style>
</head>

<body class="d-flex flex-column min-vh-90 overflow-x-hidden">
 <?php
 include_once './menuUser.php';
 ?>



    <div class="row justify-content-center vh-100 align-items-center">
      <div class="col-md-4">
        <div class="container">
          <div class="card-body">
            <h1 class="card-title text-center mb-4">Crear</h1>

            <form anctype="multipart/form-data" id="form_create" class="text-center" action="./functions/createUser.php" method="POST">

              <div class="form-group mb-3 w-75 mx-auto">
                <label for="username" class="form-label">Nombre</label>
                <input type="text" class="form-control text-center" id="input-user" name="name_user" placeholder="Escriba su nombre"
                  />
              </div>

              <div class="form-group mb-3 w-75 mx-auto">
                <label for="email" class="form-label">Correo</label>
                <input type="email" class="form-control text-center" id="input-email" name="name_email" placeholder="Escriba su correo"
                />
              </div>

              <div class="form-group mb-3 w-75 mx-auto">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control text-center" id="input-password" name="name_password"
                  placeholder="Escriba su contraseña"
                  />
              </div>

              <div class="form-group mb-3 w-75 mx-auto">
                <label for="confirm-password" class="form-label">Confirme su Contraseña</label>
                <input type="password" class="form-control text-center" id="input-confirm-password" name="name_confirm-password"
                  placeholder="Confirme su contraseña"
                  />
              </div>

              <button id="btn-submit" type="button" class="btn" style=" border-color:black; color: black;">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 512 512"><path fill="currentColor" d="M208 16A112.127 112.127 0 0 0 96 128v79.681a80.236 80.236 0 0 0 9.768 38.308l27.455 50.333L60.4 343.656A79.725 79.725 0 0 0 24 410.732V496h288v-32H56v-53.268a47.836 47.836 0 0 1 21.841-40.246l97.66-63.479l-41.64-76.341A48.146 48.146 0 0 1 128 207.681V128a80 80 0 0 1 160 0v79.681a48.146 48.146 0 0 1-5.861 22.985L240.5 307.007l71.5 46.476v-38.166l-29.223-19l27.455-50.334A80.23 80.23 0 0 0 320 207.681V128A112.127 112.127 0 0 0 208 16m216 384v-64h-32v64h-64v32h64v64h32v-64h64v-32z"/></svg>
              </button>

            </form>
          </div>
        </div>
      </div>
    </div>


  <footer class="footer mt-auto py-3 text-center">
    <span class="text-muted">Victor Manuel - <script>document.write(new Date().getFullYear())</script>. Todos los derechos reservados.</span>
</footer>
  <script src="/validate/js/crearUsuarioaAndEditar.js"></script>

</body>

</html>
