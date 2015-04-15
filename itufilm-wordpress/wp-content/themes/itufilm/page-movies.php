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

                <div class="item-image">
                    <a href="?post_type=movie&p=39">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/chappie.png" />
                    </a>
                </div>

                <div class="item-content center-text small-padding">
                    <a href="#">Chappie</a>
                </div>

                <div class="item-image">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fifty.png" /></a>
                </div>

                <div class="item-content center-text small-padding">
                    <a href="#">Fifty Shades of Grey</a>
                </div>

                <div class="item-image">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/spongebob.png" /></a>
                </div>

                <div class="item-content center-text small-padding">
                    <a href="#">The Spongebob Movie:<br/>Sponge Out of Water</a>
                </div>

                <div class="item-image">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/sniper.png" /></a>
                </div>

                <div class="item-content center-text small-padding">
                    <a href="#">American Sniper</a>
                </div>

                <div class="item-image">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/imitation.png" /></a>
                </div>

                <div class="item-content center-text small-padding">
                    <a href="#">The Imitation Game</a>
                </div>
            </div>
            <!-- /staff recommends -->

            <!-- previous screenings -->
            <div class="col-md-7 col-xs-12 item">
                <div class="item-heading">
                    Previous Screenings
                </div>

                <div class="item-content">
                    <table class="table table-borderless previous-screenings-table">
                        <tr>
                            <td class="col-xs-4 item-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/sugar.jpg" />
                            </td>

                            <td>
                                <a href="#">Searching for Sugar Man</a>
                                <br />
                                February 6th, 2015
                                <br />
                                Café Analog
                            </td>
                        </tr>

                        <tr>
                            <td class="col-xs-4 item-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/letter.jpg" />
                            </td>

                            <td>
                                <a href="#">The Letter Writer</a>
                                <br />
                                September 11th, 2014
                                <br />
                                Café Analog
                            </td>
                        </tr>

                        <tr>
                            <td class="col-xs-4 item-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/book.jpg" />
                            </td>

                            <td>
                                <a href="#">The Book Thief</a>
                                <br />
                                April 10th, 2014
                                <br />
                                Café Analog
                            </td>
                        </tr>
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