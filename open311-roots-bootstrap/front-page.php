<?php

    $args = array(
        'posts_per_page'      => 5
    );

    $frontpage_posts = new WP_Query( $args );

?>

<div class="blog-excerpts posts">
<h3 class="section-heading">From the Blog</h3>
<?php while ($frontpage_posts->have_posts()) : $frontpage_posts->the_post(); ?>
    <article class="post">
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'post'); ?>
    </article>
<?php endwhile; ?>
</div>

<a href="/blog">See all blog posts...</a>