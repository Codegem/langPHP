<?php 

function load_stylesheets()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/css/bootstrap.min.css', 
    array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/assets/css/styles.css', 
    array(), false, 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts' , 'load_stylesheets');

function include_jquery()
{
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/plugins/jquery-3.3.1.min.js', array() , 1, 1, 1);

    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function include_jqueryscrool()
{
    wp_deregister_script('jqueryboot');

    wp_enqueue_script('jqueryboot', get_template_directory_uri() . '/assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js', '' , 1, true);

    add_action('wp_enqueue_scripts', 'jqueryboot');
}
add_action('wp_enqueue_scripts', 'include_jqueryscrool');


function loadjs()
{

    wp_register_script('customjs', get_template_directory_uri() . '/assets/js/main.js' , '' , 1, true);
    wp_enqueue_script('customjs');
    
}

add_action('wp_enqueue_scripts', 'loadjs');

function loadjsboot()
{

    wp_register_script('custombootstrap', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js' , '' , 1, true);
    wp_enqueue_script('custombootstrap');
    
}

add_action('wp_enqueue_scripts', 'loadjsboot');