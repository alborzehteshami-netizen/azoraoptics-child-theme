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
        array( 'astra-parent-style' ),
        '4.0.0'
    );
});
