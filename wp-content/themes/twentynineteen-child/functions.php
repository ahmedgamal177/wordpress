<?php
/*function wp_enqueue_style( $handle, $src = '', $deps = array(), $ver = false, $media = 'all' ) {
	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__ );

	$wp_styles = wp_styles();

	if ( $src ) {
		$_handle = explode( '?', $handle );
		$wp_styles->add( $_handle[0], $src, $deps, $ver, $media );
	}
	$wp_styles->enqueue( $handle );
}*/

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

	$parent_style = 'twentynineteen-style'; // This is 'twentynineteen-style' for the Twenty Fifteen theme.

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
}

add_filter( 'acf/settings/remove_wp_meta_box', '__return_false' );
?>