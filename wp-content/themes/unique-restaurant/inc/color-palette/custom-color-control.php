<?php

  $unique_restaurant_color_palette_css = '';

  /*-------------- Copyright Text Align-------------------*/

	$unique_restaurant_copyright_text_align = unique_restaurant_get_option('unique_restaurant_copyright_text_align');
	$unique_restaurant_color_palette_css .='.site-footer{';
	$unique_restaurant_color_palette_css .='text-align: '.esc_attr($unique_restaurant_copyright_text_align).' !important;';
	$unique_restaurant_color_palette_css .='}';
	$unique_restaurant_color_palette_css .='
	@media screen and (max-width:575px) {
	.site-footer{';
	$unique_restaurant_color_palette_css .='text-align: center !important;';
	$unique_restaurant_color_palette_css .='} }';

  // copyright font size
	$unique_restaurant_copyright_text_font_size = unique_restaurant_get_option('unique_restaurant_copyright_text_font_size');
	$unique_restaurant_color_palette_css .='#colophon p, #colophon a , #colophon{';
	$unique_restaurant_color_palette_css .='font-size: '.esc_attr($unique_restaurant_copyright_text_font_size).'px;';
	$unique_restaurant_color_palette_css .='}';