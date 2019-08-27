
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Carrito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/global.css">
        <link rel="stylesheet" href="style/styleCarrito.css">
  </head>
<?php require_once 'partials/header.php' ?>

<body>
  <div class="container-fluid">
      <div class="col col-md-9 m-auto">
        <div class="row">
          <div class="w-100">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               
                <li class="breadcrumb-item active" aria-current="page">Carrito</li>
              </ol>
            </nav>
          </div>
        </div>

        <!-- Carrito -->
        <div class="row">
          <div class="col-md-8 offset-md-2 mb-2 bg-white border rounded p-3">
            <h4 class="d-flex justify-content-between align-items-center mb-3 mw-500">
              <span class="text-muted">Carrito</span>
              <span class="badge badge-secondary badge-pill">2</span>
            </h4>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Producto</h6>
                  <small class="text-muted">Pequeña descripcion del producto</small>
                </div>
                <span class="text-muted">$300</span>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">Producto</h6>
                  <small class="text-muted">Pequeña descripcion del producto</small>
                </div>
                <span class="text-muted">$3000</span>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Codigo de descuento</h6>
                  <small>Codigo de ejemplo</small>
                </div>
                <span class="text-success">-$2000</span>
              </li>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total</span>
                <strong>$400</strong>
              </li>
            </ul>
            <form>
              <div class="card p-2">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Codigo de descuento">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">Ingresar</button>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block mt-3" name="button">Finalizar compra</button>
              <p class="text-center mt-2 "><a href="listado.php" class="text-secondary">Seguir comprando</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>

  <?php require_once 'partials/footer.php' ?>
  </body>

</html>
