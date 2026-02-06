<?php
/**
 * Template Name: Über uns
 *
 * @package Werbedruck_GM
 */

get_header();
?>

<!-- Hero -->
<section class="page-hero">
    <div class="hero-gradient"></div>
    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=1920&h=1080');"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <h1>Über uns</h1>
        <p>Lernen Sie Werbedruck GM kennen - Ihr Partner für professionelle Werbetechnik</p>
    </div>
</section>

<!-- Content -->
<section class="section section-white">
    <div class="container">
        <div class="about-grid" style="margin-bottom: 4rem;">
            <div>
                <h2 style="font-size: 1.875rem; font-weight: 700; color: var(--dark); margin-bottom: 1.5rem;">Unsere Geschichte</h2>
                <p style="font-size: 1.125rem; color: var(--gray-600); margin-bottom: 1.5rem;">
                    Seit 2018 sind wir Ihr zuverlässiger Partner für professionelle Werbetechnik im Oberbergischen. 
                    Mit dem stetigen Antrieb, Werbetechnik vom Kunden für den Kunden preisgünstig und qualitativ 
                    hochwertig auch in Einzel- und Kleinauflagen umzusetzen.
                </p>
                <p style="font-size: 1.125rem; color: var(--gray-600); margin-bottom: 1.5rem;">
                    Durch stetige Weiterbildung auf Fachmessen und Workshops versuchen wir für Sie immer ein kleines 
                    bisschen besser und innovativer zu sein als unsere Mitbewerber. Unser umfangreicher Maschinenpark 
                    ermöglicht es uns, auch komplexe Projekte schnell und professionell umzusetzen.
                </p>
                <p style="font-size: 1.125rem; color: var(--gray-600); margin-bottom: 1.5rem;">
                    Unser Anspruch ist es, jedem Kunden eine individuelle und maßgeschneiderte Lösung zu bieten - 
                    egal ob es sich um ein einzelnes Produkt oder eine komplette Werbekampagne handelt.
                </p>
            </div>
            <div class="about-images">
                <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=800&h=600" alt="Werkstatt">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&h=600" alt="Technik">
            </div>
        </div>

        <!-- Stats -->
        <div class="cta-box" style="margin-bottom: 4rem;">
            <div class="about-stats" style="max-width: 600px; margin: 0 auto;">
                <div class="stat">
                    <div class="stat-number">2018</div>
                    <div class="stat-label">Gegründet</div>
                </div>
                <div class="stat">
                    <div class="stat-number">1000+</div>
                    <div class="stat-label">Projekte</div>
                </div>
            </div>
        </div>

        <!-- Values -->
        <div style="margin-bottom: 4rem;">
            <h2 class="section-title">Unsere Werte</h2>
            <div class="grid grid-3" style="margin-top: 2rem;">
                <div class="card">
                    <div class="card-body" style="text-align: center;">
                        <h3 class="card-title">Qualität</h3>
                        <p class="card-text">Wir setzen auf hochwertige Materialien und modernste Technik für beste Ergebnisse.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body" style="text-align: center;">
                        <h3 class="card-title">Zuverlässigkeit</h3>
                        <p class="card-text">Termingerechte Lieferung und transparente Kommunikation sind für uns selbstverständlich.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body" style="text-align: center;">
                        <h3 class="card-title">Innovation</h3>
                        <p class="card-text">Durch stetige Weiterbildung bleiben wir immer am Puls der Zeit.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta-box">
            <h3>Lernen Sie uns persönlich kennen</h3>
            <p>Besuchen Sie uns in unserer Werkstatt oder vereinbaren Sie einen Beratungstermin.</p>
            <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-primary btn-lg">Kontakt aufnehmen</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
