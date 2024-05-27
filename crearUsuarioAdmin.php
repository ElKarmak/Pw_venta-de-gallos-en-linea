<?php
include_once "./conetion.php";
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  die();
}


$data = Database::query("SELECT * FROM users WHERE username = '{$_SESSION['username']}'");
$row = $data->fetch_assoc();


if ($row['role'] == 'Usuario') {
  header("Location: ../indexp.php");
  die();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Crear Usuario Administrador</title>
  <link rel="icon" href="img/Semental.jpeg" />
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <script defer src="./js/bootstrap.js"></script>
  <link rel="stylesheet" href="/css/animations.css">
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
      margin-top: 4px;
      margin-bottom: 80px;
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
      h1,
    label {
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
    }

    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.5);
      text-emphasis-color: black;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }

    .footer {
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }
  </style>
</head>

<body class="d-flex flex-column ">
 <?php
include_once './menuAdmin.php';
 ?>
   <div class="row justify-content-center vh-100 align-items-center">
      <div class="col-md-4">
        <div class="container">
          <div class="card-body">
          <?= isset($_GET['error']) ? '<div class="alert alert-danger text-center!" role="alert">Error las contraseñas no coinciden</div>' : '' ?>
            <h1 class="card-title text-center mb-4">Adminstrador</h1>
            <form anctype="multipart/form-data" id="form_create" class="text-center" action="./functions/createUserAdmin.php" method="POST">
              <div class="form-group mb-3 w-75 mx-auto">
                <label for="username" class="form-label">Nombre</label>
                <input type="text" class="form-control text-center" id="input-user" name="name_user" placeholder="Escriba su nombre" />
              </div>
              <div class="form-group mb-3 w-75 mx-auto">
                <label for="email" class="form-label">Correo</label>
                <input type="email" class="form-control text-center" id="input-email" name="name_email" placeholder="Escriba su correo" />
              </div>
              <div class="form-group mb-3 w-75 mx-auto">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control text-center" id="input-password" name="name_password" placeholder="Escriba su contraseña" />
              </div>
              <div class="form-group mb-3 w-75 mx-auto">
                <label for="confirm-password" class="form-label">Confirme su Contraseña</label>
                <input type="password" class="form-control text-center" id="input-confirm-password" name="name_confirm_password" placeholder="Confirme su contraseña" />
              </div>
              <div class="form-group mb-3 w-75 mx-auto">
                <label for="category-select" class="form-label">Tipo de usuario</label>
                <select name="name_type_user" class="form-control form-control-lg-sm text-center" id="category-select" required>
                  <option value="1">Usuario</option>
                  <option value="2">Adminstrador</option>
                </select>
              </div>
              <button id="btn-submit" type="button" class="btn" style=" border-color:black; color: black;">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2q1.625 0 3.075.475T17.75 3.8L16.3 5.275q-.95-.6-2.025-.937T12 4Q8.675 4 6.337 6.338T4 12t2.338 5.663T12 20q.8 0 1.55-.15t1.45-.425l1.5 1.525q-1.025.5-2.15.775T12 22m7-2v-3h-3v-2h3v-3h2v3h3v2h-3v3zm-8.4-3.4l-4.25-4.25l1.4-1.4l2.85 2.85l10-10.025l1.4 1.4z"/></svg>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  <footer class="footer mt-auto py-3 text-center">
    <span class="text-muted">Victor Manuel - <script>
        document.write(new Date().getFullYear())
      </script>. Todos los derechos reservados.</span>
  </footer>

  <script src="/validate/js/crearUsuarioaAndEditar.js"></script>

</body>

</html>
