<?php
// Enqueue parent and child theme styles
function twentytwentyfive_child_enqueue_styles() {
    // Enqueue parent theme style
    wp_enqueue_style(
        'twentytwentyfive-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Enqueue child theme style
    wp_enqueue_style(
        'twentytwentyfive-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        ['twentytwentyfive-parent-style']
    );
}
add_action('wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_styles');
?>
