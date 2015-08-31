<?php 

function wpt_theme_init() {

	register_setting( 'wptsettings-group', 'wpt_settings' );
	add_settings_section( 
		'wpt_slideshow_section',
		'Slideshow Settings',
		'wpt_slideshow_section_callback',
		'general'
	);
	add_settings_field(
		'wpt_slideshow_checkbox',
		'Show slideshow on homepage',
		'wpt_slideshow_checkbox_callback',
		'general',
		'wpt_slideshow_section'
	);
	add_settings_field(
		'wpt_slideshow_input',
		'Text input field',
		'wpt_slideshow_input_callback',
		'wptsettings',
		'wpt_slideshow_section'
	);
	add_settings_field(
		'wpt_slideshow_select',
		'Dropdown field',
		'wpt_slideshow_select_callback',
		'wptsettings',
		'wpt_slideshow_section'
	);		

}
add_action( 'admin_init', 'wpt_theme_init');

function wpt_slideshow_section_callback() {

}

function wpt_slideshow_checkbox_callback() {

	$options = get_option( 'wpt_settings' );	
	if( !isset( $options['show_slideshow'] ) ) $options['show_slideshow'] = 0;

	$html = '<input type="checkbox" id="wpt_show_slideshow" name="wpt_settings[show_slideshow]" value="1"' . checked( 1, $options['show_slideshow'], false ) . '/>';
	$html .= '<label for="wpt_show_slideshow">Check to enable slideshow on the homepage</label>';

	echo $html;

}

function wpt_slideshow_input_callback() {

	$options = get_option( 'wpt_settings' );
	if( !isset( $options['input_test'] ) ) $options['input_test'] = '';

	echo '<input type="text" id="wpt_input_test" name="wpt_settings[input_test]" value="' . $options['input_test'] . '" placeholder="Example field">';

}

function wpt_slideshow_select_callback() {

	$options = get_option( 'wpt_settings' );
	if( !isset( $options['select_test'] ) ) $options['select_test'] = 1;
	
?>

	<select name="wpt_settings[select_test]">
		<option value="1" <?php selected( $options['select_test'], 1 ); ?>>1</option>
		<option value="2" <?php selected( $options['select_test'], 2 ); ?>>2</option>
		<option value="3" <?php selected( $options['select_test'], 3 ); ?>>3</option>
	</select>
	

<?php

}

// Create Theme Options Page
function wpt_add_theme_page() {

	add_theme_page( 
		__('Theme Options', 'wpsettings'), 
		__('Theme Options', 'wpsettings'),
		'edit_theme_options',
		'wptsettings',
		'wpt_theme_options_page'
	);

}
add_action('admin_menu', 'wpt_add_theme_page');

function wpt_theme_options_page() {
?>
<div class="wrap">

	<h2>Theme Options - <?php echo get_current_theme(); ?></h2>
	<form method="post" action="options.php">
	<?php 
		settings_fields( 'wptsettings-group' ); 
		do_settings_sections( 'wptsettings' );
		submit_button();
	?>

</div>

<?php
}

// Enqueue theme styles
function wpt_theme_styles() {

  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

?>