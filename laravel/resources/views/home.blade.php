@extends('layouts.app')
@section('title') Home @endsection
@section('content')


      <main role="main">
          <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/carrusel1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carrusel2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carrusel3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carrusel4.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-lg-4">
              <img src="img/zapatillas/zapatillas_1.jpg" alt="zapa1">
              <h2>Sneakers.</h2>
              <p>Un estilo de zapatilla de calle para combinar con looks casual y urbanos. Las vimos en la pasarela con prendas de vestir.</p>
              <p><a class="btn btn-secondary" href="product.html" role="button">View details &raquo;</a></p>

            </div><!-- /.col-lg-4 -->

		  <div class="col-lg-4">
            <img src="img/zapatillas/zapatillas_2.jpg" alt="zapa2">
              <h2>Deportivas</h2>
              <p>Reinventa su tecnologia de amortiguacion con su nueva tecnologia y su diseño disruptivo y vanguardista</p>
              <p><a class="btn btn-secondary" href="product.html" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="img/zapatillas/zapatillas_3.jpg" alt="zapa3">
              <h2> Recreativa</h2>
              <p>Absorbe el impacto de tu pie cuando aterriza y lo convierte
en energía para la siguiente pisada.</p>
              <p><a class="btn btn-secondary" href="product.html" role="button">View details &raquo;</a></p>

            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->



     <!-- banner intermedio:-------------------------->
		  <!-- <div class="banner-intermedio">
			  <a href="/precio-especial/">
				  <img class="loaded" src="https://dafitistaticar-a.akamaihd.net/cms/Banner-Rebajas_Home-GENERAL.gif">
			  </a>
		  </div> -->
          <!--/. banner intermedio-------------------->




          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-lg-4">
              <img src="img/zapatillas/zapatillas_1.jpg" alt="zapa1">
              <h2>Sneakers.</h2>
              <p>Un estilo de zapatilla de calle para combinar con looks casual y urbanos. Las vimos en la pasarela con prendas de vestir.</p>
              <p><a class="btn btn-secondary" href="product.html" role="button">View details &raquo;</a></p>

            </div><!-- /.col-lg-4 -->

		  <div class="col-lg-4">
            <img src="img/zapatillas/zapatillas_2.jpg" alt="zapa2">
              <h2>Deportivas</h2>
              <p>Reinventa su tecnologia de amortiguacion con su nueva tecnologia y su diseño disruptivo y vanguardista</p>
              <p><a class="btn btn-secondary" href="product.html" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="img/zapatillas/zapatillas_3.jpg" alt="zapa3">
              <h2> Recreativa</h2>
              <p>Absorbe el impacto de tu pie cuando aterriza y lo convierte
en energía para la siguiente pisada.</p>
              <p><a class="btn btn-secondary" href="product.html" role="button">View details &raquo;</a></p>

            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->

          <!-- START THE FEATURETTES -------->

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Ajuste Firme <span class="text-muted">Checkmate.</span></h2>
              <p class="lead">En la parte posterior, la zona del tobillo se ha alejado para que no cree roces en la tendón de Aquiles. Se trata de las Pegasus, pero sin fricción.</p>
            </div>
             <div class="col-md-5">
                <img  class="row_img"  src="img/zapatillas/zapatillas_9.jpg" alt="zapa5">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7 order-md-2">

              <h2 class="featurette-heading"> <span class="text-muted">See for yourself.</span></h2>
              <p class="lead2">para corredores de todos los niveles, ya seas un experimentado veterano o estés dando tus primeros pasos. Cuentan con una parte superior de malla transpirable con una zona del tobillo hacia afuera para ofrecer comodidad en el tendón de Aquiles.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img  class="row_img" class="row_featurette_img"  src="img/zapatillas/zapatillas_10.jpg" alt="zapa5">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">Ajuste Firme <span class="text-muted">Checkmate.</span></h2>
              <p class="lead">La parte superior de malla se ha diseñado para proporcionar
elasticidad y sujeción donde más lo necesitas, y para mantener
tu pie seguro sobre la amortiguación sin limitar el movimiento
ni comodidad. .</p>
            </div>
            <div class="col-md-5">
                <img  class="row_img" src="img/zapatillas/zapatillas_5.jpg" alt="zapa5">
            </div>
          </div>
@endsection
