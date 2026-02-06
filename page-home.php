<?php
/**
 * Template Name: Startseite
 *
 * @package Werbedruck_GM
 */

get_header();
?>

<!-- Hero Section - Premium Fullscreen -->
<section class="hero">
    <div class="hero-gradient"></div>
    <div class="hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/img/hero/werkstatt-uebersicht.jpg' ); ?>');"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-badge">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Seit 2018 im Oberbergischen
        </div>
        <h1>Qualität<br><span class="highlight">"MadeInOberberg"</span><br>vom Meister</h1>
        <p>Professioneller Digitaldruck, Foliendesign, Textilveredelung und Lasergravuren. Preisgünstig, qualitativ hochwertig – auch in Einzel- und Kleinauflagen.</p>
        <div class="hero-buttons">
            <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-accent btn-lg">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
                Jetzt Angebot erhalten
            </a>
            <a href="#services" class="btn btn-outline-white btn-lg">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                Unsere Leistungen
            </a>
        </div>
    </div>
    <div class="scroll-indicator">
        <div class="mouse"></div>
        <span>Scroll</span>
    </div>
</section>

<!-- Marquee Section -->
<div class="marquee-section">
    <div class="marquee-track">
        <span class="marquee-item">Digitaldruck <span class="dot"></span></span>
        <span class="marquee-item">Foliendesign <span class="dot"></span></span>
        <span class="marquee-item">Textilveredelung <span class="dot"></span></span>
        <span class="marquee-item">Lasergravuren <span class="dot"></span></span>
        <span class="marquee-item">Fahrzeugbeschriftung <span class="dot"></span></span>
        <span class="marquee-item">Schilder & Banner <span class="dot"></span></span>
        <span class="marquee-item">T-Shirt Druck <span class="dot"></span></span>
        <span class="marquee-item">Aufkleber <span class="dot"></span></span>
        <span class="marquee-item">Digitaldruck <span class="dot"></span></span>
        <span class="marquee-item">Foliendesign <span class="dot"></span></span>
        <span class="marquee-item">Textilveredelung <span class="dot"></span></span>
        <span class="marquee-item">Lasergravuren <span class="dot"></span></span>
        <span class="marquee-item">Fahrzeugbeschriftung <span class="dot"></span></span>
        <span class="marquee-item">Schilder & Banner <span class="dot"></span></span>
        <span class="marquee-item">T-Shirt Druck <span class="dot"></span></span>
        <span class="marquee-item">Aufkleber <span class="dot"></span></span>
    </div>
</div>

<!-- Services Section -->
<section id="services" class="section section-gradient">
    <div class="container">
        <h2 class="section-title reveal">Unsere <span class="accent">Leistungen</span></h2>
        <p class="section-subtitle reveal">Mit unserem umfangreichen Maschinenpark und jahrelanger Erfahrung bieten wir Ihnen professionelle Werbetechnik für alle Ihre Bedürfnisse.</p>

        <div class="grid grid-4">
            <!-- Digitaldruck -->
            <div class="card reveal stagger-1">
                <div class="card-img-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-grossformat-plotter.jpg' ); ?>" alt="Digitaldruck" class="card-img">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Digitaldruck</h3>
                    <p class="card-text">Hochwertige Drucke auf verschiedensten Materialien. Von Aufklebern bis Banner – schnell und kostengünstig auch in Kleinauflagen.</p>
                    <ul class="service-features">
                        <li>Aufkleber & Folien</li>
                        <li>Banner & Schilder</li>
                        <li>Sichtschutzfolien</li>
                        <li>Prüfplaketten</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/digitaldruck/' ) ); ?>" class="card-link">Mehr erfahren <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                </div>
            </div>

            <!-- Foliendesign -->
            <div class="card reveal stagger-2">
                <div class="card-img-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/folien-fahrzeugbeschriftung.jpg' ); ?>" alt="Foliendesign" class="card-img">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Foliendesign</h3>
                    <p class="card-text">Professionelle Folienverarbeitung für Fahrzeugbeschriftung, Schaufenster und individuelle Designlösungen.</p>
                    <ul class="service-features">
                        <li>Fahrzeugbeschriftung</li>
                        <li>Schaufensterwerbung</li>
                        <li>Plotterfolien</li>
                        <li>Designfolien</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/foliendesign/' ) ); ?>" class="card-link">Mehr erfahren <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                </div>
            </div>

            <!-- Textilveredelung -->
            <div class="card reveal stagger-3">
                <div class="card-img-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/textil-bedruckte-shirts.jpg' ); ?>" alt="Textilveredelung" class="card-img">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Textilveredelung</h3>
                    <p class="card-text">Von T-Shirt-Druck bis Bestickung – wir veredeln Ihre Textilien mit modernster Technik und höchster Qualität.</p>
                    <ul class="service-features">
                        <li>T-Shirt-Druck</li>
                        <li>Besticken</li>
                        <li>Becher-/Tassendruck</li>
                        <li>Arbeitskleidung</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/textilveredelung/' ) ); ?>" class="card-link">Mehr erfahren <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                </div>
            </div>

            <!-- Lasergravuren -->
            <div class="card reveal stagger-4">
                <div class="card-img-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/laser-holzgravur.jpg' ); ?>" alt="Lasergravuren" class="card-img">
                </div>
                <div class="card-body">
                    <h3 class="card-title">Lasergravuren</h3>
                    <p class="card-text">Präzise Lasergravuren auf Holz, Metall, Kunststoff und anderen Materialien für individuelle und dauerhafte Beschriftungen.</p>
                    <ul class="service-features">
                        <li>Holzgravuren</li>
                        <li>Metallgravuren</li>
                        <li>Kunststoffgravuren</li>
                        <li>Personalisierung</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/lasergravuren/' ) ); ?>" class="card-link">Mehr erfahren <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counter Section -->
