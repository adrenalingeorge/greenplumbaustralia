<?php

/**
 * Title: Newsletter Section
 * Slug: mighty-plumbers/newsletter-section
 * Categories: mighty-plumbers
 */
$mighty_plumbers_url = trailingslashit(get_template_directory_uri());
$mighty_plumbers_images = array(
    $mighty_plumbers_url . 'assets/images/newsletter_bg.jpg',
);
?>
<!-- wp:group {"metadata":{"name":"Newsletter"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:cover {"url":"<?php echo esc_url($mighty_plumbers_images[0]) ?>","id":256,"dimRatio":80,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":240,"style":{"spacing":{"padding":{"right":"50px","left":"50px","top":"50px","bottom":"50px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-cover" style="padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px;min-height:240px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-256" alt="" src="<?php echo esc_url($mighty_plumbers_images[0]) ?>" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"40px","left":"48px","right":"48px","bottom":"8px"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"light-color"} -->
                <div class="wp-block-column is-vertically-aligned-center has-light-color-background-color has-background" style="padding-top:40px;padding-right:48px;padding-bottom:8px;padding-left:48px;flex-basis:50%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.2"}},"textColor":"primary","fontSize":"x-large"} -->
                    <h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-x-large-font-size" style="line-height:1.2"><?php esc_html_e('Subscribe our Newsletter', 'mighty-plumbers') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
                    <p class="has-foreground-color has-text-color has-link-color"><?php esc_html_e('Renovation projects can range from minor upgrades, like repainting or installing new fixtures.', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:contact-form-7/contact-form-selector {"id":253,"hash":"f245613","title":"Newsletter","className":"mighty-plumbers-newsletter-box"} -->
                    <div class="wp-block-contact-form-7-contact-form-selector mighty-plumbers-newsletter-box">[contact-form-7 id="f245613" title="Newsletter"]</div>
                    <!-- /wp:contact-form-7/contact-form-selector -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"></div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->