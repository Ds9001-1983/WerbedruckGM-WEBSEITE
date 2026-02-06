<?php
/**
 * Default Page Template
 *
 * @package Werbedruck_GM
 */

get_header();
?>

<section class="section section-white">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="legal-content">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
