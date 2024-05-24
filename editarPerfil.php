<?php
include_once "./conetion.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    die();
}

// Inicializamos las variables
$username = $email = $password = '';
$error_message = '';

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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name_user'];
    $email = $_POST['name_email'];
    $password = $_POST['name_password'];
    $confirm_password = $_POST['name_confirm_password'];

    if ($password !== $confirm_password) {
        $error_message = 'Las contraseñas no coinciden';
    } else {
        $sql = Database::query("UPDATE users SET username='$name', email='$email', password='$password' WHERE id='$id'");
        if ($sql) {
            $_SESSION['username'] = $name; // Actualiza la sesión con el nuevo nombre de usuario
            header("Location: /Perfil.php?id=$id");
            exit; // Importante: detén la ejecución del script después de la redirección
        } else {
            $error_message = "Error: " . Database::get_instance()->error;
        }
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
  <?php
  include_once './menuUser.php';
  ?>
  <div class="row justify-content-center vh-100 w-auto align-items-center">
    <div class="col-md-4">
      <div class="container">
        <div class="card-body">
          <h1 class="card-title text-center mb-4">Editar</h1>
          <?php if ($error_message): ?>
              <div class="alert alert-danger" role="alert">
                  <?php echo $error_message; ?>
              </div>
          <?php endif; ?>
          <form enctype="multipart/form-data" id="form_create" class="text-center" action="editarPerfil.php?id=<?php echo $id; ?>" method="POST">
            <div class="form-group mb-3 w-75 mx-auto">
              <label for="username" class="form-label">Nombre</label>
              <input type="text" class="form-control text-center" id="input-user" name="name_user" placeholder="Escriba su nombre" value="<?php echo htmlspecialchars($username); ?>" />
            </div>
            <div class="form-group mb-3 w-75 mx-auto">
              <label for="email" class="form-label">Correo</label>
              <input type="email" class="form-control text-center" id="input-email" name="name_email" placeholder="Escriba su correo" value="<?php echo htmlspecialchars($email); ?>" />
            </div>
            <div class="form-group mb-3 w-75 mx-auto">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control text-center" id="input-password" name="name_password" placeholder="Escriba su contraseña" value="<?php echo htmlspecialchars($password); ?>" " />
            </div>
            <div class="form-group mb-3 w-75 mx-auto">
              <label for="confirm-password" class="form-label">Confirme su Contraseña</label>
              <input type="password" class="form-control text-center" id="input-confirm-password" name="name_confirm_password" placeholder="Confirme su contraseña" value="<?php echo htmlspecialchars($password); ?>"" />
            </div>
            <button id="btn-submit" type="submit" class="btn" style="border-color:black; color: black;">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                <path fill="currentColor" d="m21.7 13.58l-1.28-1.28a.55.55 0 0 0-.77 0l-1 1l2.05 2.05l1-1a.55.55 0 0 0 0-.77M12 22h2.06l6.05-6.07l-2.05-2.05L12 19.94zm-2-1H5c-.53 0-1.04-.21-1.41-.59C3.21 20.04 3 19.53 3 19V5c0-.53.21-1.04.59-1.41C3.96 3.21 4.47 3 5 3h14a2 2 0 0 1 2 2v5.33a2.57 2.57 0 0 0-2 .03V5H5v14h5.11l-.11.11zm4.62-6.5L12.11 17H7.5v-.75c0-1.5 3-2.25 4.5-2.25c.7 0 1.73.16 2.62.5m-1.03-2.91c-.42.41-.99.66-1.59.66s-1.17-.25-1.59-.66A2.3 2.3 0 0 1 9.75 10c0-.6.25-1.17.66-1.59c.42-.41.99-.66 1.59-.66s1.17.25 1.59.66c.41.42.66.99.66 1.59s-.25 1.17-.66 1.59" />
              </svg>
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
  <script src="/validate/js/crearUsuarioaAndEditar.js"></script
  <script src="./js/bootstrap.js"></script>
</body>

</html>
