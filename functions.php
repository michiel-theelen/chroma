<?php

// Adds scripts and stylesheets
function startwordpress_scripts() {
	// Loads global stylesheets
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_script('highlightjs', get_template_directory_uri() . '/highlight/highlight.pack.js');
	wp_enqueue_script('livesearch', get_template_directory_uri() .'/js/livesearch.js', array('jquery'), null, true);
}
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// Load highlightjs from cdn
function add_highlightjs_cdn()
{
	wp_enqueue_style( 'highlightjs', get_template_directory_uri() . '/highlight/styles/mono-blue.css', array(), '9.15.6', 'all' );
	wp_enqueue_script('highlightjs', get_template_directory_uri() . '/highlight/highlight.pack.js', array(), '9.15.6', false);
}
add_action('wp_enqueue_scripts', 'add_highlightjs_cdn');

function load_highlightjs_script()
{
	?>
	<script>hljs.initHighlightingOnLoad();</script>
	<?php
}
add_action('wp_footer', 'load_highlightjs_script');

// WordPress Titles
function startwordpress_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() ) {
		return $title;
	}
	// Add the site name.
	$title .= get_bloginfo( 'name' );
	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}
	return $title;
}
add_filter( 'wp_title', 'startwordpress_wp_title', 10, 2 );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Custom Settings</h1>
		<form method="post" action="options.php">
			<?php
           settings_fields('section');
           do_settings_sections('theme-options');
           submit_button();
       ?>
		</form>
	</div>
	<?php }

// Twitter
function setting_twitter() { ?>
		<input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
		<?php }

function setting_instagram() { ?>
			<input type="text" name="instagram" id="instagram" value="<?php echo get_option('instagram'); ?>" />
			<?php }

function setting_facebook() { ?>
			<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
			<?php }
function setting_flickr() { ?>
			<input type="text" name="flickr" id="flickr" value="<?php echo get_option('flickr'); ?>" />
			<?php }

function custom_settings_page_setup() {
  add_settings_section('section', 'All Settings', null, 'theme-options');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
  add_settings_field('instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section');
  add_settings_field('facebook', 'Facebook URL', 'setting_flickr', 'theme-options', 'section');
	add_settings_field('flickr', 'Flickr URL', 'setting_facebook', 'theme-options', 'section');

	register_setting('section', 'twitter');
  register_setting('section', 'instagram');
  register_setting('section', 'facebook');
	register_setting('section', 'flickr');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Add custom Navigation Sections
function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'main-nav' => __( 'Homepage' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

// Customizer File
require get_template_directory(). '/inc/customizer.php';

function add_your_fields_meta_box() {
    	add_meta_box(
    		'your_fields_meta_box', // $id
    		'Your Fields', // $title
    		'show_your_fields_meta_box', // $callback
    		'your_post', // $screen
    		'normal', // $context
    		'high' // $priority
    	);
    }
    add_action( 'add_meta_boxes', 'add_your_fields_meta_box' );
