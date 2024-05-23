<?php
include_once "./conetion.php";
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  die();
}

$userId = $_SESSION['user_id'];

// Obtener datos del carrito junto con los detalles de los productos
$cartData = Database::query("
  SELECT
    products.id, products.name, products.price, products.category, products.description, products.image, shopping_cart.quantity
  FROM
    products
  INNER JOIN
    shopping_cart
  ON
    products.id = shopping_cart.product_id
  WHERE
    shopping_cart.user_id = $userId
");

$products = mysqli_fetch_all($cartData, MYSQLI_ASSOC);

$_SESSION['cart'] = $products;


// Calcular el total
$total = 0;
foreach ($products as $product) {
  $total += $product['price'] * $product['quantity'];

}
$_SESSION['total']=$total;
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
  if (empty($products)) {
    echo "<h4 class='text-center p-5 '>No tienes productos existentes en el carrito!</h4>";

    echo $_GET['success'] == 'true' ? '<div class="alert alert-success" role="alert">Compara exitosa!</div>' : '';
    return;
  }

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
            <th scope="col">Categoría</th>
            <th scope="col">Descripción</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($products as $product) { ?>
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
                  <input class="form-control form-control-lg-sm" type="number"  disabled value="<?php echo $product['quantity']; ?>" />
                </div>
              </td>
              <td><?php echo $product['category']; ?></td>
              <td><?php echo $product['description']; ?></td>
              <td>
                <a href="/functions/deleteproductSopping.php?id=<?php echo $product['id']; ?>">
                  <button type="button" class="btn"  style=" color: black;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24"><path fill="currentColor" d="M15 13h1.5v2.82l2.44 1.41l-.75 1.3L15 16.69zm8 3c0 3.87-3.13 7-7 7c-1.91 0-3.64-.76-4.9-2H8c-1.1 0-2-.9-2-2V7h12v2.29c2.89.86 5 3.54 5 6.71M9 16c0-3.87 3.13-7 7-7H8v10h1.67c-.43-.91-.67-1.93-.67-3m7-5c-2.76 0-5 2.24-5 5s2.24 5 5 5s5-2.24 5-5s-2.24-5-5-5m-.5-7H19v2H5V4h3.5l1-1h5z"/></svg>
                  </button>
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <div class="d-flex table-responsive justify-content-between align-items-center">

      <div class="col-4 text-center">

        <a href="/detallesEnvio.php??total=<?php echo number_format($total)?>">

          <button type="button" class="btn"  style=" border-color:black; color: black;">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 14 14"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="6.5" cy="6.5" r="6"/><path d="m10.74 10.74l2.76 2.76M6.5 4V2.5M5 8c0 .75.67 1 1.5 1S8 9 8 8c0-1.5-3-1.5-3-3c0-1 .67-1 1.5-1S8 4.38 8 5M6.5 9v1.5"/></g></svg>

          </button>
        </a>
      </div>
      <div class="col-4 text-end">
        <div class="mt-3">
          <!-- Agrega margen superior -->
          <h3 class="text-end text-black">Total: $<?php echo number_format($total); ?></h3>
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
