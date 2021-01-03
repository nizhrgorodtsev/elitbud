<?php
/**
 * Created by PhpStorm.
 * User: NewComp
 * Date: 19.12.2020
 * Time: 11:40
 */

function elitbud_scripts() {
    wp_enqueue_style( 'elitbud-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'elitbud-style', 'rtl', 'replace' );
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('nouislider', get_template_directory_uri() . '/assets/css/nouislider.min.css');
    wp_enqueue_style('elitbud-style.min', get_template_directory_uri() . '/assets/css/style.min.css', array(), filemtime( get_theme_file_path('assets/css/style.min.css') ));
    wp_enqueue_script( 'elitbud-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('nouislider', get_template_directory_uri() . '/assets/js/nouislider.min.js', array('jquery'), _S_VERSION, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true);

    if( is_singular( 'building' ) ){
        wp_localize_script('main', 'progress', array(
            'count' => count(get_field('progress')['photos'])
        ));
    }
}
add_action( 'wp_enqueue_scripts', 'elitbud_scripts' );