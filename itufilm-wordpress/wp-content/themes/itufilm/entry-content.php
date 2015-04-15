<div class="item-content">
    <?php get_template_part('entry', 'meta'); ?>

    <?php if(is_single()) {
        the_content();
    } else {
        the_excerpt();
    } ?>
</div>