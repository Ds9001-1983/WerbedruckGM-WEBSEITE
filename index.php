<?php
/**
 * The main template file
 *
 * @package Werbedruck_GM
 */

get_header();
?>

<section class="section section-white">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <h1><?php the_title(); ?></h1>
                    <div class="legal-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Keine Inhalte gefunden.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
