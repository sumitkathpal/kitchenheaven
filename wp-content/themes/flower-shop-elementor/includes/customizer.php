<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));


	Kirki::add_field( 'theme_config_id', [
		'label'       => esc_html__( 'Logo Size','flower-shop-elementor' ),
		'section'     => 'title_tagline',
		'priority'    => 9,
		'type'        => 'range',
		'settings'    => 'logo_size',
		'choices' => [
			'step'             => 5,
			'min'              => 0,
			'max'              => 100,
			'aria-valuemin'    => 0,
			'aria-valuemax'    => 100,
			'aria-valuenow'    => 50,
			'aria-orientation' => 'horizontal',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_enable_logo_text',
		'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'flower-shop-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'flower_shop_elementor_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'flower-shop-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'flower-shop-elementor' ),
			'off' => esc_html__( 'Disable', 'flower-shop-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'flower_shop_elementor_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'flower-shop-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'flower-shop-elementor' ),
			'off' => esc_html__( 'Disable', 'flower-shop-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'flower-shop-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'flower_shop_elementor_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'flower-shop-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'flower_shop_elementor_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );


	// Theme Options Panel
	Kirki::add_panel( 'flower_shop_elementor_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'flower-shop-elementor' ),
	) );

	// HEADER SECTION

	Kirki::add_section( 'flower_shop_elementor_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'flower-shop-elementor' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'flower-shop-elementor' ),
	    'panel'    => 'flower_shop_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'flower_shop_elementor_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_section_header',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'flower-shop-elementor' ),
			'off' => esc_html__( 'Disable', 'flower-shop-elementor' ),
		],
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'flower_shop_elementor_cart_button',
		'label'       => esc_html__( 'Enable/Disable Cart Button', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'flower-shop-elementor' ),
			'off' => esc_html__( 'Disable', 'flower-shop-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'flower_shop_elementor_account_button',
		'label'       => esc_html__( 'Enable/Disable My Account', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_section_header',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'flower-shop-elementor' ),
			'off' => esc_html__( 'Disable', 'flower-shop-elementor' ),
		],
	] );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'flower_shop_elementor_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'flower-shop-elementor' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'flower-shop-elementor' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'flower_shop_elementor_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_woocommerce_settings',
		'default'     => 'false',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'flower-shop-elementor' ),
		'settings'    => 'flower_shop_elementor_shop_page_layout',
		'section'     => 'flower_shop_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'flower-shop-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'flower-shop-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'flower_shop_elementor_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'flower-shop-elementor' ),
		'settings'    => 'flower_shop_elementor_products_per_row',
		'section'     => 'flower_shop_elementor_woocommerce_settings',
		'default'     => '4',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'flower-shop-elementor' ),
		'settings'    => 'flower_shop_elementor_products_per_page',
		'section'     => 'flower_shop_elementor_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'flower_shop_elementor_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'flower-shop-elementor' ),
		'settings'    => 'flower_shop_elementor_single_product_sidebar_layout',
		'section'     => 'flower_shop_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'flower-shop-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'flower-shop-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'flower_shop_elementor_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_products_button_border_radius_heading',
		'section'     => 'flower_shop_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'flower-shop-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'flower_shop_elementor_products_button_border_radius',
		'section'     => 'flower_shop_elementor_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_sale_badge_position_heading',
		'section'     => 'flower_shop_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'flower-shop-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'flower_shop_elementor_sale_badge_position',
		'section'     => 'flower_shop_elementor_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'flower-shop-elementor' ),
			'left' => esc_html__( 'Left', 'flower-shop-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_products_sale_font_size_heading',
		'section'     => 'flower_shop_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'flower-shop-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'flower_shop_elementor_products_sale_font_size',
		'section'     => 'flower_shop_elementor_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );
	
	//ADDITIONAL SETTINGS

	Kirki::add_section( 'flower_shop_elementor_additional_setting', array(
		'title'          => esc_html__( 'Additional Settings', 'flower-shop-elementor' ),
		'description'    => esc_html__( 'Additional Settings of themes', 'flower-shop-elementor' ),
		'panel'    => 'flower_shop_elementor_theme_options_panel',
		'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'flower_shop_elementor_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );
 
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'flower_shop_elementor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_single_page_layout_heading',
		'section'     => 'flower_shop_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'flower-shop-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'flower_shop_elementor_single_page_layout',
		'section'     => 'flower_shop_elementor_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'flower-shop-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'flower-shop-elementor' ),
			'One Column' => esc_html__( 'One Column', 'flower-shop-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_header_background_attachment_heading',
		'section'     => 'flower_shop_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'flower-shop-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'flower_shop_elementor_header_background_attachment',
		'section'     => 'flower_shop_elementor_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'flower-shop-elementor' ),
			'fixed' => esc_html__( 'Fixed', 'flower-shop-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_header_overlay_heading',
		'section'     => 'flower_shop_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'flower-shop-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'flower_shop_elementor_header_overlay_setting',
		'label'       => __( 'Overlay Color', 'flower-shop-elementor' ),
		'type'        => 'color',
		'section'     => 'flower_shop_elementor_additional_setting',
		'transport' => 'auto',
		'default'     => '#00000061',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'flower_shop_elementor_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'flower_shop_elementor_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'flower_shop_elementor_blog_post', array(
		'title'          => esc_html__( 'Post Settings', 'flower-shop-elementor' ),
		'description'    => esc_html__( 'Here you can add post information.', 'flower-shop-elementor' ),
		'panel'    => 'flower_shop_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_post_layout_heading',
		'section'     => 'flower_shop_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'flower-shop-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'flower_shop_elementor_post_layout',
		'section'     => 'flower_shop_elementor_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'flower-shop-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'flower-shop-elementor' ),
			'One Column' => esc_html__( 'One Column', 'flower-shop-elementor' ),
			'Three Columns' => esc_html__( 'Three Columns', 'flower-shop-elementor' ),
			'Four Columns' => esc_html__( 'Four Columns', 'flower-shop-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'flower_shop_elementor_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'flower_shop_elementor_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'flower_shop_elementor_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'flower_shop_elementor_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_length_setting_heading',
		'section'     => 'flower_shop_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'flower-shop-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'flower_shop_elementor_length_setting',
		'section'     => 'flower_shop_elementor_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'flower-shop-elementor' ),
		'settings'    => 'flower_shop_elementor_single_post_tag',
		'section'     => 'flower_shop_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'flower-shop-elementor' ),
		'settings'    => 'flower_shop_elementor_single_post_category',
		'section'     => 'flower_shop_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'flower_shop_elementor_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_single_post_radius',
		'section'     => 'flower_shop_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'flower-shop-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'flower_shop_elementor_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'flower-shop-elementor' ),
		'type'        => 'text',
		'section'     => 'flower_shop_elementor_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	// No Results Page Settings

	Kirki::add_section( 'flower_shop_elementor_no_result_section', array(
		'title'          => esc_html__( '404 & No Results Page Settings', 'flower-shop-elementor' ),
		'panel'    => 'flower_shop_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_page_not_found_title_heading',
		'section'     => 'flower_shop_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Title', 'flower-shop-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'flower_shop_elementor_page_not_found_title',
		'section'  => 'flower_shop_elementor_no_result_section',
		'default'  => esc_html__('404 Error!', 'flower-shop-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_page_not_found_text_heading',
		'section'     => 'flower_shop_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Text', 'flower-shop-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'flower_shop_elementor_page_not_found_text',
		'section'  => 'flower_shop_elementor_no_result_section',
		'default'  => esc_html__('The page you are looking for may have been moved, deleted, or possibly never existed.', 'flower-shop-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'     => 'custom',
		'settings' => 'flower_shop_elementor_page_not_found_line_break',
		'section'  => 'flower_shop_elementor_no_result_section',
		'default'  => '<hr>',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_no_results_title_heading',
		'section'     => 'flower_shop_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Title', 'flower-shop-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'flower_shop_elementor_no_results_title',
		'section'  => 'flower_shop_elementor_no_result_section',
		'default'  => esc_html__('Nothing Found', 'flower-shop-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_no_results_content_heading',
		'section'     => 'flower_shop_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Content', 'flower-shop-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'flower_shop_elementor_no_results_content',
		'section'  => 'flower_shop_elementor_no_result_section',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'flower-shop-elementor'),
	] );
	
	// FOOTER SECTION

	Kirki::add_section( 'flower_shop_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'flower-shop-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'flower-shop-elementor' ),
        'panel'    => 'flower_shop_elementor_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_footer_text_heading',
		'section'     => 'flower_shop_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'flower-shop-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'flower_shop_elementor_footer_text',
		'section'  => 'flower_shop_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_footer_enable_heading',
		'section'     => 'flower_shop_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'flower-shop-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'flower_shop_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'flower-shop-elementor' ),
			'off' => esc_html__( 'Disable', 'flower-shop-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_footer_background_widget_heading',
		'section'     => 'flower_shop_elementor_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'flower-shop-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'flower_shop_elementor_footer_background_widget',
		'type'        => 'background',
		'section'     => 'flower_shop_elementor_footer_section',
		'default'     => [
			'background-color'      => 'rgba(18,18,18,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_footer_copright_color_heading',
		'section'     => 'flower_shop_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'flower-shop-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'flower_shop_elementor_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'flower_shop_elementor_footer_copright_text_color_heading',
		'section'     => 'flower_shop_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Text Color', 'flower-shop-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'flower_shop_elementor_footer_copright_text_color',
		'type'        => 'color',
		'label'       => __( 'Text Color', 'flower-shop-elementor' ),
		'section'     => 'flower_shop_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '.footer-copyright a', '.footer-copyright p'),
				'property' => 'color',
			),
		),
	) );

	load_template( trailingslashit( get_template_directory() ) . '/includes/logo/logo-resizer.php' );
}
