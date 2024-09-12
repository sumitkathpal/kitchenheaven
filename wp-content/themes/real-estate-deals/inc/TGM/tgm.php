<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function real_estate_deals_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'WooCommerce', 'real-estate-deals' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	real_estate_deals_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'real_estate_deals_register_recommended_plugins' );