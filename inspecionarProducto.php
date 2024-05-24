<?php
include_once "./conetion.php";

session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  die();
}

$id = $_GET['id'];

$query = "SELECT * FROM products WHERE id = $id";
$result = Database::query($query);
$row = mysqli_fetch_array($result);



?>






<!DOCTYPE html>
<html lang="es">

<head <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Detalles del Producto</title>
<link rel="icon" href="img/Semental.jpeg" />
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

  @media (max-width: 768px) {

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p {
      font-size: 16px;
    }
  }

  h2,
  h1,
  h4,
  button label {
    font-weight: bold;
  }

  .container {
    width: 30%;
    border: 1px solid #ccc;
    padding: 10px;
    box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    z-index: 999;
    margin-bottom: 50px;
  }

  @media (min-width: 992px) {
    .container {
      max-width: 80%;
      max-height: 18%;
      /* Ajusta el ancho máximo del contenedor al 50% en pantallas grandes */
    }
  }

  button[type="submit"] {
    display: block;
    margin: 0 auto;
    border: none;
    border-radius: 5px;
    background-color: hsl(61, 100%, 50%);
    font-size: 16px;
    cursor: pointer;
  }

  button[type="submit"]:hover {
    background-color: #d3ed50;
    /* Azul oscuro */
  }

  @media(width: 100%) {
    .container {
      max-width: 80%;
      /* Ajusta el ancho máximo del contenedor al 50% en pantallas grandes */
    }
  }

  .carousel-inner img {
    width: 40%;

    object-fit: cover
      /* Cambiado de 'contain' a 'cover' */
  }

  img-fluid {
    max-height: 100vh;
    max-width: auto;
  }

  .img-fluid {
    min-height: 35vh;
    min-width: auto;
  }


  .img-flu {
    height: 50px;
    width: 50px;
    border-radius: 5px;


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

<body>
  <?php
  include_once './menuUser.php';
  ?>

  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-md-8 offset-md-2">
        <h2 class="text-center">Detalles del Producto</h2>
        <div class="d-flex justify-content-center p-2">
          <img class="img-fluid" src="data:image/jpg;base64,<?php echo base64_encode($row['image']) ?>" style="width: 330px; height: 200px; align-self: center ">
        </div>

        <div>
          <h3 class="text-center">Especificación del Ave.</h3>
          <p class="justify-content-between size-15 text-center">Disponibles : <?php echo $row['stock'] ?></p>
          <h3 class="text-center">Descripción del Producto</h3>
          <p class="justify-content size-15 text-center" style="text-align: justify;">
            <?php echo $row['description'] ?>
          </p>

          <p />
          <div style=" padding: 20px; text-align: center;">
           <a href="./functions/insertProductShopping.php?id=<?php echo $row['id'] ?>"><button type="button " class="btn" style=" border-color:black; color: black;" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"></path>
            </svg>
            Agregar
          </button></a>
          </div>

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

  <script src="./js/bootstrap.js"></script>
</body>

</html>
