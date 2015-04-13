<?php get_header(); ?>

    <div class="middle col-md-8 col-md-offset-2 col-xs-12">
        <div class="main-content col-md-8">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'entry' ); ?>
            <?php endwhile; endif; ?>
        </div>

        <div class="sidebar col-md-4 hidden-xs">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>