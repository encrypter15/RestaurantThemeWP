<?php
/**
 * RestaurantTheme Gallery Page
 * Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0
 * Template Name: Gallery
 */
get_header();
?>

<section class="gallery">
    <div class="container">
        <h1>Gallery</h1>
        <div class="grid">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery1.jpg" alt="Plated gourmet dish with colorful presentation" class="gallery-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery2.jpg" alt="Restaurant dining area with cozy ambiance" class="gallery-img">
            <?php echo do_shortcode('[restaurant_slider]'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
