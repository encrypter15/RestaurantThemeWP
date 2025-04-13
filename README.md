# RestaurantTheme

**Author**: encrypter15  
**Email**: encrypter15@gmail.com  
**License**: MIT  
**Version**: 2.0  

## Description

RestaurantTheme is a fully functional WordPress theme for restaurants. It features pages for Home, About, Menu, Shop, Gallery, Blog, Contact, and Reservation. Built for WordPress, it includes a custom slider plugin (RestaurantSlider), WooCommerce integration for the shop, and optional Google Analytics tracking. The theme is responsive, SEO-optimized, and designed for deployment on a hosting provider’s WordPress site.

### Features
- **Multi-Page Design**: Pages for all restaurant needs.
- **Responsive**: Mobile, tablet, and desktop compatibility.
- **Custom Slider Plugin**: RestaurantSlider for gallery or featured dishes.
- **WooCommerce Shop**: E-commerce functionality for products.
- **Custom Post Types**: Blog and Menu items managed via WordPress.
- **Google Analytics**: Optional tracking via functions.php.
- **SEO Optimized**: Meta descriptions and alt texts included.
- **WordPress Native**: Installable via hosting provider’s dashboard.
- **MIT License**: Free to use, modify, and distribute.

## Installation

### Prerequisites
- A WordPress hosting provider (e.g., Bluehost, SiteGround, WP Engine).
- Access to WordPress admin dashboard.
- **WooCommerce Plugin** (required for shop functionality).
- Optional: OpenTable plugin (e.g., OpenTable Reservations) for real reservations.
- Optional: Contact Form 7 for the contact form.
- Optional: Google Analytics ID (e.g., `G-XXXXXXXXXX`).

### Project Setup
1. **Download**:
   ```bash
   git clone https://github.com/encrypter15/RestaurantThemeWP/
   ```
2. **Zip the Theme**:
   ```bash
   cd RestaurantTheme
   zip -r RestaurantTheme.zip .
   cd plugins/restaurant-slider
   zip -r restaurant-slider.zip .
   ```

3. **Upload and Install Theme**:
   - Log in to your WordPress admin dashboard (`yourdomain.com/wp-admin`).
   - Go to **Appearance > Themes > Add New > Upload Theme**.
   - Upload `RestaurantTheme.zip` and click **Install Now**.
   - Activate the theme.

4. **Install RestaurantSlider Plugin**:
   - Go to **Plugins > Add New > Upload Plugin**.
   - Upload `plugins/restaurant-slider/restaurant-slider.zip`.
   - Activate the plugin.
   - Configure settings at **Settings > Restaurant Slider** (e.g., enable/disable autoplay).

5. **Install Required Plugins**:
   - **WooCommerce**: Install and activate WooCommerce to enable the shop functionality.
   - **Optional**: Install Contact Form 7 for the contact form and an OpenTable plugin for reservations.

6. **Configure Google Analytics** (optional):
   - Edit `functions.php`:
     ```php
     $ga_id = 'G-XXXXXXXXXX'; // Replace with your tracking ID
     ```
   - Save and upload the updated theme via FTP or hosting file manager.

7. **Set Up Menu**:
   - Go to **Appearance > Menus**.
   - Create a menu with links to Home, About, Menu, Shop, Gallery, Blog, Contact, and Reservation.
   - Assign it to the **Primary Menu** location.

8. **Add Content**:
   - **Menu Items**: Go to **Menu Items > Add New** to add dishes with categories and prices.
   - **Blog Posts**: Add posts via **Posts > Add New**.
   - **Shop Products**: Add products via **Products > Add New** in WooCommerce.

## Usage

- **Home**: Customize featured dishes in `page-home.php`.
- **Shop**: Manage products via WooCommerce dashboard.
- **Menu**: Add items via the Menu Items CPT.
- **Blog**: Add posts via the WordPress Posts section.
- **Reservation**: Use an OpenTable plugin shortcode in `page-reservation.php` for real functionality.
- **Slider**: Use `[restaurant_slider]` shortcode in pages or edit `restaurant-slider.php` for custom slides.
- **Analytics**: Track page views if a Google Analytics ID is set.
- **SEO**: Update meta keywords in template files as needed.

## Notes

- **Hosting**: Use a WordPress-compatible host. Ensure FTP or file manager access for uploads.
- **Google Analytics**: Tracking is disabled by default. Set `$ga_id` to enable.
- **Slider Plugin**: RestaurantSlider is lightweight. For advanced features, edit `restaurant-slider.php`.
- **Contact Form**: Demo only; integrate Contact Form 7 for production.
- **Reservations**: Requires an OpenTable plugin for real functionality.
- **SEO**: Meta tags included; consider Yoast SEO for advanced optimization.
- **Fonts**: Uses Google’s Roboto (via CSS).

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.

## Contact

For questions or suggestions, email encrypter15@gmail.com.
