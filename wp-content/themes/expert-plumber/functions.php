<?php
/**
 * Expert Plumber functions and definitions
 *
 * @subpackage Expert Plumber
 * @since 1.0
 */

include get_theme_file_path( 'vendor/wptrt/autoload/src/Expert_Plumber_Loader.php' );

$expert_plumber_loader = new \WPTRT\Autoload\Expert_Plumber_Loader();

$expert_plumber_loader->expert_plumber_add( 'WPTRT\\Customize\\Section', get_theme_file_path( 'vendor/wptrt/customize-section-button/src' ) );

$expert_plumber_loader->expert_plumber_register();

function expert_plumber_setup() {

	load_theme_textdomain( 'expert-plumber', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background', $defaults = array(
	    'default-color'          => '',
	    'default-image'          => '',
	    'default-repeat'         => '',
	    'default-position-x'     => '',
	    'default-attachment'     => '',
	    'wp-head-callback'       => '_custom_background_cb',
	    'admin-head-callback'    => '',
	    'admin-preview-callback' => ''
	));

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'expert-plumber' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', expert_plumber_fonts_url() ) );

	// Theme Activation Notice
	global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'expert_plumber_activation_notice' );
	}

}
add_action( 'after_setup_theme', 'expert_plumber_setup' );

// Notice after Theme Activation
function expert_plumber_activation_notice() {
	echo '<div class="notice notice-success is-dismissible start-notice">';
		echo '<h3>'. esc_html__( 'Welcome to Luzuk!!', 'expert-plumber' ) .'</h3>';
		echo '<p>'. esc_html__( 'Thank you for choosing Expert Plumber theme. It will be our pleasure to have you on our Welcome page to serve you better.', 'expert-plumber' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=expert_plumber_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'expert-plumber' ) .'</a></p>';
	echo '</div>';
}

function expert_plumber_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'expert-plumber' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'expert-plumber' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'expert-plumber' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'expert-plumber' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'expert-plumber' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'expert-plumber' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'expert-plumber' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'expert-plumber' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'expert-plumber' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'expert-plumber' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'expert-plumber' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'expert-plumber' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'expert-plumber' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'expert-plumber' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'expert_plumber_widgets_init' );

function expert_plumber_fonts_url(){
	$font_families = array(
		'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900'
	);

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_families ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
	return $contents;
}

//Enqueue scripts and styles.
function expert_plumber_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'expert-plumber-fonts', expert_plumber_fonts_url(), array(), null );
	
	//Bootstarp 
	wp_enqueue_style( 'bootstrap-css', esc_url( get_template_directory_uri() ).'/assets/css/bootstrap.css' );
	
	// Theme stylesheet.
	wp_enqueue_style( 'expert-plumber-basic-style', get_stylesheet_uri() );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'expert-plumber-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'expert-plumber-style' ), '1.0' );
		wp_style_add_data( 'expert-plumber-ie9', 'conditional', 'IE 9' );
	}
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'expert-plumber-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'expert-plumber-style' ), '1.0' );
	wp_style_add_data( 'expert-plumber-ie8', 'conditional', 'lt IE 9' );

	//font-awesome
	wp_enqueue_style( 'font-awesome-css', esc_url( get_template_directory_uri() ).'/assets/css/fontawesome-all.css' );

	wp_enqueue_style('custom-animations', get_template_directory_uri() . '/assets/css/animations.css');

	require get_parent_theme_file_path( '/lz-style.php' );
	wp_add_inline_style( 'expert-plumber-basic-style',$expert_plumber_custom_style );

	wp_enqueue_script( 'expert-plumber-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap-js', esc_url( get_template_directory_uri() ). '/assets/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', esc_url( get_template_directory_uri() ). '/assets/js/jquery.superfish.js', array('jquery') ,'',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'expert_plumber_scripts' );

function expert_plumber_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'expert_plumber_front_page_template' );

define('EXPERT_PLUMBER_LIVE_DEMO',__('https://www.luzukdemo.com/demo/expert-plumber/','expert-plumber'));
define('EXPERT_PLUMBER_PRO_DOCS',__('https://www.luzukdemo.com/docs/expert-plumber/','expert-plumber'));
define('EXPERT_PLUMBER_BUY_NOW',__('https://www.luzuk.com/product/plumber-wordpress-theme/','expert-plumber'));
define('EXPERT_PLUMBER_SUPPORT',__('https://wordpress.org/support/theme/expert-plumber/','expert-plumber'));
define('EXPERT_PLUMBER_CREDIT',__('https://www.luzuk.com/themes/free-plumber-wordpress-theme/','expert-plumber'));

if ( ! function_exists( 'expert_plumber_credit' ) ) {
	function expert_plumber_credit(){
		echo "<a href=".esc_url(EXPERT_PLUMBER_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('expert_plumber_footer_copy',__('Expert Plumber WordPress Theme By Luzuk','expert-plumber')))."</a>";
	}
}

function expert_plumber_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function expert_plumber_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function expert_plumber_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function expert_plumber_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function expert_plumber_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/* Excerpt Limit Begin */
function expert_plumber_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, (int)($word_limit) + 1);
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'expert_plumber_loop_columns');
	if (!function_exists('expert_plumber_loop_columns')) {
		function expert_plumber_loop_columns() {
	return 3; // 3 products per row
	}
}

/* Breadcrumb Begin */
function expert_plumber_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url(home_url());
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			echo "&nbsp;>&nbsp;";
			the_category(', ');
			if (is_single()) {
				echo "&nbsp;>&nbsp;";
				echo "<span> ";
					the_title();
				echo "</span>";
			}
		} elseif (is_page()) {
			echo "&nbsp;>&nbsp;";
			echo "<span> ";
				the_title();
			echo "</span> ";
		}
	}
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/font-awesome-icons.php' );

require get_parent_theme_file_path( '/inc/getting-started/getting-started.php' );

require get_parent_theme_file_path( '/inc/wptt-webfont-loader.php' );