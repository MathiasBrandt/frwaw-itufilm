<div class="item" id="post-<?php the_ID(); ?>">
    <div class="item-heading">
        <?php if (!is_single()) {
            echo '<a href="';
            echo the_permalink();
            echo '">';
        } ?>

        <?php the_title(); ?>

        <?php if (!is_single()) {
            echo '</a>';
        } ?>
    </div>

    <?php get_template_part('entry', 'image'); ?>

    <?php get_template_part('entry', 'content'); ?>
</div>