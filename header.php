<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css">
</head>
<body <?php body_class(); ?>>
<!-- 
<header>
    <h1 class="ui center aligned huge header">Pheolix Themes</h1>
    <div class="ui menu">
        <div class="header item">
            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <a href="#" class="item">Home</a>
        <a href="#" class="item">Features</a>
        <a href="#" class="item">Pricing</a>
        
        <div class="right menu">
            <div class="item">
                <div class="ui primary button">Sign Up</div>
            </div>
            <div class="item">
                <div class="ui button">Log In</div>
            </div>
        </div>
    </div>
</header> -->

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary', // The location registered in functions.php
                    'menu_class' => 'navbar-nav', // Class for styling
                    'container' => false // No container
                ));
                ?>
                <div class="right menu">
            <div class="item">
                <form action="/search" method="get" class="ui action input">
                    <input type="text" placeholder="Search...">
                    <button class="ui button" type="submit">Search</button>
                </form>
            </div>
        </div>
            </div>
            
        </div>
    </nav>
</header>

