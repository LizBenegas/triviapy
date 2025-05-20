<?php 
function mi_tema_enqueue_styles() { 
    wp_enqueue_style('estilos-principales', get_stylesheet_uri()); 
} 
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_styles'); 

function mi_tema_enqueue_scripts() {
    wp_enqueue_script(
        'main.js', 
        get_template_directory_uri() . '/js/main.js', 
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_scripts');

function enqueue_patata_patata() {
    if (is_page('pagina-patata')) { 
        wp_enqueue_script(
            'pagina-patata',
            get_template_directory_uri() . '/assets/js/patata.js', 
            array(),
            null,
            true
        );
    }
}
add_action('wp_enqueue_scripts','enqueue_patata_patata');