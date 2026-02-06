<?php
/**
 * Template Name: Digitaldruck
 *
 * @package Werbedruck_GM
 */

get_header();
?>

<!-- Hero -->
<section class="page-hero">
    <div class="hero-gradient"></div>
    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1567444295894-75a5b78b1cfe?auto=format&fit=crop&w=1920&h=1080');"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <h1>Digitaldruck</h1>
        <p>Professioneller Digitaldruck seit 2018 - schnell, günstig und kurzfristig</p>
        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-accent btn-lg">Jetzt Angebot anfordern</a>
    </div>
</section>

<!-- Content -->
<section class="section section-white">
    <div class="container">
        <div class="service-content-grid">
            <div>
                <h2>Professioneller Digitaldruck</h2>
                <p>Seit 2018 beschäftigen wir uns mit dem Thema Digitaldruck und haben mehrere Großformatdrucker und Flachbett UV-Drucker von MIMAKI sowie Laminatoren von RollOver und EMBLEM im Einsatz.</p>
                <p>Damit sind wir in der Lage Ihnen schnell, günstig und kurzfristig Aufkleber, Folienbeschriftungen, Sichtschutzfolien, Banner, Schilder, Prüfplaketten, T-Shirt-Folien und vieles mehr On Demand anzufertigen!</p>

                <div class="feature-list" style="margin-bottom: 2rem;">
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>MIMAKI Großformatdrucker</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Flachbett UV-Drucker</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>RollOver Laminatoren</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>EMBLEM Verarbeitungsgeräte</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Schnelle Bearbeitung</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Kleine und große Auflagen</span></div>
                </div>

                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-primary">Beratungstermin vereinbaren <?php echo werbedruck_icon('arrow-right'); ?></a>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1567444295894-75a5b78b1cfe?auto=format&fit=crop&w=800&h=600" alt="Digitaldruck Maschine">
            </div>
        </div>

        <!-- Services Grid -->
        <div class="mb-16">
            <h3 class="section-title">Unsere Digitaldruck-Leistungen</h3>
            <div class="grid grid-4" style="margin-top: 2rem;">
                <?php
                $services = array( 'Aufkleber & Etiketten', 'Banner & Fahnen', 'Sichtschutzfolien', 'Prüfplaketten', 'Folienbeschriftungen', 'Werbeschilder', 'T-Shirt-Folien', 'Großformatdrucke' );
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
            <h3>Gerne erstellen wir Ihnen ein individuelles Angebot</h3>
            <p>Beraten Sie mit unserem Know-How rund um Ihre Werbung!</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-primary btn-lg">Jetzt Angebot erhalten</a>
                <a href="tel:022621088" class="btn btn-outline-primary btn-lg">02262-1088</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
