<?php
require_once("class.walkernavmenu.php");

function initAll() {
	register_nav_menu('menu-site', __('Menu'));
}
add_action('init', 'initAll');

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
	add_theme_support('post-thumbnails');
	add_image_size('thumb-category', 400, 200, true);
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );
?>