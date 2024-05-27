<?php

include_once "./conetion.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lista de usuarios</title>
  <link rel="icon" href="img/Semental.jpeg" />
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <script defer src="./js/bootstrap.js"></script>
  <style>
    body {
      background-color: aliceblue;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      background-attachment: flex;
      color: black;
      width: auto;
      min-height: 110vh;
      position: relative;
    }

    .table-container {
      max-width: 100%;
      border: 2px solid black;
    }

    .container {
      padding-top: 80px;
      padding-bottom: px;
      width: auto;
      padding: 10px;
      border-radius: 10px;
      text-align: center;
      background-color: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      z-index: 999;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }

    input[type="number"] {
      width: 100px;
      margin: 0 auto;
      padding: auto 5px;
      text-align: center;
    }

    .table {
      border: 2px solid black;
      border-spacing: 0;
    }

    .th,
    td {
      border: 2px solid black;
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
      /* Azul oscuro */
    }

    h1,
    h3,
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

    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.5);
      text-emphasis-color: black;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }
  </style>
</head>

<body>
  <?php
  include_once './menuAdmin.php';
  ?>
  <?= $_GET['error'] == 'delete-yourself' ? '<div class="alert alert-danger text-center" role="alert">No puedes borrarte tu mismo!</div>' : ''; ?>
  <?= $_GET['success'] == 'deleted' ? '<div class="alert alert-success text-center" role="alert">Usuario eliminado exitosamente!</div>' : ''; ?>
  <div class="container mt-5 rounded-3 text-center">
    <h2>Carrito</h2>
    <div class="table-responsive">
      <!-- Agregamos la clase table-responsive -->
      <table class="table">
        <thead>
          <tr>

            <th scope="col">Nombre</th>
            <th scope="col">Correo Electrónico</th>
            <th scope="col">rool</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php

          $query = "SELECT * FROM users";
          $response = Database::query($query);
          $users = $response->fetch_all(MYSQLI_ASSOC);
          foreach ($users as $user) {

          ?>
            <tr class="align-middle">
              <td>
                <?php echo $user['username']; ?>
              </td>
              <td id="price"><?php echo $user['email']; ?></td>
              <td><?php echo $user['role']; ?></td>

              <td>
                <a href="/functions/deleteUser.php?id=<?php echo $user['id']; ?>">
                  <button type="button" class="btn" style=" color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M15 13h1.5v2.82l2.44 1.41l-.75 1.3L15 16.69zm8 3c0 3.87-3.13 7-7 7c-1.91 0-3.64-.76-4.9-2H8c-1.1 0-2-.9-2-2V7h12v2.29c2.89.86 5 3.54 5 6.71M9 16c0-3.87 3.13-7 7-7H8v10h1.67c-.43-.91-.67-1.93-.67-3m7-5c-2.76 0-5 2.24-5 5s2.24 5 5 5s5-2.24 5-5s-2.24-5-5-5m-.5-7H19v2H5V4h3.5l1-1h5z" />
                    </svg>
                  </button>
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </div>




  <footer class="footer mt-auto py-3 text-center">

    <span class="text-muted">Victor Manuel - <script>
        document.write(new Date().getFullYear())
      </script>. Todos los derechos reservados.</span>

  </footer>


</body>

</html>
