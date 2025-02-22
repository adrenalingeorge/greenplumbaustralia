<?php

/**
 * file for holding dashboard welcome page for theme
 */
if (!function_exists('mighty_plumbers_is_plugin_installed')) {
    function mighty_plumbers_is_plugin_installed($plugin_slug)
    {
        $plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
        return file_exists($plugin_path);
    }
}
if (!function_exists('mighty_plumbers_is_plugin_activated')) {
    function mighty_plumbers_is_plugin_activated($plugin_slug)
    {
        return is_plugin_active($plugin_slug);
    }
}
if (!function_exists('mighty_plumbers_welcome_notice')) :
    function mighty_plumbers_welcome_notice()
    {
        if (get_option('mighty_plumbers_dismissed_custom_notice')) {
            return;
        }
        global $pagenow;
        $current_screen  = get_current_screen();

        if (is_admin()) {
            if ($current_screen->id !== 'dashboard' && $current_screen->id !== 'themes') {
                return;
            }
            if (is_network_admin()) {
                return;
            }
            if (!current_user_can('manage_options')) {
                return;
            }
            $theme = wp_get_theme();

            if (is_child_theme()) {
                $theme = wp_get_theme()->parent();
            }
            $mighty_plumbers_version = $theme->get('Version');


?>
            <div class="mighty-plumbers-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice" id="mighty-plumbers-dismiss-notice">
                <div class="info-content">
                    <div class="notice-holder">
                        <h5><span class="theme-name"><span><?php echo __('Welcome to Mighty Plumbers!', 'mighty-plumbers'); ?></span></h5>
                        <h1><?php echo __('Take your website building to next level with Cozy Blocks!', 'mighty-plumbers'); ?></h1>
                        </h3>
                        <div class="notice-text">
                            <p class="cozy-blocks-text"><?php echo __('Build website for any niche effortlessly with Cozy Blocks! Just install and activate to access over 30 advanced blocks, 200+ ready to use patterns, and a comprehensive library of 10+ starter templates. Start crafting your perfect website today!', 'mighty-plumbers') ?></p>
                            <p><?php echo __('Please install and activate all recommended to use blcoks and demo importer features- Cozy Addons, Cozy Essential Addons, Advanced Import.', 'mighty-plumbers') ?></p>
                        </div>
                        <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'mighty-plumbers'); ?></a>
                        <a href="<?php echo admin_url(); ?>themes.php?page=about-mighty-plumbers" class="button admin-button info-button"><?php echo __('Explore Mighty Plumbers', 'mighty-plumbers'); ?></a>

                    </div>
                </div>
                <div class="theme-hero-screens">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/admin/images/screen_plugin_ct.png'); ?>" />
                </div>

            </div>
    <?php
        }
    }
endif;
add_action('admin_notices', 'mighty_plumbers_welcome_notice');
function mighty_plumbers_dismissble_notice()
{
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'mighty_plumbers_admin_nonce')) {
        wp_send_json_error(array('message' => 'Nonce verification failed.'));
        return;
    }

    $result = update_option('mighty_plumbers_dismissed_custom_notice', 1);

    if ($result) {
        wp_send_json_success();
    } else {
        wp_send_json_error(array('message' => 'Failed to update option'));
    }
}
add_action('wp_ajax_mighty_plumbers_dismissble_notice', 'mighty_plumbers_dismissble_notice');
// Hook into a custom action when the button is clicked
add_action('wp_ajax_mighty_plumbers_install_and_activate_plugins', 'mighty_plumbers_install_and_activate_plugins');
add_action('wp_ajax_nopriv_mighty_plumbers_install_and_activate_plugins', 'mighty_plumbers_install_and_activate_plugins');
add_action('wp_ajax_mighty_plumbers_rplugin_activation', 'mighty_plumbers_rplugin_activation');
add_action('wp_ajax_nopriv_mighty_plumbers_rplugin_activation', 'mighty_plumbers_rplugin_activation');

// Function to install and activate the plugins



function mighty_plumbers_check_plugin_installed_status($pugin_slug, $plugin_file)
{
    return file_exists(ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file) ? true : false;
}

/* Check if plugin is activated */


function mighty_plumbers_check_plugin_active_status($pugin_slug, $plugin_file)
{
    return is_plugin_active($pugin_slug . '/' . $plugin_file) ? true : false;
}

