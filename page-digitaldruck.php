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
    <div class="hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/img/hero/digitaldruck-mimaki-halle.jpg' ); ?>');"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-badge">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2z"/></svg>
            Professioneller Digitaldruck
        </div>
        <h1>Digital<span class="highlight">druck</span></h1>
        <p>Professioneller Digitaldruck seit 2018 – schnell, günstig und kurzfristig. Auch in Einzel- und Kleinauflagen.</p>
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
                    MIMAKI Technologie
                </div>
                <h2>Professioneller <span class="gradient-text">Digitaldruck</span></h2>
                <p>Seit 2018 beschäftigen wir uns mit dem Thema Digitaldruck und haben mehrere Großformatdrucker und Flachbett UV-Drucker von MIMAKI sowie Laminatoren von RollOver und EMBLEM im Einsatz.</p>
                <p>Damit sind wir in der Lage Ihnen schnell, günstig und kurzfristig Aufkleber, Folienbeschriftungen, Sichtschutzfolien, Banner, Schilder, Prüfplaketten, T-Shirt-Folien und vieles mehr On Demand anzufertigen!</p>

                <div class="feature-list" style="margin-bottom: 2rem;">
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>MIMAKI Großformatdrucker</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Flachbett UV-Drucker</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>RollOver Laminatoren</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>EMBLEM Verarbeitungsgeräte</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Schnelle Bearbeitung</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Kleine und große Auflagen</span></div>
                </div>

                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-primary">Beratungstermin vereinbaren</a>
            </div>
            <div class="reveal-right">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-mimaki-banner.jpg' ); ?>" alt="Digitaldruck Großformat">
            </div>
        </div>

        <!-- Services Grid -->
        <div class="mb-16">
            <h3 class="section-title reveal">Unsere <span class="accent">Digitaldruck</span>-Leistungen</h3>
            <div class="grid grid-4" style="margin-top: 2rem;">
                <?php
                $services = array(
                    array('name' => 'Aufkleber & Etiketten', 'icon' => 'tag'),
                    array('name' => 'Banner & Fahnen', 'icon' => 'flag'),
                    array('name' => 'Sichtschutzfolien', 'icon' => 'eye-off'),
                    array('name' => 'Prüfplaketten', 'icon' => 'shield'),
                    array('name' => 'Folienbeschriftungen', 'icon' => 'type'),
                    array('name' => 'Werbeschilder', 'icon' => 'square'),
                    array('name' => 'T-Shirt-Folien', 'icon' => 'shirt'),
                    array('name' => 'Großformatdrucke', 'icon' => 'maximize'),
                );
                $i = 1;
                foreach ( $services as $service ) : ?>
                    <div class="card reveal stagger-<?php echo $i; ?>" style="text-align: center;">
                        <div class="card-body">
                            <div class="check-icon" style="margin: 0 auto 0.75rem; width: 48px; height: 48px;"><?php echo werbedruck_icon('check'); ?></div>
                            <p style="font-weight: 700; color: var(--dark);"><?php echo esc_html( $service['name'] ); ?></p>
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
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-mimaki-snack.jpg' ); ?>" alt="Großformat-Plotter" class="card-img">
                    </div>
                    <div class="card-body"><p style="font-weight:700;color:var(--dark);">MIMAKI Großformat-Plotter</p></div>
                </div>
                <div class="card reveal stagger-2">
                    <div class="card-img-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-mimaki-banner.jpg' ); ?>" alt="Banner Großformat" class="card-img">
                    </div>
                    <div class="card-body"><p style="font-weight:700;color:var(--dark);">Banner & Großformatdruck</p></div>
                </div>
                <div class="card reveal stagger-3">
                    <div class="card-img-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-mimaki-aufkleber.jpg' ); ?>" alt="Aufkleber" class="card-img">
                    </div>
                    <div class="card-body"><p style="font-weight:700;color:var(--dark);">Aufkleber & Etiketten</p></div>
                </div>
                <div class="card reveal stagger-4">
                    <div class="card-img-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-uv-taschentuecher.jpg' ); ?>" alt="Schilder" class="card-img">
                    </div>
                    <div class="card-body"><p style="font-weight:700;color:var(--dark);">Schilder & Plaketten</p></div>
                </div>
                <div class="card reveal stagger-5">
                    <div class="card-img-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-easylam-laminator.jpg' ); ?>" alt="Laminierung" class="card-img">
                    </div>
                    <div class="card-body"><p style="font-weight:700;color:var(--dark);">Laminierung & Nachbearbeitung</p></div>
                </div>
                <div class="card reveal stagger-6">
                    <div class="card-img-wrapper">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-mimaki-snack.jpg' ); ?>" alt="Prüfplaketten" class="card-img">
                    </div>
                    <div class="card-body"><p style="font-weight:700;color:var(--dark);">Prüfplaketten</p></div>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta-box reveal-scale">
            <h3>Gerne erstellen wir Ihnen ein individuelles Angebot</h3>
            <p>Beraten Sie mit unserem Know-How rund um Ihre Werbung!</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-accent btn-lg">Jetzt Angebot erhalten</a>
                <a href="tel:+4916059099110" class="btn btn-outline-white btn-lg">0160-5909911</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
