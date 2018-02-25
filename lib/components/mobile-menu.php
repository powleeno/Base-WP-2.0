<section class="mobile-menu">
  <ul class="mobile-menu__nav">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'main_menu',
        'container' => '',
        'items_wrap' => '%3$s',
      ));
    ?>
  </ul>
</section>
