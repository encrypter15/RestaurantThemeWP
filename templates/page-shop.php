<?php
/**
 * RestaurantTheme Shop Page
 * Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0
 * Template Name: Shop
 */
get_header();
?>

<section class="shop">
    <div class="container">
        <h1>Our Shop</h1>
        <p>Browse our selection of gourmet products and gift cards.</p>
        <div class="filters">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="food">Food</button>
            <button class="filter-btn" data-filter="gift">Gift Cards</button>
        </div>
        <div class="grid">
            <?php
            $products = new WP_Query(array(
                'post_type' => 'product',
                'posts_per_page' => -1
            ));
            if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post();
                    $product = wc_get_product(get_the_ID());
                    $category = get_the_terms(get_the_ID(), 'product_cat')[0]->slug;
                    ?>
                    <div class="card" data-category="<?php echo esc_attr($category); ?>">
                        <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo $product->get_price_html(); ?></p>
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="btn">Add to Cart</a>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p>No products found. Add products via WooCommerce.</p>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
