<?php

/**
 * Title: Header Default
 * Slug: handyman-blocks/header-default
 * Categories: handyman-blocks, header
 */
$handyman_blocks_url = trailingslashit(get_template_directory_uri());
$handyman_blocks_images = array(
    $handyman_blocks_url . 'assets/images/icon_location.png',
    $handyman_blocks_url . 'assets/images/icon_envelop.png',
    $handyman_blocks_url . 'assets/images/icon_phone.png',
);
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":""}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0","bottom":"0px","left":"0"}},"border":{"bottom":{"width":"0px","style":"none"}}},"className":"handyman-blocks-header","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group handyman-blocks-header" style="border-bottom-style:none;border-bottom-width:0px;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"10px","bottom":"10px"}},"border":{"bottom":{"color":"var:preset|color|border-light-color","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-light-color);border-bottom-width:1px;padding-top:10px;padding-right:var(--wp--preset--spacing--40);padding-bottom:10px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":30,"width":"20px","height":"20px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#2A2722"]}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($handyman_blocks_images[0]) ?>" alt="" class="wp-image-30" style="object-fit:cover;width:20px;height:20px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"small"} -->
                        <p class="has-heading-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('178 West 27th Street, Suite 527, NY 10012', 'handyman-blocks') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":34,"width":"16px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#2A2722"]}},"className":"envelope-icon"} -->
                        <figure class="wp-block-image size-full is-resized envelope-icon"><img src="<?php echo esc_url($handyman_blocks_images[1]) ?>" alt="" class="wp-image-34" style="object-fit:contain;width:16px;height:16px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"small"} -->
                        <p class="has-heading-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('email@example.com', 'handyman-blocks') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":38,"width":"16px","height":"16px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#2A2722"]}},"className":"phone-icon"} -->
                        <figure class="wp-block-image size-full is-resized phone-icon"><img src="<?php echo esc_url($handyman_blocks_images[2]) ?>" alt="" class="wp-image-38" style="object-fit:contain;width:16px;height:16px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"small"} -->
                        <p class="has-heading-color-color has-text-color has-link-color has-small-font-size"><?php esc_html_e('(888) 012 - 3456', 'handyman-blocks') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:social-links {"iconColor":"heading-color","iconColorValue":"#2A2722","iconBackgroundColor":"transparent","iconBackgroundColorValue":"#ffffff00","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"className":"handyman-blocks-social-profile"} -->
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

        <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"24px","bottom":"24px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:var(--wp--preset--spacing--40);padding-bottom:24px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:site-logo {"width":44,"shouldSyncIcon":false,"style":{"color":{"duotone":["#F4F7FF","#FFB84F"]}}} /-->

                    <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none","letterSpacing":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"5px"}}},"fontSize":"large"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","layout":{"type":"flex","flexWrap":"wrap"}} -->
                <div class="wp-block-group has-light-color-color has-text-color has-link-color"><!-- wp:navigation {"ref":2325,"textColor":"heading-color","overlayBackgroundColor":"light-color","overlayTextColor":"heading-color","className":"handyman-blocks-navigation","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"2"},"spacing":{"blockGap":"32px"}},"fontSize":"normal"} /-->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"heading-color","style":{"border":{"radius":"6px","width":"1px"},"spacing":{"padding":{"left":"24px","right":"24px","top":"16px","bottom":"16px"}},"typography":{"fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"borderColor":"light-color","className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor" style="font-size:16px"><a class="wp-block-button__link has-heading-color-color has-primary-background-color has-text-color has-background has-link-color has-border-color has-light-color-border-color wp-element-button" style="border-width:1px;border-radius:6px;padding-top:16px;padding-right:24px;padding-bottom:16px;padding-left:24px"><?php esc_html_e('Request an Estimate', 'handyman-blocks') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->