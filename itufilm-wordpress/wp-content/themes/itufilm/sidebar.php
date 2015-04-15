<?php
    $posts = get_posts(array('post_type' => 'movie_screening', 'numberposts' => '1'));

    foreach($posts as $post):
?>

<!-- next event -->
<div class="item">
    <div class="item-heading">
        Next Event
    </div>

    <div class="item-image">
        <img src="<?php print_custom_field('movie_poster'); ?>" />
    </div>

    <div class="item-content next-event-content">
        <?php echo the_title(); ?>
        <br />
        <?php print_custom_field('screening_time'); ?>
        <br />
        <?php print_custom_field('screening_date'); ?>
        <br />
        <?php print_custom_field('screening_location'); ?>
    </div>
</div>
<!-- /next event -->

<?php
    endforeach;
?>

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