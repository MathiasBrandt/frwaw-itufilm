<?php get_header(); ?>

<div class="middle col-md-8 col-md-offset-2 col-xs-12">
    <div class="main-content col-xs-12">
        <?php
            $posts = get_posts();

            foreach($posts as $post) {
                get_template_part('entry');
            }
        ?>
    </div>
</div>

<?php get_footer(); ?>