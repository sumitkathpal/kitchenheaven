<?php

/**
 * Title: Footer Default
 * Slug: handyman-blocks/footer-default
 * Categories: handyman-blocks, footer
 */
$handyman_blocks_url = trailingslashit(get_template_directory_uri());
$handyman_blocks_images = array(
    $handyman_blocks_url . 'assets/images/handyman-logo.png',
);
?>
<!-- wp:group {"metadata":{"name":"Footer"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"0","left":"0","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"heading-color","className":"handyman-blocks-footer","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group handyman-blocks-footer has-heading-color-background-color has-background" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"40px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"64px"},"margin":{"top":"40px"}}}} -->
            <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column {"width":"30%","className":"handyman-blocks-footer-list"} -->
                <div class="wp-block-column handyman-blocks-footer-list" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2217,"width":"44px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($handyman_blocks_images[0]) ?>" alt="" class="wp-image-2217" style="width:44px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"top":"5px"}}},"textColor":"light-color","fontSize":"big"} -->
                        <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="padding-top:5px;font-style:normal;font-weight:600;text-transform:capitalize"><?php esc_html_e('Handyman', 'handyman-blocks') ?></h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'handyman-blocks') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"dark-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFF","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|30"},"margin":{"top":"30px","bottom":"0"}}}} -->
                    <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:30px;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"handyman-blocks-footer-list"} -->
                <div class="wp-block-column handyman-blocks-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Company', 'handyman-blocks') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"normal"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('About Us', 'handyman-blocks') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Policy', 'handyman-blocks') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Terms and Conditions', 'handyman-blocks') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Career', 'handyman-blocks') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Blog', 'handyman-blocks') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Contact Us', 'handyman-blocks') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"handyman-blocks-footer-list"} -->
                <div class="wp-block-column handyman-blocks-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Services', 'handyman-blocks') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"normal"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Plumbing', 'handyman-blocks') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Inspection', 'handyman-blocks') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Installation', 'handyman-blocks') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Repair', 'handyman-blocks') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Rennovation', 'handyman-blocks') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item -->
                        <li><a href="#"><?php esc_html_e('Testing', 'handyman-blocks') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"27%"} -->
                <div class="wp-block-column" style="flex-basis:27%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0px"}},"textColor":"light-color","fontSize":"medium"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500;letter-spacing:0px;text-transform:uppercase"><?php esc_html_e('Contact Us', 'handyman-blocks') ?></h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"0"},"padding":{"left":"4px"}}},"className":"handyman-blocks-footer-list","layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group handyman-blocks-footer-list" style="margin-bottom:0;padding-left:4px"><!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"medium"} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-style:normal;font-weight:500;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-medium-font-size"><!-- wp:list-item -->
                            <li><a href="#"><?php esc_html_e('+1 (012) 345-6780', 'handyman-blocks') ?></a></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->

                        <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item {"fontSize":"normal"} -->
                            <li class="has-normal-font-size"><a href="#"><?php esc_html_e('14th Street, Caltech, New Jersey, Alabama', 'handyman-blocks') ?></a></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->

                        <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item {"fontSize":"normal"} -->
                            <li class="has-normal-font-size"><a href="#"><?php esc_html_e('email@example.com', 'handyman-blocks') ?></a></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"44px","bottom":"0"},"padding":{"left":"5px"}}},"className":"handyman-blocks-footer-list","layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group handyman-blocks-footer-list" style="margin-top:44px;margin-bottom:0;padding-left:5px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0px"}},"textColor":"light-color","fontSize":"medium"} -->
                            <h4 class="wp-block-heading has-light-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500;letter-spacing:0px;text-transform:uppercase"><?php esc_html_e('Office Hour', 'handyman-blocks') ?></h4>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"light-color","className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"normal"} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-light-color-color has-text-color has-link-color has-normal-font-size"><!-- wp:list-item {"fontSize":"small"} -->
                            <li class="has-small-font-size"><?php esc_html_e('Monday - Friday: 8:00 a.m. - 5:00 p.m.', 'handyman-blocks') ?></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"40px"},"padding":{"top":"24px","bottom":"24px"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"color":"#57555142","width":"1px"},"right":{},"bottom":{},"left":{}}},"backgroundColor":"heading-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-group has-heading-color-background-color has-background" style="border-top-color:#57555142;border-top-width:1px;margin-top:40px;padding-top:24px;padding-bottom:24px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.5"}},"textColor":"light-color","fontSize":"normal"} -->
            <p class="has-text-align-center has-light-color-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Proudly powered by WordPress | Handyman Blocks by CozyThemes.', 'handyman-blocks') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","style":{"border":{"radius":"50%"}},"className":"handyman-blocks-scrollto-top is-style-button-hover-secondary-bgcolor"} -->
        <div class="wp-block-button handyman-blocks-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'handyman-blocks') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->