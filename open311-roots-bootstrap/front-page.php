<?php

    $args = array(
        'posts_per_page'      => 5
    );

    $frontpage_posts = new WP_Query( $args );

?>


<?php while ($frontpage_posts->have_posts()) : $frontpage_posts->the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<a href="/blog">See all blog posts...</a>