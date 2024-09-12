<?php
/**
 * Default theme options.
 *
 * @package unique_restaurant
 */

if ( ! function_exists( 'unique_restaurant_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function unique_restaurant_get_default_theme_options() {

		$defaults = array();
        
        //General Option
        $defaults['show_scroll_to_top']          = true;
        $defaults['show_preloader_setting']      = false;
        $defaults['show_data_sticky_setting']    = false;

        //Post Option
        $defaults['show_post_date_setting']         	 = true;
        $defaults['show_post_heading_setting']      	 = true;
        $defaults['show_post_content_setting']       	 = true;
        $defaults['show_post_admin_setting']         	 = true;
        $defaults['show_post_categories_setting']    	 = true;
        $defaults['show_post_comments_setting']    	 	 = true;
        $defaults['show_post_featured_image_setting']    = true;
        $defaults['show_post_tags_setting']    			 = true;
		
		// Header.
		$defaults['show_title']            = true;
		$defaults['show_tagline']          = false;
		$defaults['show_header_top']       = true;
		$defaults['show_social_in_header'] = false;
		$defaults['search_in_header']      = true;

		// Layout.
		$defaults['global_layout']           = 'right-sidebar';
		$defaults['archive_layout']          = 'excerpt';
		$defaults['archive_image']           = 'large';
		$defaults['archive_image_alignment'] = 'center';
		$defaults['single_image']            = 'large';

		// Home Page.
		$defaults['home_content_status'] = true;
		
		// Footer.
		$defaults['copyright_text']        = esc_html__( 'Copyright &copy; All rights reserved.', 'unique-restaurant' );
		$defaults['unique_restaurant_copyright_text_font_size'] = '18';
		$defaults['unique_restaurant_copyright_text_align'] = 'center';

		// Pass through filter.
		$defaults = apply_filters( 'unique_restaurant_filter_default_theme_options', $defaults );
		return $defaults;
	}

endif;
