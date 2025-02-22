<?php

/**
 * Title: Testimonial Section
 * Slug: mighty-plumbers/testimonial-section
 * Categories: mighty-plumbers
 */
$mighty_plumbers_url = trailingslashit(get_template_directory_uri());
$mighty_plumbers_images = array(
    $mighty_plumbers_url . 'assets/images/testimonial_1.jpg',
    $mighty_plumbers_url . 'assets/images/testimonial_2.jpg',
    $mighty_plumbers_url . 'assets/images/testimonial_3.jpg',
    $mighty_plumbers_url . 'assets/images/rating_star.png',
    $mighty_plumbers_url . 'assets/images/quote_icon.png'
);
?>
<!-- wp:group {"metadata":{"name":"Testimonial Section"},"style":{"spacing":{"padding":{"top":"90px","bottom":"110px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"light-shade","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-shade-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:90px;padding-right:var(--wp--preset--spacing--40);padding-bottom:110px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"10px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group" style="margin-bottom:10px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
                <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
                <!-- /wp:separator -->

                <!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary"} -->
                <h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e('Testimonials', 'mighty-plumbers') ?></h6>
                <!-- /wp:heading -->

                <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
                <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
                <!-- /wp:separator -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Hear From Our Happy Clients: Their Stories', 'mighty-plumbers') ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"100px"},"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:100px"><!-- wp:column {"className":"blockbooster-fade-up"} -->
        <div class="wp-block-column blockbooster-fade-up"><!-- wp:group {"style":{"border":{"radius":"0px","top":{"radius":"0px","width":"0px","style":"none"},"right":{"radius":"0px","width":"0px","style":"none"},"bottom":{"color":"var:preset|color|secondary","width":"2px"},"left":{"radius":"0px","width":"0px","style":"none"}},"spacing":{"padding":{"top":"60px","bottom":"60px","left":"40px","right":"40px"}}},"backgroundColor":"light-color","className":"blockbooster-hover-box is-style-mighty-plumbers-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group blockbooster-hover-box is-style-mighty-plumbers-boxshadow has-light-color-background-color has-background" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:60px;padding-right:40px;padding-bottom:60px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-bottom:16px"><!-- wp:image {"id":2415,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"><img src="<?php echo esc_url($mighty_plumbers_images[0]) ?>" alt="" class="wp-image-2415" style="border-radius:100px;object-fit:cover;width:120px;height:120px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group" style="margin-top:16px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                        <h5 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e('Henry Benzamin Clark', 'mighty-plumbers') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center"} -->
                        <p class="has-text-align-center"><?php esc_html_e('Fitness Coach', 'mighty-plumbers') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":4435,"width":"131px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($mighty_plumbers_images[3]) ?>" alt="" class="wp-image-4435" style="width:131px;height:auto" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"24px"}}}} -->
                <p class="has-text-align-center" style="margin-top:0;margin-bottom:24px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'mighty-plumbers') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:image {"id":212,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|white-secondary"}},"className":"reviews-quote"} -->
                <figure class="wp-block-image aligncenter size-full is-resized reviews-quote"><img src="<?php echo esc_url($mighty_plumbers_images[4]) ?>" alt="" class="wp-image-212" style="object-fit:cover;width:90px;height:90px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"blockbooster-fade-up"} -->
        <div class="wp-block-column blockbooster-fade-up"><!-- wp:group {"style":{"border":{"radius":"0px","top":{"radius":"0px","width":"0px","style":"none"},"right":{"radius":"0px","width":"0px","style":"none"},"bottom":{"color":"var:preset|color|secondary","width":"2px"},"left":{"radius":"0px","width":"0px","style":"none"}},"spacing":{"padding":{"top":"60px","bottom":"60px","left":"40px","right":"40px"}}},"backgroundColor":"light-color","className":"blockbooster-hover-box is-style-mighty-plumbers-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group blockbooster-hover-box is-style-mighty-plumbers-boxshadow has-light-color-background-color has-background" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:60px;padding-right:40px;padding-bottom:60px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-bottom:16px"><!-- wp:image {"id":2415,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"><img src="<?php echo esc_url($mighty_plumbers_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:100px;object-fit:cover;width:120px;height:120px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group" style="margin-top:16px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                        <h5 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e('Alexa Propp', 'mighty-plumbers') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center"} -->
                        <p class="has-text-align-center"><?php esc_html_e('Business Owner', 'mighty-plumbers') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":4435,"width":"131px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($mighty_plumbers_images[3]) ?>" alt="" class="wp-image-4435" style="width:131px;height:auto" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
                <p class="has-text-align-center" style="margin-bottom:24px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'mighty-plumbers') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:image {"id":212,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|white-secondary"}},"className":"reviews-quote"} -->
                <figure class="wp-block-image aligncenter size-full is-resized reviews-quote"><img src="<?php echo esc_url($mighty_plumbers_images[4]) ?>" alt="" class="wp-image-212" style="object-fit:cover;width:90px;height:90px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"blockbooster-fade-up"} -->
        <div class="wp-block-column blockbooster-fade-up"><!-- wp:group {"style":{"border":{"radius":"0px","top":{"radius":"0px","width":"0px","style":"none"},"right":{"radius":"0px","width":"0px","style":"none"},"bottom":{"color":"var:preset|color|secondary","width":"2px"},"left":{"radius":"0px","width":"0px","style":"none"}},"spacing":{"padding":{"top":"60px","bottom":"60px","left":"40px","right":"40px"}}},"backgroundColor":"light-color","className":"blockbooster-hover-box is-style-mighty-plumbers-boxshadow","layout":{"type":"constrained"}} -->
            <div class="wp-block-group blockbooster-hover-box is-style-mighty-plumbers-boxshadow has-light-color-background-color has-background" style="border-radius:0px;border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:60px;padding-right:40px;padding-bottom:60px;padding-left:40px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group" style="margin-bottom:16px"><!-- wp:image {"id":2415,"width":"120px","height":"120px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"} -->
                    <figure class="wp-block-image size-full is-resized has-custom-border mighty-plumbers-reviewer is-style-mighty-plumbers-boxshadow-larger"><img src="<?php echo esc_url($mighty_plumbers_images[2]) ?>" alt="" class="wp-image-2415" style="border-radius:100px;object-fit:cover;width:120px;height:120px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"16px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                    <div class="wp-block-group" style="margin-top:16px"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                        <h5 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:600"><?php esc_html_e('Moxley Bradman', 'mighty-plumbers') ?></h5>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"center"} -->
                        <p class="has-text-align-center"><?php esc_html_e('Customer', 'mighty-plumbers') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:image {"id":4435,"width":"131px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"center"} -->
                <figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url($mighty_plumbers_images[3]) ?>" alt="" class="wp-image-4435" style="width:131px;height:auto" /></figure>
                <!-- /wp:image -->

                <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
                <p class="has-text-align-center" style="margin-bottom:24px"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'mighty-plumbers') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:image {"id":212,"width":"90px","height":"90px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|white-secondary"}},"className":"reviews-quote"} -->
                <figure class="wp-block-image aligncenter size-full is-resized reviews-quote"><img src="<?php echo esc_url($mighty_plumbers_images[4]) ?>" alt="" class="wp-image-212" style="object-fit:cover;width:90px;height:90px" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->