<?php
/** Start the engine */
require_once( get_template_directory() . '/lib/init.php' );

/** Add custom footer if widget area is used */
add_action( 'genesis_footer', 'minimum_custom_footer', 6 );
function minimum_custom_footer() {
	remove_action( 'genesis_footer', 'genesis_do_footer' );
	?>
	<div class="custom-footer">
		<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - <?php _e('all rights reserved'); ?></p>
	</div>
	<?php
}
?>
