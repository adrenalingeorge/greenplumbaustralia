<?php
/**
 * Custom header implementation
 */

function expert_plumber_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'expert_plumber_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 220,
		'wp-head-callback'       => 'expert_plumber_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'expert_plumber_custom_header_setup' );

if ( ! function_exists( 'expert_plumber_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see expert_plumber_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'expert_plumber_header_style' );
function expert_plumber_header_style() {

	$expert_plumber_show_site_title_color = esc_attr(get_theme_mod('expert_plumber_show_site_title_color','#1276c4'));
	$expert_plumber_show_site_tagline_color = esc_attr(get_theme_mod('expert_plumber_show_site_tagline_color','#1276c4'));
	?>
	<style type="text/css">

		h1.site-title a, p.site-title a {
			color: <?php echo apply_filters('expert_plumber_header', $expert_plumber_show_site_title_color); ?>;
		}
		p.site-description {
			color: <?php echo apply_filters('expert_plumber_header', $expert_plumber_show_site_tagline_color); ?>;
		}

	</style>
		
	<?php

	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        .page-template-custom-home-page #header, #header {
			background-image:url('".esc_url(get_header_image())."');
			background-size: 100% 100%;
		}";
	   	wp_add_inline_style( 'expert-plumber-basic-style', $custom_css );
	endif;
}
endif; // expert_plumber_header_style