<?php
	
require get_template_directory() . '/inc/recommendations/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function unique_restaurant_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Mizan Demo Importor', 'unique-restaurant' ),
			'slug'             => 'mizan-demo-importer',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'ElementsKit Lite', 'unique-restaurant' ),
			'slug'             => 'elementskit-lite',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	unique_restaurant_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'unique_restaurant_register_recommended_plugins' );