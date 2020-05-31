<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $post -> post_title;?></title>
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
            <a href="/productos" class="nav-link text-light">Productos</a>
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

  <?php
  $page = get_page_by_path('http://www.zazalic.com.mx/index.php/home/');
  echo $post -> post_content;
  ?>

  <footer class="bg-dark text-light m-0 py-5">
    <div class="container">
      <h3 class="text-center text-muted">Footer zazalic</h3>
    </div>
  </footer>

</body>

</html>