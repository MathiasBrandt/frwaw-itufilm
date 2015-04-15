<?php get_header(); ?>

    <div class="middle col-md-8 col-md-offset-2 col-xs-12">
        <div class="main-content col-md-8 col-xs-12">
            <?php
                $posts = get_posts(array('post_type' => 'movie'));

                foreach($posts as $post) {
                    echo the_title();
                    echo "<br />";
                }
            ?>
        </div>

        <div class="sidebar col-md-4 hidden-xs">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>