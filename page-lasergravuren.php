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
    <div class="hero-gradient" style="background: linear-gradient(135deg, var(--orange-600), var(--orange-700));"></div>
    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=1920&h=1080');"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <h1>Lasergravuren</h1>
        <p>Präzise Lasergravuren auf verschiedensten Materialien</p>
        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-orange btn-lg">Jetzt Angebot anfordern</a>
    </div>
</section>

<!-- Content -->
<section class="section section-white">
    <div class="container">
        <div class="service-content-grid">
            <div>
                <h2>Professionelle Lasergravuren</h2>
                <p>Mit unserer modernen Lasertechnologie gravieren wir präzise auf Holz, Metall, Kunststoff, Glas und viele weitere Materialien.</p>
                <p>Ob Einzelstück oder Serie - unsere Lasergravuren sind dauerhaft, präzise und vielseitig einsetzbar.</p>

                <div class="feature-list" style="margin-bottom: 2rem;">
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>CO2-Laser</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Faserlaser</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Hohe Präzision</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Vielseitige Materialien</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Schnelle Bearbeitung</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Einzelstücke möglich</span></div>
                </div>

                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-orange">Beratungstermin vereinbaren <?php echo werbedruck_icon('arrow-right'); ?></a>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=800&h=600" alt="Lasergravur">
            </div>
        </div>

        <!-- Services Grid -->
        <div class="mb-16">
            <h3 class="section-title">Unsere Lasergravur-Leistungen</h3>
            <div class="grid grid-4" style="margin-top: 2rem;">
                <?php
                $services = array( 'Holzgravuren', 'Metallgravuren', 'Kunststoffgravuren', 'Glasgravuren', 'Ledergravuren', 'Schilder & Plaketten', 'Stempel', 'Personalisierung' );
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

        <!-- Technology Section -->
        <div class="cta-box mb-16">
            <h3>Modernste Lasertechnologie</h3>
            <div class="tech-grid" style="margin-top: 2rem;">
                <div class="tech-item">
                    <div class="icon-circle" style="background: var(--orange-600);"><?php echo werbedruck_icon('zap'); ?></div>
                    <h4>Hohe Präzision</h4>
                    <p>Feinste Details bis 0,1mm Genauigkeit für perfekte Ergebnisse</p>
                </div>
                <div class="tech-item">
                    <div class="icon-circle" style="background: var(--orange-600);"><?php echo werbedruck_icon('check'); ?></div>
                    <h4>Vielseitigkeit</h4>
                    <p>Bearbeitung verschiedenster Materialien in einem Arbeitsgang</p>
                </div>
                <div class="tech-item">
                    <div class="icon-circle" style="background: var(--orange-600);"><?php echo werbedruck_icon('arrow-right'); ?></div>
                    <h4>Schnelligkeit</h4>
                    <p>Kurze Bearbeitungszeiten auch bei komplexen Designs</p>
                </div>
            </div>
        </div>

        <!-- Examples -->
        <div class="mb-16">
            <h3 class="section-title">Anwendungsbeispiele</h3>
            <div class="examples-grid" style="margin-top: 2rem;">
                <div>
                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?auto=format&fit=crop&w=400&h=300" alt="Holzgravur Beispiel">
                    <h4>Personalisierte Holzartikel</h4>
                    <p>Individuelle Gravuren für Geschenke und Dekoration</p>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1565814329452-e1efa11c5b89?auto=format&fit=crop&w=400&h=300" alt="Industrielle Kennzeichnung">
                    <h4>Industrielle Kennzeichnung</h4>
                    <p>Dauerhafte Beschriftung für Maschinen und Bauteile</p>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?auto=format&fit=crop&w=400&h=300" alt="Acryl Werbeschilder">
                    <h4>Acryl-Werbeschilder</h4>
                    <p>Hochwertige Schilder für professionelle Präsentation</p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta-box" style="background: rgba(234, 88, 12, 0.1);">
            <h3>Ihre Idee - unsere Präzision</h3>
            <p>Lassen Sie uns gemeinsam Ihre Vorstellungen in perfekte Lasergravuren umsetzen!</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-orange btn-lg">Kostenloses Angebot erhalten</a>
                <a href="tel:022621088" class="btn btn-outline-orange btn-lg">Materialberatung</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
