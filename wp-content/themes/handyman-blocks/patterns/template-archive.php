<?php

/**
 * Title: Archive Template
 * Slug: handyman-blocks/template-archive
 * Categories: template
 * Inserter: false
 */
$handyman_blocks_url = trailingslashit(get_template_directory_uri());
$handyman_blocks_images = array(
    $handyman_blocks_url . 'assets/images/banner_bg.jpg',
);
?>
<!-- wp:group {"tagName":"main","style":{"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":{"width":"0px","style":"none"},"left":[]}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-bottom-style:none;border-bottom-width:0px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"gradient":"primary-gradient-alt","layout":{"type":"constrained","contentSize":"100%"},"fontSize":"xx-large"} -->
    <div class="wp-block-group has-primary-gradient-alt-gradient-background has-background has-xx-large-font-size" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($handyman_blocks_images[0]) ?>","id":1993,"dimRatio":50,"overlayColor":"dark-color","isUserOverlayColor":true,"minHeight":300,"layout":{"type":"constrained","contentSize":"1180px"}} -->
        <div class="wp-block-cover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-dark-color-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1993" alt="" src="<?php echo esc_url($handyman_blocks_images[0]) ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container"><!-- wp:query-title {"type":"archive","textAlign":"center","showPrefix":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light-color","fontSize":"xx-large"} /--></div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
            <div class="wp-block-column" style="flex-basis:70%"><!-- wp:query {"queryId":21,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
                <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"grid","columnCount":2}} -->
                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-light-color","backgroundColor":"light-color","className":"is-style-default","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group is-style-default has-border-color has-border-light-color-border-color has-light-color-background-color has-background" style="border-width:1px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"280px","align":"wide","style":{"border":{"radius":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

                        <!-- wp:group {"style":{"spacing":{"padding":{"right":"24px","left":"24px","top":"24px","bottom":"24px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="border-radius:0px;margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"small"} /-->

                            <!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"className":"is-style-title-hover-secondary-color","fontSize":"big"} /-->

                            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}}} /-->

                                <!-- wp:post-date /-->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:post-excerpt {"excerptLength":15,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:post-template -->

                    <!-- wp:query-pagination -->
                    <!-- wp:query-pagination-previous /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next /-->
                    <!-- /wp:query-pagination -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"30%"} -->
            <div class="wp-block-column" style="flex-basis:30%"><!-- wp:template-part {"slug":"sidebar","theme":"handyman-blocks","area":"uncategorized"} /--></div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->