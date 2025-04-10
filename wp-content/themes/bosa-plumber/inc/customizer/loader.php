<?php

function bosa_plumber_default_styles(){

	// Begin Style
	$css = '<style>';

	/* Site Title */
	$site_title_color = get_theme_mod( 'site_title_color', '#030303' );
	$site_tagline_color = get_theme_mod( 'site_tagline_color', '#767676' );
	$css .= '
		/* Site Title */
		.header-thirteen .site-branding .site-title {
			color: '. esc_attr( $site_title_color ) .';
		}
		/* Tagline */
		.header-thirteen .site-branding .site-description {
			color: '. esc_attr( $site_tagline_color ) .';
		}
	';

	# Header Color
	/* Top Header Background */
	$top_header_background_color = get_theme_mod( 'top_header_background_color', '' );
	$top_header_text_color = get_theme_mod( 'top_header_text_color', '#333333' );
	$top_header_text_link_hover_color = get_theme_mod( 'top_header_text_link_hover_color', '#086abd' );
	$css .= '
		.header-thirteen .top-header {
			background-color: '. esc_attr( $top_header_background_color ) .';
		}
	';
	$css .= '
		.header-thirteen .header-contact ul a,
		.header-thirteen .header-contact ul li,
		.header-thirteen .social-profile ul li a,
		.header-thirteen .header-contact ul li span {
			color: '. esc_attr( $top_header_text_color ) .';
		}
		.header-thirteen .site-branding .site-title a:hover,
		.header-thirteen .site-branding .site-title a:focus,
		.header-thirteen .header-contact ul a:hover,
		.header-thirteen .header-contact ul a:focus,
		.header-thirteen .social-profile ul li a:hover,
		.header-thirteen .social-profile ul li a:focus {
			color: '. esc_attr( $top_header_text_link_hover_color ) .';
		}
	';

	# Header 14 Icons Color
	$header_icon_color = get_theme_mod( 'header_icon_color', '#B7B7B7' );
	$css .= '
		.header-thirteen .header-contact ul li i {
			color: '. esc_attr( $header_icon_color ) .';
		}
	';

	if( get_theme_mod( 'disable_mobile_mid_header_border', false ) ){
		$css .= '
			@media screen and (max-width: 991px){
				.bottom-header,
				.header-one .bottom-header {
					border-bottom: none;
				}
			}
			@media screen and (min-width: 992px){
				.header-thirteen .top-header {
					border-bottom: none;
				}
			}
		';
	}

	# Header Image / Slider
	#Header Image Height
	$header_image_height = get_theme_mod( 'header_image_height', 90 );
	$css .= '
		@media only screen and (min-width: 992px) {
			.site-header:not(.sticky-header) .header-image-wrap {
				height: '. esc_attr( $header_image_height ) .'px;
				width: 100%;
				position: relative;
			}
		}
	';

# Header Button
	if( !get_theme_mod( 'disable_header_button', false ) ){
		if( get_theme_mod( 'header_layout', 'header_thirteen' ) == 'header_one' || get_theme_mod( 'header_layout', 'header_thirteen' ) == 'header_thirteen' ){
			$header_btn_defaults = array(
				array(
					'header_btn_type' 			=> 'button-outline',
					'header_btn_bg_color'		=> '#EB5A3E',
					'header_btn_border_color'	=> '#1a1a1a',
					'header_btn_text_color'		=> '#1a1a1a',
					'header_btn_hover_color'	=> '#086abd',
					'header_btn_text' 			=> '',
					'header_btn_link' 			=> '',
					'header_btn_target'			=> true,
					'header_btn_radius'			=> 0,
				),		
			);
			$header_buttons = get_theme_mod( 'header_button_repeater', $header_btn_defaults );
			if( !empty( $header_buttons ) && is_array( $header_buttons ) ){
				$i = 1;
		    	foreach( $header_buttons as $value ){
		    		$header_btn_bg_color 		= $value['header_btn_bg_color'];
		    		$header_btn_border_color 	= $value['header_btn_border_color'];
		    		$header_btn_text_color 		= $value['header_btn_text_color'];
		    		$header_btn_hover_color 	= $value['header_btn_hover_color'];
		    		$header_btn_radius 	= $value['header_btn_radius'];
		    		if( $value['header_btn_type'] == 'button-primary' ){
			    		$css .= '
							.site-header .header-btn-'. $i .'.button-primary {
								background-color: '. esc_attr( $header_btn_bg_color ) .';
								color: '. esc_attr( $header_btn_text_color ) .';
							}

							.site-header .header-btn-'. $i .'.button-primary:hover,
							.site-header .header-btn-'. $i .'.button-primary:focus,
							.site-header .header-btn-'. $i .'.button-primary:active {
								background-color: '. esc_attr( $header_btn_hover_color ) .';
								color: #ffffff;
							}

							.site-header .header-btn-'. $i .'.button-primary {
								border-radius: '. esc_attr( $header_btn_radius ) .'px;
							}
						';
					}elseif( $value['header_btn_type'] == 'button-outline' ){
						$css .= '

							.site-header .header-btn-'. $i .'.button-outline {
								border-color: '. esc_attr( $header_btn_border_color ) .';
								color: '. esc_attr( $header_btn_text_color ) .';
							}

							.site-header .header-btn-'. $i .'.button-outline:hover,
							.site-header .header-btn-'. $i .'.button-outline:focus,
							.site-header .header-btn-'. $i .'.button-outline:active {
								background-color: '. esc_attr( $header_btn_hover_color ) .';
								border-color: '. esc_attr( $header_btn_hover_color ) .';
								color: #ffffff;
							}

							.site-header .header-btn-'. $i .'.button-outline {
								border-radius: '. esc_attr( $header_btn_radius ) .'px;
							}
						';
					}elseif( $value['header_btn_type'] == 'button-text' ){
						$css .= '
							.site-header .header-btn-'. $i .'.button-text {
								color: '. esc_attr( $header_btn_text_color ) .';
								padding: 0;
							}
							.site-header .header-btn-'. $i .'.button-text:hover,
							.site-header .header-btn-'. $i .'.button-text:focus,
							.site-header .header-btn-'. $i .'.button-text:active {
								color: '. esc_attr( $header_btn_hover_color ) .';
							}
						';
					}
					$i++;
		    	}
		    }
		}
	}

	/* Bottom Header Background */
	$bottom_header_background_color 	 = get_theme_mod( 'bottom_header_background_color', '' );
	$bottom_header_text_color 			 = get_theme_mod( 'bottom_header_text_color', '#333333' );
	$bottom_header_text_link_hover_color = get_theme_mod( 'bottom_header_text_link_hover_color', '#086abd' );
	$css .= '
		.header-thirteen .bottom-header {
			background-color: '. esc_attr( $bottom_header_background_color ) .';
		}
		.header-thirteen .main-navigation ul.menu > li > a,
		.header-thirteen .header-icons .search-icon {
			color: '. esc_attr( $bottom_header_text_color ) .';
		}
		.header-thirteen .alt-menu-icon a:hover, 
		.header-thirteen .alt-menu-icon a:focus, 
		.header-thirteen .alt-menu-icon a:active,
		.header-thirteen .main-navigation ul.menu li a:hover,
		.header-thirteen .main-navigation ul.menu li a:focus,
		.header-thirteen .main-navigation ul.menu li a:active,
		.header-thirteen .main-navigation ul.menu li.current-menu-item > a,
		.header-thirteen .main-navigation ul.menu li.current_page_item > a,
		.header-thirteen .main-navigation ul.menu > li:hover > a, 
		.header-thirteen .main-navigation ul.menu > li:focus > a, 
		.header-thirteen .main-navigation ul.menu > li:active > a, 
		.header-thirteen .header-icons .search-icon:hover, 
		.header-thirteen .header-icons .search-icon:focus, 
		.header-thirteen .header-icons .search-icon:active {
			color: '. esc_attr( $bottom_header_text_link_hover_color ) .';
		}
	'; 

	$feature_posts_height = get_theme_mod( 'feature_posts_height', 350 );
	$css .= '
		.feature-posts-layout-one .feature-posts-image {
			height: '. esc_attr( $feature_posts_height ) .'px;
			overflow: hidden;
		}
	';

	#Bottom Footer image width
	if( get_theme_mod( 'footer_layout', 'footer_eight' ) == 'footer_one' || get_theme_mod( 'footer_layout', 'footer_eight' ) == 'footer_two' || get_theme_mod( 'footer_layout', 'footer_eight' ) == 'footer_eight' ){
		$bottom_footer_image_width = get_theme_mod( 'bottom_footer_image_width', 270 );
		$css .= '
			.bottom-footer-image-wrap > a {
				max-width: '. esc_attr( $bottom_footer_image_width ) .'px;
				overflow: hidden;
				display: inline-block;
			}
		';
	}

	# Footer Border
	if( get_theme_mod( 'disable_footer_border', false ) ){
		$css .= '
			.site-footer-eight .social-profile {
				border-bottom: none;
			}
		';
	}
	
	// Featured Pages
	$featured_pages_title_color = get_theme_mod( 'featured_pages_title_color', '#1a1a1a' );
	$featured_pages_hover_color = get_theme_mod( 'featured_pages_hover_color', '#086abd' );
	$css .= '
		.feature-pages-content .feature-pages-title {
			color: '. esc_attr( $featured_pages_title_color ) .';
		}
		.feature-pages-content .feature-pages-title a:hover,
		.feature-pages-content .feature-pages-title a:focus {
			color: '. esc_attr( $featured_pages_hover_color ) .';
		}
	';

	$featured_pages_overlay_opacity = get_theme_mod( 'featured_pages_overlay_opacity', 2 );
	$css .= '
		.feature-pages-layout-one .feature-pages-content-wrap .feature-pages-image:before {
		 	background-color: rgba(0, 0, 0, 0.'. esc_attr( $featured_pages_overlay_opacity ) .');
		}
	';

	$featured_pages_height = get_theme_mod( 'featured_pages_height', 250 );
	$css .= '
		.feature-pages-layout-one .feature-pages-image {
			height: '. esc_attr( $featured_pages_height ) .'px;
			overflow: hidden;
		}
	';

	# Featured Page Image Sizes
	#Cover Size
	if( get_theme_mod( 'featured_pages_image_size', 'cover' ) == 'cover' ){
		$css .= '
			.feature-pages-content-wrap .feature-pages-image {
				background-position: center center;
				background-repeat: no-repeat;
				background-size: cover;
			}
		';
	}
	#Repeat Size
	elseif( get_theme_mod( 'featured_pages_image_size', 'cover' ) == 'pattern' ){
		$css .= '
			.feature-pages-content-wrap .feature-pages-image {
				background-position: center center;
				background-repeat: repeat;
				background-size: inherit;
			}
		';
	}
	#Fit Size
	elseif( get_theme_mod( 'featured_pages_image_size', 'cover' ) == 'norepeat' ){
		$css .= '
			.feature-pages-content-wrap .feature-pages-image {
				background-position: center center;
				background-repeat: no-repeat;
				background-size: inherit;
			}
		';
	}

	$featured_pages_radius = get_theme_mod( 'featured_pages_radius', 0 );
	$css .= '
		.feature-pages-content-wrap .feature-pages-image {
			border-radius: '. esc_attr( $featured_pages_radius ) .'px;
			overflow: hidden;
		}
	';

	#Featured Pages Title Alignment
	if( get_theme_mod( 'featured_pages_title_alignment', 'align-center' ) == 'align-bottom' ){
		$css .= '
	    	.feature-pages-layout-one .feature-pages-image {
				-webkit-align-items: flex-end;
	    		-moz-align-items: flex-end;
	    		-ms-align-items: flex-end;
	    		-ms-flex-align: flex-end;
	    		align-items: flex-end;
	    	}
	    	.feature-pages-layout-one .feature-pages-content {
	    		margin-bottom: 20px;
	    	}
		';
	}elseif( get_theme_mod( 'featured_pages_title_alignment', 'align-center' ) == 'align-top' ) {
		$css .= '
			.feature-pages-layout-one .feature-pages-image {
				-webkit-align-items: flex-start;
	    		-moz-align-items: flex-start;
	    		-ms-align-items: flex-start;
	    		-ms-flex-align: flex-start;
	    		align-items: flex-start;
	    	}
	    	.feature-pages-layout-one .feature-pages-content {
	    		margin-top: 20px;
	    	}
		';
	}elseif( get_theme_mod( 'featured_pages_title_alignment', 'align-center' ) == 'align-center' ) {
		$css .= '
			.feature-pages-layout-one .feature-pages-image {
				-webkit-align-items: center;
	    		-moz-align-items: center;
	    		-ms-align-items: center;
	    		-ms-flex-align: center;
	    		align-items: center;
	    	}
		';
	}

	# Responsive Featured Posts
	if( get_theme_mod( 'disable_mobile_feature_posts', false ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-feature-posts-area {
	    			display: none;
				}
			}
		';
	}
	# Responsive Featured Pages
	if( get_theme_mod( 'disable_mobile_feature_pages', false ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-feature-pages-area {
	    			display: none;
				}
			}
		';
	}

	# Grid Thumbnail post border radius
	$posts_border_radius_thumbnail = get_theme_mod( 'posts_border_radius_thumbnail', 0 );
	if( $posts_border_radius_thumbnail != 0 ){
		$css .= '
			#primary .grid-thumbnail article:not(.sticky).list-post .featured-image a {
	    		border-radius: '. esc_attr( $posts_border_radius_thumbnail ) .'px;
	    	}
	    	.grid-thumbnail article.sticky.list-post {
	    		border-radius: '. esc_attr( $posts_border_radius_thumbnail ) .'px;
	    	}
		';
	}

	#Featured Posts Two color
	$feature_posts_two_title_color 		= get_theme_mod( 'feature_posts_two_title_color', '#FFFFFF' );
	$feature_posts_two_category_bgcolor = get_theme_mod( 'feature_posts_two_category_bgcolor', '#EB5A3E' );
	$feature_posts_two_category_color 	= get_theme_mod( 'feature_posts_two_category_color', '#FFFFFF' );
	$feature_posts_two_meta_color 		= get_theme_mod( 'feature_posts_two_meta_color', '#FFFFFF' );
	$feature_posts_two_meta_icon_color 	= get_theme_mod( 'feature_posts_two_meta_icon_color', '#FFFFFF' );
	$feature_posts_two_hover_color 		= get_theme_mod( 'feature_posts_two_hover_color', '#a8d8ff' );
	$css .= '
		.section-feature-posts-two-area .feature-posts-content .feature-posts-title {
			color: '. esc_attr( $feature_posts_two_title_color ) .';
		}
		.section-feature-posts-two-area .feature-posts-content .feature-posts-title a:hover,
		.section-feature-posts-two-area .feature-posts-content .feature-posts-title a:focus {
			color: '. esc_attr( $feature_posts_two_hover_color ) .';
		}
		.section-feature-posts-two-area .feature-posts-content .cat-links a {
			background-color: '. esc_attr( $feature_posts_two_category_bgcolor ) .';
			color: '. esc_attr( $feature_posts_two_category_color) .';
		}
		.section-feature-posts-two-area .feature-posts-content .cat-links a:hover,
		.section-feature-posts-two-area .feature-posts-content .cat-links a:focus {
			background-color: '. esc_attr( $feature_posts_two_hover_color ) .';
			color: #FFFFFF;
		}
		.section-feature-posts-two-area .feature-posts-content .entry-meta a {
			color: '. esc_attr( $feature_posts_two_meta_color ) .';
		}
		.section-feature-posts-two-area .feature-posts-content .entry-meta a:before {
			color: '. esc_attr( $feature_posts_two_meta_icon_color ) .';
		}
		.section-feature-posts-two-area .feature-posts-content .entry-meta a:hover,
		.section-feature-posts-two-area .feature-posts-content .entry-meta a:focus,
		.section-feature-posts-two-area .feature-posts-content .entry-meta a:hover:before,
		.section-feature-posts-two-area .feature-posts-content .entry-meta a:focus:before {
			color: '. esc_attr( $feature_posts_two_hover_color ) .';
		}
	';

	# Featured Posts Overlay Opacity
	$feature_posts_two_overlay_opacity = get_theme_mod( 'feature_posts_two_overlay_opacity', 4 );
	$css .= '
		.section-feature-posts-two-area .feature-posts-image:before {
		 	background-color: rgba(0, 0, 0, 0.'. esc_attr( $feature_posts_two_overlay_opacity ) .');
		}
	';

	# Featured Posts Two Image Sizes
	#Cover Size
	if( get_theme_mod( 'feature_posts_two_image_size', 'cover' ) == 'cover' ){
		$css .= '
			.section-feature-posts-two-area .feature-posts-image {
				background-position: center center;
				background-repeat: no-repeat;
				background-size: cover;
			}
		';
	}
	#Repeat Size
	elseif( get_theme_mod( 'feature_posts_two_image_size', 'cover' ) == 'pattern' ){
		$css .= '
			.section-feature-posts-two-area .feature-posts-image {
				background-position: center center;
				background-repeat: repeat;
				background-size: inherit;
			}
		';
	}
	#Fit Size
	elseif( get_theme_mod( 'feature_posts_two_image_size', 'cover' ) == 'norepeat' ){
		$css .= '
			.section-feature-posts-two-area .feature-posts-image {
				background-position: center center;
				background-repeat: no-repeat;
				background-size: inherit;
			}
		';
	}

	# Featured Posts Two Border Radius
	$feature_posts_two_radius = get_theme_mod( 'feature_posts_two_radius', 0 );
	$css .= '
		.section-feature-posts-two-area .feature-posts-image {
    		border-radius: '. esc_attr( $feature_posts_two_radius ) .'px;
    		overflow: hidden;
    	}
	';

	#Featured Posts Two Content Alignment
	if( get_theme_mod( 'feature_posts_two_vertical_title_alignment', 'align-bottom' ) == 'align-bottom' ){
		$css .= '
	    	.section-feature-posts-two-area .feature-posts-image {
				-webkit-align-items: flex-end;
	    		-moz-align-items: flex-end;
	    		-ms-align-items: flex-end;
	    		-ms-flex-align: flex-end;
	    		align-items: flex-end;
	    	}
	    	.section-feature-posts-two-area .feature-posts-content {
	    		margin-bottom: 20px;
	    	}
		';
	}elseif( get_theme_mod( 'feature_posts_two_vertical_title_alignment', 'align-bottom' ) == 'align-top' ) {
		$css .= '
			.section-feature-posts-two-area .feature-posts-image {
				-webkit-align-items: flex-start;
	    		-moz-align-items: flex-start;
	    		-ms-align-items: flex-start;
	    		-ms-flex-align: flex-start;
	    		align-items: flex-start;
	    	}
	    	.section-feature-posts-two-area .feature-posts-content {
	    		margin-top: 20px;
	    	}
		';
	}elseif( get_theme_mod( 'feature_posts_two_vertical_title_alignment', 'align-bottom' ) == 'align-center' ) {
		$css .= '
			.section-feature-posts-two-area .feature-posts-image {
				-webkit-align-items: center;
	    		-moz-align-items: center;
	    		-ms-align-items: center;
	    		-ms-flex-align: center;
	    		align-items: center;
	    	}
		';
	}

	# Responsive Featured Posts Two
	if( get_theme_mod( 'disable_mobile_feature_posts_two', false ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-feature-posts-two-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive Blog Advert
	if( get_theme_mod( 'disable_mobile_blog_advertisement_banner', false ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-advert {
	    			display: none;
				}
			}
		';
	}

	# Responsive Services
	if( get_theme_mod( 'disable_mobile_services', false ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-services-area {
	    			display: none;
				}
			}
		';
	}
	
	# Responsive Catalogues
	if( get_theme_mod('disable_mobile_catalogues', false ) ){
		$css .='
			@media screen and (max-width: 767px){
				.section-catalogues-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive renowned brand
	if( get_theme_mod( 'disable_mobile_renowned_brands', false ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-renowned-area {
	    			display: none;
				}
			}
		';
	}

	# Responsive Grand Events
	if( get_theme_mod( 'disable_mobile_grand_events', false ) ){
		$css .= '
			@media screen and (max-width: 767px){
				.section-grand-event-area {
	    			display: none;
				}
			}
		';
	}

	# Header thirteen hamburger icon background color 
	$header_hamburger_bg_color = get_theme_mod( 'header_hamburger_bg_color', '#EB5A3E' );
	$header_hamburger_icon_color = get_theme_mod( 'header_hamburger_icon_color', '#FFFFFF' );
	$css .= '
		.header-thirteen .alt-menu-icon a {
			background-color: '. esc_attr( $header_hamburger_bg_color ) .';
		}
		.header-thirteen .alt-menu-icon .iconbar-label {
	      color: '. esc_attr( $header_hamburger_icon_color ) .';
	    }
		.header-thirteen .alt-menu-icon a .icon-bar,
		.header-thirteen .alt-menu-icon a .icon-bar:before,
		.header-thirteen .alt-menu-icon a .icon-bar:after {
			background-color: '. esc_attr( $header_hamburger_icon_color ) .';
		}
	';

	# Header thirteen Icons Color
	$header_icon_color = get_theme_mod( 'header_icon_color', '#B7B7B7' );
	$css .= '
		.header-thirteen .header-contact ul li i {
			color: '. esc_attr( $header_icon_color ) .';
		}
	';

	$css .= '
		.section-advert {
			padding-bottom: 70px;
		}
	';
	
	// End Style
	$css .= '</style>';

	// return generated & compressed CSS
	echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css); 
}
add_action( 'wp_head', 'bosa_plumber_default_styles', 99 );