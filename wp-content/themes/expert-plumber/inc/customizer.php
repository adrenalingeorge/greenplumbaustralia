<?php
/**
 * Expert Plumber: Customizer
 *
 * @subpackage Expert Plumber
 * @since 1.0
 */

use WPTRT\Customize\Section\Expert_Plumber_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Expert_Plumber_Button::class );

	$manager->add_section(
		new Expert_Plumber_Button( $manager, 'expert_plumber_pro', [
			'title'      => __( 'Expert Plumber Pro', 'expert-plumber' ),
			'priority'    => 0,
			'button_text' => __( 'Go Pro', 'expert-plumber' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/product/plumber-wordpress-theme/', 'expert-plumber')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'expert-plumber-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'expert-plumber-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function expert_plumber_customize_register( $wp_customize ) {

	$wp_customize->add_setting('expert_plumber_logo_size',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_logo_size',array(
		'type' => 'range',
		'description' => __('Logo Size (0-100%)','expert-plumber'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_plumber_logo_margin',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('expert_plumber_logo_margin',array(
		'label' => __('Logo Margin','expert-plumber'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('expert_plumber_logo_top_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_logo_top_margin',array(
		'type' => 'number',
		'description' => __('Top','expert-plumber'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_plumber_logo_bottom_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_logo_bottom_margin',array(
		'type' => 'number',
		'description' => __('Bottom','expert-plumber'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_plumber_logo_left_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_logo_left_margin',array(
		'type' => 'number',
		'description' => __('Left','expert-plumber'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_plumber_logo_right_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_logo_right_margin',array(
		'type' => 'number',
		'description' => __('Right','expert-plumber'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_plumber_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'expert_plumber_sanitize_checkbox'
	));
	$wp_customize->add_control('expert_plumber_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','expert-plumber'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('expert_plumber_show_site_title_color',array(
		'default' => '#1276c4',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_show_site_title_color',array(
		'type' => 'color',
		'label' => __('Site Title Color','expert-plumber'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('expert_plumber_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','expert-plumber'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_plumber_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'expert_plumber_sanitize_checkbox'
	));
	$wp_customize->add_control('expert_plumber_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','expert-plumber'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('expert_plumber_show_site_tagline_color',array(
		'default' => '#1276c4',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_show_site_tagline_color',array(
		'type' => 'color',
		'label' => __('Site Tagline Color','expert-plumber'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('expert_plumber_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','expert-plumber'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_panel( 'expert_plumber_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'expert-plumber' ),
		'description' => __( 'Description of what this panel does.', 'expert-plumber' ),
	) );

	$wp_customize->add_section( 'expert_plumber_theme_options_section', array(
    	'title'      => __( 'General Settings', 'expert-plumber' ),
		'priority'   => 30,
		'panel' => 'expert_plumber_panel_id'
	) );

	$wp_customize->add_setting('expert_plumber_theme_options',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'expert_plumber_sanitize_choices'
	));
	$wp_customize->add_control('expert_plumber_theme_options',array(
		'type' => 'select',
		'label' => __('Blog Page Sidebar Layout','expert-plumber'),
		'section' => 'expert_plumber_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','expert-plumber'),
		   'Right Sidebar' => __('Right Sidebar','expert-plumber'),
		   'One Column' => __('One Column','expert-plumber'),
		   'Grid Layout' => __('Grid Layout','expert-plumber')
		),
	));

	$wp_customize->add_setting('expert_plumber_single_post_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'expert_plumber_sanitize_choices'
	));
	$wp_customize->add_control('expert_plumber_single_post_sidebar',array(
		'type' => 'select',
		'label' => __('Single Post Sidebar Layout','expert-plumber'),
		'section' => 'expert_plumber_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','expert-plumber'),
		   'Right Sidebar' => __('Right Sidebar','expert-plumber'),
		   'One Column' => __('One Column','expert-plumber')
		),
	));

	$wp_customize->add_setting('expert_plumber_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'expert_plumber_sanitize_choices'
	));
	$wp_customize->add_control('expert_plumber_page_sidebar',array(
		'type' => 'select',
		'label' => __('Page Sidebar Layout','expert-plumber'),
		'section' => 'expert_plumber_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','expert-plumber'),
		   'Right Sidebar' => __('Right Sidebar','expert-plumber'),
		   'One Column' => __('One Column','expert-plumber')
		),
	));

	$wp_customize->add_setting('expert_plumber_archive_page_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'expert_plumber_sanitize_choices'
	));
	$wp_customize->add_control('expert_plumber_archive_page_sidebar',array(
		'type' => 'select',
		'label' => __('Archive & Search Page Sidebar Layout','expert-plumber'),
		'section' => 'expert_plumber_theme_options_section',
		'choices' => array(
			'Left Sidebar' => __('Left Sidebar','expert-plumber'),
			'Right Sidebar' => __('Right Sidebar','expert-plumber'),
			'One Column' => __('One Column','expert-plumber'),
			'Grid Layout' => __('Grid Layout','expert-plumber')
		),
	));

	$wp_customize->add_setting('expert_plumber_products_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'expert_plumber_sanitize_choices'
	));
	$wp_customize->add_control('expert_plumber_products_page_sidebar',array(
		'type' => 'select',
		'label' => __('Products Page Sidebar Layout','expert-plumber'),
		'section' => 'expert_plumber_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','expert-plumber'),
		   'Right Sidebar' => __('Right Sidebar','expert-plumber'),
		   'One Column' => __('One Column','expert-plumber')
		),
	));

	$wp_customize->add_setting('expert_plumber_single_product_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'expert_plumber_sanitize_choices'
	));
	$wp_customize->add_control('expert_plumber_single_product_page_sidebar',array(
		'type' => 'select',
		'label' => __('Single Product Page Sidebar Layout','expert-plumber'),
		'section' => 'expert_plumber_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','expert-plumber'),
		   'Right Sidebar' => __('Right Sidebar','expert-plumber'),
		   'One Column' => __('One Column','expert-plumber')
		),
	));

	$wp_customize->add_setting( 'expert_plumber_boxfull_width', array(
		'default'           => '',
		'sanitize_callback' => 'expert_plumber_sanitize_choices'
	));
	
	$wp_customize->add_control( 'expert_plumber_boxfull_width', array(
		'label'    => __( 'Section Width', 'expert-plumber' ),
		'section'  => 'expert_plumber_theme_options_section',
		'type'     => 'select',
		'choices'  => array(
			'container'  => __('Box Width', 'expert-plumber'),
			'container-fluid' => __('Full Width', 'expert-plumber'),
			'none' => __('None', 'expert-plumber')
		),
	));

	$wp_customize->add_setting( 'expert_plumber_dropdown_anim', array(
		'default'           => 'None',
		'sanitize_callback' => 'expert_plumber_sanitize_choices'
	));
	$wp_customize->add_control( 'expert_plumber_dropdown_anim', array(
		'label'    => __( 'Menu Dropdown Animations', 'expert-plumber' ),
		'section'  => 'expert_plumber_theme_options_section',
		'type'     => 'select',
		'choices'  => array(
			'bounceInUp'  => __('bounceInUp', 'expert-plumber'),
			'fadeInUp' => __('fadeInUp', 'expert-plumber'),
			'zoomIn'    => __('zoomIn', 'expert-plumber'),
			'None'    => __('None', 'expert-plumber')
		),
	));

	//Bottom Header
	$wp_customize->add_section( 'expert_plumber_header_section' , array(
    	'title'    => __( 'Header', 'expert-plumber' ),
		'priority' => null,
		'panel' => 'expert_plumber_panel_id'
	) );

	$wp_customize->add_setting('expert_plumber_topheader_phone_no',array(
    	'default' => '',
    	'sanitize_callback'	=> 'expert_plumber_sanitize_phone_number'
	));
	$wp_customize->add_control('expert_plumber_topheader_phone_no',array(
   	'type' => 'text',
   	'label' => __('Add Phone Number','expert-plumber'),
   	'section' => 'expert_plumber_header_section',
	));

	$wp_customize->add_setting('expert_plumber_topheader_facebook_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_plumber_topheader_facebook_url',array(
   	'type' => 'url',
   	'label' => __('Add Facebook URL','expert-plumber'),
   	'section' => 'expert_plumber_header_section',
	));

	$wp_customize->add_setting('expert_plumber_topheader_twitter_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_plumber_topheader_twitter_url',array(
   	'type' => 'url',
   	'label' => __('Add Twitter URL','expert-plumber'),
   	'section' => 'expert_plumber_header_section',
	));

	$wp_customize->add_setting('expert_plumber_topheader_linkedin_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_plumber_topheader_linkedin_url',array(
   	'type' => 'url',
   	'label' => __('Add Linkedin URL','expert-plumber'),
   	'section' => 'expert_plumber_header_section',
	));

	$wp_customize->add_setting('expert_plumber_topheader_youtube_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_plumber_topheader_youtube_url',array(
   	'type' => 'url',
   	'label' => __('Add Youtube URL','expert-plumber'),
   	'section' => 'expert_plumber_header_section',
	));

	$wp_customize->add_setting('expert_plumber_getquote_btn_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_getquote_btn_text',array(
   	'type' => 'text',
   	'label' => __('Add Get Quote Button Text','expert-plumber'),
   	'section' => 'expert_plumber_header_section',
	));

	$wp_customize->add_setting('expert_plumber_getquote_btn_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_plumber_getquote_btn_url',array(
   	'type' => 'url',
   	'label' => __('Add Get Quote Button URL','expert-plumber'),
   	'section' => 'expert_plumber_header_section',
	));

	$wp_customize->add_setting('expert_plumber_phoneicon_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_phoneicon_color',array(
		'type' => 'color',
		'label' => __('Phone icon Color','expert-plumber'),
		'section' => 'expert_plumber_header_section'
	));

	$wp_customize->add_setting('expert_plumber_phonetext_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_phonetext_color',array(
		'type' => 'color',
		'label' => __('Phone Text Color','expert-plumber'),
		'section' => 'expert_plumber_header_section'
	));

	$wp_customize->add_setting('expert_plumber_social_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_social_color',array(
		'type' => 'color',
		'label' => __('Social Icon Color','expert-plumber'),
		'section' => 'expert_plumber_header_section'
	));

	$wp_customize->add_setting('expert_plumber_hdrbtn_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_hdrbtn_color',array(
		'type' => 'color',
		'label' => __('Button Text Color','expert-plumber'),
		'section' => 'expert_plumber_header_section'
	));

	$wp_customize->add_setting('expert_plumber_hdrbtnbg_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_hdrbtnbg_color',array(
		'type' => 'color',
		'label' => __('Button Background Color','expert-plumber'),
		'section' => 'expert_plumber_header_section'
	));

	$wp_customize->add_setting('expert_plumber_menu_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_menu_color',array(
		'type' => 'color',
		'label' => __('Menu Color','expert-plumber'),
		'section' => 'expert_plumber_header_section'
	));

	$wp_customize->add_setting('expert_plumber_submenu_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_submenu_color',array(
		'type' => 'color',
		'label' => __('Submenu Color','expert-plumber'),
		'section' => 'expert_plumber_header_section'
	));

	$wp_customize->add_setting('expert_plumber_menubg_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_menubg_color',array(
		'type' => 'color',
		'label' => __('Menu Background Color','expert-plumber'),
		'section' => 'expert_plumber_header_section'
	));

	$wp_customize->add_setting('expert_plumber_hdrbg_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_hdrbg_color',array(
		'type' => 'color',
		'label' => __('Header Background Color','expert-plumber'),
		'section' => 'expert_plumber_header_section'
	));

	//home page slider
	$wp_customize->add_section( 'expert_plumber_slider_section' , array(
    	'title'    => __( 'Slider Settings', 'expert-plumber' ),
		'priority' => null,
		'panel' => 'expert_plumber_panel_id'
	) );

	$wp_customize->add_setting('expert_plumber_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'expert_plumber_sanitize_checkbox'
	));
	$wp_customize->add_control('expert_plumber_slider_hide_show',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Slider','expert-plumber'),
		'section' => 'expert_plumber_slider_section',
	));

	$wp_customize->add_setting( 'expert_plumber_slider_effect', array(
		'default'           => '',
		'sanitize_callback' => 'expert_plumber_sanitize_choices'
	));
	$wp_customize->add_control( 'expert_plumber_slider_effect', array(
		'label'    => __( 'Onload Transactions Effects', 'expert-plumber' ),
		'section'  => 'expert_plumber_slider_section',
		'type'     => 'select',
		'choices'  => array(
			'bounceInLeft'  => __('bounceInLeft', 'expert-plumber'),
			'bounceInRight' => __('bounceInRight', 'expert-plumber'),
			'bounceInUp'    => __('bounceInUp', 'expert-plumber'),
			'bounceInDown'    => __('bounceInDown', 'expert-plumber'),
			'zoomIn'  => __('zoomIn', 'expert-plumber'),
			'zoomOut' => __('zoomOut', 'expert-plumber'),
			'fadeInDown'    => __('fadeInDown', 'expert-plumber'),
			'fadeInUp'    => __('fadeInUp', 'expert-plumber'),
			'fadeInLeft'  => __('fadeInLeft', 'expert-plumber'),
			'fadeInRight' => __('fadeInRight', 'expert-plumber'),
			'flip-up'    => __('flip-up', 'expert-plumber'),
			'none'    => __('none', 'expert-plumber')
		),
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'expert_plumber_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'expert_plumber_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'expert_plumber_slider' . $count, array(
			'label' => __('Select Slider Image Page', 'expert-plumber' ),
			'description' => __('Image Size (620px x 620px)', 'expert-plumber' ),
			'section' => 'expert_plumber_slider_section',
			'type' => 'dropdown-pages'
		));
	}

	$wp_customize->add_setting('expert_plumber_slider_background_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'expert_plumber_slider_background_img',array(
		'label' => __('Slider Background Image','expert-plumber'),
		'description' => __('Image size (1400px x 680px)','expert-plumber'),
		'section' => 'expert_plumber_slider_section'
	)));

	$wp_customize->add_setting('expert_plumber_slider_excerpt_length',array(
		'default' => '15',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_slider_excerpt_length',array(
		'type' => 'number',
		'label' => __('Slider Excerpt Length','expert-plumber'),
		'section' => 'expert_plumber_slider_section',
	));

	$wp_customize->add_setting('expert_plumber_slider_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_slider_title_font_size',array(
		'type' => 'number',
		'label' => __('Title Font Size','expert-plumber'),
		'section' => 'expert_plumber_slider_section',
	));

	$wp_customize->add_setting('expert_plumber_slider_text_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_slider_text_font_size',array(
		'type' => 'number',
		'label' => __('Text Font Size','expert-plumber'),
		'section' => 'expert_plumber_slider_section',
	));

	$wp_customize->add_setting('expert_plumber_slidertitle_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_slidertitle_color',array(
		'type' => 'color',
		'label' => __('Title Color','expert-plumber'),
		'section' => 'expert_plumber_slider_section'
	));

	$wp_customize->add_setting('expert_plumber_slidertext_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_slidertext_color',array(
		'type' => 'color',
		'label' => __('Text Color','expert-plumber'),
		'section' => 'expert_plumber_slider_section'
	));

	$wp_customize->add_setting('expert_plumber_sliderbtn_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_sliderbtn_color',array(
		'type' => 'color',
		'label' => __('Button Text Color','expert-plumber'),
		'section' => 'expert_plumber_slider_section'
	));

	$wp_customize->add_setting('expert_plumber_sliderbtnbg_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_sliderbtnbg_color',array(
		'type' => 'color',
		'label' => __('Button Background Color','expert-plumber'),
		'section' => 'expert_plumber_slider_section'
	));

	$wp_customize->add_setting('expert_plumber_slidernpbtn_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_slidernpbtn_color',array(
		'type' => 'color',
		'label' => __('Slider Next/Pre Button Color','expert-plumber'),
		'section' => 'expert_plumber_slider_section'
	));

	$wp_customize->add_setting('expert_plumber_slidernpbtnbg_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_slidernpbtnbg_color',array(
		'type' => 'color',
		'label' => __('Slider Next/Pre Bg Color','expert-plumber'),
		'section' => 'expert_plumber_slider_section'
	));

	$wp_customize->add_setting('expert_plumber_slidernpbtnhvr_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_slidernpbtnhvr_color',array(
		'type' => 'color',
		'label' => __('Slider Next/Pre Hover Color','expert-plumber'),
		'section' => 'expert_plumber_slider_section'
	));

	$wp_customize->add_setting('expert_plumber_slidernpbtnhvrbg_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_slidernpbtnhvrbg_color',array(
		'type' => 'color',
		'label' => __('Slider Next/Pre Hover Bg Color','expert-plumber'),
		'section' => 'expert_plumber_slider_section'
	));

	$wp_customize->add_setting('expert_plumber_sliderimgbdr_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_sliderimgbdr_color',array(
		'type' => 'color',
		'label' => __('Slider Image Border Color','expert-plumber'),
		'section' => 'expert_plumber_slider_section'
	));

	//Services Section
	$wp_customize->add_section('expert_plumber_services_section',array(
		'title'	=> __('Services Section','expert-plumber'),
		'description'=> __('<b>Note :</b> This section will appear below the slider.','expert-plumber'),
		'panel' => 'expert_plumber_panel_id',
	));

	$wp_customize->add_setting('expert_plumber_services_section_title',array(
	 	'default' => '',
	 	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_services_section_title',array(
		'type' => 'text',
		'label' => __('Add Section Title','expert-plumber'),
		'section' => 'expert_plumber_services_section',
	));

	$wp_customize->add_setting('expert_plumber_services_section_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_services_section_title_font_size',array(
		'type' => 'number',
		'label' => __('Title Font Size','expert-plumber'),
		'section' => 'expert_plumber_services_section',
	));

	$wp_customize->add_setting('expert_plumber_servicetitle_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_servicetitle_color',array(
		'type' => 'color',
		'label' => __('Title Color','expert-plumber'),
		'section' => 'expert_plumber_services_section'
	));

	$wp_customize->add_setting('expert_plumber_servicei_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_servicei_color',array(
		'type' => 'color',
		'label' => __('Title Icon Color','expert-plumber'),
		'section' => 'expert_plumber_services_section'
	));

	$wp_customize->add_setting('expert_plumber_serviceb_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_serviceb_color',array(
		'type' => 'color',
		'label' => __('Title Border Color','expert-plumber'),
		'section' => 'expert_plumber_services_section'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('expert_plumber_services_category',array(
		'default' => 'select',
		'sanitize_callback' => 'expert_plumber_sanitize_choices',
	));
	$wp_customize->add_control('expert_plumber_services_category',array(
		'type' => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category To Display Post','expert-plumber'),
		'section' => 'expert_plumber_services_section',
	));

	$wp_customize->add_setting('expert_plumber_service_number',array(
		'default'	=> '8',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('expert_plumber_service_number',array(
		'label'	=> __('Number of posts to show in a category','expert-plumber'),
		'section' => 'expert_plumber_services_section',
		'type'	  => 'number'
	));

	$expert_plumber_service_number = get_theme_mod('expert_plumber_service_number', 8);
	for ($i=1; $i <= $expert_plumber_service_number; $i++) { 

    	$wp_customize->add_setting('expert_plumber_service_icon' . $i, array(
			'default' => 'fas fa-wrench',
			'sanitize_callback' => 'sanitize_text_field'
    	));
    	$wp_customize->add_control(new Expert_Plumber_Fontawesome_Icon_Chooser($wp_customize, 'expert_plumber_service_icon' . $i, array(
        	'section' => 'expert_plumber_services_section',
        	'type' => 'icon',
        	'label' => esc_html__('Service Icon ', 'expert-plumber') . $i
    	)));
	}

	$wp_customize->add_setting('expert_plumber_service_icon_size',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_service_icon_size',array(
		'type' => 'number',
		'label' => __('Icon Size','expert-plumber'),
		'section' => 'expert_plumber_services_section',
	));

	$wp_customize->add_setting('expert_plumber_service_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_service_font_size',array(
		'type' => 'number',
		'label' => __('Font Size','expert-plumber'),
		'section' => 'expert_plumber_services_section',
	));

	$wp_customize->add_setting('expert_plumber_service_boxicon_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_service_boxicon_color',array(
		'type' => 'color',
		'label' => __('Box Icon Color','expert-plumber'),
		'section' => 'expert_plumber_services_section'
	));

	$wp_customize->add_setting('expert_plumber_service_boxiconbg_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_service_boxiconbg_color',array(
		'type' => 'color',
		'label' => __('Box Icon Bg Color','expert-plumber'),
		'section' => 'expert_plumber_services_section'
	));

	$wp_customize->add_setting('expert_plumber_service_boxtext_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_service_boxtext_color',array(
		'type' => 'color',
		'label' => __('Box Title Color','expert-plumber'),
		'section' => 'expert_plumber_services_section'
	));

	$wp_customize->add_setting('expert_plumber_service_boxbg_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_service_boxbg_color',array(
		'type' => 'color',
		'label' => __('Box Title Bg Color','expert-plumber'),
		'section' => 'expert_plumber_services_section'
	));

	$wp_customize->add_setting('expert_plumber_services_btn_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_services_btn_text',array(
		'type' => 'text',
		'label' => __('Add View Services Button Text','expert-plumber'),
		'section' => 'expert_plumber_services_section',
	));

	$wp_customize->add_setting('expert_plumber_services_btn_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_plumber_services_btn_url',array(
		'type' => 'url',
		'label' => __('Add View Services Button URL','expert-plumber'),
		'section' => 'expert_plumber_services_section',
	));

	$wp_customize->add_setting('expert_plumber_services_btn_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_services_btn_font_size',array(
		'type' => 'number',
		'label' => __('Button Font Size','expert-plumber'),
		'section' => 'expert_plumber_services_section',
	));

	$wp_customize->add_setting('expert_plumber_service_btn_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_service_btn_color',array(
		'type' => 'color',
		'label' => __('Text Color','expert-plumber'),
		'section' => 'expert_plumber_services_section'
	));

	$wp_customize->add_setting('expert_plumber_service_btnbg_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_service_btnbg_color',array(
		'type' => 'color',
		'label' => __('background Color','expert-plumber'),
		'section' => 'expert_plumber_services_section'
	));

	$wp_customize->add_setting('expert_plumber_service_section_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_service_section_padding',array(
		'type' => 'number',
		'label' => __('Section Top Bottom Padding','expert-plumber'),
		'section' => 'expert_plumber_services_section',
	));

	//Footer
 	$wp_customize->add_section( 'expert_plumber_footer', array(
    	'title'  => __( 'Footer Settings', 'expert-plumber' ),
		'priority' => null,
		'panel' => 'expert_plumber_panel_id'
	) );

	$wp_customize->add_setting('expert_plumber_show_back_totop',array(
 		'default' => true,
   		'sanitize_callback'	=> 'expert_plumber_sanitize_checkbox'
	));
	$wp_customize->add_control('expert_plumber_show_back_totop',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Back to Top','expert-plumber'),
	   	'section' => 'expert_plumber_footer'
	));

 	$wp_customize->add_setting('expert_plumber_footer_copy',array(
		'default' => 'Expert Plumber WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_plumber_footer_copy',array(
		'label'	=> __('Copyright Text','expert-plumber'),
		'section' => 'expert_plumber_footer',
		'setting' => 'expert_plumber_footer_copy',
		'type' => 'text'
	));

	$wp_customize->add_setting('expert_plumber_footer_copy_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
	));
	$wp_customize->add_control('expert_plumber_footer_copy_font_size',array(
		'type' => 'number',
		'label' => __('Font Size','expert-plumber'),
		'section' => 'expert_plumber_footer',
	));

	$wp_customize->add_setting('expert_plumber_copyright_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_plumber_sanitize_float'
 	));
 	$wp_customize->add_control('expert_plumber_copyright_padding',array(
		'type' => 'number',
		'label' => __('Copyright Top Bottom Padding','expert-plumber'),
		'section' => 'expert_plumber_footer',
	));

	$wp_customize->add_setting('expert_plumber_copyright_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_copyright_color',array(
		'type' => 'color',
		'label' => __('Copyright Color','expert-plumber'),
		'section' => 'expert_plumber_footer'
	));

	$wp_customize->add_setting('expert_plumber_copyrightbg_color',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_plumber_copyrightbg_color',array(
		'type' => 'color',
		'label' => __('Copyright BG Color','expert-plumber'),
		'section' => 'expert_plumber_footer'
	));

	$wp_customize->register_section_type( Expert_Plumber_Button::class );

	$wp_customize->add_section(
		new Expert_Plumber_Button( $wp_customize, 'expert_plumber_pro_link', [
			'title'      => __( 'Expert Plumber Pro', 'expert-plumber' ),
			'priority'    => 0,
			'button_text' => __( 'Go Pro', 'expert-plumber' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/product/plumber-wordpress-theme/', 'expert-plumber'),
			'panel' => 'expert_plumber_panel_id'
		] )
	);

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'expert_plumber_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'expert_plumber_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'expert_plumber_customize_register' );

