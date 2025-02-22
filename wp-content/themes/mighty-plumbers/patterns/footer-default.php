<?php

/**
 * Title: Footer Default
 * Slug: mighty-plumbers/footer-default
 * Categories: mighty-plumbers, footer
 */
$mighty_plumbers_url = trailingslashit(get_template_directory_uri());
$mighty_plumbers_images = array(
    $mighty_plumbers_url . 'assets/images/mighty-plumbers.png',
    $mighty_plumbers_url . 'assets/images/icon_loc.png',
    $mighty_plumbers_url . 'assets/images/icon_call.png',
    $mighty_plumbers_url . 'assets/images/icon_email.png',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"0","left":"0","bottom":"30px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"primary","className":"mighty-plumbers-footer","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group mighty-plumbers-footer has-primary-background-color has-background" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:40px;padding-right:0;padding-bottom:30px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"50px"},"margin":{"top":"40px"}}}} -->
        <div class="wp-block-columns" style="margin-top:40px"><!-- wp:column {"width":"25%","className":"mighty-plumbers-footer-list"} -->
            <div class="wp-block-column mighty-plumbers-footer-list" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:image {"id":46,"width":"40px","height":"auto","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($mighty_plumbers_images[0]) ?>" alt="" class="wp-image-46" style="width:40px;height:auto" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"padding":{"top":"5px"}}},"textColor":"light-color","fontSize":"big"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-big-font-size" style="padding-top:5px;font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('Mighty plumbers', 'mighty-plumbers') ?></h3>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'mighty-plumbers') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:social-links {"iconColor":"dark-color","iconColorValue":"#000000","iconBackgroundColor":"light-color","iconBackgroundColorValue":"#FFFFFF","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|30"},"margin":{"top":"30px","bottom":"0"}}}} -->
                <ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:30px;margin-bottom:0"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                    <!-- wp:social-link {"url":"#","service":"x"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"30%"} -->
            <div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0px"}},"textColor":"light-color","fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-light-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500;letter-spacing:0px;text-transform:uppercase"><?php esc_html_e('Contact Us', 'mighty-plumbers') ?></h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"20px","margin":{"bottom":"0"},"padding":{"left":"4px"}}},"className":"mighty-plumbers-footer-list","layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group mighty-plumbers-footer-list" style="margin-bottom:0;padding-left:4px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":322,"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-secondary"},"border":{"radius":"60px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[1]) ?>" alt="" class="wp-image-322" style="border-radius:60px;object-fit:cover;width:48px;height:48px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item {"fontSize":"normal"} -->
                            <li class="has-normal-font-size"><a href="#"><?php esc_html_e('14th Street, Caltech, New Jersey, Alabama', 'mighty-plumbers') ?></a></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":324,"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-secondary"},"border":{"radius":"60px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[2]) ?>" alt="" class="wp-image-324" style="border-radius:60px;object-fit:cover;width:48px;height:48px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item -->
                            <li><a href="#"><?php esc_html_e('+1 (888) 123-4567', 'mighty-plumbers') ?></a></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":329,"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white-secondary"},"border":{"radius":"60px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[3]) ?>" alt="" class="wp-image-329" style="border-radius:60px;object-fit:cover;width:48px;height:48px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"small"} -->
                        <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-small-font-size"><!-- wp:list-item -->
                            <li><a href="#"><?php esc_html_e('email@example.com', 'mighty-plumbers') ?></a></li>
                            <!-- /wp:list-item -->
                        </ul>
                        <!-- /wp:list -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"44px","bottom":"0"},"padding":{"left":"5px"}}},"className":"mighty-plumbers-footer-list","layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group mighty-plumbers-footer-list" style="margin-top:44px;margin-bottom:0;padding-left:5px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0px"}},"textColor":"light-color","fontSize":"medium"} -->
                        <h4 class="wp-block-heading has-light-color-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500;letter-spacing:0px;text-transform:uppercase"><?php esc_html_e('Office Hour', 'mighty-plumbers') ?></h4>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"light-color","className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"normal"} -->
                    <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-light-color-color has-text-color has-link-color has-normal-font-size"><!-- wp:list-item {"fontSize":"small"} -->
                        <li class="has-small-font-size"><?php esc_html_e('Monday - Friday8:00 a.m. - 5:00 p.m.', 'mighty-plumbers') ?></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"mighty-plumbers-footer-list"} -->
            <div class="wp-block-column mighty-plumbers-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Company', 'mighty-plumbers') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"normal"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('About Us', 'mighty-plumbers') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Policy', 'mighty-plumbers') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Terms and Conditions', 'mighty-plumbers') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Career', 'mighty-plumbers') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Blog', 'mighty-plumbers') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Contact Us', 'mighty-plumbers') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"className":"mighty-plumbers-footer-list"} -->
            <div class="wp-block-column mighty-plumbers-footer-list"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Services', 'mighty-plumbers') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:list {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"2","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","fontSize":"normal"} -->
                <ul style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:2;text-transform:none" class="is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Testing & Inspection', 'mighty-plumbers') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Installation', 'mighty-plumbers') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Maintenance and Repair', 'mighty-plumbers') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Emergency Service', 'mighty-plumbers') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('General Plumbing', 'mighty-plumbers') ?></a></li>
                    <!-- /wp:list-item -->

                    <!-- wp:list-item -->
                    <li><a href="#"><?php esc_html_e('Equipment Supply', 'mighty-plumbers') ?></a></li>
                    <!-- /wp:list-item -->
                </ul>
                <!-- /wp:list -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"60px"},"padding":{"top":"30px","bottom":"10px"},"blockGap":"var:preset|spacing|50"},"border":{"top":{"width":"0px","style":"none"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:60px;padding-top:30px;padding-bottom:10px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"typography":{"lineHeight":"1.5"}},"textColor":"light-color","fontSize":"normal"} -->
            <p class="has-light-color-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Proudly powered by WordPress | Mighty plumbers by CozyThemes.', 'mighty-plumbers') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foregound-alt","style":{"border":{"radius":"50%"}},"className":"mighty-plumbers-scrollto-top is-style-button-hover-secondary-bgcolor"} -->
    <div class="wp-block-button mighty-plumbers-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'mighty-plumbers') ?></a></div>
    <!-- /wp:button -->
</div>
<!-- /wp:buttons -->