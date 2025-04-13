<?php
/**
 * RestaurantTheme Contact Page
 * Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0
 * Template Name: Contact
 */
get_header();
?>

<section class="contact">
    <div class="container">
        <h1>Contact Us</h1>
        <form id="contact-form">
            <input type="text" id="contact-name" placeholder="Name" required>
            <input type="email" id="contact-email" placeholder="Email" required>
            <textarea id="contact-message" placeholder="Message" required></textarea>
            <button type="submit" class="btn">Send</button>
        </form>
    </div>
</section>

<?php get_footer(); ?>
