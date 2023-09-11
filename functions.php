<?php
/**
 * Funtion template
 * 
 * @package scratch
 */
function scratch_enqueue_scripts(){
    //Registered styles
    wp_register_style('style-css', get_stylesheet_uri(),[], filemtime(get_template_directory() . '/style.css'),'all' );
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css',[], false,'all' );

    //Registered scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js',[], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js',['jquery'], false, true);
    wp_register_script('bootstrap-bundle-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.bundle.min.js',['jquery'], false, true);
    //Enqueue styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

     //Enqueue scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('bootstrap-bundle-js');

}
add_action('wp_enqueue_scripts','scratch_enqueue_scripts')
?>