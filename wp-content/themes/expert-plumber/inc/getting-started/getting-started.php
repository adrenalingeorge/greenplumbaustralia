<?php
//about theme info
add_action( 'admin_menu', 'expert_plumber_gettingstarted' );
function expert_plumber_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'expert-plumber'), esc_html__('About Theme', 'expert-plumber'), 'edit_theme_options', 'expert_plumber_guide', 'expert_plumber_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function expert_plumber_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'expert_plumber_admin_theme_style');

//guidline for about theme
function expert_plumber_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'expert-plumber' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Expert Plumber WordPress Theme', 'expert-plumber' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'expert-plumber' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'expert-plumber' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'expert-plumber' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'expert-plumber' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'expert-plumber' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'expert-plumber' ); ?> <a href="<?php echo esc_url( EXPERT_PLUMBER_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'expert-plumber' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Expert Plumber is a clean and elegant theme for local businesses such as plumbing, remodeling, air conditioner fitting, pipe repair, ac repair, pipe fitter, and fitting works, roofing, renovation, etc. You can literally use this theme for any kind of local business and handyman works. It has some useful features for business promotion such as social media icons and its retina-ready design gives the ability to display your content and pictures in a most promising way. There won’t be any issues while using this theme since it is made user-friendly to support non-experienced users and novices. Your website will experience hassle-free working thanks to the secure and clean codes that are also SEO optimized in a way to fetch better ranks to be able to make your website make its presence felt. The Bootstrap-based design is supported by professional quality HTML codes giving a good loading speed to the web page. Customizing this theme is not an issue as there are a lot of customization options included to help you make the desired changes. The banner has a sophisticated look with Call To Action (CTA) buttons making it more interactive and directional. With the translation-ready design, you are allowing the audience speaking different languages to understand your content.', 'expert-plumber')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Expert Plumber Theme', 'expert-plumber' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'expert-plumber'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( EXPERT_PLUMBER_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'expert-plumber'); ?></a>
			<a href="<?php echo esc_url( EXPERT_PLUMBER_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'expert-plumber'); ?></a>
			<a href="<?php echo esc_url(EXPERT_PLUMBER_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'expert-plumber'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/expert-plumber.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'expert-plumber'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'expert-plumber'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'expert-plumber'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'expert-plumber'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'expert-plumber'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'expert-plumber'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'expert-plumber'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'expert-plumber'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'expert-plumber'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'expert-plumber'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'expert-plumber'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'expert-plumber'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'expert-plumber'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>