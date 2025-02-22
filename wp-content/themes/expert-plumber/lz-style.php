<?php 

	$expert_plumber_custom_style = '';

	// Logo Size
	$expert_plumber_logo_top_margin = get_theme_mod('expert_plumber_logo_top_margin');
	$expert_plumber_logo_bottom_margin = get_theme_mod('expert_plumber_logo_bottom_margin');
	$expert_plumber_logo_left_margin = get_theme_mod('expert_plumber_logo_left_margin');
	$expert_plumber_logo_right_margin = get_theme_mod('expert_plumber_logo_right_margin');

	if( $expert_plumber_logo_top_margin != '' || $expert_plumber_logo_bottom_margin != '' || $expert_plumber_logo_left_margin != '' || $expert_plumber_logo_right_margin != ''){
		$expert_plumber_custom_style .=' .logo {';
			$expert_plumber_custom_style .=' margin-top: '.esc_attr($expert_plumber_logo_top_margin).'px;
			margin-bottom: '.esc_attr($expert_plumber_logo_bottom_margin).'px;
			margin-left: '.esc_attr($expert_plumber_logo_left_margin).'px;
			margin-right: '.esc_attr($expert_plumber_logo_right_margin).'px;';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_logo_size = get_theme_mod('expert_plumber_logo_size');
	if( $expert_plumber_logo_size != '') {
		if($expert_plumber_logo_size == 100) {
			$expert_plumber_custom_style .=' .custom-logo-link img {';
				$expert_plumber_custom_style .=' width: 350px;';
			$expert_plumber_custom_style .=' }';
		} else if($expert_plumber_logo_size >= 10 && $expert_plumber_logo_size < 100) {
			$expert_plumber_custom_style .=' .custom-logo-link img {';
				$expert_plumber_custom_style .=' width: '.esc_attr($expert_plumber_logo_size).'%;';
			$expert_plumber_custom_style .=' }';
		}
	}

	// Service Section padding
	$expert_plumber_service_section_padding = get_theme_mod('expert_plumber_service_section_padding');

	if( $expert_plumber_service_section_padding != ''){
		$expert_plumber_custom_style .=' #services-section {';
			$expert_plumber_custom_style .=' padding-top: '.esc_attr($expert_plumber_service_section_padding).'px;
			padding-bottom: '.esc_attr($expert_plumber_service_section_padding).'px;';
		$expert_plumber_custom_style .=' }';
	}

	// Site Title Font Size
	$expert_plumber_site_title_font_size = get_theme_mod('expert_plumber_site_title_font_size');
	if( $expert_plumber_site_title_font_size != ''){
		$expert_plumber_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$expert_plumber_custom_style .=' font-size: '.esc_attr($expert_plumber_site_title_font_size).'px;';
		$expert_plumber_custom_style .=' }';
	}

	// Site Tagline Font Size
	$expert_plumber_site_tagline_font_size = get_theme_mod('expert_plumber_site_tagline_font_size');
	if( $expert_plumber_site_tagline_font_size != ''){
		$expert_plumber_custom_style .=' .logo p.site-description {';
			$expert_plumber_custom_style .=' font-size: '.esc_attr($expert_plumber_site_tagline_font_size).'px;';
		$expert_plumber_custom_style .=' }';
	}

	//layout width
	$expert_plumber_boxfull_width = get_theme_mod('expert_plumber_boxfull_width');
	if ($expert_plumber_boxfull_width !== '') {
		switch ($expert_plumber_boxfull_width) {
			case 'container':
				$expert_plumber_custom_style .= ' body, #header, .bottom-header {
					max-width: 1140px;
					width: 100%;
					padding-right: 15px;
					padding-left: 15px;
					margin-right: auto;
					margin-left: auto;
					}';
				break;
			case 'container-fluid':
				$expert_plumber_custom_style .= ' body, #header, .bottom-header { 
					width: 100%;
					padding-right: 15px;
					padding-left: 15px;
					margin-right: auto;
					margin-left: auto;
				 }';
				break;
			case 'none':
				// No specific width specified, so no additional style needed.
				break;
			default:
				// Handle unexpected values.
				break;
		}
	}

	//Menu animation
	$expert_plumber_dropdown_anim = get_theme_mod('expert_plumber_dropdown_anim');

	if ( $expert_plumber_dropdown_anim != '') {
		$expert_plumber_custom_style .=' .nav-menu ul ul {';
			$expert_plumber_custom_style .=' animation:'.esc_attr($expert_plumber_dropdown_anim).' 1s ease;';
		$expert_plumber_custom_style .=' }';
	}

	// Copyright padding
	$expert_plumber_copyright_padding = get_theme_mod('expert_plumber_copyright_padding');

	if( $expert_plumber_copyright_padding != ''){
		$expert_plumber_custom_style .=' .site-info {';
			$expert_plumber_custom_style .=' padding-top: '.esc_attr($expert_plumber_copyright_padding).'px; padding-bottom: '.esc_attr($expert_plumber_copyright_padding).'px;';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_slider_hide_show = get_theme_mod('expert_plumber_slider_hide_show',false);
	if( $expert_plumber_slider_hide_show == true){
		$expert_plumber_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$expert_plumber_custom_style .=' display:none;';
		$expert_plumber_custom_style .=' }';
	}

	//Header color
	$expert_plumber_phoneicon_color = get_theme_mod('expert_plumber_phoneicon_color');

	if( $expert_plumber_phoneicon_color != ''){
		$expert_plumber_custom_style .=' .top-header .call p.callno i {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_phoneicon_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_phonetext_color = get_theme_mod('expert_plumber_phonetext_color');

	if( $expert_plumber_phonetext_color != ''){
		$expert_plumber_custom_style .=' .top-header .call p.callno {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_phonetext_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_social_color = get_theme_mod('expert_plumber_social_color');

	if( $expert_plumber_social_color != ''){
		$expert_plumber_custom_style .=' .social-icons i {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_social_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_hdrbtn_color = get_theme_mod('expert_plumber_hdrbtn_color');
	$expert_plumber_hdrbtnbg_color = get_theme_mod('expert_plumber_hdrbtnbg_color');

	if( $expert_plumber_hdrbtn_color != ''){
		$expert_plumber_custom_style .=' .getquote-btn a {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_hdrbtn_color).'; background-color: '.esc_attr($expert_plumber_hdrbtnbg_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_menu_color = get_theme_mod('expert_plumber_menu_color');

	if( $expert_plumber_menu_color != ''){
		$expert_plumber_custom_style .=' .nav-menu ul li a {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_menu_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_submenu_color = get_theme_mod('expert_plumber_submenu_color');

	if( $expert_plumber_submenu_color != ''){
		$expert_plumber_custom_style .=' .nav-menu ul ul a {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_submenu_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_menubg_color = get_theme_mod('expert_plumber_menubg_color');

	if( $expert_plumber_menubg_color != ''){
		$expert_plumber_custom_style .=' .menu-section {';
			$expert_plumber_custom_style .=' background-color: '.esc_attr($expert_plumber_menubg_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_hdrbg_color = get_theme_mod('expert_plumber_hdrbg_color');

	if( $expert_plumber_hdrbg_color != ''){
		$expert_plumber_custom_style .=' #header {';
			$expert_plumber_custom_style .=' background-color: '.esc_attr($expert_plumber_hdrbg_color).';';
		$expert_plumber_custom_style .=' }';
	}

	//slider color
	$expert_plumber_slider_title_font_size = get_theme_mod('expert_plumber_slider_title_font_size');
	if( $expert_plumber_slider_title_font_size != ''){
		$expert_plumber_custom_style .=' #slider h2 {';
			$expert_plumber_custom_style .=' font-size: '.esc_attr($expert_plumber_slider_title_font_size).'px;';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_slider_text_font_size = get_theme_mod('expert_plumber_slider_text_font_size');
	if( $expert_plumber_slider_text_font_size != ''){
		$expert_plumber_custom_style .=' #slider p {';
			$expert_plumber_custom_style .=' font-size: '.esc_attr($expert_plumber_slider_text_font_size).'px;';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_slidertitle_color = get_theme_mod('expert_plumber_slidertitle_color');
	if( $expert_plumber_slidertitle_color != ''){
		$expert_plumber_custom_style .=' #slider h2 {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_slidertitle_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_slidertext_color = get_theme_mod('expert_plumber_slidertext_color');
	if( $expert_plumber_slidertext_color != ''){
		$expert_plumber_custom_style .=' #slider p {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_slidertext_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_sliderbtn_color = get_theme_mod('expert_plumber_sliderbtn_color');
	$expert_plumber_sliderbtnbg_color = get_theme_mod('expert_plumber_sliderbtnbg_color');
	if( $expert_plumber_sliderbtn_color != ''){
		$expert_plumber_custom_style .=' #slider a.read-btn {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_sliderbtn_color).'; background-color: '.esc_attr($expert_plumber_sliderbtnbg_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_slidernpbtn_color = get_theme_mod('expert_plumber_slidernpbtn_color');
	if( $expert_plumber_slidernpbtn_color != ''){
		$expert_plumber_custom_style .=' #slider .carousel-control-prev-icon i, #slider .carousel-control-next-icon i {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_slidernpbtn_color).'; border-color: '.esc_attr($expert_plumber_slidernpbtn_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_slidernpbtnbg_color = get_theme_mod('expert_plumber_slidernpbtnbg_color');
	if( $expert_plumber_slidernpbtnbg_color != ''){
		$expert_plumber_custom_style .=' #slider .slider-arrows {';
			$expert_plumber_custom_style .=' background-color: '.esc_attr($expert_plumber_slidernpbtnbg_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_slidernpbtnhvr_color = get_theme_mod('expert_plumber_slidernpbtnhvr_color');
	if( $expert_plumber_slidernpbtnhvr_color != ''){
		$expert_plumber_custom_style .=' #slider .carousel-control-prev-icon i:hover, #slider .carousel-control-next-icon i:hover {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_slidernpbtnhvr_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_slidernpbtnhvrbg_color = get_theme_mod('expert_plumber_slidernpbtnhvrbg_color');
	if( $expert_plumber_slidernpbtnhvrbg_color != ''){
		$expert_plumber_custom_style .=' #slider .carousel-control-prev-icon i:hover, #slider .carousel-control-next-icon i:hover{';
			$expert_plumber_custom_style .=' background-color: '.esc_attr($expert_plumber_slidernpbtnhvrbg_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_sliderimgbdr_color = get_theme_mod('expert_plumber_sliderimgbdr_color');
	if( $expert_plumber_sliderimgbdr_color != ''){
		$expert_plumber_custom_style .=' #slider img {';
			$expert_plumber_custom_style .=' border-color: '.esc_attr($expert_plumber_sliderimgbdr_color).';';
		$expert_plumber_custom_style .=' }';
	}

	//service css
	$expert_plumber_service_icon_size = get_theme_mod('expert_plumber_service_icon_size');
	if( $expert_plumber_service_icon_size != ''){
		$expert_plumber_custom_style .=' #services-section .services-box .service-icon {';
			$expert_plumber_custom_style .=' font-size: '.esc_attr($expert_plumber_service_icon_size).'px;';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_service_font_size = get_theme_mod('expert_plumber_service_font_size');
	if( $expert_plumber_service_font_size != ''){
		$expert_plumber_custom_style .=' #services-section .services-box h4 {';
			$expert_plumber_custom_style .=' font-size: '.esc_attr($expert_plumber_service_font_size).'px;';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_services_section_title_font_size = get_theme_mod('expert_plumber_services_section_title_font_size');
	if( $expert_plumber_services_section_title_font_size != ''){
		$expert_plumber_custom_style .=' #services-section h3 {';
			$expert_plumber_custom_style .=' font-size: '.esc_attr($expert_plumber_services_section_title_font_size).'px;';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_servicetitle_color = get_theme_mod('expert_plumber_servicetitle_color');
	if( $expert_plumber_servicetitle_color != ''){
		$expert_plumber_custom_style .=' #services-section h3 {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_servicetitle_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_servicei_color = get_theme_mod('expert_plumber_servicei_color');
	if( $expert_plumber_servicei_color != ''){
		$expert_plumber_custom_style .=' .services-head i {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_servicei_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_serviceb_color = get_theme_mod('expert_plumber_serviceb_color');
	if( $expert_plumber_serviceb_color != ''){
		$expert_plumber_custom_style .=' #services-section h3 {';
			$expert_plumber_custom_style .=' border-color: '.esc_attr($expert_plumber_serviceb_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_service_boxicon_color = get_theme_mod('expert_plumber_service_boxicon_color');
	$expert_plumber_service_boxiconbg_color = get_theme_mod('expert_plumber_service_boxiconbg_color');
	if( $expert_plumber_service_boxicon_color != ''){
		$expert_plumber_custom_style .=' #services-section .services-box .service-icon {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_service_boxicon_color).'; background-color: '.esc_attr($expert_plumber_service_boxiconbg_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_service_boxtext_color = get_theme_mod('expert_plumber_service_boxtext_color');
	if( $expert_plumber_service_boxtext_color != ''){
		$expert_plumber_custom_style .=' #services-section .services-box h4 a {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_service_boxtext_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_service_boxbg_color = get_theme_mod('expert_plumber_service_boxbg_color');
	if( $expert_plumber_service_boxbg_color != ''){
		$expert_plumber_custom_style .=' #services-section .services-box {';
			$expert_plumber_custom_style .=' background-color: '.esc_attr($expert_plumber_service_boxbg_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_services_btn_font_size = get_theme_mod('expert_plumber_services_btn_font_size');
	if( $expert_plumber_services_btn_font_size != ''){
		$expert_plumber_custom_style .=' .service-btn a {';
			$expert_plumber_custom_style .=' font-size: '.esc_attr($expert_plumber_services_btn_font_size).'px;';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_service_btn_color = get_theme_mod('expert_plumber_service_btn_color');
	$expert_plumber_service_btnbg_color = get_theme_mod('expert_plumber_service_btnbg_color');
	if( $expert_plumber_service_btn_color != ''){
		$expert_plumber_custom_style .=' .service-btn a {';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_service_btn_color).'; background-color: '.esc_attr($expert_plumber_service_btnbg_color).';';
		$expert_plumber_custom_style .=' }';
	}

	//footer css
	$expert_plumber_footer_copy_font_size = get_theme_mod('expert_plumber_footer_copy_font_size');
	if( $expert_plumber_footer_copy_font_size != ''){
		$expert_plumber_custom_style .=' .site-info p, .site-info a {';
			$expert_plumber_custom_style .=' font-size: '.esc_attr($expert_plumber_footer_copy_font_size).'px;';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_copyright_color = get_theme_mod('expert_plumber_copyright_color');
	if( $expert_plumber_copyright_color != ''){
		$expert_plumber_custom_style .=' .site-info p, .site-info a{';
			$expert_plumber_custom_style .=' color: '.esc_attr($expert_plumber_copyright_color).';';
		$expert_plumber_custom_style .=' }';
	}

	$expert_plumber_copyrightbg_color = get_theme_mod('expert_plumber_copyrightbg_color');
	if( $expert_plumber_copyrightbg_color != ''){
		$expert_plumber_custom_style .=' .copyright {';
			$expert_plumber_custom_style .=' background-color: '.esc_attr($expert_plumber_copyrightbg_color).';';
		$expert_plumber_custom_style .=' }';
	}