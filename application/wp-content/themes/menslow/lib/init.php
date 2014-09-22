<?php
//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'menslow' );
define( 'CHILD_THEME_URL', 'http://menslow.com' );
define( 'CHILD_THEME_VERSION', '1.0' );

/* Add Chrome PHP class for PHP debugging */
if( WP_ENV === 'dev' ) {
	ob_start();
	require_once( 'classes/ChromePhp/ChromePhp.php' ); // Add debug library if we're in dev environment.
}

add_action( 'after_setup_theme', 'mez_after_setup_theme' );
function mez_after_setup_theme() {

	/* Page Structures: Header, Content, Footer, etc */
	//require_once( 'structure/header.php');
	require_once( 'structure/footer.php');

	/* Helper functions */
	//require_once( 'functions/general.php' );

	/* Load Styles and Javascript */
	//require_once( 'css/load-styles.php' );
	//require_once( 'js/load-scripts.php' );

	/* Theme Options */
	// Enable html5 doctype and elements
	add_theme_support( 'html5' );
	add_theme_support( 'genesis-responsive-viewport' );
	add_theme_support( 'custom-header' );

	// Set default layout and unregister unused layouts */
	genesis_set_default_layout('full-width-content');

}