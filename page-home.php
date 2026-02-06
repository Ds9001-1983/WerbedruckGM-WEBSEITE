<?php
/**
 * Template Name: Startseite
 *
 * @package Werbedruck_GM
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-gradient"></div>
    <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1541961017774-22349e4a1262?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&h=1080');"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <h1>Qualität "MadeInOberberg"<br><span class="highlight">vom Meister</span></h1>
        <p>Professioneller Digitaldruck, Foliendesign, Textilveredelung und Lasergravuren seit 2018. Preisgünstig, qualitativ hochwertig - auch in Einzel- und Kleinauflagen.</p>
        <div class="hero-buttons">
            <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-accent btn-lg">Jetzt Angebot erhalten</a>
            <a href="#services" class="btn btn-outline-white btn-lg">Unsere Leistungen</a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section section-neutral">
    <div class="container">
        <h2 class="section-title">Unsere Leistungen</h2>
        <p class="section-subtitle">Mit unserem umfangreichen Maschinenpark und jahrelanger Erfahrung bieten wir Ihnen professionelle Werbetechnik für alle Ihre Bedürfnisse.</p>

        <div class="grid grid-4">
            <!-- Digitaldruck -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1567444295894-75a5b78b1cfe?auto=format&fit=crop&w=800&h=400" alt="Digitaldruck" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">Digitaldruck</h3>
                    <p class="card-text">Hochwertige Drucke auf verschiedensten Materialien. Von Aufklebern bis Banner - schnell und kostengünstig auch in Kleinauflagen.</p>
                    <ul class="service-features">
                        <li>Aufkleber & Folien</li>
                        <li>Banner & Schilder</li>
                        <li>Sichtschutzfolien</li>
                        <li>Prüfplaketten</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/digitaldruck/' ) ); ?>" class="card-link">Mehr erfahren →</a>
                </div>
            </div>

            <!-- Foliendesign -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1600298881974-6be191ceeda1?auto=format&fit=crop&w=800&h=400" alt="Foliendesign" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">Foliendesign</h3>
                    <p class="card-text">Professionelle Folienverarbeitung für Fahrzeugbeschriftung, Schaufenster und individuelle Designlösungen.</p>
                    <ul class="service-features">
                        <li>Fahrzeugbeschriftung</li>
                        <li>Schaufensterwerbung</li>
                        <li>Plotterfolien</li>
                        <li>Designfolien</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/foliendesign/' ) ); ?>" class="card-link">Mehr erfahren →</a>
                </div>
            </div>

            <!-- Textilveredelung -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=800&h=400" alt="Textilveredelung" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">Textilveredelung</h3>
                    <p class="card-text">Von T-Shirt-Druck bis Bestickung - wir veredeln Ihre Textilien mit modernster Technik und höchster Qualität.</p>
                    <ul class="service-features">
                        <li>T-Shirt-Druck</li>
                        <li>Besticken</li>
                        <li>Becher-/Tassendruck</li>
                        <li>Arbeitskleidung</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/textilveredelung/' ) ); ?>" class="card-link">Mehr erfahren →</a>
                </div>
            </div>

            <!-- Lasergravuren -->
            <div class="card">
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=800&h=400" alt="Lasergravuren" class="card-img">
                <div class="card-body">
                    <h3 class="card-title">Lasergravuren</h3>
                    <p class="card-text">Präzise Lasergravuren auf Holz, Metall, Kunststoff und anderen Materialien für individuelle und dauerhafte Beschriftungen.</p>
                    <ul class="service-features">
                        <li>Holzgravuren</li>
                        <li>Metallgravuren</li>
                        <li>Kunststoffgravuren</li>
                        <li>Personalisierung</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/lasergravuren/' ) ); ?>" class="card-link">Mehr erfahren →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section section-white">
    <div class="container">
        <div class="about-grid">
            <div>
                <h2 style="font-size: 1.875rem; font-weight: 700; color: var(--dark); margin-bottom: 1.5rem;">Über Werbedruck GM</h2>
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

                <div class="about-stats">
                    <div class="stat">
                        <div class="stat-number">2018</div>
                        <div class="stat-label">Gegründet</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">1000+</div>
                        <div class="stat-label">Projekte</div>
                    </div>
                </div>

                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-primary">Persönlichen Termin vereinbaren</a>
            </div>

            <div class="about-images">
                <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=800&h=600" alt="Moderne Druckwerkstatt">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&h=600" alt="Professionelle Drucktechnik">
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="section section-neutral">
    <div class="container">
        <h2 class="section-title">Unser Portfolio</h2>
        <p class="section-subtitle">Entdecken Sie eine Auswahl unserer realisierten Projekte - von kleinen Aufklebern bis hin zu großformatigen Werbeanlagen.</p>

        <div class="grid grid-3">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?auto=format&fit=crop&w=800&h=600" alt="Fahrzeugbeschriftung" class="card-img">
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 1.125rem;">Fahrzeugbeschriftung</h3>
                    <p class="card-text">Vollbeklebung mit hochwertigem Design</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=800&h=600" alt="Großformat Banner" class="card-img">
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 1.125rem;">Großformat Banner</h3>
                    <p class="card-text">Wetterbeständige Außenwerbung</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=800&h=600" alt="T-Shirt Druck" class="card-img">
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 1.125rem;">T-Shirt Druck</h3>
                    <p class="card-text">Individuelle Textilveredelung</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?auto=format&fit=crop&w=800&h=600" alt="Lasergravur" class="card-img">
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 1.125rem;">Lasergravur</h3>
                    <p class="card-text">Präzise Holzgravuren</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?auto=format&fit=crop&w=800&h=600" alt="Geschäftsschilder" class="card-img">
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 1.125rem;">Geschäftsschilder</h3>
                    <p class="card-text">Professionelle Außenwerbung</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1594736797933-d0dbc1b60959?auto=format&fit=crop&w=800&h=600" alt="Aufkleber Design" class="card-img">
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 1.125rem;">Aufkleber Design</h3>
                    <p class="card-text">Individuelle Designs & Formen</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
