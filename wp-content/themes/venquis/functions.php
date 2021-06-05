<?php

function venquis_customizer_setting($wp_customize) {
    // add a setting 
        $wp_customize->add_setting('venquis_mobile_logo');
    // Add a control to upload the mobile logo
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'venquis_mobile_logo', array(
            'label' => 'Upload mobile Logo',
            'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
            'settings' => 'venquis_mobile_logo',
            'priority' => 8 // show it just below the custom-logo
        )));
    }
    
    add_action('customize_register', 'venquis_customizer_setting');

function venquis_theme_support()
{
    // adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    get_theme_mod( 'venquis_mobile_logo' );
    
}

add_action('after_setup_theme', 'venquis_theme_support');

function primary_menu_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'primary-desktop' ||  $args->theme_location == 'primary-mobile') {
      // add the desired attributes:
      $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'primary_menu_atts', 10, 3 );

function footer_menu_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'footer-1' ||  $args->theme_location == 'footer-2' ||  $args->theme_location == 'footer-3') {
      // add the desired attributes:
      $atts['class'] = 'text-white';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'footer_menu_atts', 10, 3 );

function venquis_menus()
{
    $locations = array(
        'primary-desktop' => "Desktop Primary",
        'primary-mobile' => "Mobile Primary",
        'footer-1' => "Footer Menu 1",
        'footer-2' => "Footer Menu 2",
        'footer-3' => "Footer Menu 3"
    );

    register_nav_menus($locations);
}

add_action('init', 'venquis_menus');




function venquis_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('venquis-bootstrap', get_template_directory_uri()."/assets/css/bootstrap.min.css", array(), $version, 'all');
    wp_enqueue_style('venquis-glyphicons', get_template_directory_uri()."/assets/css/bootstrap-glyphicons.min.css", array(), $version, 'all');
    wp_enqueue_style('venquis-font', "https://fonts.googleapis.com/icon?family=Material+Icons", array(), $version, 'all');
    wp_enqueue_style('venquis-slick', get_template_directory_uri()."/assets/css/slick.css", array(), $version, 'all');
    wp_enqueue_style('venquis-slick-theme', get_template_directory_uri()."/assets/css/slick-theme.css", array(), $version, 'all');
    wp_enqueue_style('venquis-swiper', get_template_directory_uri()."/assets/css/swiper.css", array(), $version, 'all');
    wp_enqueue_style('venquis-buttons', get_template_directory_uri()."/assets/css/buttons.css", array(), $version, 'all');
    wp_enqueue_style('venquis-responsive', get_template_directory_uri()."/assets/css/responsive.css", array(), $version, 'all');
    wp_enqueue_style('venquis-style', get_template_directory_uri()."/style.css", array(), $version, 'all');
   
}

add_action('wp_enqueue_scripts', 'venquis_register_styles');


function venquis_register_scripts()
{
    wp_enqueue_script('venquis-jquery', get_template_directory_uri()."/assets/js/jquery.min.js", array(), '1.0', true);
    wp_enqueue_script('venquis-bootstrap', get_template_directory_uri()."/assets/js/bootstrap.min.js", array(), '1.0', true);
    wp_enqueue_script('venquis-slick', get_template_directory_uri()."/assets/js/slick.min.js", array(), '1.0', true);
    wp_enqueue_script('venquis-swiper', get_template_directory_uri()."/assets/js/swiper.min.js", array(), '1.0', true);
    wp_enqueue_script('venquis-main', get_template_directory_uri()."/assets/js/venquisjs.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'venquis_register_scripts');



function venquis_get_menu_by_location( $location ) {
    if( empty($location) ) return false;

    $locations = get_nav_menu_locations();
    if( ! isset( $locations[$location] ) ) return false;

    $menu_obj = get_term( $locations[$location], 'nav_menu' );

    return $menu_obj;
}

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="form-inline my-2 my-lg-0">',
            'after_widget' => '</div>',
            'name' => 'Top Right',
            'id' => 'top-right',
            'description' => 'Top Right Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Left',
            'id' => 'footer-left',
            'description' => 'Footer Left Widget Area'

        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Logo',
            'id' => 'footer-logo',
            'description' => 'Footer Logo Widget Area'

        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Copyright',
            'id' => 'footer-copy',
            'description' => 'Footer Copyright Widget Area'

        )
    );

	
    add_filter('acf/settings/remove_wp_meta_box', '__return_false');



?>


