<?php
/**
 * RestaurantTheme Archive Template
 * Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0
 */
get_header();
?>

<div class="container">
    <h1><?php the_archive_title(); ?></h1>
    <div class="grid">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <div class="card">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php if (get_post_type() === 'menu_item') : ?>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_menu_category', true)); ?> - $<?php echo esc_html(get_post_meta(get_the_ID(), '_menu_price', true)); ?></p>
                    <?php else : ?>
                        <p><?php the_excerpt(); ?></p>
                        <p><small><?php the_date(); ?></small></p>
                    <?php endif; ?>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
        else :
            ?>
            <p>No items found.</p>
            <?php
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
