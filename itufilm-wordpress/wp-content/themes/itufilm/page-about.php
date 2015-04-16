<?php get_header(); ?>

<!-- Facebook Javascript SDK -->
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.3&appId=1564437727167353";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="middle col-md-8 col-md-offset-2 col-xs-12">
    <div class="main-content col-xs-12">
        <div class="item">
            <div class="item-heading">
                About ITU.film
            </div>
            <div class="item-content">
                ITU.Film is the IT University's own cinema.
                <br />
                Join the community!

                <p>
                    <!-- Facebook Page Plugin -->
                    <div class="fb-page" data-href="https://www.facebook.com/itu.film" data-width="280" data-height="130" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/itu.film"><a href="https://www.facebook.com/itu.film">ITU.Film</a></blockquote></div></div>
                </p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>