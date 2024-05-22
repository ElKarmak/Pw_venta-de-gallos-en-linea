<?php
include_once "./conetion.php";
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  die();
}
?>

<?php include_once "./conetion.php"; ?>

<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  die();
}
?>


<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $data = Database::query("SELECT * FROM users WHERE id='$id'");
  if ($data && $data->num_rows > 0) {
    $campos = $data->fetch_assoc();
    $username = $campos['username'];
    $email = $campos['email'];
    $password = $campos['password'];
  }
}

?>

<?php

if (isset($_POST['name_user'])) {


  $name = $_POST['name_user'];
  $email = $_POST['name_email'];
  $password = $_POST['name_password'];
  $confirm_password = $_POST['name_confirm_password'];

  if ($password !== $confirm_password) {
    header("Location: /editarPerfil.php");
    exit; // Importante: detén la ejecución del script después de la redirección
}

  $sql = Database::query("UPDATE users SET username='$name', email='$email', password='$password' WHERE id='$id'");

  if ($sql) {
    // Éxito: puedes redirigir al usuario a otra página o mostrar un mensaje de éxito
    header("Location: /Perfil.php");
    exit;
  } else {
    // Error: muestra el mensaje de error específico
    print_r(Database::get_instance()->error);
  }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Editar Perfil</title>
  <link rel="icon" href="img/Semental.jpeg" />
  <link rel="stylesheet" href="css/animations.css">
  <link rel="stylesheet" href="./css/bootstrap.css" />

  <style>
    body {
      background-color: aliceblue;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: flex;
      color: black;
      width: 100%;
      min-height: 100vh;
      position: relative;
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


    .container {
      margin-bottom: 20px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
      border-radius: 10px;
      background-color: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      z-index: 999;
    }

    button[type="submit"] {
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
    label {
      font-weight: bold;
    }

    .img-fluid {
      width: 175px;
      height: 125px;
    }

    .img-flu {
      height: 50px;
    }

    .icon-flu {
      height: 75px;
      border-radius: 5px;
    }

    footer {
      background-color: rgba(255, 255, 255, 0.5);
      text-emphasis-color: black;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100 overflow-x-hidden">

  <nav class="navbar navbar-expand-lg position-relative">
    <div class="container-fluid">
      <a class="navbar-brand text-black">
        <img class="icon-flu" src="/icons/iconoOrigin.svg" alt="" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/index.html">
              <img class="img-flu" src="/icons/ic--baseline-home.svg" alt="" />
            </a>
          </li>

          <!-- Dropdown menu for Categories -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            <a class="nav-link text-black" aria-current="page" href="/carrito.html">
              <img class="img-flu" src="/icons/shoping-cart.svg" alt="" />
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/Perfil.html">
              <img class="img-flu" src="/icons/majesticons--user.svg" alt="" />
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/loginUsers.html">
              <img class="img-flu" src="/icons/majesticons--login-line.svg" alt="" />
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="row justify-content-center vh-100 w-auto align-items-center">
    <div class="col-md-4">
      <div class="container">
        <div class="card-body">
          <h1 class="card-title text-center mb-4">Editar</h1>



          <form anctype="multipart/form-data" id="form_create" class="text-center" action="#" method="POST">
            <div class="form-group mb-3 w-75 mx-auto">

              <label for="username" class="form-label">Nombre</label>
              <input type="text" class="form-control text-center" id="input-user" name="name_user" placeholder="Escriba su nombre" value="<?php echo $username; ?>" />
            </div>

            <div class="form-group mb-3 w-75 mx-auto">
              <label for="email" class="form-label">Correo</label>
              <input type="email" class="form-control text-center" id="input-email" name="name_email" placeholder="Escriba su correo" value="<?php echo $email; ?>" />
            </div>

            <div class="form-group mb-3 w-75 mx-auto">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control text-center" id="input-password" name="name_password" placeholder="Escriba su contraseña" value="<?php echo $password; ?>" />
            </div>

            <div class="form-group mb-3 w-75 mx-auto">
              <label for="confirm-password" class="form-label">Confirme su Contraseña</label>
              <input type="password" class="form-control text-center" id="input-confirm-password" name="name_confirm_password" placeholder="Confirme su contraseña" value="<?php echo $password; ?>" />
            </div>

            <button id="btn-submit" type="submit" class="btn btn-primary text-black">
              <img class="img-flu" src="/icons/iconSave.svg" alt="" />
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer mt-auto py-3 text-center">

    <span class="text-muted">Victor Manuel -
      <script>
        document.write(new Date().getFullYear());
      </script>
      . Todos los derechos reservados.
    </span>

  </footer>
  <script src="/validate/js/crearUsuarioaAndEditar.js"></script>

  <script src="./js/bootstrap.js"></script>
</body>

</html>
