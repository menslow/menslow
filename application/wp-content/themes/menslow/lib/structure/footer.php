<?php
function mez_footer() {
	get_template_part( 'lib/partials/footer' );
}

//* Reposition the footer
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

add_action( 'genesis_footer', 'mez_footer' );
