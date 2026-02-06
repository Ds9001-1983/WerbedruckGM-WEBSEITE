<?php
/**
 * Template Name: Foliendesign
 *
 * @package Werbedruck_GM
 */

get_header();
?>

<!-- Hero -->
<section class="page-hero">
    <div class="hero-gradient"></div>
    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1600298881974-6be191ceeda1?auto=format&fit=crop&w=1920&h=1080');"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <h1>Foliendesign</h1>
        <p>Professionelle Folienverarbeitung für Fahrzeuge, Schaufenster und mehr</p>
        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-accent btn-lg">Jetzt Angebot anfordern</a>
    </div>
</section>

<!-- Content -->
<section class="section section-white">
    <div class="container">
        <div class="service-content-grid">
            <div>
                <h2>Professionelles Foliendesign</h2>
                <p>Von der Fahrzeugbeschriftung über Schaufensterwerbung bis hin zu individuellen Designlösungen - wir verarbeiten hochwertige Folien für jeden Einsatzzweck.</p>
                <p>Mit unseren professionellen Schneidplottern und Laminiergeräten erstellen wir präzise Folienschnitte und langlebige Beschriftungen.</p>

                <div class="feature-list" style="margin-bottom: 2rem;">
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Professionelle Schneidplotter</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Hochwertige Markenfolien</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Individuelle Designs</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Montageservice</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Beratung vor Ort</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Schnelle Umsetzung</span></div>
                </div>

                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-primary">Beratungstermin vereinbaren <?php echo werbedruck_icon('arrow-right'); ?></a>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1600298881974-6be191ceeda1?auto=format&fit=crop&w=800&h=600" alt="Foliendesign">
            </div>
        </div>

        <!-- Services Grid -->
        <div class="mb-16">
            <h3 class="section-title">Unsere Foliendesign-Leistungen</h3>
            <div class="grid grid-4" style="margin-top: 2rem;">
                <?php
                $services = array( 'Fahrzeugbeschriftung', 'Schaufensterwerbung', 'Sichtschutzfolien', 'Plotterfolien', 'Designfolien', 'Leuchtkastenbeschriftung', 'Messebeschriftung', 'Wandtattoos' );
                foreach ( $services as $service ) : ?>
                    <div class="card" style="text-align: center;">
                        <div class="card-body">
                            <div class="check-icon" style="margin: 0 auto 0.75rem;"><?php echo werbedruck_icon('check'); ?></div>
                            <p style="font-weight: 600; color: var(--dark);"><?php echo esc_html( $service ); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta-box">
            <h3>Ihr Fahrzeug als mobile Werbefläche</h3>
            <p>Lassen Sie uns gemeinsam Ihre Fahrzeugbeschriftung planen!</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-primary btn-lg">Kostenloses Angebot erhalten</a>
                <a href="tel:022621088" class="btn btn-outline-primary btn-lg">02262-1088</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
