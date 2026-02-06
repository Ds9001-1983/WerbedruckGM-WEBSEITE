<?php
/**
 * Template Name: Textilveredelung
 *
 * @package Werbedruck_GM
 */

get_header();
?>

<!-- Hero -->
<section class="page-hero">
    <div class="hero-gradient"></div>
    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=1920&h=1080');"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-badge">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20.38 3.46L16 2 12 5.5 8 2l-4.38 1.46a2 2 0 00-1.34 2.23l.58 3.47a1 1 0 00.99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 002-2V9.5h2.15a1 1 0 00.99-.84l.58-3.47a2 2 0 00-1.34-2.23z"/></svg>
            Textilveredelung vom Profi
        </div>
        <h1>Textil<span class="highlight">veredelung</span></h1>
        <p>Individuelle Textilveredelung – vom T-Shirt bis zur Arbeitskleidung. Auch Einzelstücke möglich.</p>
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
                    DTF & Flex Technologie
                </div>
                <h2>Professionelle <span class="gradient-text">Textilveredelung</span></h2>
                <p>Von T-Shirt-Druck über Bestickung bis hin zu individueller Arbeitskleidung – wir veredeln Ihre Textilien mit modernster Technik und höchster Qualität.</p>
                <p>Ob Einzelstück oder Großauflage – wir bieten Ihnen die passende Lösung für Ihre Textilveredelung.</p>

                <div class="feature-list" style="margin-bottom: 2rem;">
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Transferdruck</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Sublimationsdruck</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Flexdruck</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Flockdruck</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Bestickung</span></div>
                    <div class="feature-item"><span class="check-icon"><?php echo werbedruck_icon('check'); ?></span><span>Einzelstücke möglich</span></div>
                </div>

                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-primary">Beratungstermin vereinbaren</a>
            </div>
            <div class="reveal-right">
                <img src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=800&h=600" alt="Textilveredelung">
            </div>
        </div>

        <!-- Services Grid -->
        <div class="mb-16">
            <h3 class="section-title reveal">Unsere <span class="accent">Textilveredelungs</span>-Leistungen</h3>
            <div class="grid grid-4" style="margin-top: 2rem;">
                <?php
                $services = array( 'T-Shirt-Druck', 'Poloshirts', 'Hoodies & Pullover', 'Arbeitskleidung', 'Caps & Mützen', 'Taschen & Beutel', 'Becher & Tassen', 'Sportbekleidung' );
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

        <!-- Waschanleitung Download -->
        <div class="download-section reveal">
            <h3>Waschanleitung für bedruckte Textilien</h3>
            <p>Um die Langlebigkeit und Farbbrillanz Ihrer bedruckten Textilien zu gewährleisten, beachten Sie bitte unsere Pflegehinweise für Flex-, Flock- und DTF-Druck.</p>
            <div class="download-list">
                <a href="<?php echo esc_url( get_template_directory_uri() . '/assets/pdf/WGM-WaschanleitungFlexFlockundDTFDruck.pdf' ); ?>" target="_blank" class="download-item">
                    <?php echo werbedruck_icon('download'); ?> Waschanleitung herunterladen (PDF)
                </a>
            </div>
        </div>

        <!-- CTA -->
        <div class="cta-box reveal-scale" style="margin-top: 3rem;">
            <h3>Individuelle Textilien für Ihr Team</h3>
            <p>Ob Firmenkleidung, Vereinstrikots oder Werbeartikel – wir haben die passende Lösung!</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-accent btn-lg">Kostenloses Angebot erhalten</a>
                <a href="tel:+4916059099110" class="btn btn-outline-white btn-lg">0160-5909911</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
