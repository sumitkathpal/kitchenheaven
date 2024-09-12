<?php

    $restaurant_zone_theme_css= "";

    /*--------------------------- Scroll To Top Positions -------------------*/

    $restaurant_zone_scroll_position = get_theme_mod( 'restaurant_zone_scroll_top_position','Right');
    if($restaurant_zone_scroll_position == 'Right'){
        $restaurant_zone_theme_css .='#button{';
            $restaurant_zone_theme_css .='right: 20px;';
        $restaurant_zone_theme_css .='}';
    }else if($restaurant_zone_scroll_position == 'Left'){
        $restaurant_zone_theme_css .='#button{';
            $restaurant_zone_theme_css .='left: 20px;';
        $restaurant_zone_theme_css .='}';
    }else if($restaurant_zone_scroll_position == 'Center'){
        $restaurant_zone_theme_css .='#button{';
            $restaurant_zone_theme_css .='right: 50%;left: 50%;';
        $restaurant_zone_theme_css .='}';
    }

    /*--------------------------- Scroll To Top Border Radius -------------------*/

    $restaurant_zone_scroll_to_top_border_radius = get_theme_mod('restaurant_zone_scroll_to_top_border_radius');
    if($restaurant_zone_scroll_to_top_border_radius != false){
        $restaurant_zone_theme_css .='#colophon a#button{';
            $restaurant_zone_theme_css .='border-radius: '.esc_attr($restaurant_zone_scroll_to_top_border_radius).'px;';
        $restaurant_zone_theme_css .='}';
    }

    /*--------------------------- Slider Image Opacity -------------------*/

    $restaurant_zone_slider_img_opacity = get_theme_mod( 'restaurant_zone_slider_opacity_color','0.4');
    if($restaurant_zone_slider_img_opacity == '0'){
        $restaurant_zone_theme_css .='#top-slider .slider-box img{';
            $restaurant_zone_theme_css .='opacity:0';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.1'){
        $restaurant_zone_theme_css .='#top-slider .slider-box img{';
            $restaurant_zone_theme_css .='opacity:0.1';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.2'){
        $restaurant_zone_theme_css .='#top-slider .slider-box img{';
            $restaurant_zone_theme_css .='opacity:0.2';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.3'){
        $restaurant_zone_theme_css .='#top-slider .slider-box img{';
            $restaurant_zone_theme_css .='opacity:0.3';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.4'){
        $restaurant_zone_theme_css .='#top-slider .slider-box img{';
            $restaurant_zone_theme_css .='opacity:0.4';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.5'){
        $restaurant_zone_theme_css .='#top-slider .slider-box img{';
            $restaurant_zone_theme_css .='opacity:0.5';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.6'){
        $restaurant_zone_theme_css .='#top-slider .slider-box img{';
            $restaurant_zone_theme_css .='opacity:0.6';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.7'){
        $restaurant_zone_theme_css .='#top-slider .slider-box img{';
            $restaurant_zone_theme_css .='opacity:0.7';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.8'){
        $restaurant_zone_theme_css .='#top-slider .slider-box img{';
            $restaurant_zone_theme_css .='opacity:0.8';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.9'){
        $restaurant_zone_theme_css .='#top-slider .slider-box img{';
            $restaurant_zone_theme_css .='opacity:0.9';
        $restaurant_zone_theme_css .='}';
        }

    /*---------------------------Slider Height ------------*/

    $restaurant_zone_slider_img_height = get_theme_mod('restaurant_zone_slider_img_height');
    if($restaurant_zone_slider_img_height != false){
        $restaurant_zone_theme_css .='#top-slider .slider-box img{';
            $restaurant_zone_theme_css .='height: '.esc_attr($restaurant_zone_slider_img_height).';';
        $restaurant_zone_theme_css .='}';
    }

    /*---------------- Single post Settings ------------------*/

    $restaurant_zone_single_post_navigation_show_hide = get_theme_mod('restaurant_zone_single_post_navigation_show_hide',true);
    if($restaurant_zone_single_post_navigation_show_hide != true){
        $restaurant_zone_theme_css .='.nav-links{';
            $restaurant_zone_theme_css .='display: none;';
        $restaurant_zone_theme_css .='}';
    }

    /*--------------------------- Product Image Box Shadow -------------------*/

    $restaurant_zone_woo_product_image_box_shadow = get_theme_mod('restaurant_zone_woo_product_image_box_shadow',0);
    if($restaurant_zone_woo_product_image_box_shadow != false){
        $restaurant_zone_theme_css .='.woocommerce ul.products li.product a img{';
            $restaurant_zone_theme_css .='box-shadow: '.esc_attr($restaurant_zone_woo_product_image_box_shadow).'px '.esc_attr($restaurant_zone_woo_product_image_box_shadow).'px '.esc_attr($restaurant_zone_woo_product_image_box_shadow).'px #cccccc;';
        $restaurant_zone_theme_css .='}';
    }

    /*--------------------------- Woocommerce Product Sale Positions -------------------*/

    $restaurant_zone_product_sale = get_theme_mod( 'restaurant_zone_woocommerce_product_sale','Right');
    if($restaurant_zone_product_sale == 'Right'){
        $restaurant_zone_theme_css .='.woocommerce ul.products li.product .onsale{';
            $restaurant_zone_theme_css .='left: auto; right: 15px;';
        $restaurant_zone_theme_css .='}';
    }else if($restaurant_zone_product_sale == 'Left'){
        $restaurant_zone_theme_css .='.woocommerce ul.products li.product .onsale{';
            $restaurant_zone_theme_css .='left: 15px; right: auto;';
        $restaurant_zone_theme_css .='}';
    }else if($restaurant_zone_product_sale == 'Center'){
        $restaurant_zone_theme_css .='.woocommerce ul.products li.product .onsale{';
            $restaurant_zone_theme_css .='right: 50%;left: 50%;';
        $restaurant_zone_theme_css .='}';
    }

    /*--------------------------- Woocommerce Product Sale Border Radius -------------------*/

    $restaurant_zone_woo_product_sale_border_radius = get_theme_mod('restaurant_zone_woo_product_sale_border_radius');
    if($restaurant_zone_woo_product_sale_border_radius != false){
        $restaurant_zone_theme_css .='.woocommerce ul.products li.product .onsale{';
            $restaurant_zone_theme_css .='border-radius: '.esc_attr($restaurant_zone_woo_product_sale_border_radius).'px;';
        $restaurant_zone_theme_css .='}';
    }

    /*--------------------------- Woocommerce Related Products -------------------*/

    $restaurant_zone_woocommerce_related_product_show_hide = get_theme_mod('restaurant_zone_woocommerce_related_product_show_hide',true);
    if($restaurant_zone_woocommerce_related_product_show_hide != true){
        $restaurant_zone_theme_css .='.related.products{';
            $restaurant_zone_theme_css .='display: none;';
        $restaurant_zone_theme_css .='}';
    }

    /*--------------------------- Footer Background Color -------------------*/

    $restaurant_zone_footer_background_color = get_theme_mod('restaurant_zone_footer_background_color');
    if($restaurant_zone_footer_background_color != false){
        $restaurant_zone_theme_css .='.footer-widgets{';
            $restaurant_zone_theme_css .='background-color: '.esc_attr($restaurant_zone_footer_background_color).' !important;';
        $restaurant_zone_theme_css .='}';
    }

    /*--------------------------- Footer background image -------------------*/

    $restaurant_zone_footer_bg_image = get_theme_mod('restaurant_zone_footer_bg_image');
    if($restaurant_zone_footer_bg_image != false){
        $restaurant_zone_theme_css .='#colophon{';
            $restaurant_zone_theme_css .='background: url('.esc_attr($restaurant_zone_footer_bg_image).')!important;';
        $restaurant_zone_theme_css .='}';
    }

    /*--------------------------- Copyright Background Color -------------------*/

    $restaurant_zone_copyright_background_color = get_theme_mod('restaurant_zone_copyright_background_color');
    if($restaurant_zone_copyright_background_color != false){
        $restaurant_zone_theme_css .='.footer_info{';
            $restaurant_zone_theme_css .='background-color: '.esc_attr($restaurant_zone_copyright_background_color).' !important;';
        $restaurant_zone_theme_css .='}';
    }

    /*--------------------------- Post Page Image Box Shadow -------------------*/

    $restaurant_zone_post_page_image_box_shadow = get_theme_mod('restaurant_zone_post_page_image_box_shadow',0);
    if($restaurant_zone_post_page_image_box_shadow != false){
        $restaurant_zone_theme_css .='.article-box img{';
            $restaurant_zone_theme_css .='box-shadow: '.esc_attr($restaurant_zone_post_page_image_box_shadow).'px '.esc_attr($restaurant_zone_post_page_image_box_shadow).'px '.esc_attr($restaurant_zone_post_page_image_box_shadow).'px #cccccc;';
        $restaurant_zone_theme_css .='}';
    }

    /*--------------------------- Post Page Border Radius -------------------*/

    $restaurant_zone_post_page_image_border_radius = get_theme_mod('restaurant_zone_post_page_image_border_radius', 0);
    if($restaurant_zone_post_page_image_border_radius != false){
        $restaurant_zone_theme_css .='.article-box img{';
            $restaurant_zone_theme_css .='border-radius: '.esc_attr($restaurant_zone_post_page_image_border_radius).'px;';
        $restaurant_zone_theme_css .='}';
    }

    /*--------------------------- Site Title And Tagline Color -------------------*/

    $restaurant_zone_logo_title_color = get_theme_mod('restaurant_zone_logo_title_color');
    if($restaurant_zone_logo_title_color != false){
        $restaurant_zone_theme_css .='p.site-title a, .navbar-brand a{';
            $restaurant_zone_theme_css .='color: '.esc_attr($restaurant_zone_logo_title_color).' !important;';
        $restaurant_zone_theme_css .='}';
    }

    $restaurant_zone_logo_tagline_color = get_theme_mod('restaurant_zone_logo_tagline_color');
    if($restaurant_zone_logo_tagline_color != false){
        $restaurant_zone_theme_css .='.logo p.site-description, .navbar-brand p{';
            $restaurant_zone_theme_css .='color: '.esc_attr($restaurant_zone_logo_tagline_color).'  !important;';
        $restaurant_zone_theme_css .='}';
    }