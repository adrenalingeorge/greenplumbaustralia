<?php

/**
 * Title: Brand Showcase Section
 * Slug: mighty-plumbers/brands-showcase
 * Categories: mighty-plumbers
 */
$mighty_plumbers_url = trailingslashit(get_template_directory_uri());
$mighty_plumbers_images = array(
    $mighty_plumbers_url . 'assets/images/brand_1.jpg',
    $mighty_plumbers_url . 'assets/images/brand_2.jpg',
    $mighty_plumbers_url . 'assets/images/brand_3.jpg',
    $mighty_plumbers_url . 'assets/images/brand_4.jpg',
    $mighty_plumbers_url . 'assets/images/brand_5.jpg',
    $mighty_plumbers_url . 'assets/images/brand_6.jpg'
);
?>
<!-- wp:group {"metadata":{"name":"Logo Branding Showcase"},"style":{"spacing":{"padding":{"top":"32px","bottom":"32px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:32px;padding-right:var(--wp--preset--spacing--40);padding-bottom:32px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:gallery {"columns":7,"linkTo":"none","style":{"spacing":{"blockGap":{"left":"80px"}}},"className":"is-style-enable-grayscale-mode-on-image"} -->
    <figure class="wp-block-gallery has-nested-images columns-7 is-cropped is-style-enable-grayscale-mode-on-image"><!-- wp:image {"id":293,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
        <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[0]) ?>" alt="" class="wp-image-293" style="border-radius:50%" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":296,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
        <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[1]) ?>" alt="" class="wp-image-296" style="border-radius:50%" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":295,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
        <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[2]) ?>" alt="" class="wp-image-295" style="border-radius:50%" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":297,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
        <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[3]) ?>" alt="" class="wp-image-297" style="border-radius:50%" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":298,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
        <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[4]) ?>" alt="" class="wp-image-298" style="border-radius:50%" /></figure>
        <!-- /wp:image -->

        <!-- wp:image {"id":294,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"50%"}}} -->
        <figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[5]) ?>" alt="" class="wp-image-294" style="border-radius:50%" /></figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->
</div>
<!-- /wp:group -->