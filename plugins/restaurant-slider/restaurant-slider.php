<?php
/**
 * Plugin Name: Restaurant Slider
 * Description: A simple carousel slider for RestaurantTheme.
 * Version: 2.0
 * Author: encrypter15
 * Author Email: encrypter15@gmail.com
 * License: MIT
 */

if (!defined('ABSPATH')) {
    exit;
}

// Enqueue Slider Assets
function restaurant_slider_enqueue() {
    wp_enqueue_style('restaurant-slider', plugins_url('assets/css/slider.css', __FILE__), array(), '2.0');
    wp_enqueue_script('restaurant-slider', plugins_url('assets/js/slider.js', __FILE__), array(), '2.0', true);
}
add_action('wp_enqueue_scripts', 'restaurant_slider_enqueue');

// Slider Shortcode
function restaurant_slider_shortcode() {
    ob_start();
    ?>
    <div class="restaurant-slider">
        <div class="slider-track">
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dish1.jpg" alt="Signature Pasta Dish">
                <h3>Signature Pasta</h3>
            </div>
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dish2.jpg" alt="Grilled Salmon Plate">
                <h3>Grilled Salmon</h3>
            </div>
            <div class="slide">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dish3.jpg" alt="Chocolate Dessert">
                <h3>Chocolate Dessert</h3>
            </div>
        </div>
        <button class="slider-prev">Prev</button>
        <button class="slider-next">Next</button>
        <div class="slider-dots"></div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('restaurant_slider', 'restaurant_slider_shortcode');

// Admin Settings Page
function restaurant_slider_settings_page() {
    add_options_page(
        'Restaurant Slider Settings',
        'Restaurant Slider',
        'manage_options',
        'restaurant-slider',
        'restaurant_slider_settings_render'
    );
}
add_action('admin_menu', 'restaurant_slider_settings_page');

function restaurant_slider_settings_render() {
    ?>
    <div class="wrap">
        <h1>Restaurant Slider Settings</h1>
        <p>Customize slider settings here. For advanced customization, edit the plugin code.</p>
        <form method="post" action="options.php">
            <?php
            settings_fields('restaurant_slider_settings');
            do_settings_sections('restaurant_slider_settings');
            ?>
            <p><label><input type="checkbox" name="restaurant_slider_autoplay" <?php checked(get_option('restaurant_slider_autoplay', 1)); ?>> Enable Autoplay</label></p>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

function restaurant_slider_settings_init() {
    register_setting('restaurant_slider_settings', 'restaurant_slider_autoplay');
}
add_action('admin_init', 'restaurant_slider_settings_init');
