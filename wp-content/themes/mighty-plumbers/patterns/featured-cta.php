<?php

/**
 * Title: Featured CTA
 * Slug: mighty-plumbers/featured-cta
 * Categories: mighty-plumbers
 */
$mighty_plumbers_url = trailingslashit(get_template_directory_uri());
$mighty_plumbers_images = array(
    $mighty_plumbers_url . 'assets/images/icon_1.png',
    $mighty_plumbers_url . 'assets/images/icon_2.png',
    $mighty_plumbers_url . 'assets/images/icon_3.png'
);
?>
<!-- wp:group {"metadata":{"name":"Featured CTA"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"className":"overlap-columns"} -->
    <div class="wp-block-columns overlap-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"0px","bottom":{"color":"#eb7100","width":"2px"}}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-large hover-animated-bg","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-large hover-animated-bg has-light-color-background-color has-background" style="border-radius:0px;border-bottom-color:#eb7100;border-bottom-width:2px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":73,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($mighty_plumbers_images[0]) ?>" alt="" class="wp-image-73" style="object-fit:cover;width:80px;height:80px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"32px"}}},"fontSize":"big"} -->
                <h4 class="wp-block-heading has-big-font-size" style="margin-top:32px;font-style:normal;font-weight:600"><?php esc_html_e('General Plumbing Maintenance', 'mighty-plumbers') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'mighty-plumbers') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"0px","bottom":{"color":"#eb7100","width":"2px"}}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-large hover-animated-bg","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-large hover-animated-bg has-light-color-background-color has-background" style="border-radius:0px;border-bottom-color:#eb7100;border-bottom-width:2px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":93,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($mighty_plumbers_images[1]) ?>" alt="" class="wp-image-93" style="object-fit:cover;width:80px;height:80px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"32px"}}},"fontSize":"big"} -->
                <h4 class="wp-block-heading has-big-font-size" style="margin-top:32px;font-style:normal;font-weight:600"><?php esc_html_e('24/7 Emergency Plumbing Service', 'mighty-plumbers') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'mighty-plumbers') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"0px","bottom":{"color":"#eb7100","width":"2px"}}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-large hover-animated-bg","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-large hover-animated-bg has-light-color-background-color has-background" style="border-radius:0px;border-bottom-color:#eb7100;border-bottom-width:2px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":94,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($mighty_plumbers_images[2]) ?>" alt="" class="wp-image-94" style="object-fit:cover;width:80px;height:80px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"32px"}}},"fontSize":"big"} -->
                <h4 class="wp-block-heading has-big-font-size" style="margin-top:32px;font-style:normal;font-weight:600"><?php esc_html_e('Plumbing Supplies and Equipment', 'mighty-plumbers') ?></h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris', 'mighty-plumbers') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->