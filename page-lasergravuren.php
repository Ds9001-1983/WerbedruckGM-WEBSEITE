<?php
/**
 * Template Name: Lasergravuren
 *
 * @package Werbedruck_GM
 */

get_header();
?>

<!-- Hero -->
<section class="page-hero">
    <div class="hero-gradient"></div>
    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=1920&h=1080');"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-badge">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Präzision bis 0,1mm
        </div>
        <h1>Laser<span class="highlight">gravuren</span></h1>
        <p>Präzise Lasergravuren auf verschiedensten Materialien – dauerhaft, vielseitig und professionell.</p>
        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-accent btn-lg">Jetzt Angebot anfordern</a>
    </div>
</section>

<!-- Content -->
<section class="section section-white">
    <div class="container">
        <div class="service-content-grid">
            <div class="reveal-left">
                <div class="partner-badge">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    CO2 & Faserlaser
                </div>
                <h2>Professionelle <span class="gradient-text">Lasergravuren</span></h2>
                <p>Mit unserer modernen Lasertechnologie gravieren wir präzise auf Holz, Metall, Kunststoff, Glas und viele weitere Materialien.</p>
                <p>Ob Einzelstück oder Serie – unsere Lasergravuren sind dauerhaft, präzise und vielseitig einsetzbar.</p>

                <div class="feature-list" style="margin-bottom: 2rem;">
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>CO2-Laser</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Faserlaser</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Hohe Präzision</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Vielseitige Materialien</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Schnelle Bearbeitung</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Einzelstücke möglich</span></div>
                </div>

                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-primary">Beratungstermin vereinbaren</a>
            </div>
            <div class="reveal-right">
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=800&h=600" alt="Lasergravur">
            </div>
        </div>

        <!-- Services Grid -->
        <div class="mb-16">
            <h3 class="section-title reveal">Unsere <span class="accent">Lasergravur</span>-Leistungen</h3>
            <div class="grid grid-4" style="margin-top: 2rem;">
                <?php
                $services = array( 'Holzgravuren', 'Metallgravuren', 'Kunststoffgravuren', 'Glasgravuren', 'Ledergravuren', 'Schilder & Plaketten', 'Stempel', 'Personalisierung' );
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

        <!-- Technology Section -->
        <div class="cta-box mb-16 reveal-scale">
            <h3>Modernste Lasertechnologie</h3>
            <div class="tech-grid" style="margin-top: 2rem;">
                <div class="tech-item" style="color: rgba(255,255,255,0.9);">
                    <div class="icon-circle" style="background: linear-gradient(135deg, var(--primary), var(--primary-light));">
                        <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    </div>
                    <h4 style="color: #fff;">Hohe Präzision</h4>
                    <p style="color: rgba(255,255,255,0.7);">Feinste Details bis 0,1mm Genauigkeit für perfekte Ergebnisse</p>
                </div>
                <div class="tech-item" style="color: rgba(255,255,255,0.9);">
                    <div class="icon-circle" style="background: linear-gradient(135deg, var(--primary), var(--primary-light));">
                        <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h4 style="color: #fff;">Vielseitigkeit</h4>
                    <p style="color: rgba(255,255,255,0.7);">Bearbeitung verschiedenster Materialien in einem Arbeitsgang</p>
                </div>
                <div class="tech-item" style="color: rgba(255,255,255,0.9);">
                    <div class="icon-circle" style="background: linear-gradient(135deg, var(--primary), var(--primary-light));">
                        <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h4 style="color: #fff;">Schnelligkeit</h4>
                    <p style="color: rgba(255,255,255,0.7);">Kurze Bearbeitungszeiten auch bei komplexen Designs</p>
                </div>
            </div>
        </div>

        <!-- Examples -->
        <div class="mb-16">
            <h3 class="section-title reveal">Anwendungs<span class="accent">beispiele</span></h3>
            <div class="examples-grid" style="margin-top: 2rem;">
                <div class="reveal stagger-1">
                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?auto=format&fit=crop&w=400&h=300" alt="Holzgravur Beispiel">
                    <h4>Personalisierte Holzartikel</h4>
                    <p>Individuelle Gravuren für Geschenke und Dekoration</p>
                </div>
                <div class="reveal stagger-2">
                    <img src="https://images.unsplash.com/photo-1565814329452-e1efa11c5b89?auto=format&fit=crop&w=400&h=300" alt="Industrielle Kennzeichnung">
                    <h4>Industrielle Kennzeichnung</h4>
                    <p>Dauerhafte Beschriftung für Maschinen und Bauteile</p>
                </div>
                <div class="reveal stagger-3">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?auto=format&fit=crop&w=400&h=300" alt="Acryl Werbeschilder">
                    <h4>Acryl-Werbeschilder</h4>
                    <p>Hochwertige Schilder für professionelle Präsentation</p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta-box reveal-scale">
            <h3>Ihre Idee – unsere Präzision</h3>
            <p>Lassen Sie uns gemeinsam Ihre Vorstellungen in perfekte Lasergravuren umsetzen!</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-accent btn-lg">Kostenloses Angebot erhalten</a>
                <a href="tel:+4916059099110" class="btn btn-outline-white btn-lg">Materialberatung</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
