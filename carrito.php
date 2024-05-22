<?php
include_once "./conetion.php";
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  die();
}
?>

<?php

$userId = $_SESSION['user_id'];

$data = Database::query("SELECT * FROM shopping_cart WHERE user_id = $userId");

$products = mysqli_fetch_all($data, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Carrito</title>
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
include_once './menuUser.php';
  ?>

 <?php

   if (!empty($products)) {
  } else {

    echo "<h4 class='text-center p-5 '>No tienes productos existentes en el carrito!</h4>";
    return;
  }

  ?>

  <?php
  ?>

  <div class="container mt-5 rounded-3 text-center">
    <h2>Carrito</h2>
    <div class="table-responsive">
      <!-- Agregamos la clase table-responsive -->
      <table class="table">
        <thead>

          <tr>
            <th scope="colgroup">Imagen</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Catetegoria</th>
            <th scope="col">Descripción</th>
            <th scope="col">Aciones</th>
          </tr>
        </thead>



        <tbody>
          <?php
          foreach ($products as $product) {

            $data = Database::query("SELECT * FROM products, shopping_cart WHERE id = $product[product_id]");
            $product = mysqli_fetch_assoc($data);

          ?>
            <tr class="align-middle">
              <td class="overflow-auto">
                <!-- Agregamos la clase overflow-auto -->
                <!-- Aquí envolvemos la imagen en un contenedor con overflow-auto -->
                <img class="img-fluid" src="data:image/jpeg;base64,<?= base64_encode($product['image']) ?>" alt="Product Image" />
              </td>
              <td>
                <?php echo $product['name']; ?>
              </td>
              <td id="price">$<?php echo $product['price']; ?></td>
              <td>
                <div class="align-middle text-center">
                  <input class="form-control form-control-lg-sm" type="number" value="<?php echo $product['quantity']; ?>" />
                </div>
              </td>
              <td><?php echo $product['category']; ?></td>
              <td><?php echo $product['description']; ?></td>
              <td>
                <a href="/functions/deleteproductSopping.php?id=<?php echo $product['id']; ?>"> <button type="button" class="btn btn-danger pt-lg-2 text-black">
                    <img class="img-flu" src="/icons/IconDelate.svg" alt="" />
                  </button> </a>
              </td>
            </tr>


          <?php } ?>

        </tbody>
      </table>
    </div>

    <div class="d-flex table-responsive justify-content-between align-items-center">
      <div class="col-4 text-center">
        <a href="/detallesEnvio.html">
          <button type="submit" class="btn btn-primary text-black">
            <img class="img-flu" src="/icons/iconPay.svg" alt="" />
          </button>
        </a>
      </div>
      <div class="col-4 text-end">
        <div class="mt-3">
          <!-- Agrega margen superior -->
          <h3 class="text-end text-black">Total: $60000</h3>
        </div>
      </div>
    </div>

  </div>
  <br> <br> <br> <br>



  <footer class="footer mt-auto py-3 text-center">
    <span class="text-muted">Victor Manuel -
      <script>
        document.write(new Date().getFullYear());
      </script>
      . Todos los derechos reservados.
    </span>
  </footer>
</body>

</html>