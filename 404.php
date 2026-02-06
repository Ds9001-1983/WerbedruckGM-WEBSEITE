<?php
/**
 * 404 Template
 *
 * @package Werbedruck_GM
 */

get_header();
?>

<section class="section section-white" style="min-height: 60vh; display: flex; align-items: center;">
    <div class="container" style="text-align: center;">
        <h1 style="font-size: 6rem; font-weight: 700; color: var(--primary); margin-bottom: 1rem;">404</h1>
        <h2 style="font-size: 1.5rem; color: var(--dark); margin-bottom: 1rem;">Seite nicht gefunden</h2>
        <p style="font-size: 1.125rem; color: var(--gray-600); margin-bottom: 2rem;">
            Die angeforderte Seite konnte leider nicht gefunden werden.
        </p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Zurück zur Startseite</a>
    </div>
</section>

<?php get_footer(); ?>
