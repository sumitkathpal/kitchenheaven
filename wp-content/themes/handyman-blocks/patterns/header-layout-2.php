<?php

/**
 * Title: Header Layout 2
 * Slug: handyman-blocks/header-layout-2
 * Categories: handyman-blocks
 */
$handyman_blocks_url = trailingslashit(get_template_directory_uri());
$handyman_blocks_images = array(
    $handyman_blocks_url . 'assets/images/icon_location.png',
    $handyman_blocks_url . 'assets/images/icon_envelop.png',
    $handyman_blocks_url . 'assets/images/icon_phone.png',
);
?>
<!-- wp:group {"metadata":{"name":"Header Layout 2"},"style":{"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"backgroundColor":"light-color","className":"handyman-blocks-header","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group handyman-blocks-header has-light-color-background-color has-background" style="border-bottom-style:none;border-bottom-width:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"10px","bottom":"10px"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-background-alt-background-color has-background" style="padding-top:10px;padding-right:var(--wp--preset--spacing--40);padding-bottom:10px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":30,"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($handyman_blocks_images[0]) ?>" alt="" class="wp-image-30" style="object-fit:cover;width:20px;height:20px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('178 West 27th Street, Suite 527, NY 10012', 'handyman-blocks') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":34,"width":"16px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"envelope-icon"} -->
                    <figure class="wp-block-image size-full is-resized envelope-icon"><img src="<?php echo esc_url($handyman_blocks_images[1]) ?>" alt="" class="wp-image-34" style="object-fit:contain;width:16px;height:16px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('email@example.com', 'handyman-blocks') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":38,"width":"16px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"phone-icon"} -->
                    <figure class="wp-block-image size-full is-resized phone-icon"><img src="<?php echo esc_url($handyman_blocks_images[2]) ?>" alt="" class="wp-image-38" style="object-fit:contain;width:16px;height:16px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"small"} -->
                    <p class="has-light-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('(888) 012 - 3456', 'handyman-blocks') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#062a60","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFF","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"className":"handyman-blocks-social-profile"} -->
            <ul class="wp-block-social-links has-icon-color has-icon-background-color handyman-blocks-social-profile"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"x"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                <!-- wp:social-link {"url":"#","service":"tiktok"} /-->

                <!-- wp:social-link {"url":"#","service":"yelp"} /-->

                <!-- wp:social-link {"url":"#","service":"reddit"} /-->

                <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->

                <!-- wp:social-link {"url":"#","service":"telegram"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"28px","bottom":"28px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:28px;padding-right:var(--wp--preset--spacing--40);padding-bottom:28px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group"><!-- wp:site-logo {"width":74,"shouldSyncIcon":false} /-->

                <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"800","textTransform":"none","letterSpacing":"0px","fontSize":"32px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"5px"}}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"heading-color","style":{"border":{"radius":"7px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"20px","bottom":"20px"}},"typography":{"fontSize":"18px"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                    <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:18px"><a class="wp-block-button__link has-heading-color-background-color has-background wp-element-button" style="border-radius:7px;padding-top:20px;padding-right:28px;padding-bottom:20px;padding-left:28px"><?php esc_html_e('Schedule Quick Call', 'handyman-blocks') ?></a></div>
                    <!-- /wp:button -->

                    <!-- wp:button {"style":{"border":{"radius":"7px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"20px","bottom":"20px"}},"typography":{"fontSize":"18px"}}} -->
                    <div class="wp-block-button has-custom-font-size" style="font-size:18px"><a class="wp-block-button__link wp-element-button" style="border-radius:7px;padding-top:20px;padding-right:28px;padding-bottom:20px;padding-left:28px"><?php esc_html_e('Request an Estimate', 'handyman-blocks') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"},"right":[],"bottom":{"width":"0px","style":"none"},"left":[]}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group has-light-color-background-color has-background" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;border-bottom-style:none;border-bottom-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group"><!-- wp:navigation {"textColor":"dark-color","overlayBackgroundColor":"light-color","overlayTextColor":"heading-color","className":"mighty-plumbers-navigation","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"32px"}},"fontSize":"normal"} -->
            <!-- wp:page-list /-->
            <!-- /wp:navigation -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"query":{"post_type":"product"},"isSearchFieldHidden":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"transparent","textColor":"heading-color","className":"mighty-plumbers-nav-search","fontSize":"normal"} /--></div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->