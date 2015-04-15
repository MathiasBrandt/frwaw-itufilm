<?php get_header(); ?>

    <div class="middle col-md-8 col-md-offset-2 col-xs-12">
        <div class="main-content col-md-8 col-xs-12">
            <!-- mood recommendations -->
            <div class="col-md-7 col-xs-12 item">
                <div class="item-heading">
                    Mood Recommendations
                </div>

                <div class="item-content">
                    <table class="table table-borderless mood-recommendations-table">
                        <tr>
                            <td class="col-xs-6"><a href="#" class="btn btn-default button">Happy</a></td>
                            <td class="col-xs-6"><a href="#" class="btn btn-default button">Sad</a></td>
                        </tr>
                        <tr>
                            <td class="col-xs-6"><a href="#" class="btn btn-default button">Derped</a></td>
                            <td class="col-xs-6"><a href="#" class="btn btn-default button">Excited</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /mood recommendations -->

            <!-- staff recommends -->
            <div class="col-md-5 col-xs-12 item item-right">
                <div class="item-heading">
                    Staff Recommends
                </div>

                <?php
                    $posts = get_posts(array('post_type' => 'staff_recommendation', 'numberposts' => '5'));

                    foreach($posts as $post):
                ?>

                <div class="item-image">
                    <a href="#">
                        <img src="<?php print_custom_field('movie_poster'); ?>" />
                    </a>
                </div>

                <div class="item-content center-text small-padding">
                    <a href="#"><?php echo the_title(); ?></a>
                </div>

                <?php
                    endforeach;
                ?>
            </div>
            <!-- /staff recommends -->

            <!-- previous screenings -->
            <div class="col-md-7 col-xs-12 item">
                <div class="item-heading">
                    Previous Screenings
                </div>

                <div class="item-content">
                    <table class="table table-borderless previous-screenings-table">
                        <?php
                            $posts = get_posts(array('post_type' => 'movie_screening', 'numberposts' => '5'));

                            foreach($posts as $post):
                        ?>

                        <tr>
                            <td class="col-xs-4 item-image">
                                <img src="<?php print_custom_field('movie_poster'); ?>" />
                            </td>

                            <td>
                                <a href="#"><?php echo the_title(); ?></a>
                                <br />
                                <?php print_custom_field('screening_date'); ?>
                                <br />
                                <?php print_custom_field('screening_location'); ?>
                            </td>
                        </tr>

                        <?php
                            endforeach;
                        ?>
                    </table>

                    <div class="col-xs-6 col-xs-offset-3">
                        <a href="#" class="btn btn-default button">More</a>
                    </div>
                </div>
            </div>
            <!-- /previous screenings -->

            <div class="col-md-7 col-xs-12 item">
                <div class="col-xs-12">
                    <a href="#" class="btn btn-default button">Movie Library</a>
                </div>
            </div>
        </div>

        <div class="sidebar col-md-4 hidden-xs">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>