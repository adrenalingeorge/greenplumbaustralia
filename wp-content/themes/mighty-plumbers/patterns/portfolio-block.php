<?php

/**
 * Title: Portfolio Showcase Section
 * Slug: mighty-plumbers/portfolio-block
 * Categories: mighty-plumbers
 */
$mighty_plumbers_url = trailingslashit(get_template_directory_uri());
$mighty_plumbers_images = array(
    $mighty_plumbers_url . 'assets/images/p1.jpg',
    $mighty_plumbers_url . 'assets/images/p2.jpg',
    $mighty_plumbers_url . 'assets/images/p3.jpg',
    $mighty_plumbers_url . 'assets/images/p4.jpg',
    $mighty_plumbers_url . 'assets/images/p5.jpg',
    $mighty_plumbers_url . 'assets/images/p6.jpg'
);
?>
<!-- wp:group {"metadata":{"name":"Portfolio Section"},"style":{"spacing":{"padding":{"top":"80px","bottom":"24px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:24px;padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"mighty-plumbers-fade-up","layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group mighty-plumbers-fade-up"><!-- wp:heading {"textAlign":"left","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"xx-large"} -->
        <h1 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-xx-large-font-size">Latest Projects</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
        <p class="has-text-align-left has-light-color-color has-text-color has-link-color" style="margin-top:24px">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"44px"},"blockGap":{"left":"24px"}}},"className":"mighty-plumbers-fade-up"} -->
    <div class="wp-block-columns mighty-plumbers-fade-up" style="margin-top:44px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($mighty_plumbers_images[0]) ?>","id":508,"dimRatio":0,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":380,"contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"className":"mighty-plumbers-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left mighty-plumbers-portfolio-box" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:380px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-508" alt="" src="<?php echo esc_url($mighty_plumbers_images[0]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:buttons {"metadata":{"name":"More Icon"},"className":"portfolio-more-icon"} -->
                        <div class="wp-block-buttons portfolio-more-icon"><!-- wp:button {"backgroundColor":"light-color","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"border":{"radius":"50%"}}} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:50%"><?php esc_html_e('More Icon', 'mighty-plumbers') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Project Construction', 'mighty-plumbers') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-plumbers') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"12px","bottom":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-primary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:12px;padding-right:var(--wp--preset--spacing--50);padding-bottom:12px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-plumbers') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($mighty_plumbers_images[1]) ?>","id":509,"dimRatio":0,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":380,"contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"className":"mighty-plumbers-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left mighty-plumbers-portfolio-box" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:380px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-509" alt="" src="<?php echo esc_url($mighty_plumbers_images[1]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:buttons {"metadata":{"name":"More Icon"},"className":"portfolio-more-icon"} -->
                        <div class="wp-block-buttons portfolio-more-icon"><!-- wp:button {"backgroundColor":"light-color","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"border":{"radius":"50%"}}} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:50%"><?php esc_html_e('More Icon', 'mighty-plumbers') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Project Construction', 'mighty-plumbers') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-plumbers') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"12px","bottom":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-primary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:12px;padding-right:var(--wp--preset--spacing--50);padding-bottom:12px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-plumbers') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($mighty_plumbers_images[2]) ?>","id":510,"dimRatio":0,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":380,"contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"className":"mighty-plumbers-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left mighty-plumbers-portfolio-box" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:380px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-510" alt="" src="<?php echo esc_url($mighty_plumbers_images[2]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:buttons {"metadata":{"name":"More Icon"},"className":"portfolio-more-icon"} -->
                        <div class="wp-block-buttons portfolio-more-icon"><!-- wp:button {"backgroundColor":"light-color","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"border":{"radius":"50%"}}} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:50%"><?php esc_html_e('More Icon', 'mighty-plumbers') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Project Construction', 'mighty-plumbers') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-plumbers') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"12px","bottom":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-primary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:12px;padding-right:var(--wp--preset--spacing--50);padding-bottom:12px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-plumbers') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"24px"},"blockGap":{"left":"24px"}}},"className":"mighty-plumbers-fade-up"} -->
    <div class="wp-block-columns mighty-plumbers-fade-up" style="margin-top:24px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($mighty_plumbers_images[3]) ?>","id":511,"dimRatio":0,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":380,"contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"className":"mighty-plumbers-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left mighty-plumbers-portfolio-box" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:380px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-511" alt="" src="<?php echo esc_url($mighty_plumbers_images[3]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:buttons {"metadata":{"name":"More Icon"},"className":"portfolio-more-icon"} -->
                        <div class="wp-block-buttons portfolio-more-icon"><!-- wp:button {"backgroundColor":"light-color","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"border":{"radius":"50%"}}} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:50%"><?php esc_html_e('More Icon', 'mighty-plumbers') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Project Construction', 'mighty-plumbers') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-plumbers') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"12px","bottom":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-primary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:12px;padding-right:var(--wp--preset--spacing--50);padding-bottom:12px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-plumbers') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($mighty_plumbers_images[4]) ?>","id":512,"dimRatio":0,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":380,"contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"className":"mighty-plumbers-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left mighty-plumbers-portfolio-box" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:380px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-512" alt="" src="<?php echo esc_url($mighty_plumbers_images[4]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:buttons {"metadata":{"name":"More Icon"},"className":"portfolio-more-icon"} -->
                        <div class="wp-block-buttons portfolio-more-icon"><!-- wp:button {"backgroundColor":"light-color","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"border":{"radius":"50%"}}} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:50%"><?php esc_html_e('More Icon', 'mighty-plumbers') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px">Project Construction', 'mighty-plumbers') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-plumbers') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"12px","bottom":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-primary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:12px;padding-right:var(--wp--preset--spacing--50);padding-bottom:12px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-plumbers') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0px","bottom":"0px","right":"0px","left":"0px"}},"border":{"radius":"12px"}},"backgroundColor":"light-color","className":"is-style-mighty-plumbers-boxshadow-medium","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-mighty-plumbers-boxshadow-medium has-light-color-background-color has-background" style="border-radius:12px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url($mighty_plumbers_images[5]) ?>","id":513,"dimRatio":0,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":380,"contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"className":"mighty-plumbers-portfolio-box","layout":{"type":"constrained"}} -->
                <div class="wp-block-cover has-custom-content-position is-position-bottom-left mighty-plumbers-portfolio-box" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px;min-height:380px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-513" alt="" src="<?php echo esc_url($mighty_plumbers_images[5]) ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container"><!-- wp:buttons {"metadata":{"name":"More Icon"},"className":"portfolio-more-icon"} -->
                        <div class="wp-block-buttons portfolio-more-icon"><!-- wp:button {"backgroundColor":"light-color","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"border":{"radius":"50%"}}} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-radius:50%"><?php esc_html_e('More Icon', 'mighty-plumbers') ?></a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":4,"style":{"spacing":{"margin":{"top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"big"} -->
                            <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color has-big-font-size" style="margin-top:24px"><?php esc_html_e('Project Construction', 'mighty-plumbers') ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                            <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas.', 'mighty-plumbers') ?></p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"24px"}}}} -->
                            <div class="wp-block-buttons" style="margin-top:24px"><!-- wp:button {"backgroundColor":"transparent","textColor":"light-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"12px","bottom":"12px"}},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"textTransform":"uppercase"},"border":{"width":"1px","radius":"50px"}},"className":"is-style-button-hover-primary-bgcolor"} -->
                                <div class="wp-block-button is-style-button-hover-primary-bgcolor" style="text-transform:uppercase"><a class="wp-block-button__link has-light-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:50px;padding-top:12px;padding-right:var(--wp--preset--spacing--50);padding-bottom:12px;padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More', 'mighty-plumbers') ?></a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->