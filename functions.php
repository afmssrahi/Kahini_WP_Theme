<?php 

// Add Css and Js files

function kahini_scripts() {
    wp_enqueue_style( 'bootstrap-5', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'style-css', get_stylesheet_uri(), [], time(), 'all' );
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', [], time(), 'all' );
    wp_enqueue_style( 'media-query', get_template_directory_uri() . '/assets/css/responsive.css', [], time(), 'all' );
    
    wp_enqueue_script( 'fontawesome', '//kit.fontawesome.com/445f742346.js');
    wp_enqueue_script( 'bootstrap-5-js', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js');
    

}
add_action('wp_enqueue_scripts', 'kahini_scripts');


// Add theme setup

function kahini_theme_supports() {
    /** title-tag **/
    add_theme_support( 'title-tag' );
    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );
    /** html5 support **/
    add_theme_support( 'html5', array( 'search-form' ));
    /** custom logo */
    add_theme_support( 'custom-logo', array(
        'height' => 100,
        'width' => 250
    ));
}
add_action( 'after_setup_theme', 'kahini_theme_supports' );

// Register nav menus

function kahini_nav_menus() {
    register_nav_menus( array
        (
            'primary-menu' => __( 'Primary Menu', 'kahini' ),
            'footer-menu' => __( 'Footer Menu', 'kahini' )
        )
    );
  }
  add_action( 'init', 'kahini_nav_menus' );

// Add class in navbar li tag
function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'nav-item mx-sm-auto';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

// Add Add class in navbar a tag
function add_link_att($att) {
    $att['class'] = 'nav-link';
    return $att;
}
add_filter( 'nav_menu_link_attributes', 'add_link_att' );

// Filter the excerpt length to 30 words
function kahini_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'kahini_excerpt_length');


// Regiter Widgets

function demo_widgets_init() {
    register_sidebar( array(
        'name' => __('Main Sidebar', 'demo'),
        'id' => 'main-sidebar',
        'description' => __('Add Your Widgets'),
        'before_widget' => '<section class="latest-post">',
        'after_widget' => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __('Footer Widgets', 'demo'),
        'id' => 'footer-widgests',
        'description' => __('Add Your Widgets'),
        'before_widget' => '<div class="col-md-4 col-12">',
        'after_widget' => '</div>',
        'before_title'  => '<h4 class="">',
        'after_title'   => '</h4>',
    ) );
}

add_action('widgets_init', 'demo_widgets_init');



/** ========================= WP_Customize_control ============================== */

function kahini_customizer_settings($wp_customizer) {
    
    // add header customizer setting
    $wp_customizer->add_section('kahini_header', array(
        'title' => __('Header Settings', 'kahini'),
        'priority' => 70
    ));
  
    // adding banner image
    $wp_customizer->add_setting('header_image', array(
        'capability' => 'edit_theme_options'
    ));
  
    // adding banner image control
    $wp_customizer->add_control(
        new WP_Customize_Image_Control(
            $wp_customizer,
            'header_image',
            array(
                'label' => __( 'Header Image', 'kahini' ),
                'section' => 'kahini_header'
            )
        )
    );

    // adding banner text field
    $wp_customizer->add_setting('header_text_field', array(
        'capability' => 'edit_theme_options',
        'default' => 'Kahnini Website'
    ));
  
    // adding banner text control
    $wp_customizer->add_control('header_text_control', array(
        'label' => __( 'Header Text', 'kahini' ),
        'description' => 'Change The banner Heading Text',
        'section' => 'kahini_header',
        'settings' => 'header_text_field'
    ));

    // adding banner description field
    $wp_customizer->add_setting('header_description_field', array(
        'capability' => 'edit_theme_options',
        'default' => 'This is a banner description.'
    ));
  
    // adding banner description control
    $wp_customizer->add_control('header_description_control', array(
        'label' => __( 'Header Description', 'kahini' ),
        'description' => 'Change The banner Description Text',
        'section' => 'kahini_header',
        'settings' => 'header_description_field'
    ));

}
add_action( 'customize_register', 'kahini_customizer_settings' );

















?>