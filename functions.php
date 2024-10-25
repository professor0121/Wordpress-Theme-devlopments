<?php
function enqueue_semantic_ui() {

    wp_enqueue_style('semantic-ui-css', 'https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css');

    wp_enqueue_script('semantic-ui-js', 'https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_semantic_ui');
//-------------------------------------------------------------------------------------------------------------------------------------
function mytheme_setup() {

    add_theme_support('post-thumbnails'); 

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'textdomain'), 
        'footer'  => __('Footer Menu', 'textdomain'),
    ));

}

add_action('after_setup_theme', 'mytheme_setup');

 

//-------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------
?>
