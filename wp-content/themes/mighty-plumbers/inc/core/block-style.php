<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package mighty_plumbers
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
    function mighty_plumbers_register_block_styles()
    {
        register_block_style(
            'core/columns',
            array(
                'name'  => 'mighty-plumbers-boxshadow',
                'label' => __('Box Shadow', 'mighty-plumbers')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'mighty-plumbers-boxshadow',
                'label' => __('Box Shadow', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'mighty-plumbers-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'mighty-plumbers-boxshadow-large',
                'label' => __('Box Shadow Large', 'mighty-plumbers')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'mighty-plumbers-boxshadow',
                'label' => __('Box Shadow', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'mighty-plumbers-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'mighty-plumbers-boxshadow-large',
                'label' => __('Box Shadow Larger', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-plumbers-boxshadow',
                'label' => __('Box Shadow', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-plumbers-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-plumbers-boxshadow-larger',
                'label' => __('Box Shadow Large', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-plumbers-image-pulse',
                'label' => __('Iamge Pulse Effect', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-plumbers-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-plumbers-image-hover-pulse',
                'label' => __('Hover Pulse Effect', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'mighty-plumbers-image-hover-rotate',
                'label' => __('Hover Rotate Effect', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/columns',
            array(
                'name'  => 'mighty-plumbers-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'mighty-plumbers')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'mighty-plumbers-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'mighty-plumbers')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'mighty-plumbers-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'mighty-plumbers')
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'categories-background-with-round',
                'label' => __('Background with round corner style', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-primary-color',
                'label' => __('Hover: Primary color', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/post-title',
            array(
                'name'  => 'title-hover-secondary-color',
                'label' => __('Hover: Secondary color', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-color',
                'label' => __('Hover: Primary Color', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-bgcolor',
                'label' => __('Hover: Primary color fill', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-bgcolor',
                'label' => __('Hover: Secondary color fill', 'mighty-plumbers')
            )
        );

        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-color',
                'label' => __('Hover: Primary Color', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-fill',
                'label' => __('Hover: Primary Fill', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-fill',
                'label' => __('Hover: secondary Fill', 'mighty-plumbers')
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-no-bullet',
                'label' => __('List Style: Hide bullet', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-primary',
                'label' => __('Hover style with primary color and hide bullet', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'hide-bullet-list-link-hover-style-secondary',
                'label' => __('Hover style with secondary color and hide bullet', 'mighty-plumbers')
            )
        );

        register_block_style(
            'core/gallery',
            array(
                'name'  => 'enable-grayscale-mode-on-image',
                'label' => __('Enable Grayscale Mode on Image', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-border',
                'label' => __('Border Style', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'mighty-plumbers-page-list-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'mighty-plumbers-categories-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'mighty-plumbers')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'mighty-plumbers-cover-round-style',
                'label' => __('Round Corner Style', 'mighty-plumbers')
            )
        );
    }
    add_action('init', 'mighty_plumbers_register_block_styles');
}