function expert_plumber_customize_partial_blogname() {
	bloginfo( 'name' );
}

function expert_plumber_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function expert_plumber_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function expert_plumber_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

if (class_exists('WP_Customize_Control')) {

 	class Expert_Plumber_Fontawesome_Icon_Chooser extends WP_Customize_Control {

     	public $type = 'icon';

     	public function render_content() {
            ?>
         <label>
             <span class="customize-control-title">
                 <?php echo esc_html($this->label); ?>
             </span>

             <?php if ($this->description) { ?>
                 <span class="description customize-control-description">
                     <?php echo wp_kses_post($this->description); ?>
                 </span>
             <?php } ?>

             <div class="expert-plumber-selected-icon">
                 <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
                 <span><i class="fa fa-angle-down"></i></span>
             </div>

             <ul class="expert-plumber-icon-list clearfix">
                 <?php
                 $expert_plumber_font_awesome_icon_array = expert_plumber_font_awesome_icon_array();
                 foreach ($expert_plumber_font_awesome_icon_array as $expert_plumber_font_awesome_icon) {
                     $icon_class = $this->value() == $expert_plumber_font_awesome_icon ? 'icon-active' : '';
                     echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($expert_plumber_font_awesome_icon) . '"></i></li>';
                 }
                 ?>
             </ul>
             <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
         </label>
         <?php
     	}

 	}

}
function expert_plumber_customizer_script() {
     
   wp_enqueue_style( 'font-awesome-1', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css');
}
add_action( 'customize_controls_enqueue_scripts', 'expert_plumber_customizer_script' );