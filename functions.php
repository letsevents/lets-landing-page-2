<?php

// Below functions will deregister ALL plugins but contact-form-7 from head and footer
function pm_remove_all_scripts() {
    global $wp_scripts;
    $wp_scripts->queue = array('contact-form-7');
}
add_action('wp_print_scripts', 'pm_remove_all_scripts', 100);

function pm_remove_all_styles() {
    global $wp_styles;
    $wp_styles->queue = array('contact-form-7', 'admin-bar');
}
add_action('wp_print_styles', 'pm_remove_all_styles', 100);

// There are plugins in production including old versions of jQuery
// This way we ensure the jquery script we declared in the index_new.php file
// is the one used.
function include_our_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'include_our_jquery');