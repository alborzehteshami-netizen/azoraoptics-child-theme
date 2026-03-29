<?php
/**
 * Astra Child Theme — Azora Optics
 * functions.php
 */

// Enqueue parent + child styles
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'astra-parent-style',
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'astra-parent-style' )
    );
    // Google Fonts
    wp_enqueue_style(
        'ao-fonts',
        'https://fonts.googleapis.com/css2?family=Lato:wght@400;600;700;800;900&family=Inter:wght@400;500;600&display=swap',
        array(),
        null
    );
});
