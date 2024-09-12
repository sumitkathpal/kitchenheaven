(function( $ ) {
	wp.customize.bind( 'ready', function() {

	var optPrefix = '#customize-control-restaurant_zone_options-';
		
		// Label
		function restaurant_zone_customizer_label( id, title ) {

			// Colors

			if ( id === 'restaurant_zone_theme_color' || id === 'background_color' || id === 'background_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Site Identity

			if ( id === 'custom_logo' || id === 'site_icon' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Top Header

			if ( id === 'restaurant_zone_phone_number_icon' || id === 'restaurant_zone_emails_icon' || id === 'restaurant_zone_reservation_button' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// General Setting

			if ( id === 'restaurant_zone_preloader_hide' || id === 'restaurant_zone_sticky_header' || id === 'restaurant_zone_scroll_hide' || id === 'restaurant_zone_products_per_row') {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Woocommerce product sale Setting

			if ( id === 'restaurant_zone_woocommerce_product_sale' || id === 'restaurant_zone_woocommerce_related_product_show_hide') {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Social Icon

			if ( id === 'restaurant_zone_facebook_icon' || id === 'restaurant_zone_twitter_icon' || id === 'restaurant_zone_intagram_icon'|| id === 'restaurant_zone_linkedin_icon'|| id === 'restaurant_zone_pintrest_icon' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Slider

			if ( id === 'restaurant_zone_slider_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Header Image

			if ( id === 'header_image' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}
			
			// Popular item 

			if ( id === 'restaurant_zone_popular_setting' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Footer

			if ( id === 'restaurant_zone_show_hide_footer' || id === 'restaurant_zone_show_hide_copyright') {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Single Post Setting

			if ( id === 'restaurant_zone_single_post_thumb' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Single Post Comment Setting

			if ( id === 'restaurant_zone_single_post_comment_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Post Setting

			if ( id === 'restaurant_zone_post_page_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}

			// Page Setting

			if ( id === 'restaurant_zone_single_page_title' ) {
				$( '#customize-control-'+ id ).before('<li class="tab-title customize-control">'+ title  +'</li>');
			} else {
				$( '#customize-control-restaurant_zone_options-'+ id ).before('<li class="tab-title customize-control">'+ title +'</li>');
			}
			
		}

		// Colors
		restaurant_zone_customizer_label( 'restaurant_zone_theme_color', 'Theme Color' );
		restaurant_zone_customizer_label( 'background_color', 'Colors' );
		restaurant_zone_customizer_label( 'background_image', 'Image' );

		// Site Identity
		restaurant_zone_customizer_label( 'custom_logo', 'Logo Setup' );
		restaurant_zone_customizer_label( 'site_icon', 'Favicon' );

		// Top Header
		restaurant_zone_customizer_label( 'restaurant_zone_phone_number_icon', 'Phone' );
		restaurant_zone_customizer_label( 'restaurant_zone_emails_icon', 'Email' );
		restaurant_zone_customizer_label( 'restaurant_zone_reservation_button', 'Reservation Link' );

		// General Setting
		restaurant_zone_customizer_label( 'restaurant_zone_preloader_hide', 'Preloader' );
		restaurant_zone_customizer_label( 'restaurant_zone_sticky_header', 'Sticky Header' );
		restaurant_zone_customizer_label( 'restaurant_zone_scroll_hide', 'Scroll To Top' );
		restaurant_zone_customizer_label( 'restaurant_zone_products_per_row', ' Woocommerce Setting' );
		restaurant_zone_customizer_label( 'restaurant_zone_woocommerce_product_sale', 'Woocommerce Product Sale' );
		restaurant_zone_customizer_label( 'restaurant_zone_woocommerce_related_product_show_hide', 'Woocommerce Related Products' );

		// Social Icon
		restaurant_zone_customizer_label( 'restaurant_zone_facebook_icon', 'Facebook' );
		restaurant_zone_customizer_label( 'restaurant_zone_twitter_icon', 'Twitter' );
		restaurant_zone_customizer_label( 'restaurant_zone_intagram_icon', 'Intagram' );
		restaurant_zone_customizer_label( 'restaurant_zone_linkedin_icon', 'Linkedin' );
		restaurant_zone_customizer_label( 'restaurant_zone_pintrest_icon', 'Pintrest' );

		//Slider
		restaurant_zone_customizer_label( 'restaurant_zone_slider_setting', 'Slider' );

		//Header Image
		restaurant_zone_customizer_label( 'header_image', 'Header Image' );

		//Popular item 
		restaurant_zone_customizer_label( 'restaurant_zone_popular_setting', 'Popular item ' );

		//Footer
		restaurant_zone_customizer_label( 'restaurant_zone_show_hide_footer', 'Footer' );
		restaurant_zone_customizer_label( 'restaurant_zone_show_hide_copyright', 'Copyright' );

		//Single Post Setting
		restaurant_zone_customizer_label( 'restaurant_zone_single_post_thumb', 'Single Post Setting' );
		restaurant_zone_customizer_label( 'restaurant_zone_single_post_comment_title', 'Single Post Comment' );

		// Post Setting
		restaurant_zone_customizer_label( 'restaurant_zone_post_page_title', 'Post Setting' );

		// Page Setting
		restaurant_zone_customizer_label( 'restaurant_zone_single_page_title', 'Page Setting' );

	}); 

})( jQuery );
