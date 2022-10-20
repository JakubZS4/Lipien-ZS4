
<?php 

function style()
{
    wp_register_style('my-css',
    get_template_directory_uri() . '/assets/my.css',
    array(), '1.0.0', 'all');
    wp_enqueue_style('my-css');
}
add_action('wp_enqueue_scripts', 'style');

function skrypty()
{
    wp_register_script('my-js',
    get_template_directory_uri() . '/assets/my.js',
    array(), '1.0.0' , true);
    wp_enqueue_script('my-js');
}
add_action('wp_enqueue_scripts', 'skrypty');

function theme_options()
{
add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_options');