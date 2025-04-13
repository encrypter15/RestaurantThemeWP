<?php
/**
 * RestaurantTheme Single Post Template
 * Author: encrypter15, Email: encrypter15@gmail.com, License: MIT, Version: 2.0
 */
get_header();
?>

<div class="container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>">
                <h1><?php the_title(); ?></h1>
                <p><small><?php the_date(); ?></small></p>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <p>No content found.</p>
        <?php
    endif;
    ?>
</div>

<?php get_footer(); ?>
