<?php

/**
 * Title: Latest Post Section
 * Slug: mighty-plumbers/latest-post
 * Categories: mighty-plumbers
 */
?>
<!-- wp:group {"metadata":{"name":"Latest Post"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"80px","bottom":"100px"},"margin":{"top":"0","bottom":"0"}}},"className":"mighty-plumbers-fade-up","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group mighty-plumbers-fade-up" style="margin-top:0;margin-bottom:0;padding-top:80px;padding-right:var(--wp--preset--spacing--50);padding-bottom:100px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"48px"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","className":"mighty-plumbers-header"} -->
    <h1 class="wp-block-heading has-text-align-center mighty-plumbers-header has-primary-color has-text-color has-link-color" style="margin-bottom:48px;font-style:normal;font-weight:600"><?php esc_html_e('Latest Blogs and Insights', 'mighty-plumbers') ?></h1>
    <!-- /wp:heading -->

    <!-- wp:query {"queryId":23,"query":{"perPage":"3","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"32px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}},"backgroundColor":"light-color","className":"mighty-plumbers-post-featuredimg is-style-mighty-plumbers-boxshadow-medium","layout":{"type":"constrained"}} -->
        <div class="wp-block-group mighty-plumbers-post-featuredimg is-style-mighty-plumbers-boxshadow-medium has-light-color-background-color has-background" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"275px","align":"wide","style":{"spacing":{"margin":{"bottom":"0px"}},"border":{"radius":"0px"}}} /-->

            <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"24px","left":"28px","right":"28px","top":"24px"},"margin":{"top":"0","bottom":"0"}}},"className":"is-style-default","layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-style-default" style="margin-top:0;margin-bottom:0;padding-top:24px;padding-right:28px;padding-bottom:24px;padding-left:28px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"meta-color","fontSize":"small"} /-->

                    <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color","fontSize":"small"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"medium"} /-->

                <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:read-more {"content":"Continue Reading","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"5px","width":"1px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"20px","right":"20px"}}},"borderColor":"border-color","textColor":"foreground","className":"is-style-readmore-hover-secondary-fill"} /--></div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->