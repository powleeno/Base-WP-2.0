<section class="topbar">
  <div class="container">

    <a href="<?php echo get_bloginfo('url'); ?>" class="topbar__logo">
      <h3><?php echo get_bloginfo('name'); ?></h3>
    </a>

    <ul class="topbar__nav">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main_menu',
          'container' => '',
          'items_wrap' => '%3$s',
        ));
      ?>
    </ul>

  </div>
</section>
