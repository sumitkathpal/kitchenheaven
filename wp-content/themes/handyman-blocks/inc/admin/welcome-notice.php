<?php

/**
 * file for holding dashboard welcome page for theme
 */
if (!function_exists('handyman_blocks_is_plugin_installed')) {
    function handyman_blocks_is_plugin_installed($plugin_slug)
    {
        $plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
        return file_exists($plugin_path);
    }
}
if (!function_exists('handyman_blocks_is_plugin_activated')) {
    function handyman_blocks_is_plugin_activated($plugin_slug)
    {
        return is_plugin_active($plugin_slug);
    }
}
if (!function_exists('handyman_blocks_welcome_notice')) :
    function handyman_blocks_welcome_notice()
    {
        if (get_option('handyman_blocks_dismissed_custom_notice')) {
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
            $handyman_blocks_version = $theme->get('Version');


?>
            <div class="handyman-blocks-admin-notice notice notice-info is-dismissible content-install-plugin theme-info-notice" id="handyman-blocks-dismiss-notice">
                <div class="info-content">
                    <div class="notice-holder">
                        <h5><span class="theme-name"><span><?php echo __('Welcome to Handyman Blocks', 'handyman-blocks'); ?></span></h5>
                        <h1><?php echo __('Take your website building to next level with Cozy Blocks!', 'handyman-blocks'); ?></h1>
                        </h3>
                        <div class="notice-text">
                            <p class="cozy-blocks-text"><?php echo __('Build website for any niche effortlessly with Cozy Blocks! Just install and activate to access over 30 advanced blocks, 200+ ready to use patterns, and a comprehensive library of 10+ starter templates. Start crafting your perfect website today!', 'handyman-blocks') ?></p>
                            <p><?php echo __('Please install and activate all recommended to use blcoks and demo importer features- Cozy Addons, Cozy Essential Addons, Advanced Import.', 'handyman-blocks') ?></p>
                        </div>
                        <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'handyman-blocks'); ?></a>
                        <a href="<?php echo admin_url(); ?>themes.php?page=about-handyman-blocks" class="button admin-button info-button"><?php echo __('Explore Handyman Blocks', 'handyman-blocks'); ?></a>

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
add_action('admin_notices', 'handyman_blocks_welcome_notice');
function handyman_blocks_dismissble_notice()
{
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'handyman_blocks_admin_nonce')) {
        wp_send_json_error(array('message' => 'Nonce verification failed.'));
        return;
    }

    $result = update_option('handyman_blocks_dismissed_custom_notice', 1);

    if ($result) {
        wp_send_json_success();
    } else {
        wp_send_json_error(array('message' => 'Failed to update option'));
    }
}
add_action('wp_ajax_handyman_blocks_dismissble_notice', 'handyman_blocks_dismissble_notice');
// Hook into a custom action when the button is clicked
add_action('wp_ajax_handyman_blocks_install_and_activate_plugins', 'handyman_blocks_install_and_activate_plugins');
add_action('wp_ajax_nopriv_handyman_blocks_install_and_activate_plugins', 'handyman_blocks_install_and_activate_plugins');
add_action('wp_ajax_handyman_blocks_rplugin_activation', 'handyman_blocks_rplugin_activation');
add_action('wp_ajax_nopriv_handyman_blocks_rplugin_activation', 'handyman_blocks_rplugin_activation');

// Function to install and activate the plugins



function handyman_blocks_check_plugin_installed_status($pugin_slug, $plugin_file)
{
    return file_exists(ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file) ? true : false;
}

/* Check if plugin is activated */


function handyman_blocks_check_plugin_active_status($pugin_slug, $plugin_file)
{
    return is_plugin_active($pugin_slug . '/' . $plugin_file) ? true : false;
}

