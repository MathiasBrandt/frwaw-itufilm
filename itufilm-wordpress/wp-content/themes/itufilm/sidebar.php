<!-- next event -->
<div class="item">
    <div class="item-heading">
        Next Event
    </div>

<?php
    $currentTime = time();

    // get all screenings sorted by screening date
    $posts = get_posts(array(
        'post_type' => 'movie_screening',
        'numberposts' => '-1',
        'meta_key' => 'screening_date',
        'orderby' => 'meta_value',
        'order' => 'ASC'
        ));

    // remove screenings that have already happened
    foreach($posts as $i => $post) {
        if(strtotime(get_custom_field('screening_date')) < $currentTime) {
            unset($posts[$i]);
        }
    }

    $posts = array_values($posts);

    // array has already been sorted, so index 0 is the next screening
    $post = $posts[0];

    if(isset($post)):
        $movie = get_custom_field("movie_relation:get_post");
        $params = array('movie-id' => $movie['ID']);
        $link = add_query_arg($params, get_page_link(MOVIE_INFORMATION_PAGE_ID));
        $imgSrc = get_post($movie['movie_poster'])->guid;
?>

<div class="item-image">
    <a href="<?php echo $link; ?>">
        <img src="<?php echo $imgSrc; ?>" />
    </a>
</div>

<div class="item-content next-event-content">
    <a href="<?php echo $link; ?>">
        <?php echo the_title(); ?>
    </a>
    <br />
    <?php print_custom_field('screening_time'); ?>
    <br />
    <?php print_custom_field('screening_date'); ?>
    <br />
    <?php print_custom_field('screening_location'); ?>
</div>

<?php else: ?>
<div class="item-content next-event-content">
    No future events have been scheduled.
    <br />
    Check out our <a href="/previous-screenings">previous screenings</a>.
</div>
<?php endif; ?>

</div>
<!-- /next event -->

<!-- where to find us -->
<div class="item">
    <div class="item-heading">
        Where to Find Us
    </div>

    <div class="item-image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/map.png" />
    </div>

    <div class="item-content">
        Café Analog, IT University of Copenhagen
        <br />
        Rued Langgaards Vej 7
        <br />
        2300 Copenhagen S
    </div>
</div>
<!-- /where to find us -->