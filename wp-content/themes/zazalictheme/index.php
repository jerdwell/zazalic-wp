<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zazalic</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
</head>

<body>
  <!-- Loader -->
  <!-- <div class="loader">
    <div class="spinner-border text-white" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->
  <!-- Loader -->

  <!-- Nav -->
  <div class="navbar navbar-fixed navbar-expand-lg">
    <div class="container">
      <?php
      if (function_exists('the_custom_logo')) {
        the_custom_logo();
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
      }
      ?>
      <!-- <a href="#" class="navbar-brand">
      </a> -->

      <button class="navbar-toggler" type="button" id="navbarButton">
        <i class="fa fa-bars text-light"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-lg-auto">
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Productos</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Nosotros</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-light">Contacto</a>
          </li>
        </ul>
      </div>

    </div>
  </div>
  <!-- Nav -->

  <!-- Cover index -->
  <!-- <div class="cover-index">
      <img src="http://www.zazalic.com.mx/wp-content/uploads/2020/05/bg_abstract_01-scaled.jpeg" class="cover-index-bg" id="cover-index" alt="cover index zazalic">
      
      <a href="" class="item-cover first-item-cover">
        <div class="text-item-cover">
          <b>Resinas</b>
        </div>
        <img
          class="image-item-cover"
          src="https://cdn.pixabay.com/photo/2016/12/15/20/21/texture-1909992_960_720.jpg"
          alt="Resinas Zazalic">
      </a>
      
      <a href="" class="item-cover second-item-cover">
        <div class="text-item-cover">
          <b>Pigmentos</b>
        </div>
        <img
          class="image-item-cover"
          src="https://cdn.pixabay.com/photo/2017/07/03/20/17/abstract-2468874_960_720.jpg"
          alt="Resinas Zazalic">
      </a>

    </div> -->
  <!-- Cover index -->

  <?php
  $page = get_page(29, $output = OBJECT);
  echo $page->post_content;
  ?>

  <!--------Step Index-------->
  <div class="step-home">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-lg-6 offset-lg-1 d-flex flex-wrap align-items-center">
          <h4 class="text-dark text-center text-md-right">La trayectoria y experiencia de nuestros ingenieros aseguran un acabado impecable para tus ideas y proyectos.</h4>
          <div class="text-center text-md-right w-100">
            <button class="btn bg-transparent btn-success text-success px-5 rounded-pill">Ver más</button>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 text-center">
          <img class="rounded-circle image-step-home" src="https://cdn.pixabay.com/photo/2016/03/09/09/22/workplace-1245776_960_720.jpg">
        </div>
      </div>
    </div>
  </div>
  <!--------Step Index-------->

  <div class="container">
    <hr class="my-5">
  </div>

  <!-- Products List Index -->

  <div class="products-list-index my-5 py-5">
    <div class="item-products-list-index col-md-4 d-inline-block align-top p-0">
      <img src="http://www.zazalic.com.mx/wp-content/uploads/2020/05/CL1.jpeg" alt="" class="image-item-products-list-index w-100">
    </div>
    <div class="description-item-products-list-index col-md-7 d-inline-block pt-5">
      <h2 class="text-primary bg-white px-4 py-2" style="margin-left: -100px; font-size: 4em;"><b>Crystal líquido</b></h2>
      <p class="text-dark">Sistema de dos componentes de total transparencia (la mejor del mercado), excelente brillo y libre de solventes; ideal para vaciados de altos espesores.</p>
      <h4 class="text-success">Características</h4>
      <ul class="list-group list-group-flush text-dark mb-5">
        <li class="list-group-item border-0">- Excelente resistencia mecánica</li>
        <li class="list-group-item border-0">- Alto Brillo</li>
        <li class="list-group-item border-0">- Máxima transparencia</li>
        <li class="list-group-item border-0">- Compatible con diversos pigmentos y sustratos</li>
        <li class="list-group-item border-0">- Autonivelante</li>
      </ul>
      <button class="btn btn-success bg-transparent text-success rounded-pill px-5"><h3 class="m-0 p-0">Ver más</h3></button>
    </div>
  </div>


  <!-- <div class="products-list-index my-5 py-5">
    <div class="item-products-list-index col-md-4 d-inline-block align-top p-0">
      <img src="http://www.zazalic.com.mx/wp-content/uploads/2020/05/PT2.jpg" alt="" class="image-item-products-list-index w-100">
    </div>
    <div class="description-item-products-list-index col-md-7 d-inline-block pt-5">
      <h2 class="text-primary bg-white px-4 py-2" style="margin-left: -100px; font-size: 4em;"><b>Pastas Pigmentarias</b></h2>
      <p class="text-dark">Pigmento que concede coloración a resinas, gel coats, alquil·dicos, pinturas, poliester, etc.</p>
      <h4 class="text-success">Características</h4>
      <ul class="list-group list-group-flush text-dark mb-5">
        <li class="list-group-item border-0">- Larga vida útil</li>
        <li class="list-group-item border-0">- Excelente poder cubriente</li>
        <li class="list-group-item border-0">- Colores sólidos de gran estabilidad</li>
        <li class="list-group-item border-0">- De fácil y rápida dispersión</li>
        <li class="list-group-item border-0">- Iguala colores</li>
      </ul>
      <button class="btn btn-success bg-transparent text-success rounded-pill px-5"><h3 class="m-0 p-0">Ver más</h3></button>
    </div>
  </div> -->

  <!-- Products List Index -->

  <footer class="bg-dark text-light m-0 py-5">
    <div class="container">
      <h3 class="text-center text-muted">Footer zazalic</h3>
    </div>
  </footer>

</body>

</html>