<?php
/**
 * RestaurantTheme Header
 * Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="encrypter15">
    <meta name="email" content="encrypter15@gmail.com">
    <meta name="license" content="MIT">
    <meta name="version" content="2.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Restaurant Logo" class="logo">
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                    'container' => false,
                    'items_wrap' => '<ul>%3$s</ul>'
                ));
                ?>
            </nav>
        </div>
    </header>
