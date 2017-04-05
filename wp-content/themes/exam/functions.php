<?php

function breaker() {
wp_enqueue_style('style', get_template_directory_uri().'/style.css');
	wp_enqueue_style('media-style', get_template_directory_uri().'/media-style.css');
wp_enqueue_script('script', get_template_directory_uri().'/fancybox/jquery.fancybox.js');

}
add_action('wp_enqueue_scripts', 'breaker');








?>