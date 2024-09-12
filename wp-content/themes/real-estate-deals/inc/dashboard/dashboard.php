<?php

add_action( 'admin_menu', 'real_estate_deals_gettingstarted' );
function real_estate_deals_gettingstarted() {
	add_theme_page( esc_html__('Theme Documentation', 'real-estate-deals'), esc_html__('Theme Documentation', 'real-estate-deals'), 'edit_theme_options', 'real-estate-deals-guide-page', 'real_estate_deals_guide');
}

function real_estate_deals_admin_theme_style() {
   wp_enqueue_style('real-estate-deals-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'real_estate_deals_admin_theme_style');

if ( ! defined( 'REAL_ESTATE_DEALS_SUPPORT' ) ) {
define('REAL_ESTATE_DEALS_SUPPORT',__('https://wordpress.org/support/theme/real-estate-deals/','real-estate-deals'));
}
if ( ! defined( 'REAL_ESTATE_DEALS_REVIEW' ) ) {
define('REAL_ESTATE_DEALS_REVIEW',__('https://wordpress.org/support/theme/real-estate-deals/reviews/','real-estate-deals'));
}
if ( ! defined( 'REAL_ESTATE_DEALS_LIVE_DEMO' ) ) {
define('REAL_ESTATE_DEALS_LIVE_DEMO',__('https://trial.ovationthemes.com/real-estate-deals-pro/','real-estate-deals'));
}
if ( ! defined( 'REAL_ESTATE_DEALS_BUY_PRO' ) ) {
define('REAL_ESTATE_DEALS_BUY_PRO',__('https://www.ovationthemes.com/products/rental-property-wordpress-theme','real-estate-deals'));
}
if ( ! defined( 'REAL_ESTATE_DEALS_PRO_DOC' ) ) {
define('REAL_ESTATE_DEALS_PRO_DOC',__('https://trial.ovationthemes.com/docs/ot-real-estate-deals-pro-doc/','real-estate-deals'));
}
if ( ! defined( 'REAL_ESTATE_DEALS_FREE_DOC' ) ) {
define('REAL_ESTATE_DEALS_FREE_DOC',__('https://trial.ovationthemes.com/docs/ot-real-estate-deals-free-doc/','real-estate-deals'));
}
if ( ! defined( 'REAL_ESTATE_DEALS_THEME_NAME' ) ) {
define('REAL_ESTATE_DEALS_THEME_NAME',__('Premium Real Estate Deals Theme','real-estate-deals'));
}

/**
 * Theme Info Page
 */
function real_estate_deals_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'real-estate-deals'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( REAL_ESTATE_DEALS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'real-estate-deals'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( REAL_ESTATE_DEALS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'real-estate-deals'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','real-estate-deals'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','real-estate-deals'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','real-estate-deals'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','real-estate-deals'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','real-estate-deals'); ?></h4>
					<p><?php esc_html_e('To check your website click here','real-estate-deals'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','real-estate-deals'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','real-estate-deals'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','real-estate-deals'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( REAL_ESTATE_DEALS_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','real-estate-deals'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(REAL_ESTATE_DEALS_THEME_NAME); ?></h3>
				<img class="real_estate_deals_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( REAL_ESTATE_DEALS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'real-estate-deals'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( REAL_ESTATE_DEALS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'real-estate-deals'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( REAL_ESTATE_DEALS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'real-estate-deals'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
                 <li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'real-estate-deals');?> </li>                 
                 <li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'real-estate-deals');?> </li>
                 <li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'real-estate-deals');?> </li>
                 <li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'real-estate-deals');?> </li>
                 <li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'real-estate-deals');?> </li>
                 <li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'real-estate-deals');?> </li>
                 <li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'real-estate-deals');?> </li>
                 <li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'real-estate-deals');?> </li>
                 <li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'real-estate-deals');?> </li>
                 <li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'real-estate-deals');?> </li>
                 <li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'real-estate-deals');?> </li>
                 <li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'real-estate-deals');?> </li>
                	<li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'real-estate-deals');?> </li>
                	<li class="upsell-real_estate_deals"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'real-estate-deals');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>
