<?php

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
/*		array(
			'name'      => 'BuddyPress',
			'slug'      => 'buddypress',
			'required'  => false,
		),*/

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}



function create_my_theme_post_types() {
/*
	register_post_type( 'front-page-section', array(
		'labels' => array(
			'name' => _x( 'Front Page Sections', 'General Name', 'gj' ),
			'singular_name' => _x( 'Front Page Section', 'Singular Name', 'gj' ),
			'menu_name' => __( 'Front Page Sections', 'gj' ),
		),
		'hierarchical' => false,
		'menu_icon' => 'dashicons-admin-page',
		'menu_position' => 20,
		'public' => false,
		'show_ui' => true,
		'supports' => array( 'title', 'editor', 'page-attributes', 'revisions' ),
		'taxonomies' => array(  ),
	) );
	
	register_taxonomy( 'front-page-section-class', 'front-page-section', array(
		'labels' => array(
			'name'              => _x( 'Front Page Section Classes', 'taxonomy general name' ),
			'singular_name'     => _x( 'Front Page Section Class', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Front Page Section Classes' ),
			'all_items'         => __( 'All Front Page Section Classes' ),
			'parent_item'       => __( 'Parent Front Page Section Class' ),
			'parent_item_colon' => __( 'Parent Front Page Section Class:' ),
			'edit_item'         => __( 'Edit Front Page Section Class' ),
			'update_item'       => __( 'Update Front Page Section Class' ),
			'add_new_item'      => __( 'Add New Front Page Section Class' ),
			'new_item_name'     => __( 'New Front Page Section Class Name' ),
			'menu_name'         => __( 'Front Page Section Classes' ),
		),
		'public'            => false,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_admin_column' => true,
	) );
*/
}
add_action( 'init', 'create_my_theme_post_types', 0 );



function my_theme_widgets_init() {
/*
	register_sidebar( array(
		'name'          => __( 'Some Widgrt Area', 'my-theme' ),
		'id'            => 'sidebar-something',
		'description'   => __( 'Appears somewhere.', 'my-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
*/
}
add_action( 'widgets_init', 'my_theme_widgets_init' );



function my_theme_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu' ),
			'secondary' => __( 'Secondary Menu' ),
		)
	);
}
add_action( 'init', 'my_theme_menus' );



function my_theme_scripts() {
	
	// Load Google fonts
	wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic&subset=latin,latin-ext' );
	
	// Load our main stylesheet.
	wp_enqueue_style( 'my-theme-style', get_stylesheet_uri() );

	// Load our main javascript.
	wp_enqueue_script( 'my-theme-script', get_template_directory_uri() . '/main.js', array(
		'jquery'
	) );
	
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );



function my_theme_setup() {

    load_theme_textdomain( 'my_theme', get_template_directory() );
	
}
add_action( 'after_setup_theme', 'my_theme_setup' );

