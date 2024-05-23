<?php

include_once "./conetion.php";

session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  die();
}



$query = "SELECT * FROM products";
$response = Database::query($query);

$products = $response->fetch_all(MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Productos en Venta</title>
  <link rel="icon" href="img/Semental.jpeg">
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
      height: 102vh;
    }

    .table-container {
      max-width: 100%;
      border: 2px solid black;
      border-radius: 10px;

    }

    .container {
      padding-top: 80px;
      padding-bottom: px;
      width: auto;
      padding: 10px;
      border-radius: 10px;
      text-align: center;
    }

    input[type="number"] {
      width: 100px;
      /* Centrado el input */
      margin: 0 auto;
      /*Input mas pequeño*/
      padding: auto 5px;
      /*Text align center*/
      text-align: center;
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

    .table {
      border: 2px solid black;

      border-spacing: 0;
    }

    .th,
    td {
      border: 2px solid black;
    }

    /* Styles for the image in the table */
    .img-fluid {
      width: 175px;
      height: 125px;
    }

    .botones[type="button"] {
      display: center;
      margin: 0 auto;

      border: none;
      border-radius: 5px;
      background-color: hsl(61, 100%, 50%);
      /* Azul */
      font-size: 16px;
      cursor: pointer;
    }

    .botones[type="button"]:hover {
      background-color: #d3ed50;
      /* Azul oscuro */
    }


    h2,
    h1,
    h4,
    button label {
      font-weight: bold;

    }

    .img-flu {
      height: 30px;
      width: 30px;

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

<body id="recargar">
  <?php

  include_once './menuAdmin.php';
  ?>
  <div class="container mt-5 rounded-3 text-center conresponsive">
    <div style="
      display: flex;
      justify-content: space-between;
      margin-bottom: 5px;
      ">
      <h2>Listado de Productos</h2>
      <input class="border-2 rounded-3" type="search" placeholder="Buscar...">
    </div>
    <div class="table-respornsive ">
      <table class="table ">
        <thead>
          <tr>
            <th scope="col">Imagen</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Categoría</th>
            <th scope="col">Descripción</th>
            <th scope="col">Aciones</th>
          </tr>
        </thead>

        <tbody>

          <?php
          foreach ($products as $product) {

          ?>
            <tr class="align-middle">
              <td class="overflow-auto">
                <img class="img-fluid" src="data:image/jpeg;base64,<?= base64_encode($product['image']) ?>" alt="Product Image" />
              </td>
              <td><?= $product['name'] ?></td>
              <td id="price"><?= $product['price'] ?></td>
              <td>
                <div class="align-middle text-center">
                  <input class="form-control form-control-lg-sm" type="number" value="<?= $product['stock'] ?>" disabled />
                </div>
              </td>
              <td>
                <?= $product['category'] ?>
              </td>

              <td>
                <?= $product['description'] ?>
              </td>
              <td class="d-flex flex-column align-items-center">
                <div class="mb-3">
                  <a href="/editarProducto.php?id=<?= $product['id'] ?>" style="text-decoration: none">
                    <button type="button" class="botones btn-primary btn btn-danger text-black">
                      <img class="img-flu" src="/icons/IconUpdate.svg" alt="">
                    </button>
                  </a>
                </div>
                <div>
                  <a href="/functions/./deleteProduct.php?id=<?= $product['id'] ?>" style="text-decoration: none">
                    <button type="button" class="btn btn-danger m-3 text-black">
                      <img class="img-flu" src="/icons/IconDelate.svg" alt="">
                    </button>
                  </a>
                </div>
              </td>
            </tr>

          <?php
          }
          ?>

        </tbody>

      </table>


    </div>


  </div> <br> <br> <br> <br>
  <footer class="footer mt-auto py-3 text-center">
    <span class="text-muted">Victor Manuel - <script>
        document.write(new Date().getFullYear())
      </script>. Todos los derechos reservados.</span>
  </footer>

  <script>
    Document.getElementById('recargar').addEventListener("click", function() {
      window.location.reload();
    });
  </script>

</body>

</html>