require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/misc.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
function mighty_plumbers_install_and_activate_plugins()
{
    if (!current_user_can('manage_options')) {
        return;
    }
    check_ajax_referer('mighty_plumbers_welcome_nonce', 'nonce');
    // Define the plugins to be installed and activated
    $recommended_plugins = array(
        array(
            'slug' => 'cozy-addons',
            'file' => 'cozy-addons.php',
            'name' => __('Cozy Addons', 'mighty-plumbers')
        ),
        array(
            'slug' => 'advanced-import',
            'file' => 'advanced-import.php',
            'name' => __('Advanced Imporrt', 'mighty-plumbers')
        ),
        array(
            'slug' => 'cozy-essential-addons',
            'file' => 'cozy-essential-addons.php',
            'name' => __('Cozy Essential Addons', 'mighty-plumbers')
        ),
        // Add more plugins here as needed
    );

    // Include the necessary WordPress functions


    // Set up a transient to store the installation progress
    set_transient('install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10);

    // Loop through each plugin
    foreach ($recommended_plugins as $plugin) {
        $plugin_slug = $plugin['slug'];
        $plugin_file = $plugin['file'];
        $plugin_name = $plugin['name'];

        // Check if the plugin is active
        if (is_plugin_active($plugin_slug . '/' . $plugin_file)) {
            mighty_plumbers_update_install_and_activate_progress($plugin_name, 'Already Active');
            continue; // Skip to the next plugin
        }

        // Check if the plugin is installed but not active
        if (is_mighty_plumbers_plugin_installed($plugin_slug . '/' . $plugin_file)) {
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);
            if (is_wp_error($activate)) {
                mighty_plumbers_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            mighty_plumbers_update_install_and_activate_progress($plugin_name, 'Activated');
            continue; // Skip to the next plugin
        }

        // Plugin is not installed or activated, proceed with installation
        mighty_plumbers_update_install_and_activate_progress($plugin_name, 'Installing');

        // Fetch plugin information
        $api = plugins_api('plugin_information', array(
            'slug' => $plugin_slug,
            'fields' => array('sections' => false),
        ));

        // Check if plugin information is fetched successfully
        if (is_wp_error($api)) {
            mighty_plumbers_update_install_and_activate_progress($plugin_name, 'Error');
            continue; // Skip to the next plugin
        }

        // Set up the plugin upgrader
        $upgrader = new Plugin_Upgrader();
        $install = $upgrader->install($api->download_link);

        // Check if installation is successful
        if ($install) {
            // Activate the plugin
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);

            // Check if activation is successful
            if (is_wp_error($activate)) {
                mighty_plumbers_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            mighty_plumbers_update_install_and_activate_progress($plugin_name, 'Activated');
        } else {
            mighty_plumbers_update_install_and_activate_progress($plugin_name, 'Error');
        }
    }

    // Delete the progress transient
    $redirect_url = admin_url('themes.php?page=advanced-import');

    // Delete the progress transient
    delete_transient('install_and_activate_progress');
    // Return JSON response
    wp_send_json_success(array('redirect_url' => $redirect_url));
}

// Function to check if a plugin is installed but not active
function is_mighty_plumbers_plugin_installed($plugin_slug)
{
    $plugins = get_plugins();
    return isset($plugins[$plugin_slug]);
}

// Function to update the installation and activation progress
function mighty_plumbers_update_install_and_activate_progress($plugin_name, $status)
{
    $progress = get_transient('install_and_activate_progress');
    $progress[] = array(
        'plugin' => $plugin_name,
        'status' => $status,
    );
    set_transient('install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10);
}


function mighty_plumbers_dashboard_menu()
{
    add_theme_page(esc_html__('About Mighty Plumbers', 'mighty-plumbers'), esc_html__('About Mighty Plumbers', 'mighty-plumbers'), 'edit_theme_options', 'about-mighty-plumbers', 'mighty_plumbers_theme_info_display');
}
add_action('admin_menu', 'mighty_plumbers_dashboard_menu');
function mighty_plumbers_theme_info_display()
{ ?>
    <div class="dashboard-about-mighty-plumbers">
        <div class="mighty-plumbers-dashboard">
            <ul id="mighty-plumbers-dashboard-tabs-nav">
                <li><a href="#mighty-plumbers-welcome"><?php echo __('Get Started', 'mighty-plumbers') ?></a></li>
                <li><a href="#mighty-plumbers-setup"><?php echo __('Setup Instruction', 'mighty-plumbers') ?></a></li>
                <li><a href="#mighty-plumbers-comparision"><?php echo __('FREE VS PRO', 'mighty-plumbers') ?></a></li>
            </ul> <!-- END tabs-nav -->
            <div id="tabs-content">
                <div id="mighty-plumbers-welcome" class="tab-content">
                    <h1> <?php echo __('Welcome to the Mighty Plumbers', 'mighty-plumbers') ?></h1>
                    <p><?php echo __('Mighty Plumbers is a dynamic and highly customizable WordPress theme perfect for plumbing service agencies and versatile enough for any home services niche, including handyman, electrician, HVAC, gardening, construction, and contracting businesses. Featuring full site editing with an intuitive drag-and-drop builder, it offers unlimited design possibilities from scratch. With over 15 pre-built homepage sections for quick and easy setup, this theme saves you time while providing a professional look. Mighty Plumbers is user-friendly, responsive, and SEO-friendly, ensuring your website stands out and attracts more clients with its polished and impactful design. Explore demos and more details about Mighty Plumbers - at https://cozythemes.com/mighty-plumbers-wordpress-theme/.', 'mighty-plumbers') ?></p>
                    <h3><?php echo __('Required Plugins', 'mighty-plumbers'); ?></h3>
                    <p class="notice-text"><?php echo __('Please install and activate all recommended pluign to import the demo with "one click demo import" feature and unlock premium features!(for pro version)', 'mighty-plumbers') ?></p>
                    <ul class="mighty-plumbers-required-plugin">
                        <li>

                            <h4><?php echo __('1. Cozy Addons', 'mighty-plumbers'); ?>
                                <?php
                                if (mighty_plumbers_is_plugin_activated('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'mighty-plumbers');
                                } elseif (mighty_plumbers_is_plugin_installed('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'mighty-plumbers');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'mighty-plumbers') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>

                            <h4><?php echo __('2. Cozy Essential Addons', 'mighty-plumbers'); ?>
                                <?php
                                if (mighty_plumbers_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'mighty-plumbers');
                                } elseif (mighty_plumbers_is_plugin_installed('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'mighty-plumbers');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-essential-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'mighty-plumbers') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>
                            <h4><?php echo __('3. Advanced Import - Need only to use "one click demo import" features', 'mighty-plumbers'); ?>
                                <?php
                                if (mighty_plumbers_is_plugin_activated('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin has been already activated!', 'mighty-plumbers');
                                } elseif (mighty_plumbers_is_plugin_installed('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'mighty-plumbers');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'mighty-plumbers') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                    </ul>
                    <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'mighty-plumbers'); ?></a>
                </div>
                <div id="mighty-plumbers-setup" class="tab-content">
                    <h3 class="mighty-plumbers-baisc-guideline-header"><?php echo __('Basic Theme Setup', 'mighty-plumbers') ?></h3>
                    <div class="mighty-plumbers-baisc-guideline">
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Header Layout:', 'mighty-plumbers') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Header:', 'mighty-plumbers') ?></li>
                                        <li> - <?php echo __('click on Header > Click on Edit (Icon) -> Add or Remove Requirend block/content as your requirement.:', 'mighty-plumbers') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'mighty-plumbers') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Footer Layout:', 'mighty-plumbers') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Footer:', 'mighty-plumbers') ?></li>
                                        <li> - <?php echo __('click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'mighty-plumbers') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'mighty-plumbers') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'mighty-plumbers') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'mighty-plumbers') ?></li>
                                        <li> - <?php echo __('click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'mighty-plumbers') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'mighty-plumbers') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template(Like: Frontpage/Blog/Archive etc.)', 'mighty-plumbers') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'mighty-plumbers') ?></li>
                                        <li> - <?php echo __('Click on Manage all Templates', 'mighty-plumbers') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template', 'mighty-plumbers') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'mighty-plumbers') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template Parts(Header/Footer/Sidebar)', 'mighty-plumbers') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns:', 'mighty-plumbers') ?></li>
                                        <li> - <?php echo __('Click on Manage All Template Parts', 'mighty-plumbers') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template parts', 'mighty-plumbers') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'mighty-plumbers') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="mighty-plumbers-comparision" class="tab-content">
                    <div class="featured-list">
                        <div class="half-col free-features">
                            <h3><?php echo __('Mighty Plumbers Features (Free)', 'mighty-plumbers') ?></h3>
                            <ul>
                                <li><strong> - <?php echo __('Mighty Plumbers offer wide range of  ready to use Home Sections Patterns', 'mighty-plumbers') ?></strong>
                                    <ul>
                                        <li><?php echo __('Hero Section', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('About Us Section', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('About Us Page Layout', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('Contact Us Page Section', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('Counter Section', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('FAQ Section', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('Latest Post Section', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('Portfolio Section', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('Pricing Table - 3', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('Service Section - 2', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('Service Page Layout', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('Service Areas Section', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('Team Section', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('Testimonial Section', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('Who We Serve Section', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('Newsletter Section Section', 'mighty-plumbers') ?></li>
                                        <li><?php echo __('Partners/Brands Logo Showcase Section', 'mighty-plumbers') ?></li>
                                    </ul>
                                </li>

                                <li> <strong>- <?php echo __('FSE Templates Ready', 'mighty-plumbers') ?></strong>
                                    <ul>
                                        <li> <?php echo __('404 Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Archive Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Product Catalog Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Blank Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Front Page Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Blog Home Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Index Page Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Search Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Sitemap Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Page Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Left Sidebar Page Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Full Width Page  Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Single Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Single Product Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Cart Page Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Checkout Page Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Left Sidebar Single Template', 'mighty-plumbers') ?></li>
                                        <li> <?php echo __('Full Width Single Template', 'mighty-plumbers') ?></li>

                                    </ul>
                                <li>
                                <li><strong> - <?php echo __('Fully Customizable Header Layout - 2', 'mighty-plumbers') ?></strong></li>
                                <li> <strong>- <?php echo __('Fully Customizable Footer Layout - 3 ', 'mighty-plumbers') ?></strong></li>
                                <li><strong> - <?php echo __('12 Beautiful Fonts Option', 'mighty-plumbers') ?></strong></li>
                                <li> <strong>- <?php echo __('Innper Page Templates', 'mighty-plumbers') ?></strong></li>
                                <li> <strong>- <?php echo __('On Scroll Animation option', 'mighty-plumbers') ?></strong></li>
                                <li> <strong>- <?php echo __('Access Cozy Blocks with upto 22 Advanced Blocks for FSE and Gutenberg Editor', 'mighty-plumbers') ?></strong></li>
                            </ul>
                        </div>
                        <div class="half-col pro-features">
                            <h3><?php echo __('Premium Features', 'mighty-plumbers') ?></h3>
                            <p><?php echo __('Including all free features and comes with 30+ advanced blocks that enhance and power up the ecommerce website, here are some blocks that add the powerful features for your ecommerce/shopping website. By seamlessly integrating these blocks with our ready-to-use patterns, you have the flexibility to craft a wide selection of captivating online store ease', 'mighty-plumbers') ?></p>
                            <ul>
                                <li><?php echo __('2 more additional premium starter site ready to import demo', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Banner Section with Request Quote Form', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Request a Quote Section', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Google Map Location Section', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Offer and Promotion Display Carousel Section', 'mighty-plumbers') ?></li>
                                <li><?php echo __('About us Section With Counter', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Features Section - 2', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Services Carousel Section', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Product Display Shop Section', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Advanced FAQ with Accordion Section', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Parters/Brands Logo Carousel Section', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Slider Section', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Post Blocks', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Counter Block', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Team Block (With Carousel)', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Testimonials Block (With Carousel)', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Social Shares Blocks', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Social Icons Blocks', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Breadcrumbs Block', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Portfolio Block (With Custom Post Type)', 'mighty-plumbers') ?></li>
                                <li><?php echo __('Popup buidler Block to display offer and flash sale', 'mighty-plumbers') ?>
                                    <?php echo __('and access', 'mighty-plumbers') ?> <a href="https://cozythemes.com/cozy-addons/" target="_blank"><?php echo __('Cozy Blocks with more than 30+ advanced block.', 'mighty-plumbers') ?></a>
                                </li>

                            </ul>
                            <br />

                            <a href="https://cozythemes.com/pricing-and-plans/" class="upgrade-btn button" target="_blank"><?php echo __('Upgrade to Pro', 'mighty-plumbers') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
