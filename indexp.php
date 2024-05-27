<!DOCTYPE html>
<?php include_once './conetion.php'; ?>
<html data-bs-theme="light" lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Ventas</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;subset=latin-ext">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/Bootstrap-Cards-v2.css">
  <link rel="stylesheet" href="assets/css/MENU-Bold-BS4-Header-with-HTML5-Video-Background.css">
  <link rel="stylesheet" href="assets/css/MENU-Navbar---Apple-1.css">
  <link rel="stylesheet" href="assets/css/MENU-Navbar---Apple.css">
  <link rel="stylesheet" href="assets/css/MENU.css">
  <link rel="stylesheet" href="assets/css/reparandoMenuResponsivo.css">

  <!-- estilo para ajustar el tamaño de los parrafos a una cierta cantidad de renglones -->
  <style>
    #parrafoAltura {
      display: -webkit-box;
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 2;
      overflow: hidden;
      height: 40px;
    }

    a {
      margin-right: 25px;
    }


    .icon-flu {
      height: 75px;
      border-radius: 5px;
      ;
    }

    .img-fluid {
      max-height: 100vh;
      max-width: auto;
    }

    .img-flu {
      height: 50px;
    }

    .texto {
      padding-left: 20px;
      font-weight: bold;
      border-radius: 10px;
    }

    footer {
      background-color: rgba(255, 255, 255, 0.5);
      text-emphasis-color: black;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }

    .footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.5);
      text-emphasis-color: black;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }


    .card {
      width: 100%;
      height: 105%;
    }

    #imagen {
      width: 100%;
      height: 50%;

    }
  </style>
</head>

<body style="height:50%">
  <?php
  include_once './menuUser.php';
  ?>
  <div class="bootstrap_cards2" style="height: 80%">
    <div class="container py-5 "  style="height: 100%">
      <?= $_GET['error'] == 'no-stock' ? '<div class="alert alert-danger text-center" role="alert">No ahi gallos disponibles de esta raza</div>' : ''; ?>
      <?= $_GET['success'] == 'added-to-cart' ? '<div class="alert alert-success text-center" role="alert"> Gallo añadido al carrito exitosamente!</div>' : ''; ?>
      <?php
      $category = $_GET['category'] ?? 'todos';
      $query = ($category === 'todos') ? "SELECT * FROM products" : "SELECT * FROM products WHERE category = '$category'";
      $result = Database::query($query);
      if ($result && $result->num_rows > 0) {
      ?>
        <h2 id="titulo" class="font-weight-bold mb-2">Productos</h2>
        <div class="row pb-5 mb-3" style="height: 100%">
          <?php
          while ($row = $result->fetch_assoc()) {
          ?>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 p-4 ">
              <!-- Card imgen 920X600 -->
              <div class="card rounded shadow-sm border-0" id="tarjeta">
                <div class="card-body p-4" onclick="window.location.href='/inspecionarProducto.php?id=<?php echo $row['id'] ?>'">
                  <?php echo '<img id="imagen" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" class="img-fluid d-block mx-auto mb-3">' ?>
                  <h5><a href="#" class="text-dark"><?php echo $row['name'] ?></a></h5>
                  <p id="parrafoAltura" class="small text-muted font-italic"><?php echo $row['description'] ?></p>
                  <p>Precio $<b><?php echo $row['price'] ?></b></p>

                  <a href="./functions/insertProductShopping.php?id=<?php echo $row['id'] ?>">
                    <button type="button" class="btn" style=" border-color:black; color: black;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"></path>
                      </svg>
                      Agregar
                    </button>
                  </a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      <?php
      } else {
        echo "<h4 class='text-center'>No hay productos disponibles en esta categoría <b>$category</b>.</h4>";
      }
      ?>
    </div>
  </div>

  <footer class="footer mt-auto py-3 text-center">

      <span class="text-muted">Victor Manuel - <script>
          document.write(new Date().getFullYear())
        </script>. Todos los derechos reservados.</span>

  </footer>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/MENU-Navbar---Apple.js"></script>
</body>

</html>
