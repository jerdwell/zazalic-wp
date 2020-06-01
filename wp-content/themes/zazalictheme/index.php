<?php get_header(); ?>

  <?php
  $page = get_page(29, $output = OBJECT);
  echo $page->post_content;
  ?>

<?php get_footer(); ?>

</body>

</html>