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

                    $movie = get_custom_field('movie_relation:get_post');
                    $params = array('movie-id' => $movie['ID']);
                    $link = add_query_arg($params, get_page_link(MOVIE_INFORMATION_PAGE_ID));
                ?>

                <a href="<?php echo $link; ?>">
                    <div class="item-image">
                        <img src="<?php print_custom_field('promo_image:to_image_src'); ?>" />
                    </div>

                    <div class="item-content center-text small-padding">
                        <?php echo the_title(); ?>
                    </div>
                </a>

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
                            $posts = get_posts(array('post_type' => 'movie_screening', 'numberposts' => '5', 'meta_key' => 'screening_date', 'orderby' => 'meta_value'));

                            foreach($posts as $post):

                            $movie = get_custom_field("movie_relation:get_post");
                            $params = array('movie-id' => $movie['ID']);
                            $link = add_query_arg($params, get_page_link(MOVIE_INFORMATION_PAGE_ID));
                            $imgSrc = get_post($movie['movie_poster'])->guid;
                        ?>

                        <tr>
                            <td class="col-xs-4 item-image">
                                <a href="<?php echo $link; ?>">
                                    <img src="<?php echo $imgSrc; ?>" />
                                </a>
                            </td>

                            <td>
                                <a href="<?php echo $link; ?>"><?php echo the_title(); ?></a>
                                <br />
                                <?php
                                    $screeningDate = get_custom_field('screening_date');
                                    $diff = time() - strtotime($screeningDate);
                                    $hasHappened = ($diff > 0) ? 1 : 0;

                                    echo $hasHappened ? "Screened " : "Screening ";
                                    echo "on " . date("F jS, Y", strtotime($screeningDate));
                                ?>
                                <br />
                                In <?php print_custom_field('screening_location'); ?>
                            </td>
                        </tr>

                        <?php
                            endforeach;
                        ?>
                    </table>

                    <div class="col-xs-6 col-xs-offset-3">
                        <a href="/previous-screenings" class="btn btn-default button">More</a>
                    </div>
                </div>
            </div>
            <!-- /previous screenings -->

            <div class="col-md-7 col-xs-12 item">
                <div class="col-xs-12">
                    <a href="/movie-library" class="btn btn-default button">Movie Library</a>
                </div>
            </div>
        </div>

        <div class="sidebar col-md-4 hidden-xs">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>