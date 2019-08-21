<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head style="max-height:100px">
    <meta charset="utf-8">
    <title>Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylePerfilU.css">
  </head>

        <body>
          <?php require_once 'partials/header.php' ?>
          <section>
          <h1>Mi Perfil</h1>
          <div class="fotoperfil">
            <img src="img/descarga.jpg"  alt="...">
            <br>
            <input class=inputfoto type="file" name="Imagen" value="descarga.jpg" >
          </div>

      <h2>NOMBRE</h2>
      <input type="text" name="Nombre" value="Nombre y Apellido">
      <br>
      <br>
      <h2>Email</h2>
      <input type="email" name="email" value="Email">
      <br>
      <br>
      <h2>Password</h2>
      <input type="password" name="Password" value="Contraseña" >
      <br>
      <br>
      <h2>Telefono</h2>
      <input type="text" name="Telefono" value="+54 1123458790" >
      <br>
      <br>
      <h2>Direccion de ENVIO</h2>

      <input  type="text" name="calle" data-required="true"  name="address.street_name" value="" aria-describedby="streetMessage" data-valid="true" maxlength="70" data-min-length="1"placeholder="Calle">
      <label for="street" class="ui-form__label"></label>

      <input  type="text"  name="Pisodepto" value="" aria-describedby="aditional_infoMessage" data-valid="true" maxlength="150" data-required="false" data-min-length="-1" placeholder="Piso/Departamento">
      <label for="info" class="ui-form__label"></label>

      <input  type="text"  name="Ciudad" value="" aria-describedby="betweenMessage" data-valid="true" maxlength="150" data-required="false" data-min-length="-1"placeholder="Ciudad">
      <label for="between" class="ui-form__label">(opcional)</label>
      <br>




<div class=""><h2 class="">Tarjetas</h2></div>
<div class=""><div class="commercial-card"><div class="commercial-card__thumbnail">
<div class=""><img src="img/visa.png" alt="Visa Argentina S.A."></div></div>
<div class="">Terminada en 8888</div>
<div class="">Visa Argentina S.A.</div>
<div class="">Vencimiento:<!-- --> <!-- -->88<!-- -->/<!-- -->0000</div></div>
<button type="button" class="" target="_blank">
<span class="andes-button__content">Eliminar</span></button></div>


<div class=""><img src="img/BancoHipotecario.png" alt="Banco Hipotecario"></div></div>
<div class=""><div class="">Terminada en 8888</div>
<div class="">Banco Hipotecario</div>
<div class="">Vencimiento:<!-- --> <!-- -->00<!-- -->/<!-- -->0000</div></div>
<br>
<button type="button" class="" target="_blank">
<span class="andes-button__content">Eliminar</span></button>
<br>
<br>
<button class="guardar" type="button" name="Guardar">Guardar</button>


    </section>
    </main>

  <?php  require_once 'partials/footer.php' ?>
</body>
</html>