require_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/misc.php');
require_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
function handyman_blocks_install_and_activate_plugins()
{
    check_ajax_referer('handyman_blocks_welcome_nonce', 'nonce');
    // Define the plugins to be installed and activated
    $recommended_plugins = array(
        array(
            'slug' => 'cozy-addons',
            'file' => 'cozy-addons.php',
            'name' => __('Cozy Addons', 'handyman-blocks')
        ),
        array(
            'slug' => 'advanced-import',
            'file' => 'advanced-import.php',
            'name' => __('Advanced Imporrt', 'handyman-blocks')
        ),
        array(
            'slug' => 'cozy-essential-addons',
            'file' => 'cozy-essential-addons.php',
            'name' => __('Cozy Essential Addons', 'handyman-blocks')
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
            handyman_blocks_update_install_and_activate_progress($plugin_name, 'Already Active');
            continue; // Skip to the next plugin
        }

        // Check if the plugin is installed but not active
        if (is_handyman_blocks_plugin_installed($plugin_slug . '/' . $plugin_file)) {
            $activate = activate_plugin($plugin_slug . '/' . $plugin_file);
            if (is_wp_error($activate)) {
                handyman_blocks_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            handyman_blocks_update_install_and_activate_progress($plugin_name, 'Activated');
            continue; // Skip to the next plugin
        }

        // Plugin is not installed or activated, proceed with installation
        handyman_blocks_update_install_and_activate_progress($plugin_name, 'Installing');

        // Fetch plugin information
        $api = plugins_api('plugin_information', array(
            'slug' => $plugin_slug,
            'fields' => array('sections' => false),
        ));

        // Check if plugin information is fetched successfully
        if (is_wp_error($api)) {
            handyman_blocks_update_install_and_activate_progress($plugin_name, 'Error');
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
                handyman_blocks_update_install_and_activate_progress($plugin_name, 'Error');
                continue; // Skip to the next plugin
            }
            handyman_blocks_update_install_and_activate_progress($plugin_name, 'Activated');
        } else {
            handyman_blocks_update_install_and_activate_progress($plugin_name, 'Error');
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
function is_handyman_blocks_plugin_installed($plugin_slug)
{
    $plugins = get_plugins();
    return isset($plugins[$plugin_slug]);
}

// Function to update the installation and activation progress
function handyman_blocks_update_install_and_activate_progress($plugin_name, $status)
{
    $progress = get_transient('install_and_activate_progress');
    $progress[] = array(
        'plugin' => $plugin_name,
        'status' => $status,
    );
    set_transient('install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10);
}


function handyman_blocks_dashboard_menu()
{
    add_theme_page(esc_html__('About Handyman Blocks', 'handyman-blocks'), esc_html__('About Handyman Blocks', 'handyman-blocks'), 'edit_theme_options', 'about-handyman-blocks', 'handyman_blocks_theme_info_display');
}
add_action('admin_menu', 'handyman_blocks_dashboard_menu');
function handyman_blocks_theme_info_display()
{ ?>
    <div class="dashboard-about-handyman-blocks">
        <div class="handyman-blocks-dashboard">
            <ul id="handyman-blocks-dashboard-tabs-nav">
                <li><a href="#handyman-blocks-welcome"><?php echo __('Get Started', 'handyman-blocks') ?></a></li>
                <li><a href="#handyman-blocks-setup"><?php echo __('Setup Instruction', 'handyman-blocks') ?></a></li>
                <li><a href="#handyman-blocks-comparision"><?php echo __('FREE VS PRO', 'handyman-blocks') ?></a></li>
            </ul> <!-- END tabs-nav -->
            <div id="tabs-content">
                <div id="handyman-blocks-welcome" class="tab-content">
                    <h1> <?php echo __('Welcome to the Handyman Blocks!', 'handyman-blocks') ?></h1>
                    <p><?php echo __('Handyman Blocks is a powerful and versatile WordPress theme designed for handyman agencies and home service providers, including plumbers, electricians, cleaners, HVAC, Renovation and Remodeling, Carpentry and Woodworking, painting, Roofing Services,Window and Door Services  and all kinds of handyman services. It offers full site editing, over 40 ready-to-use pre-built homepage sections, and ready-to-import site demos, enabling you to create a unique, professional website effortlessly. With its comprehensive customization options and user-friendly interface, Handyman Blocks helps you showcase your services and stand out in the competitive home services industry. Explore demos and details about Handyman Blocks at - https://cozythemes.com/handyman-wordpress-theme/', 'handyman-blocks') ?></p>
                    <h3><?php echo __('Required Plugins', 'handyman-blocks'); ?></h3>
                    <p class="notice-text"><?php echo __('Please install and activate all recommended pluign to import the demo with "one click demo import" feature and unlock premium features!(for pro version)', 'handyman-blocks') ?></p>
                    <ul class="handyman-blocks-required-plugin">
                        <li>

                            <h4><?php echo __('1. Cozy Addons', 'handyman-blocks'); ?>
                                <?php
                                if (handyman_blocks_is_plugin_activated('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'handyman-blocks');
                                } elseif (handyman_blocks_is_plugin_installed('cozy-addons/cozy-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'handyman-blocks');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'handyman-blocks') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>

                            <h4><?php echo __('2. Cozy Essential Addons', 'handyman-blocks'); ?>
                                <?php
                                if (handyman_blocks_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin has been already activated!', 'handyman-blocks');
                                } elseif (handyman_blocks_is_plugin_installed('cozy-essential-addons/cozy-essential-addons.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'handyman-blocks');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-essential-addons&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'handyman-blocks') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                        <li>
                            <h4><?php echo __('3. Advanced Import - Need only to use "one click demo import" features', 'handyman-blocks'); ?>
                                <?php
                                if (handyman_blocks_is_plugin_activated('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin has been already activated!', 'handyman-blocks');
                                } elseif (handyman_blocks_is_plugin_installed('advanced-import/advanced-import.php')) {
                                    echo __(': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'handyman-blocks');
                                } else {
                                    echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__('Install and Activate', 'handyman-blocks') . '</a>';
                                }
                                ?>
                            </h4>
                        </li>
                    </ul>
                    <a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __('Getting started with a single click', 'handyman-blocks'); ?></a>
                </div>
                <div id="handyman-blocks-setup" class="tab-content">
                    <h3 class="handyman-blocks-baisc-guideline-header"><?php echo __('Basic Theme Setup', 'handyman-blocks') ?></h3>
                    <div class="handyman-blocks-baisc-guideline">
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Header Layout:', 'handyman-blocks') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Header:', 'handyman-blocks') ?></li>
                                        <li> - <?php echo __('click on Header > Click on Edit (Icon) -> Add or Remove Requirend block/content as your requirement.:', 'handyman-blocks') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'handyman-blocks') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Footer Layout:', 'handyman-blocks') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns -> Template Parts -> Footer:', 'handyman-blocks') ?></li>
                                        <li> - <?php echo __('click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'handyman-blocks') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'handyman-blocks') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'handyman-blocks') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'handyman-blocks') ?></li>
                                        <li> - <?php echo __('click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'handyman-blocks') ?></li>
                                        <li> - <?php echo __('Click on save to update your layout', 'handyman-blocks') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template(Like: Frontpage/Blog/Archive etc.)', 'handyman-blocks') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Templates:', 'handyman-blocks') ?></li>
                                        <li> - <?php echo __('Click on Manage all Templates', 'handyman-blocks') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template', 'handyman-blocks') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'handyman-blocks') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="featured-box">
                            <ul>
                                <li><strong><?php echo __('Restore/Reset Default Content layout of Template Parts(Header/Footer/Sidebar)', 'handyman-blocks') ?></strong>
                                    <ul>
                                        <li> - <?php echo __('Go to Appearance -> Editor -> Patterns:', 'handyman-blocks') ?></li>
                                        <li> - <?php echo __('Click on Manage All Template Parts', 'handyman-blocks') ?></li>
                                        <li> - <?php echo __('Click on 3 Dots icon at right side of respective Template parts', 'handyman-blocks') ?></li>
                                        <li> - <?php echo __('Click on Clear Customization', 'handyman-blocks') ?></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="handyman-blocks-comparision" class="tab-content">
                    <div class="featured-list">
                        <div class="half-col free-features">
                            <h3><?php echo __('Handyman Blocks Features (Free)', 'handyman-blocks') ?></h3>
                            <ul>
                                <li><strong> - <?php echo __('Ready to import Pre-build demo - 1 ', 'handyman-blocks') ?></strong></li>
                                <li><strong> - <?php echo __('Fully Customizable Multiple Header Layouts', 'handyman-blocks') ?></strong></li>
                                <li> <strong>- <?php echo __('Fully Customizable Multiple Footer Layouts ', 'handyman-blocks') ?></strong></li>
                                <li><strong> - <?php echo __('12 Beautiful Fonts Option', 'handyman-blocks') ?></strong></li>
                                <li> <strong>- <?php echo __('Innper Page Templates', 'handyman-blocks') ?></strong></li>
                                <li> <strong>- <?php echo __('On Scroll Animation option', 'handyman-blocks') ?></strong></li>
                                <li> <strong>- <?php echo __('Access Cozy Blocks with upto 22 Advanced Blocks for FSE and Gutenberg Editor', 'handyman-blocks') ?></strong></li>
                                <li><strong> - <?php echo __('Handyman Blocks offer wide range of  ready to use Home Sections Patterns', 'handyman-blocks') ?></strong>
                                    <ul>
                                        <li><?php echo __('Hero Section', 'handyman-blocks') ?></li>
                                        <li><?php echo __('About Us Section', 'handyman-blocks') ?></li>
                                        <li><?php echo __('About Us Page Layout', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Contact Us Page Section', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Enquiry Form Section', 'handyman-blocks') ?></li>
                                        <li><?php echo __('FAQ Section', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Latest Post Section', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Portfolio Section', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Pricing Table Section - 2', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Service Section', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Service Page Layout', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Team Section', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Partners/Brands Logo Showcase Section', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Testimonial Section', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Who We Serve Section', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Contact Section With Request Quote form', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Call to Action Section', 'handyman-blocks') ?></li>
                                        <li><?php echo __('Why Choose Us Section', 'handyman-blocks') ?></li>
                                    </ul>
                                </li>

                                <li> <strong>- <?php echo __('FSE Templates Ready', 'handyman-blocks') ?></strong>
                                    <ul>
                                        <li> <?php echo __('404 Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Archive Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Product Catalog Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Blank Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Front Page Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Blog Home Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Index Page Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Search Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Sitemap Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Page Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Left Sidebar Page Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Full Width Page  Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Single Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Single Product Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Cart Page Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Checkout Page Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Left Sidebar Single Template', 'handyman-blocks') ?></li>
                                        <li> <?php echo __('Full Width Single Template', 'handyman-blocks') ?></li>

                                    </ul>
                                <li>

                            </ul>
                        </div>
                        <div class="half-col pro-features">
                            <h3><?php echo __('Premium Features', 'handyman-blocks') ?></h3>
                            <p><?php echo __('Including all free features and comes with 30+ advanced blocks that enhance and power up the ecommerce website, here are some blocks that add the powerful features for your ecommerce/shopping website. By seamlessly integrating these blocks with our ready-to-use patterns, you have the flexibility to craft a wide selection of captivating online store ease', 'handyman-blocks') ?></p>
                            <h3><?php echo __('Additional Advanced Pre-build Section', 'handyman-blocks') ?></h3>
                            <ul>
                                <li><strong> <?php echo __('Ready to import pre-build demo - 3 (Total 4) ', 'handyman-blocks') ?></strong></li>
                                <li><?php echo __('Banner Slider', 'handyman-blocks') ?></li>
                                <li><?php echo __('Banner with Booking Form', 'handyman-blocks') ?></li>
                                <li><?php echo __('Banner Video Slider', 'handyman-blocks') ?></li>
                                <li><?php echo __('Testimonial Carousel', 'handyman-blocks') ?></li>
                                <li><?php echo __('Services Carousel Section', 'handyman-blocks') ?></li>
                                <li><?php echo __('Services Grid Section', 'handyman-blocks') ?></li>
                                <li><?php echo __('About Us Section with Counter', 'handyman-blocks') ?></li>
                                <li><?php echo __('Latest Post Carousel', 'handyman-blocks') ?></li>
                                <li><?php echo __('Partners Logo Showcase Carousel', 'handyman-blocks') ?></li>
                                <li><?php echo __('Partners Logo Showcase Grid', 'handyman-blocks') ?></li>
                                <li><?php echo __('Booking Enquiry Form Section', 'handyman-blocks') ?></li>
                                <li><?php echo __('FAQ Accordion Section - 2', 'handyman-blocks') ?></li>
                                <li><?php echo __('Portfolio Full Width Section', 'handyman-blocks') ?></li>
                                <li><?php echo __('Product Showcase Section', 'handyman-blocks') ?></li>
                                <li><?php echo __('Offer & Promotion Carousel Section', 'handyman-blocks') ?></li>
                                <li><?php echo __('Offer & Promotion Grid Section', 'handyman-blocks') ?></li>
                                <li><?php echo __('Additional Request Form Section', 'handyman-blocks') ?></li>
                            </ul>

                            <h3><?php echo __('Additional Advanced Blocks with Cozy Blocks', 'handyman-blocks') ?></h3>
                            <ul>
                                <li><?php echo __('Post Blocks', 'handyman-blocks') ?></li>
                                <li><?php echo __('Slider Block', 'handyman-blocks') ?></li>
                                <li><?php echo __('Counter Block', 'handyman-blocks') ?></li>
                                <li><?php echo __('Team Block (With Carousel)', 'handyman-blocks') ?></li>
                                <li><?php echo __('Testimonials Block (With Carousel)', 'handyman-blocks') ?></li>
                                <li><?php echo __('Social Shares Blocks', 'handyman-blocks') ?></li>
                                <li><?php echo __('Social Icons Blocks', 'handyman-blocks') ?></li>
                                <li><?php echo __('Breadcrumbs Block', 'handyman-blocks') ?></li>
                                <li><?php echo __('Portfolio Block (With Custom Post Type)', 'handyman-blocks') ?></li>
                                <li><?php echo __('Popup buidler Block to display offer and flash sale', 'handyman-blocks') ?>
                                    <?php echo __('and access', 'handyman-blocks') ?> <a href="https://cozythemes.com/cozy-addons/" target="_blank"><?php echo __('Cozy Blocks with more than 30+ advanced block.', 'handyman-blocks') ?></a>
                                </li>

                            </ul>
                            <br />

                            <a href="https://cozythemes.com/pricing-and-plans/" class="upgrade-btn button" target="_blank"><?php echo __('Upgrade to Pro', 'handyman-blocks') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
