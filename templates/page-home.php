<?php
/**
 * RestaurantTheme Home Page
 * Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0
 * Template Name: Home
 */
get_header();
?>

<section class="hero">
    <div class="container">
        <h1>Welcome to Our Restaurant</h1>
        <p>Experience the finest dining with fresh, local ingredients.</p>
        <a href="<?php echo get_permalink(get_page_by_path('reservation')); ?>" class="btn">Make a Reservation</a>
    </div>
</section>

<section class="featured">
    <div class="container">
        <h2>Featured Dishes</h2>
        <div class="grid">
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dish1.jpg" alt="Signature Pasta Dish">
                <h3>Signature Pasta</h3>
                <p>$18.99</p>
            </div>
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dish2.jpg" alt="Grilled Salmon Plate">
                <h3>Grilled Salmon</h3>
                <p>$22.99</p>
            </div>
            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dish3.jpg" alt="Chocolate Dessert">
                <h3>Chocolate Dessert</h3>
                <p>$9.99</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
