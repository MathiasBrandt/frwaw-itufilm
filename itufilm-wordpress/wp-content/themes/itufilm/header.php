<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>ITU.film</title>

    <!-- include Bootstrap css file -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css" type="text/css"> -->
    <!-- include custom css styles -->
    <!-- <link rel="stylesheet" href="css/styles.css" type="text/css"> -->
    <!-- include jQuery -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- include bootstrap javascript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> -->

    <?php wp_head(); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container-fluid xs-no-padding">
    <div class="header col-md-8 col-md-offset-2 col-xs-12">
        <div class="col-md-12 col-xs-8 header-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/itufilm-logo.png" />
        </div>

        <div class="col-md-12 col-md-offset-0 col-xs-3 col-xs-offset-1 header-menu">
            <nav class="navbar navbar-default">
                <div class="col-xs-12">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="col-xs-12">
                    <div class="collapse navbar-collapse" id="collapse-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="#" class="active-page">Home</a></li>
                            <!-- only show news item on small devices -->
                            <li class="visible-xs-inline"><a href="#">News</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>