<?php get_header(); ?>

    <?php
        /*$pl = get_page_link('47', false);
        echo "original: " . $pl;
        $params = array('movie-id' => '49');
        $pl = add_query_arg($params, $pl);
        echo "new: " . $pl;
        echo "var: " . $_GET['movie-id'];*/

        //$post = get_post(array($_GET['movie-id']));
        $post = get_post($_GET['movie-id']);
    ?>

    <div class="middle col-md-8 col-md-offset-2 col-xs-12">
        <div class="main-content col-md-8 col-xs-12">
            <!-- movie information -->
            <div class="col-md-9 col-xs-12 item">
                <div class="item-heading">
                    <?php echo the_title(); ?>

                    <div class="movie-information hidden-xs">
                        <p>
                            <?php
                                $stars = get_custom_field('movie_rating');
                                $emptyStars = 5 - $stars;

                                for($i = 0; $i < $stars; $i++) {
                                    echo '<span class="glyphicon glyphicon-star"></span>';
                                }

                                for($i = 0; $i < $emptyStars; $i++) {
                                    echo '<span class="glyphicon glyphicon-star-empty"></span>';
                                }
                            ?>
                        </p>
                        <p>
                            <?php
                                $movieScreening = get_custom_field('movie_screening_relation:get_post');
                                if(isset($movieScreening) && !empty($movieScreening)) {
                                    $screeningDate = $movieScreening['screening_date'];

                                    if(isset($screeningDate) && !empty($screeningDate)) {
                                        $diff = time() - strtotime($screeningDate);
                                        $hasHappened = ($diff > 0) ? 1 : 0;

                                        echo $hasHappened ? "Screened " : "Screening ";
                                        echo "on " . date("F jS, Y", strtotime($screeningDate));
                                    }
                                }
                            ?>
                        </p>
                    </div>
                </div>

                <div class="item-content item-details">
                    <div class="movie-information visible-xs">
                        <div class="rating-stars">
                            <?php
                            $stars = get_custom_field('movie_rating');
                            $emptyStars = 5 - $stars;

                            for($i = 0; $i < $stars; $i++) {
                                echo '<span class="glyphicon glyphicon-star"></span>';
                            }

                            for($i = 0; $i < $emptyStars; $i++) {
                                echo '<span class="glyphicon glyphicon-star-empty"></span>';
                            }
                            ?>
                        </div>

                        <?php
                            $movieScreening = get_custom_field('movie_screening_relation:get_post');
                            if(isset($movieScreening) && !empty($movieScreening)) {
                                $screeningDate = $movieScreening['screening_date'];

                                if(isset($screeningDate) && !empty($screeningDate)) {
                                    $diff = time() - strtotime($screeningDate);
                                    $hasHappened = ($diff > 0) ? 1 : 0;

                                    echo $hasHappened ? "Screened " : "Screening ";
                                    echo "on " . date("F jS, Y", strtotime($screeningDate));
                                }
                            }
                        ?>
                    </div>

                    <div class="col-md-3 col-xs-4 no-padding"><b>Runtime</b></div>
                    <div class="col-md-9 col-xs-8 no-padding"><?php print_custom_field('movie_runtime'); ?> min.</div>

                    <div class="col-md-3 col-xs-4 no-padding"><b>Genre</b></div>
                    <div class="col-md-9 col-xs-8 no-padding">
                        <?php
                            $genres = get_custom_field('movie_genre');

                            if(!empty($genres)) {
                                for($i = 0; $i < count($genres); $i++) {
                                    echo get_post($genres[$i])->post_title;
                                    if($i < (count($genres) - 1)) {
                                        // only add comma and space if not the last item
                                        echo ", ";
                                    }
                                }
                            } else {
                                echo "&nbsp;";
                            }

                        ?>
                    </div>

                    <div class="col-md-3 col-xs-4 no-padding"><b>Release Date</b></div>
                    <div class="col-md-9 col-xs-8 no-padding"><?php print_custom_field('movie_release_date'); ?></div>


                    <div class="col-md-3 col-xs-12 no-padding movie-summary"><b>Summary</b></div>
                    <div class="col-md-9 col-xs-12 no-padding"><?php print_custom_field('movie_summary'); ?></div>
                </div>
            </div>
            <!-- /movie information -->

            <!-- movie poster -->
            <div class="col-md-3 col-xs-12 item item-image item-right">

                <img src="<?php print_custom_field('movie_poster:to_image_src'); ?>" />

                <a href="#" class="btn btn-default button">Like This Movie</a>
            </div>
            <!-- /movie poster -->

            <!-- recommended by -->
            <div class="col-md-9 col-xs-12 item">
                <div class="item-heading">
                    Recommended By
                </div>

                <div class="item-content item-details">
                    <div class="recommendation">
                        <div class="col-md-3 col-xs-12 no-padding"><b>Mathias Brandt</b></div>
                        <div class="col-md-9 col-xs-12 no-padding">"A great movie for people interested in AI"</div>
                    </div>

                    <div class="recommendation">
                        <div class="col-md-3 col-xs-12 no-padding"><b>Simon Langhoff</b></div>
                        <div class="col-md-9 col-xs-12 no-padding">"Gives a new perspective on AI development"</div>
                    </div>
                </div>
            </div>
            <!-- /recommended by -->

            <!-- similar movies -->
            <div class="col-xs-12 item">
                <div class="item-heading">
                    Similar Movies
                </div>

                <div class="item-content item-details center-text item-image">
                    <div class="col-md-3 col-xs-6 similar-movie-item-left">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/dallas.png" /></a>

                        <a href="#">Dallas Buyers Club</a>
                    </div>
                    <div class="col-md-3 col-xs-6 similar-movie-item-right">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/gravity.png" /></a>

                        <a href="#">Gravity</a>
                    </div>
                    <div class="col-md-3 col-xs-6 similar-movie-item-left">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/12years.png" /></a>

                        <a href="#">12 Years a Slave</a>
                    </div>
                    <div class="col-md-3 col-xs-6 similar-movie-item-right">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/silver.png" /></a>

                        <a href="#">Silver Lining's Playbook</a>
                    </div>
                </div>
            </div>
            <!-- /similar movies -->

            <!-- comments -->
            <div class="col-xs-12 item">
                <div class="item-heading">
                    Comments
                </div>

                <div class="item-content item-details comment">
                    <div class="comment-author">Per Mortensen</div>
                    <div class="comment-date">26-02-2015</div>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                </div>

                <div class="item-content item-details comment">
                    <div class="comment-author">Henrik Haugbølle</div>
                    <div class="comment-date">24-02-2015</div>

                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                </div>
            </div>
            <!-- /comments -->
        </div>

    <div class="sidebar col-md-4 hidden-xs">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>