<?php get_header(); ?>

    <div class="middle col-md-8 col-md-offset-2 col-xs-12">
        <div class="main-content col-md-8 col-xs-12">
            <div class="item">
                <div class="item-heading"><?php echo the_title(); ?></div>

                <div class="item-content item-details center-text item-image">
                    <?php
                        $posts = get_posts(array('post_type' => 'movie', 'numberposts' => '-1'));

                        foreach($posts as $post):
                    ?>


                    <div class="col-md-4 col-xs-6 movie-library-overview">
                        <a href="#"><img src="<?php print_custom_field('movie_poster'); ?>" /></a>

                        <a href="#"><?php echo the_title(); ?></a>
                    </div>


                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>

        <div class="sidebar col-md-4 hidden-xs">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>