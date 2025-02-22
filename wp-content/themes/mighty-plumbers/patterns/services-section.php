<?php

/**
 * Title: Services Section
 * Slug: mighty-plumbers/services-section
 * Categories: mighty-plumbers
 */
$mighty_plumbers_url = trailingslashit(get_template_directory_uri());
$mighty_plumbers_images = array(
    $mighty_plumbers_url . 'assets/images/s1.jpg',
    $mighty_plumbers_url . 'assets/images/s2.jpg',
    $mighty_plumbers_url . 'assets/images/s3.jpg',
    $mighty_plumbers_url . 'assets/images/s4.jpg',
    $mighty_plumbers_url . 'assets/images/s5.jpg',
    $mighty_plumbers_url . 'assets/images/s6.jpg',
    $mighty_plumbers_url . 'assets/images/icon_4.png',
    $mighty_plumbers_url . 'assets/images/icon_5.png',
    $mighty_plumbers_url . 'assets/images/icon_6.png',
    $mighty_plumbers_url . 'assets/images/icon_7.png',
    $mighty_plumbers_url . 'assets/images/icon_8.png',
    $mighty_plumbers_url . 'assets/images/icon_9.png',
);
?>
<!-- wp:group {"metadata":{"name":"Services Section"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"100px","left":"var:preset|spacing|40","right":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"mighty-plumbers-fade-up","layout":{"type":"constrained","contentSize":"640px"}} -->
    <div class="wp-block-group mighty-plumbers-fade-up"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
            <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
            <!-- /wp:separator -->

            <!-- wp:heading {"textAlign":"center","level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary"} -->
            <h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color" style="text-transform:uppercase"><?php esc_html_e('Services', 'mighty-plumbers') ?></h6>
            <!-- /wp:heading -->

            <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"30px"}},"backgroundColor":"primary"} -->
            <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background" />
            <!-- /wp:separator -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color"><?php esc_html_e('What We Do', 'mighty-plumbers') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"60px"},"blockGap":{"left":"32px"}}},"className":"mighty-plumbers-fade-up"} -->
    <div class="wp-block-columns mighty-plumbers-fade-up" style="margin-top:60px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium service-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium service-box has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"service-media","layout":{"type":"constrained"}} -->
                <div class="wp-block-group service-media"><!-- wp:image {"id":415,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                    <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[0]) ?>" alt="" class="wp-image-415" style="border-style:none;border-width:0px;border-radius:0px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":73,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}},"className":"service-icon is-style-default"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized has-custom-border service-icon is-style-default"><img src="<?php echo esc_url($mighty_plumbers_images[6]) ?>" alt="" class="wp-image-73" style="border-radius:50%;object-fit:cover;width:80px;height:80px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-big-font-size" style="margin-top:0px"><?php esc_html_e('Drain Cleaning', 'mighty-plumbers') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e(' ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"4px","width":"0px","style":"none"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:4px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-plumbers') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium service-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium service-box has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"service-media","layout":{"type":"constrained"}} -->
                <div class="wp-block-group service-media"><!-- wp:image {"id":416,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                    <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[1]) ?>" alt="" class="wp-image-416" style="border-style:none;border-width:0px;border-radius:0px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":73,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}},"className":"service-icon is-style-default"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized has-custom-border service-icon is-style-default"><img src="<?php echo esc_url($mighty_plumbers_images[7]) ?>" alt="" class="wp-image-73" style="border-radius:50%;object-fit:cover;width:80px;height:80px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-big-font-size" style="margin-top:0px"><?php esc_html_e('Leak Detection &amp; Repair', 'mighty-plumbers') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"4px","width":"0px","style":"none"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:4px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-plumbers') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium service-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium service-box has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"service-media","layout":{"type":"constrained"}} -->
                <div class="wp-block-group service-media"><!-- wp:image {"id":417,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                    <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[2]) ?>" alt="" class="wp-image-417" style="border-style:none;border-width:0px;border-radius:0px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":73,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}},"className":"service-icon is-style-default"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized has-custom-border service-icon is-style-default"><img src="<?php echo esc_url($mighty_plumbers_images[8]) ?>" alt="" class="wp-image-73" style="border-radius:50%;object-fit:cover;width:80px;height:80px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-big-font-size" style="margin-top:0px"><?php esc_html_e('Plumbing Inspection', 'mighty-plumbers') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"4px","width":"0px","style":"none"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:4px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-plumbers') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"32px"},"blockGap":{"left":"32px"}}},"className":"mighty-plumbers-fade-up"} -->
    <div class="wp-block-columns mighty-plumbers-fade-up" style="margin-top:32px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium service-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium service-box has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"service-media","layout":{"type":"constrained"}} -->
                <div class="wp-block-group service-media"><!-- wp:image {"id":418,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                    <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[3]) ?>" alt="" class="wp-image-418" style="border-style:none;border-width:0px;border-radius:0px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":73,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}},"className":"service-icon is-style-default"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized has-custom-border service-icon is-style-default"><img src="<?php echo esc_url($mighty_plumbers_images[9]) ?>" alt="" class="wp-image-73" style="border-radius:50%;object-fit:cover;width:80px;height:80px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-big-font-size" style="margin-top:0px"><?php esc_html_e('Water Line Installation/Repair', 'mighty-plumbers') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"4px","width":"0px","style":"none"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:4px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-plumbers') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium service-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium service-box has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"service-media","layout":{"type":"constrained"}} -->
                <div class="wp-block-group service-media"><!-- wp:image {"id":419,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                    <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[4]) ?>" alt="" class="wp-image-419" style="border-style:none;border-width:0px;border-radius:0px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":73,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}},"className":"service-icon is-style-default"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized has-custom-border service-icon is-style-default"><img src="<?php echo esc_url($mighty_plumbers_images[10]) ?>" alt="" class="wp-image-73" style="border-radius:50%;object-fit:cover;width:80px;height:80px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-big-font-size" style="margin-top:0px"><?php esc_html_e('Sewer Installation &amp; Repair', 'mighty-plumbers') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"4px","width":"0px","style":"none"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:4px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-plumbers') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium service-box","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium service-box has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"className":"service-media","layout":{"type":"constrained"}} -->
                <div class="wp-block-group service-media"><!-- wp:image {"id":420,"sizeSlug":"full","linkDestination":"none","align":"full","style":{"border":{"width":"0px","style":"none","radius":"0px"}}} -->
                    <figure class="wp-block-image alignfull size-full has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[5]) ?>" alt="" class="wp-image-420" style="border-style:none;border-width:0px;border-radius:0px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:image {"id":73,"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"50%"}},"className":"service-icon is-style-default"} -->
                    <figure class="wp-block-image aligncenter size-full is-resized has-custom-border service-icon is-style-default"><img src="<?php echo esc_url($mighty_plumbers_images[11]) ?>" alt="" class="wp-image-73" style="border-radius:50%;object-fit:cover;width:80px;height:80px" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"big"} -->
                    <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-big-font-size" style="margin-top:0px"><?php esc_html_e('Bathroom Installation &amp; Repair', 'mighty-plumbers') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center"} -->
                    <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                    <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"primary","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"radius":"4px","width":"0px","style":"none"}},"className":"is-style-button-hover-secondary-bgcolor"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:4px;padding-top:10px;padding-right:var(--wp--preset--spacing--50);padding-bottom:10px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-plumbers') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->