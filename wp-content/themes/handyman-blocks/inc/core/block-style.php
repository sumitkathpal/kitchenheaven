<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package handyman_blocks
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function handyman_blocks_register_block_styles()
    {
        register_block_style(
            'core/columns',
            array(
                'name'  => 'handyman-blocks-boxshadow',
                'label' => __('Box Shadow', 'handyman-blocks')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'handyman-blocks-boxshadow',
                'label' => __('Box Shadow', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'handyman-blocks-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'handyman-blocks-boxshadow-large',
                'label' => __('Box Shadow Large', 'handyman-blocks')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'handyman-blocks-boxshadow',
                'label' => __('Box Shadow', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'handyman-blocks-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'handyman-blocks-boxshadow-large',
                'label' => __('Box Shadow Larger', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'handyman-blocks-boxshadow',
                'label' => __('Box Shadow', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'handyman-blocks-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'handyman-blocks-boxshadow-larger',
                'label' => __('Box Shadow Large', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'handyman-blocks-image-pulse',
                'label' => __('Iamge Pulse Effect', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'handyman-blocks-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'handyman-blocks-image-hover-pulse',
                'label' => __('Hover Pulse Effect', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'handyman-blocks-image-hover-rotate',
                'label' => __('Hover Rotate Effect', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/columns',
            array(
                'name'  => 'handyman-blocks-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'handyman-blocks')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'handyman-blocks-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'handyman-blocks')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'handyman-blocks-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'handyman-blocks')
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'categories-background-with-round',
                'label' => __('Background with round corner style', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-primary-color',
                'label' => __('Hover: Primary color', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-secondary-color',
                'label' => __('Hover: Secondary color', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-color',
                'label' => __('Hover: Primary Color', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-bgcolor',
                'label' => __('Hover: Primary color fill', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-bgcolor',
                'label' => __('Hover: Secondary color fill', 'handyman-blocks')
            )
        );

        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-color',
                'label' => __('Hover: Primary Color', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-fill',
                'label' => __('Hover: Primary Fill', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-fill',
                'label' => __('Hover: secondary Fill', 'handyman-blocks')
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-no-bullet',
                'label' => __('List Style: Hide bullet', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-primary',
                'label' => __('Hover style with primary color and hide bullet', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-secondary',
                'label' => __('Hover style with secondary color and hide bullet', 'handyman-blocks')
            )
        );

        register_block_style(
            'core/gallery',
            array(
                'name'  => 'enable-grayscale-mode-on-image',
                'label' => __('Enable Grayscale Mode on Image', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-border',
                'label' => __('Border Style', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'handyman-blocks-page-list-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'handyman-blocks-categories-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'handyman-blocks')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'handyman-blocks-cover-round-style',
                'label' => __('Round Corner Style', 'handyman-blocks')
            )
        );
    }
    add_action('init', 'handyman_blocks_register_block_styles');
}
