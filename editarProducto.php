<?php include_once "./conetion.php";?>

<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ../login.php");
  die();
}
?>
<?php



$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id = $id";
$result = Database::query($query);
$row = mysqli_fetch_array($result);
?>




<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Editar Productos</title>
  <link rel="icon" href="img/Semental.jpeg" />
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <link rel="stylesheet" href="css/animations.css">
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
      min-height: 100vh;
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
      margin-top: 20px;
      margin-bottom: 20px;
      padding: 40px;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
      /* Agregando sombra */
      border-radius: 10px;
      /* Bordes redondeados */
      background-color: rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      z-index: 999;
    }

    /* Ajusta el ancho de los inputs y textareas */
    .form-control {
      width: 100%;
    }

    .textarea-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100px;
      /* Asegúrate de que este sea el mismo que el de tu textarea */
    }

    textarea {
      /* Centrame el texto que contiene el text  textarea */
      text-align: center;
      width: 100%;
      height: 100px;
      font-size: 18px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      resize: none;
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

    h1,
    label {
      font-weight: bold;
    }

    .img-flu {
      height: 50px;
    }

    .icon-flu {
      height: 75px;
      border-radius: 5px;
    }

    /* Styles for the image in the table */
    .img-fluid {
      width: 175px;
      height: 125px;
    }

    footer {
      background-color: rgba(255, 255, 255, 0.5);
      text-emphasis-color: black;
      box-shadow: 0 0 10px rgba(2, 0, 4, 0.4);
    }
  </style>
</head>

<body>
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
          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/productosVenta.html">
              <img class="img-flu" src="/icons/icon.svg" alt="" />
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/productosVenta.php">
              <img class="img-flu" src="/icons/iconProduct.svg" alt="" />
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/editarProducto.php">
              <img class="img-flu" src="/icons/IconUpdate.svg" alt="" />
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-black" aria-current="page" href="/crearProducto.php">
              <img class="img-flu" src="/icons/iconCreate.svg" alt="" />
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
            <a class="nav-link text-black" aria-current="page" href="/loginAdminstrdores.html">
              <img class="img-flu" src="/icons/majesticons--login-line.svg" alt="" />
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row justify-content-center vh-100 align-items-center">
      <div class="col-md-4">
        <div class="container">
          <div class="card-body">

            <h1 class="card-title text-center mb-4">Editar 📦.</h1>


            <form enctype="multipart/form-data" id="form_create" class="text-center" action="/functions/editProduct.php?id=<?php echo $id ?>" method="POST">

              <div class="mb-3">
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['image']) ?>" style="width: 330px; height: 200px; object-fit: cover; align-self: center ">
              </div>

              <div class="form-group mb-3 w-75 mx-auto">
                <label for="username" class="form-label">Enacabezado</label>
                <input type="text" class="form-control text-center" id="input-text" name="name_product" placeholder="Escriba el titulo del producto" value="<?=$row['name'] ?>" />
              </div>

              <div class="form-group mb-3 w-75 mx-auto">
                <label for="formFile" class="form-label">Cargar Imagen</label>
                <input id="input-formFile" class="form-control" type="file" id="formFile" name="imagen_product"  accept="image/png, image/gif, image/jpeg" />
              </div>


              <div class="form-group mb-3 w-75 mx-auto">
                <label for="username" class="form-label">Descripcion</label>
                <input id="input-description" type="text" class="form-control text-center p-4 " id="input-text" name="description_product" placeholder="Esciba la descripcion del producto" value="<?=$row['description'] ?>" />
              </div>

              <div class="form-group mb-3 w-75 mx-auto">
                <label for="number" class="form-label">Precio</label>
                <input type="text" class="form-control text-center" id="input-number" name="price_product" placeholder="Escriba el precio" value="<?=$row['price'] ?>" />
              </div>

              <div class="form-group mb-3 w-75 mx-auto">
                <label for="text" class="form-label">unidades</label>
                <input class="form-control form-control-lg-sm text-center" name="stock_product" id="input-number-positive" type="number" value="1" placeholder="Selecione mas unidades" required value="<?=$row['stock'] ?>" />
              </div>

              <div class="form-group mb-3 w-75 mx-auto">
                <label for="category-select" class="form-label">Categorias</label>
                <select name="category_product" class="form-control form-control-lg-sm text-center" id="category-select" required value="<?= $row['category'] ?>">
                  <option value="1">Primer Nivel</option>
                  <option value="2">Segundo Nivel</option>
                  <option value="3">Tercer Nivel</option>
                </select>
              </div>

               <button id="btn-submit" type="submit" class="btn btn-primary py-2 text-black">
                Guardar Cambios
              </button>


            </form>

          </div>

        </div>
      </div>
    </div>
  </div>
  <br> <br> <br>

  <footer class="footer mt-auto py-3 text-center">

    <span class="text-muted">Victor Manuel -
      <script>
        document.write(new Date().getFullYear());
      </script>
      . Todos los derechos reservados.
    </span>
    <script src="/validate/js/editarProducto.js"></script>
  </footer>
</body>

</html>