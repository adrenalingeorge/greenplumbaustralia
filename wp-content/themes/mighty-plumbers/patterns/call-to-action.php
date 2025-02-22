<?php

/**
 * Title: Call To Action Section
 * Slug: mighty-plumbers/call-to-action
 * Categories: mighty-plumbers
 */
$mighty_plumbers_url = trailingslashit(get_template_directory_uri());
$mighty_plumbers_images = array(
    $mighty_plumbers_url . 'assets/images/cta_bg.jpg'
);
?>
<!-- wp:group {"metadata":{"name":"Call to Action"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","bottom":"0px","top":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($mighty_plumbers_images[0]) ?>","id":433,"dimRatio":90,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":540,"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"800px"}} -->
    <div class="wp-block-cover" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:540px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-90 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-433" alt="" src="<?php echo esc_url($mighty_plumbers_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"fontSize":"64px","lineHeight":"1.4"}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:64px;line-height:1.4"><?php esc_html_e('Need Reliable Plumbing Solutions for Your Home or Business?', 'mighty-plumbers') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"48px"}}}} -->
            <div class="wp-block-buttons" style="margin-top:48px"><!-- wp:button {"backgroundColor":"secondary","style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"24px","bottom":"24px"}},"border":{"radius":"0px"},"typography":{"fontSize":"20px"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor" style="font-size:20px"><a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" style="border-radius:0px;padding-top:24px;padding-right:var(--wp--preset--spacing--60);padding-bottom:24px;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Make an Appointment', 'mighty-plumbers') ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"light-color","textColor":"background-alt","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"24px","bottom":"24px"}},"border":{"radius":"0px"}},"className":"is-style-button-hover-secondary-bgcolor","fontSize":"medium"} -->
                <div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor has-medium-font-size"><a class="wp-block-button__link has-background-alt-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:0px;padding-top:24px;padding-right:var(--wp--preset--spacing--60);padding-bottom:24px;padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Request an Estimate', 'mighty-plumbers') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->