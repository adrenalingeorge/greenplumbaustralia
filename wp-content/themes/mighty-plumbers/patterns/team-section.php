<?php

/**
 * Title: Team Section
 * Slug: mighty-plumbers/team-section
 * Categories: mighty-plumbers
 */
$mighty_plumbers_url = trailingslashit(get_template_directory_uri());
$mighty_plumbers_images = array(
    $mighty_plumbers_url . 'assets/images/team_1.jpg',
    $mighty_plumbers_url . 'assets/images/team_2.jpg',
    $mighty_plumbers_url . 'assets/images/team_3.jpg'
);
?>
<!-- wp:group {"metadata":{"name":"Our Team"},"style":{"spacing":{"padding":{"top":"90px","bottom":"110px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:90px;padding-right:var(--wp--preset--spacing--40);padding-bottom:110px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0","right":"0"}}},"gradient":"light-shade-color","className":"mighty-plumbers-fade-up","layout":{"type":"constrained","contentSize":"740px"}} -->
    <div class="wp-block-group mighty-plumbers-fade-up has-light-shade-color-gradient-background has-background" style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:700"><?php esc_html_e('Meet Our Team', 'mighty-plumbers') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Creating a catchy and memorable tagline is crucial for marketing cleaner services. Here are some tagline ideas that emphasize cleanliness', 'mighty-plumbers') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"54px"},"blockGap":{"left":"40px"}}}} -->
    <div class="wp-block-columns" style="margin-top:54px"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"0"},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"mighty-plumbers-team-box is-style-default","layout":{"type":"constrained"}} -->
            <div class="wp-block-group mighty-plumbers-team-box is-style-default has-light-color-background-color has-background" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":131,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"0px"}}} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[0]) ?>" alt="" class="wp-image-131" style="border-radius:0px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"64px","bottom":"16px","left":"24px","right":"20px"}},"color":{"background":"#eb7100cf"}},"className":"team-name","layout":{"type":"constrained"}} -->
                <div class="wp-block-group team-name has-background" style="background-color:#eb7100cf;padding-top:64px;padding-right:20px;padding-bottom:16px;padding-left:24px"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('John Doe', 'mighty-plumbers') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Founder', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"0"},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"mighty-plumbers-team-box is-style-default","layout":{"type":"constrained"}} -->
            <div class="wp-block-group mighty-plumbers-team-box is-style-default has-light-color-background-color has-background" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":161,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"0px"}}} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[1]) ?>" alt="" class="wp-image-161" style="border-radius:0px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"64px","bottom":"16px","left":"24px","right":"20px"}},"color":{"background":"#eb7100cf"}},"className":"team-name","layout":{"type":"constrained"}} -->
                <div class="wp-block-group team-name has-background" style="background-color:#eb7100cf;padding-top:64px;padding-right:20px;padding-bottom:16px;padding-left:24px"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Liyana Prop', 'mighty-plumbers') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('CFO', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"0"},"border":{"radius":"20px"}},"backgroundColor":"light-color","className":"mighty-plumbers-team-box is-style-default","layout":{"type":"constrained"}} -->
            <div class="wp-block-group mighty-plumbers-team-box is-style-default has-light-color-background-color has-background" style="border-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:image {"id":162,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"0px"}}} -->
                <figure class="wp-block-image aligncenter size-full has-custom-border"><img src="<?php echo esc_url($mighty_plumbers_images[2]) ?>" alt="" class="wp-image-162" style="border-radius:0px;object-fit:cover" /></figure>
                <!-- /wp:image -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"64px","bottom":"16px","left":"24px","right":"20px"}},"color":{"background":"#eb7100cf"}},"className":"team-name","layout":{"type":"constrained"}} -->
                <div class="wp-block-group team-name has-background" style="background-color:#eb7100cf;padding-top:64px;padding-right:20px;padding-bottom:16px;padding-left:24px"><!-- wp:heading {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <h4 class="wp-block-heading has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('Alex Patt', 'mighty-plumbers') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <p class="has-text-align-left has-light-color-color has-text-color has-link-color"><?php esc_html_e('CEO', 'mighty-plumbers') ?></p>
                    <!-- /wp:paragraph -->
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