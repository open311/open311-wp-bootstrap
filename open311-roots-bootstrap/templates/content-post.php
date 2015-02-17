<?php the_content(); ?>

<footer>
    <?php get_template_part('templates/entry-meta'); ?>
</footer>

<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>