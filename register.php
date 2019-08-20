<?php
  $pageTitle = 'Formulario de Registro | Proyectos DH';
  require_once 'forms/forms.php';
  if ($_POST) {

    if (length(old('nombre'), 5, 30)) {
      addError('nombre', 'El nombre debe tener entre 5 y 30 caracteres');
    }

    if (!email(old('email'))) {
      addError('email', 'Debes escribir un email válido');
    }
    if (isValid()) {
      header('location: registro-exitoso.php');
    }
  }
?>
<!DOCTYPE html>


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
                        <div class="col-sm-6">
                        <input type="name" class="form-control inputstl" id="name1" name="nombre" placeholder="Nombre Completo" value="<?= old('projectName') ?>">
                        </div>
                        <?php if (hasError('nombre')) : ?>
                    <p class="errors"><?= getError('nombre') ?></p>
                  <?php endif ?>
                    </div>

                </div>
                <div class="form-group">
                    <label for="gender1" class="col-sm-2 control-label"><b>Sexo:</b></label>
                    <div class="col-sm-6">
                        <select class="form-control inputstl" id="gender1">
                            <option>Hombre</option>
                            <option>Mujer</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email1" class="col-sm-2 control-label"><b>Email:</b></label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control inputstl" id="email1" name="email" placeholder="Email" value="<?= old('email') ?>">
                        <?php if (hasError('email')) : ?>
                    <p class="errors"><?= getError('email') ?></p>
                  <?php endif ?>
                    </div>

                </div>
                <div class="form-group">
                    <label for="user" class="col-sm-2 control-label"><b>Usuario:</b></label>
                    <div class="col-sm-6">
                        <input type="user" class="form-control inputstl" id="phone1" name="usuario" placeholder="Usuario">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password1" class="col-sm-2 control-label"><b>Contraseña:</b></label>
                    <div class="col-sm-6">
                        <input type="password1" class="form-control inputstl" id="password1" name="password1" placeholder="Contraseña" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password2" class="col-sm-2 control-label"><b>Contraseña:</b></label>
                    <div class="col-sm-6">
                        <input type="password2" class="form-control inputstl" id="password2" name="repass" placeholder="Repetir Contraseña" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-3">
                        <button type="submit" class="btn btn-lg btn-block btn-success">Crear Cuenta</button>
                    </div>
                </div>
            </form>
        </div>
        <div align='center'>Si ya tenes una cuenta clica <a href="sing-in.php" style="color:blue;">aquí</a></br>.</div>
        </main>
  <?php   require_once 'partials/footer.php' ?>
</body>
</html>