<section class="counter-section">
    <div class="container">
        <div class="counter-grid">
            <div class="counter-item reveal stagger-1">
                <div class="counter-number" data-target="2018">2018</div>
                <div class="counter-label">Gegründet</div>
            </div>
            <div class="counter-item reveal stagger-2">
                <div class="counter-number" data-target="1000" data-suffix="+">1000+</div>
                <div class="counter-label">Projekte</div>
            </div>
            <div class="counter-item reveal stagger-3">
                <div class="counter-number" data-target="100" data-suffix="%">100%</div>
                <div class="counter-label">Kundenzufriedenheit</div>
            </div>
            <div class="counter-item reveal stagger-4">
                <div class="counter-number" data-target="4">4</div>
                <div class="counter-label">Fachbereiche</div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section section-white">
    <div class="container">
        <h2 class="section-title reveal">So <span class="accent">arbeiten</span> wir</h2>
        <p class="section-subtitle reveal">Von der ersten Idee bis zum fertigen Produkt – unser bewährter Prozess sorgt für erstklassige Ergebnisse.</p>

        <div class="process-grid">
            <div class="process-step reveal stagger-1">
                <div class="process-number">1</div>
                <h4>Beratung</h4>
                <p>Persönliche Beratung und Bedarfsanalyse für Ihr Projekt.</p>
            </div>
            <div class="process-step reveal stagger-2">
                <div class="process-number">2</div>
                <h4>Konzept</h4>
                <p>Wir erstellen ein individuelles Konzept und Angebot.</p>
            </div>
            <div class="process-step reveal stagger-3">
                <div class="process-number">3</div>
                <h4>Produktion</h4>
                <p>Fertigung mit modernster Technik und höchster Präzision.</p>
            </div>
            <div class="process-step reveal stagger-4">
                <div class="process-number">4</div>
                <h4>Lieferung</h4>
                <p>Pünktliche Lieferung oder Montage vor Ort.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section section-neutral">
    <div class="container">
        <div class="about-grid">
            <div class="reveal-left">
                <div class="partner-badge">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    Meisterbetrieb
                </div>
                <h2 style="font-size: 2rem; font-weight: 900; color: var(--dark); margin-bottom: 1.5rem; letter-spacing: -0.03em;">Über <span class="gradient-text">Werbedruck GM</span></h2>
                <p style="font-size: 1.0625rem; color: var(--gray-500); margin-bottom: 1.5rem; line-height: 1.8;">
                    Seit 2018 sind wir Ihr zuverlässiger Partner für professionelle Werbetechnik im Oberbergischen. 
                    Mit dem stetigen Antrieb, Werbetechnik vom Kunden für den Kunden preisgünstig und qualitativ 
                    hochwertig auch in Einzel- und Kleinauflagen umzusetzen.
                </p>
                <p style="font-size: 1.0625rem; color: var(--gray-500); margin-bottom: 2rem; line-height: 1.8;">
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

                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-primary">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    Persönlichen Termin vereinbaren
                </a>
            </div>

            <div class="about-images reveal-right">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/werkstatt-maschinenpark.jpg' ); ?>" alt="Moderne Druckwerkstatt">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/werkstatt-detail.jpg' ); ?>" alt="Professionelle Drucktechnik">
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section section-white">
    <div class="container">
        <h2 class="section-title reveal">Was unsere <span class="accent">Kunden</span> sagen</h2>
        <p class="section-subtitle reveal">Zufriedene Kunden sind unser bester Beweis für Qualität und Zuverlässigkeit.</p>

        <div class="grid grid-3">
            <div class="testimonial-card reveal stagger-1">
                <p class="testimonial-text">Super Qualität und schnelle Lieferung! Die Fahrzeugbeschriftung sieht fantastisch aus. Absolut empfehlenswert!</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">MK</div>
                    <div>
                        <div class="testimonial-name">Michael K.</div>
                        <div class="testimonial-role">Handwerksbetrieb</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card reveal stagger-2">
                <p class="testimonial-text">Tolle Beratung und perfekte Umsetzung unserer Firmen-T-Shirts. Die Druckqualität ist hervorragend!</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">SH</div>
                    <div>
                        <div class="testimonial-name">Sandra H.</div>
                        <div class="testimonial-role">Sportverein</div>
                    </div>
                </div>
            </div>
            <div class="testimonial-card reveal stagger-3">
                <p class="testimonial-text">Preis-Leistung stimmt hier einfach. Auch Kleinauflagen werden professionell und schnell umgesetzt. Top!</p>
                <div class="testimonial-author">
                    <div class="testimonial-avatar">TW</div>
                    <div>
                        <div class="testimonial-name">Thomas W.</div>
                        <div class="testimonial-role">Gastronomiebetrieb</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="section section-neutral">
    <div class="container">
        <h2 class="section-title reveal">Unser <span class="accent">Portfolio</span></h2>
        <p class="section-subtitle reveal">Entdecken Sie eine Auswahl unserer realisierten Projekte – von kleinen Aufklebern bis hin zu großformatigen Werbeanlagen.</p>

        <div class="grid grid-3">
            <div class="card reveal stagger-1">
                <div class="card-img-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/folien-fahrzeug-komplett.jpg' ); ?>" alt="Fahrzeugbeschriftung" class="card-img">
                </div>
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 1.125rem;">Fahrzeugbeschriftung</h3>
                    <p class="card-text">Vollbeklebung mit hochwertigem Design</p>
                </div>
            </div>
            <div class="card reveal stagger-2">
                <div class="card-img-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-banner-grossformat.jpg' ); ?>" alt="Großformat Banner" class="card-img">
                </div>
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 1.125rem;">Großformat Banner</h3>
                    <p class="card-text">Wetterbeständige Außenwerbung</p>
                </div>
            </div>
            <div class="card reveal stagger-3">
                <div class="card-img-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/textil-arbeitskleidung.jpg' ); ?>" alt="T-Shirt Druck" class="card-img">
                </div>
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 1.125rem;">T-Shirt Druck</h3>
                    <p class="card-text">Individuelle Textilveredelung</p>
                </div>
            </div>
            <div class="card reveal stagger-4">
                <div class="card-img-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/laser-personalisiert.jpg' ); ?>" alt="Lasergravur" class="card-img">
                </div>
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 1.125rem;">Lasergravur</h3>
                    <p class="card-text">Präzise Holzgravuren</p>
                </div>
            </div>
            <div class="card reveal stagger-5">
                <div class="card-img-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/folien-leuchtkasten-schild.jpg' ); ?>" alt="Geschäftsschilder" class="card-img">
                </div>
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 1.125rem;">Geschäftsschilder</h3>
                    <p class="card-text">Professionelle Außenwerbung</p>
                </div>
            </div>
            <div class="card reveal stagger-6">
                <div class="card-img-wrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/content/digitaldruck-produkte-aufkleber.jpg' ); ?>" alt="Aufkleber Design" class="card-img">
                </div>
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 1.125rem;">Aufkleber Design</h3>
                    <p class="card-text">Individuelle Designs & Formen</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section section-white">
    <div class="container">
        <div class="cta-box reveal-scale">
            <h3>Bereit für Ihr nächstes Projekt?</h3>
            <p>Kontaktieren Sie uns für eine kostenlose Beratung und ein unverbindliches Angebot.</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-accent btn-lg">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    Jetzt anfragen
                </a>
                <a href="tel:+4916059099110" class="btn btn-outline-white btn-lg">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    0160-5909911
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
