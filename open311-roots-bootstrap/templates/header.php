<header class="banner navbar navbar-default navbar-static-top" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><h1><?php bloginfo('name'); ?></h1></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav navbar-right'));
        endif;
      ?>
    </nav>
  </div>
</header>


<div id="page-header">
  <div class="container">
    <h2 class="pull-left">
      

        <?php 
          if(is_front_page()) {
            echo get_bloginfo ( 'description' );
          } else if (is_archive() || is_single()) {
            echo '<a href="/blog">Blog</a>';
          } else {
            echo roots_title();
          }
        ?>
      
    </h2>
  </div>
</div>

<div id="main">