<div class="item-content">
    <?php get_template_part('entry', 'meta'); ?>

    <?php
        setup_postdata($post);
        the_excerpt();
    ?>
</div>