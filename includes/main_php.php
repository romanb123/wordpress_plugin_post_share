<?php
function post_add_style_and_scripts()
{
    wp_enqueue_style('main_style', plugins_url() . '/wordpress_plugin_post_share-master/css/main.css');
    wp_enqueue_script('main_scripr', plugins_url() . '/wordpress_plugin_post_share-master/javascript/main.js');
}
add_action('wp_enqueue_scripts', 'post_add_style_and_scripts');