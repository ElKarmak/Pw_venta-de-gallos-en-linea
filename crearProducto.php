<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/Semental.jpeg" />
    <title>Crear Producto</title>
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
        width: auto;
        height: 102vh;
      }



      .container {
        margin-top: 25px;
        margin-bottom: 25px;
        padding: 20px;
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

      h1,
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

  <body class="d-flex flex-column min-vh-90 overflow-x-hidden">
<?php
include_once './menuAdmin.php';

?>
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-4">
          <div class="container">
            <div class="card-body">
              <h1 class="card-title text-center mb-4">Añadir Producto 📦.</h1>



              <form  enctype="multipart/form-data" id ="form_create" class="text-center" action="./functions/createProducto.php" method="POST">

                <div class="form-group mb-3 w-75 mx-auto">
                  <label for="username" class="form-label">Encabezado</label>
                  <input
                    type="text"
                    class="form-control text-center"
                    id="input-text"
                    name="name_product"
                    placeholder="Escriba el titulo del producto"
                  />
                </div>

                <div class="form-group mb-3 w-75 mx-auto">
                  <label for="formFile" class="form-label">Cargar Imagen</label>
                  <input
                    id="input-formFile"
                    class="form-control"
                    type="file"
                    id="formFile"
                    name="imagen_product"
                  />
                </div>

                <div class="form-group mb-3 w-75 mx-auto">
                  <label for="username" class="form-label">Descripcion</label>
                  <input
                  id="input-description"
                    type="text"
                    class="form-control text-center p-4 "
                    id="input-text"
                    name="description_product"
                    placeholder="Esciba la descripcion del producto"
                  />
                </div>

                <div class="form-group mb-3 w-75 mx-auto">
                  <label for="number" class="form-label">Precio</label>
                  <input
                    type="input-number"
                    class="form-control text-center"
                    id="input-number"
                    name=" price_product"
                    placeholder="Escriba el precio"
                  />
                </div>

                <div class="form-group mb-3 w-75 mx-auto">
                  <label for="confirm-password" class="form-label"
                    >Unidades</label
                  >
                  <input
                    class="form-control form-control-lg-sm text-center"
                    name="stock_product"
                    id="input-number-positive"
                    type="number"
                    value="1"
                    placeholder="Selecione mas unidades"
                    required
                  />
                </div>

                <div class="form-group mb-3 w-75 mx-auto">
                  <label for="category-select" class="form-label">Categorias</label>
                  <select
                  name="category_product"
                    class="form-control form-control-lg-sm text-center"
                    id="category-select"
                    required
                  >
                    <option value="1">primer nivel</option>
                    <option value="2">segundo nivel</option>
                    <option value="3">tercer nivel</option>
                  </select>
                </div>

                <button id="btn-submit" type="button" class="btn" style=" border-color:black; color: black;" >
                  <img class="img-flu" src="/icons/iconSave.svg" alt="" />
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer mt-auto py-3 text-center">
      <span class="text-muted"
        >Victor Manuel -
        <script>
          document.write(new Date().getFullYear());
        </script>
        . Todos los derechos reservados.</span
      >
    </footer>
    <script src="/validate/js/crearProductoAndEditar.js"></script>
  </body>
</html>
