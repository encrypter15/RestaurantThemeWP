<?php
/**
 * RestaurantTheme Reservation Page
 * Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0
 * Template Name: Reservation
 */
get_header();
?>

<section class="reservation">
    <div class="container">
        <h1>Make a Reservation</h1>
        <form id="reservation-form">
            <input type="text" id="res-name" placeholder="Full Name" required>
            <input type="email" id="res-email" placeholder="Email" required>
            <input type="tel" id="res-phone" placeholder="Phone Number" required>
            <input type="date" id="res-date" required>
            <input type="time" id="res-time" required>
            <input type="number" id="res-guests" placeholder="Number of Guests" min="1" required>
            <button type="submit" class="btn">Reserve Now</button>
        </form>
        <div id="reservation-status"></div>
        <p>Note: For real OpenTable integration, install an OpenTable plugin and add the shortcode here.</p>
    </div>
</section>

<?php get_footer(); ?>
