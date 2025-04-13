<?php
/**
 * RestaurantTheme Functions
 * Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0
 */

// Theme Setup
function restaurant_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'restaurant')
    ));
}
add_action('after_setup_theme', 'restaurant_theme_setup');

// Enqueue Scripts and Styles
function restaurant_enqueue_scripts() {
    wp_enqueue_style('restaurant-style', get_template_directory_uri() . '/assets/css/style.css', array(), '2.0');
    wp_enqueue_script('restaurant-main', get_template_directory_uri() . '/assets/js/main.js', array(), '2.0', true);
    if (is_page('shop')) {
        wp_enqueue_script('restaurant-shop', get_template_directory_uri() . '/assets/js/shop.js', array(), '2.0', true);
    }
}
add_action('wp_enqueue_scripts', 'restaurant_enqueue_scripts');

// Google Analytics
function restaurant_google_analytics() {
    $ga_id = ''; // Set your Google Analytics ID here, e.g., 'G-XXXXXXXXXX'
    if (!empty($ga_id)) {
        ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr($ga_id); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?php echo esc_attr($ga_id); ?>');
        </script>
        <?php
    }
}
add_action('wp_head', 'restaurant_google_analytics');

// Register Custom Post Types
function restaurant_register_cpts() {
    // Menu Items
    register_post_type('menu_item', array(
        'labels' => array(
            'name' => __('Menu Items'),
            'singular_name' => __('Menu Item')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor'),
        'menu_icon' => 'dashicons-food'
    ));

    // Add Meta Fields for Menu Items
    add_action('add_meta_boxes', function() {
        add_meta_box('menu_item_details', 'Menu Item Details', 'menu_item_meta_box', 'menu_item', 'normal', 'default');
    });

    function menu_item_meta_box($post) {
        $category = get_post_meta($post->ID, '_menu_category', true);
        $price = get_post_meta($post->ID, '_menu_price', true);
        ?>
        <p>
            <label for="menu_category">Category:</label>
            <input type="text" id="menu_category" name="menu_category" value="<?php echo esc_attr($category); ?>">
        </p>
        <p>
            <label for="menu_price">Price:</label>
            <input type="number" id="menu_price" name="menu_price" step="0.01" value="<?php echo esc_attr($price); ?>">
        </p>
        <?php
    }

    add_action('save_post', function($post_id) {
        if (isset($_POST['menu_category'])) {
            update_post_meta($post_id, '_menu_category', sanitize_text_field($_POST['menu_category']));
        }
        if (isset($_POST['menu_price'])) {
            update_post_meta($post_id, '_menu_price', floatval($_POST['menu_price']));
        }
    });
}
add_action('init', 'restaurant_register_cpts');

// Custom Menu Fallback
function restaurant_default_menu() {
    echo '<ul>';
    echo '<li><a href="' . home_url('/') . '" class="active">Home</a></li>';
    echo '<li><a href="' . home_url('/about') . '">About</a></li>';
    echo '<li><a href="' . home_url('/menu') . '">Menu</a></li>';
    echo '<li><a href="' . home_url('/shop') . '">Shop</a></li>';
    echo '<li><a href="' . home_url('/gallery') . '">Gallery</a></li>';
    echo '<li><a href="' . home_url('/blog') . '">Blog</a></li>';
    echo '<li><a href="' . home_url('/contact') . '">Contact</a></li>';
    echo '<li><a href="' . home_url('/reservation') . '">Reserve</a></li>';
    echo '</ul>';
}
