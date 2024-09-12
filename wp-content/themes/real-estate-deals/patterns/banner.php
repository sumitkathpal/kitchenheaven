<?php
/**
 * Title: Banner
 * Slug: real-estate-deals/banner
 * Categories: real-estate-deals, banner
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.jpg'); ?>","id":263,"dimRatio":0,"customOverlayColor":"#3f3436","isUserOverlayColor":true,"minHeight":600,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"className":"banner-image","layout":{"type":"default"}} -->
<div class="wp-block-cover banner-image" style="padding-top:0;padding-right:var(--wp--preset--spacing--80);padding-bottom:0;padding-left:var(--wp--preset--spacing--80);min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#3f3436"></span><img class="wp-block-cover__image-background wp-image-263" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.jpg'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"},"color":{"background":"#ffffff21"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"15px","right":"15px"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"short-heading"} -->
<h3 class="wp-block-heading short-heading has-background" style="background-color:#ffffff21;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:10px;padding-right:15px;padding-bottom:10px;padding-left:15px;font-size:16px;font-style:normal;font-weight:600"><?php esc_html_e('Welcome To ', 'real-estate-deals'); ?><span><?php esc_html_e('Real Estate Services', 'real-estate-deals'); ?></span></h3>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"65px","lineHeight":"1","textTransform":"uppercase"},"spacing":{"margin":{"right":"0","left":"0","top":"var:preset|spacing|30","bottom":"0"}}}} -->
<h2 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--30);margin-right:0;margin-bottom:0;margin-left:0;font-size:65px;font-style:normal;font-weight:700;line-height:1;text-transform:uppercase"><?php esc_html_e('Find Your Dream Home', 'real-estate-deals'); ?><br><?php esc_html_e('Right Away', 'real-estate-deals'); ?><span><?php esc_html_e('.', 'real-estate-deals'); ?></span></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"10px"}},"className":"banner-btn","fontFamily":"barlow-condensed"} -->
<div class="wp-block-button has-custom-font-size banner-btn has-barlow-condensed-font-family" style="font-size:17px;font-style:normal;font-weight:600;text-transform:uppercase"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:10px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Find Property', 'real-estate-deals'); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"white","style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"border":{"radius":"10px"}},"className":"banner-btn-2"} -->
<div class="wp-block-button has-custom-font-size banner-btn-2" style="font-size:17px;font-style:normal;font-weight:600;text-transform:uppercase"><a class="wp-block-button__link has-white-background-color has-background wp-element-button" style="border-radius:10px"><i class="fas fa-arrow-right"></i></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->