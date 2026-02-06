<?php
/**
 * Template Name: Folienbeschriftung
 *
 * @package Werbedruck_GM
 */

get_header();
?>

<!-- Hero -->
<section class="page-hero">
    <div class="hero-gradient"></div>
    <div class="hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/img/hero/folien-fahrschule-plot.jpg' ); ?>');"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-badge">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14"/></svg>
            Professionelle Folienverarbeitung
        </div>
        <h1>Folien<span class="highlight">beschriftung</span></h1>
        <p>Professionelle Folienverarbeitung für Fahrzeuge, Schaufenster und individuelle Designlösungen.</p>
        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-accent btn-lg">Jetzt Angebot anfordern</a>
    </div>
</section>

<!-- Content -->
<section class="section section-white">
    <div class="container">
        <div class="service-content-grid">
            <div class="reveal-left">
                <div class="partner-badge">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Markenfolien
                </div>
                <h2>Professionelle <span class="gradient-text">Folienbeschriftung</span></h2>
                <p>Von der Fahrzeugbeschriftung über Schaufensterwerbung bis hin zu individuellen Designlösungen – wir verarbeiten hochwertige Folien für jeden Einsatzzweck.</p>
                <p>Mit unseren professionellen Schneidplottern und Laminiergeräten erstellen wir präzise Folienschnitte und langlebige Beschriftungen.</p>

                <div class="feature-list" style="margin-bottom: 2rem;">
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Professionelle Schneidplotter</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Hochwertige Markenfolien</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Individuelle Designs</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Montageservice</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Beratung vor Ort</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Schnelle Umsetzung</span></div>
                </div>

                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-primary">Beratungstermin vereinbaren</a>
            </div>
            <div class="reveal-right">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-mimaki-aufkleber.jpg' ); ?>" alt="Folienbeschriftung">
            </div>
        </div>

        <!-- Services Grid -->
        <div class="mb-16">
            <h3 class="section-title reveal">Unsere <span class="accent">Folienbeschriftung</span>-Leistungen</h3>
            <div class="grid grid-4" style="margin-top: 2rem;">
                <?php
                $services = array( 'Fahrzeugbeschriftung', 'Schaufensterwerbung', 'Sichtschutzfolien', 'Plotterfolien', 'Designfolien', 'Leuchtkastenbeschriftung', 'Messebeschriftung', 'Wandtattoos' );
                $i = 1;
                foreach ( $services as $service ) : ?>
                    <div class="card reveal stagger-<?php echo $i; ?>" style="text-align: center;">
                        <div class="card-body">
                            <div class="check-icon" style="margin: 0 auto 0.75rem; width: 48px; height: 48px;"><?php echo werbedruck_icon('check'); ?></div>
                            <p style="font-weight: 700; color: var(--dark);"><?php echo esc_html( $service ); ?></p>
                        </div>
                    </div>
                <?php $i++; endforeach; ?>
            </div>
        </div>

        <!-- Galerie -->
        <div class="mb-16">
            <h3 class="section-title reveal">Unsere <span class="accent">Arbeiten</span></h3>
            <div class="grid grid-3" style="margin-top: 2rem;">
                <div class="card reveal stagger-1">
                    <div class="card-img-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-aufkleber-bogen.jpg' ); ?>" alt="Fahrzeugbeschriftung" class="card-img">
                    </div>
                    <div class="card-body"><p style="font-weight:700;color:var(--dark);">Fahrzeugbeschriftung komplett</p></div>
                </div>
                <div class="card reveal stagger-2">
                    <div class="card-img-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/folien-fahrschule-plot.jpg' ); ?>" alt="Schaufenster" class="card-img">
                    </div>
                    <div class="card-body"><p style="font-weight:700;color:var(--dark);">Schaufensterbeschriftung</p></div>
                </div>
                <div class="card reveal stagger-3">
                    <div class="card-img-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-banner-gerollt.jpg' ); ?>" alt="Leuchtkasten" class="card-img">
                    </div>
                    <div class="card-body"><p style="font-weight:700;color:var(--dark);">Leuchtkasten & Schilder</p></div>
                </div>
                <div class="card reveal stagger-4">
                    <div class="card-img-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-uv-aufkleber.jpg' ); ?>" alt="Sichtschutz" class="card-img">
                    </div>
                    <div class="card-body"><p style="font-weight:700;color:var(--dark);">Sichtschutzfolien</p></div>
                </div>
                <div class="card reveal stagger-5">
                    <div class="card-img-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/folien-fahrschule-aufkleber.jpg' ); ?>" alt="Schaufensterwerbung" class="card-img">
                    </div>
                    <div class="card-body"><p style="font-weight:700;color:var(--dark);">Schaufensterwerbung</p></div>
                </div>
                <div class="card reveal stagger-6">
                    <div class="card-img-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-plakate-waschanlage.jpg' ); ?>" alt="Werkstatt" class="card-img">
                    </div>
                    <div class="card-body"><p style="font-weight:700;color:var(--dark);">Folienverarbeitung in der Werkstatt</p></div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta-box reveal-scale">
            <h3>Ihr Fahrzeug als mobile Werbefläche</h3>
            <p>Lassen Sie uns gemeinsam Ihre Fahrzeugbeschriftung planen!</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-accent btn-lg">Kostenloses Angebot erhalten</a>
                <a href="tel:+4916059099110" class="btn btn-outline-white btn-lg">0160-5909911</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
