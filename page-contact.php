<?php
/**
 * Template Name: Kontakt
 *
 * @package Werbedruck_GM
 */

get_header();
?>

<!-- Hero -->
<section class="page-hero">
    <div class="hero-gradient" style="background: linear-gradient(135deg, var(--secondary-dark) 0%, var(--gray-800) 50%, var(--primary-dark) 100%);"></div>
    <div class="hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/img/hero/digitaldruck-kyocera-drucker.jpg' ); ?>');"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <h1>Kontakt</h1>
        <p>Wir freuen uns auf Ihre Anfrage – kontaktieren Sie uns noch heute!</p>
    </div>
</section>

<!-- Content -->
<section class="section section-white">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="reveal-left">
                <h2 style="font-size: 1.875rem; font-weight: 800; color: var(--dark); margin-bottom: 1.5rem;">Kontaktieren Sie uns</h2>
                <p style="font-size: 1.125rem; color: var(--gray-600); margin-bottom: 2rem;">
                    Haben Sie Fragen zu unseren Leistungen oder möchten Sie ein individuelles Angebot? 
                    Wir beraten Sie gerne persönlich.
                </p>

                <div class="contact-info-item">
                    <div class="icon-box"><?php echo werbedruck_icon('map-pin'); ?></div>
                    <div>
                        <h4>Werkstatt</h4>
                        <p>Quellenweg 6a<br>51645 Gummersbach</p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="icon-box"><?php echo werbedruck_icon('map-pin'); ?></div>
                    <div>
                        <h4>Rechnungsanschrift</h4>
                        <p>c/o Sonja Gerharz<br>Alte Landstr. 57<br>51647 Gummersbach</p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="icon-box"><?php echo werbedruck_icon('phone'); ?></div>
                    <div>
                        <h4>Telefon</h4>
                        <p>
                            <a href="tel:01605909911" style="color: var(--primary); font-weight: 600;">0160-5909911</a> (Mobil)<br>
                            <a href="tel:022621088" style="color: var(--primary);">02262-1088</a> (Festnetz)
                        </p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="icon-box"><?php echo werbedruck_icon('mail'); ?></div>
                    <div>
                        <h4>E-Mail</h4>
                        <p><a href="mailto:info@werbedruck-gm.de" style="color: var(--primary);">info@werbedruck-gm.de</a></p>
                    </div>
                </div>

                <div class="contact-info-item">
                    <div class="icon-box"><?php echo werbedruck_icon('clock'); ?></div>
                    <div>
                        <h4>Öffnungszeiten</h4>
                        <p>Nur nach Vereinbarung</p>
                    </div>
                </div>

                <div class="partner-badge" style="margin-top: 1rem;">
                    Partner des Werbemittelhandels
                </div>

                <!-- Google Maps Einbettung -->
                <div style="margin-top: 2rem; border-radius: 1rem; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.5!2d7.5644!3d51.0264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47beb8!2sQuellenweg+6a%2C+51645+Gummersbach!5e0!3m2!1sde!2sde!4v1" 
                        width="100%" 
                        height="300" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Schnellkontakt-Leiste -->
<section class="section section-dark" style="padding: 3rem 0;">
    <div class="container">
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem; align-items: center; text-align: center;">
            <div>
                <h3 style="color: #fff; font-size: 1.5rem; font-weight: 800; margin-bottom: 0.5rem;">Lieber direkt anrufen?</h3>
                <p style="color: var(--gray-400); margin: 0;">Wir beraten Sie gerne persönlich und unverbindlich.</p>
            </div>
            <a href="tel:01605909911" class="btn btn-primary" style="font-size: 1.125rem; padding: 1rem 2rem;">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="margin-right: 0.5rem; vertical-align: middle;"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                0160-5909911
            </a>
            <a href="https://wa.me/4916059099110" target="_blank" class="btn" style="font-size: 1.125rem; padding: 1rem 2rem; background: #25D366; color: #fff; border: none;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 0.5rem; vertical-align: middle;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/></svg>
                WhatsApp
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
