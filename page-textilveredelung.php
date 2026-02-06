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
    <div class="hero-gradient" style="background: linear-gradient(135deg, var(--purple-600), var(--purple-700));"></div>
    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=1920&h=1080');"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <h1>Textilveredelung</h1>
        <p>Individuelle Textilveredelung - vom T-Shirt bis zur Arbeitskleidung</p>
        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-purple btn-lg">Jetzt Angebot anfordern</a>
    </div>
</section>

<!-- Content -->
<section class="section section-white">
    <div class="container">
        <div class="service-content-grid">
            <div>
                <h2>Professionelle Textilveredelung</h2>
                <p>Von T-Shirt-Druck über Bestickung bis hin zu individueller Arbeitskleidung - wir veredeln Ihre Textilien mit modernster Technik und höchster Qualität.</p>
                <p>Ob Einzelstück oder Großauflage - wir bieten Ihnen die passende Lösung für Ihre Textilveredelung.</p>

                <div class="feature-list" style="margin-bottom: 2rem;">
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Transferdruck</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Sublimationsdruck</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Flexdruck</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Flockdruck</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Bestickung</span></div>
                    <div class="feature-item"><span class="icon"><?php echo werbedruck_icon('check'); ?></span><span>Einzelstücke möglich</span></div>
                </div>

                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-purple">Beratungstermin vereinbaren <?php echo werbedruck_icon('arrow-right'); ?></a>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=800&h=600" alt="Textilveredelung">
            </div>
        </div>

        <!-- Services Grid -->
        <div class="mb-16">
            <h3 class="section-title">Unsere Textilveredelungs-Leistungen</h3>
            <div class="grid grid-4" style="margin-top: 2rem;">
                <?php
                $services = array( 'T-Shirt-Druck', 'Poloshirts', 'Hoodies & Pullover', 'Arbeitskleidung', 'Caps & Mützen', 'Taschen & Beutel', 'Becher & Tassen', 'Sportbekleidung' );
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
        <div class="cta-box" style="background: rgba(147, 51, 234, 0.1);">
            <h3>Individuelle Textilien für Ihr Team</h3>
            <p>Ob Firmenkleidung, Vereinstrikots oder Werbeartikel - wir haben die passende Lösung!</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-purple btn-lg">Kostenloses Angebot erhalten</a>
                <a href="tel:022621088" class="btn btn-outline-primary btn-lg">02262-1088</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
