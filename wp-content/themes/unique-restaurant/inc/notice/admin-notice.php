<?php
$theme = wp_get_theme();

$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_unique-restaurant-getting-started' === $screen->base ) {
	return false;
}

?>
<div class="notice notice-success is-dismissible unique-restaurant-admin-notice">
	<div class="unique-restaurant-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Thank you for selecting ', 'unique-restaurant' ); ?> <?php echo $theme->get( 'Name' ); ?> <?php esc_html_e( 'Theme!', 'unique-restaurant' ); ?></h2>
		<p><?php esc_html_e( 'Explore the benefits of our simple Demo Importer and automatic Plugin Installation. Click the button below to begin.', 'unique-restaurant' ); ?></p>
		<span class="admin-2-btn" >
			<a class="button-secondary" style="margin-bottom: 15px; margin-right: 10px; " href="<?php echo esc_url( admin_url( 'themes.php?page=unique-restaurant-getting-started' ) ); ?>"><?php esc_html_e( 'Import Theme Demo', 'unique-restaurant' ); ?></a>
	        <a class="button-primary" style="margin-bottom: 15px; " href="<?php echo esc_url('https://www.mizanthemes.com/products/restaurant-wordpress-theme/'); ?>" target="_blank"><?php esc_html_e('Get Unique Restaurant Pro', 'unique-restaurant'); ?></a>
        </span>
	</div>
</div>