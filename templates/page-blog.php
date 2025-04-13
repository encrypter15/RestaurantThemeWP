<?php
/**
 * RestaurantTheme Blog Page
 * Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0
 * Template Name: Blog
 */
get_header();
?>

<section class="blog">
    <div class="container">
        <h1>Blog</h1>
        <div class="grid">
            <?php
            $posts = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => -1
            ));
            if ($posts->have_posts()) :
                while ($posts->have_posts()) : $posts->the_post();
                    ?>
                    <div class="card">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                        <p><small><?php the_date(); ?></small></p>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <p>No blog posts found.</p>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
