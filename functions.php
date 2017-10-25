<?php 

// Chargement des données du thème parent evolve 

function my_theme_enqueue_styles() {
    $parent_style = 'evolve-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'evolve-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' ); 


// Suppression des commentaires sur l'ensemble du site 

add_filter('comments_open', 'wpc_comments_closed', 10, 2);

function wpc_comments_closed( $open, $post_id ) {
$post = get_post( $post_id );
$open = false;
return $open;
}