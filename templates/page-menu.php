<?php
/**
 * RestaurantTheme Menu Page
 * Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0
 * Template Name: Menu
 */
get_header();
?>

<section class="menu">
    <div class="container">
        <h1>Our Menu</h1>
        <div class="grid">
            <?php
            $menu_items = new WP_Query(array(
                'post_type' => 'menu_item',
                'posts_per_page' => -1
            ));
            if ($menu_items->have_posts()) :
                while ($menu_items->have_posts()) : $menu_items->the_post();
                    $category = get_post_meta(get_the_ID(), '_menu_category', true);
                    $price = get_post_meta(get_the_ID(), '_menu_price', true);
                    ?>
                    <div class="card">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo esc_html($category); ?> - $<?php echo esc_html($price); ?></p>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p>No menu items found.</p>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
