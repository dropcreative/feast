<?php

// LOAD MENU SUPPORT
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus(){

  register_nav_menus(
    array(
      'primary-menu' => _( 'Primary Menu'),
      'off-canvas-menu' => _( 'Off Canvas Menu'),
      'footer-menu' => _( 'Footer Canvas Menu'),
    )
  );
}
add_action( 'init', 'register_theme_menus');

// LOAD FEAST STYLES

function feast_styles(){

   wp_enqueue_style ( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
   wp_enqueue_style ( 'goodvibes_font', '//fonts.googleapis.com/css?family=Great+Vibes' );
   wp_enqueue_style ( 'feast', get_template_directory_uri() . '/css/feast-styles.css' );

}

add_action( 'wp_enqueue_scripts', 'feast_styles');


// LOAD FEAST SCRIPTS

function feast_scripts(){


    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://code.jquery.com/jquery-2.1.4.min.js', false, null );
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'uikit', get_template_directory_uri() . '/js/uikit.min.js', array( 'jquery' ), false, true );

    wp_enqueue_script( 'slideshow', get_template_directory_uri() . '/js/components/slideshow.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'slideshow-fx', get_template_directory_uri() . '/js/components/slideshow-fx.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'scrollspy', get_template_directory_uri() . '/js/core/scrollspy.js', array( 'jquery' ), false, true );
     wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/components/lightbox.js', array( 'jquery' ), false, true );
//     wp_enqueue_script( 'modal', get_template_directory_uri() . '/js/core/modal.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'fittext', get_template_directory_uri() . '/js/jquery.fittext.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'fittext-custom', get_template_directory_uri() . '/js/jquery.fittext-custom.js', array( 'jquery' ), false, true );
            wp_enqueue_script( 'grid-core', get_template_directory_uri() . '/js/core/grid.js', array( 'jquery' ), false, true );
                wp_enqueue_script( 'grid-component', get_template_directory_uri() . '/js/components/grid.js', array( 'jquery' ), false, true );

 wp_enqueue_script( 'feastfunctions', get_template_directory_uri() . '/js/feastfunctions.js', array( 'jquery' ), false, true );

}

if( !is_admin() ) add_action( 'wp_enqueue_scripts', 'feast_scripts');



// REGISTER WALKER (MENU)
require_once('walker_uikits.php');

//remove carrots from Page Title
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

/// CUSTOM LOGIN
$homepage =  get_home_url();
$blog_title = get_bloginfo('name');

//add_action( 'login_enqueue_scripts', 'my_login_logo' );
//change link on login page
function my_loginURL() {
    return $GLOBALS['homepage'];
}
add_filter('login_headerurl', 'my_loginURL');
// Change hover over logo to site name
function my_loginURLtext() {
    return $GLOBALS['blog_title'];
}
add_filter('login_headertitle', 'my_loginURLtext');

// Add stylesheet to going page_attributes_dropdown_pages_args
function my_logincustomCSSfile() {
    wp_enqueue_style('login-styles', get_template_directory_uri() . '/login/login_styles.css');
}
add_action('login_enqueue_scripts', 'my_logincustomCSSfile');


/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function custom_welcome_add_dashboard_widgets() {

    wp_add_dashboard_widget(
                 'custom_welcome_dashboard_widget',         // Widget slug.
                 'Welcome to your site',         // Title.
                 'custom_welcome_dashboard_widget_function' // Display function.
        );
}
add_action( 'wp_dashboard_setup', 'custom_welcome_add_dashboard_widgets' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function custom_welcome_dashboard_widget_function() {

    // Display whatever it is you want to show.
    echo "Hello World, I'm a great Dashboard Widget";
}



?>
