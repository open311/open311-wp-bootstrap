</div>

<footer id="footer" class="navbar">
  <div class="container">
     <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><h1><?php bloginfo('name'); ?></h1></a>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(array('theme_location' => 'footer_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav navbar-right'));
        endif;
      ?>
    </nav>

  </div>
</footer>
