<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/stylesregister.css">
        <title>Register | SportShoes</title>
</head>
    <body>
        <?php   require_once 'partials/header.php' ?>
    <main>
        <div class="container">
        <h1>Registrarse</h1>
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label for="name1" class="col-sm-2 control-label"><b>Nombre:</b></label>
                <div class="col-sm-4">
                    <input type="email" class="form-control inputstl" id="name1" placeholder="Nombre Completo">
                </div>
            </div>
            <div class="form-group">
                <label for="gender1" class="col-sm-2 control-label"><b>Sexo:</b></label>
                <div class="col-sm-2">
                    <select class="form-control inputstl" id="gender1">
                        <option>Hombre</option>
                        <option>Mujer</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="email1" class="col-sm-2 control-label"><b>Email:</b></label>
                <div class="col-sm-5">
                    <input type="email" class="form-control inputstl" id="email1" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="phone1" class="col-sm-2 control-label"><b>Telefono:</b></label>
                <div class="col-sm-5">
                    <input type="phone1" class="form-control inputstl" id="phone1" placeholder="Telefono">
                </div>
            </div>
            <div class="form-group">
                <label for="password1" class="col-sm-2 control-label"><b>Contraseña:</b></label>
                <div class="col-sm-3">
                    <input type="password1" class="form-control inputstl" id="password1" placeholder="Contraseña">
                </div>
            </div>
            <div class="form-group">
                <label for="password2" class="col-sm-2 control-label"><b>Contraseña:</b></label>
                <div class="col-sm-5">
                    <input type="password2" class="form-control inputstl" id="password2" placeholder="Repetir Contraseña">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="inputstl"> <b>Recordame</b>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <button type="submit" class="btn btn-lg btn-block btn-success">Crear Cuenta</button>
                </div>
            </div>
        </form>
    </div>
    </main>
</body>
  <?php   require_once 'partials/footer.php' ?>

</html>
