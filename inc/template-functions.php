<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ElitBud
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function elitbud_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'elitbud_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function elitbud_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'elitbud_pingback_header' );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}

add_filter( 'excerpt_length', 'filter_function_name_6810' );
function filter_function_name_6810( $number ){
    $number = 20;

    return $number;
}


function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function your_theme_customizer_setting($wp_customize) {
// add a setting
    $wp_customize->add_setting('your_theme_footer_logo');
// Add a control to upload the hover logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'your_theme_footer_logo', array(
        'label' => 'Footer Logo',
        'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
        'settings' => 'your_theme_footer_logo',
        'priority' => 8 // show it just below the custom-logo
    )));
}

add_action('customize_register', 'your_theme_customizer_setting');

add_theme_support( 'editor-styles' );
add_editor_style( 'style-editor.css' );


add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'infrastructure',
            'title'             => __('Інфраструктура'),
            'description'       => __('Блок Інфраструктура'),
            'render_template'   => 'template-parts/blocks/infrastructure.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'infrastructure' ),
        ));
    }
}

