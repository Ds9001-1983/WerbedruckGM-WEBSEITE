<?php
/**
 * Template Name: Kontakt
 *
 * @package Werbedruck_GM
 */

get_header();

$success = isset( $_GET['contact'] ) && $_GET['contact'] === 'success';
?>

<!-- Hero -->
<section class="page-hero">
    <div class="hero-gradient" style="background: linear-gradient(135deg, var(--secondary-dark) 0%, var(--gray-800) 50%, var(--primary-dark) 100%);"></div>
    <div class="hero-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/img/hero/werkstatt-aussen.jpg' ); ?>');"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <h1>Kontakt</h1>
        <p>Wir freuen uns auf Ihre Anfrage - kontaktieren Sie uns noch heute!</p>
    </div>
</section>

<!-- Content -->
<section class="section section-white">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Info -->
            <div>
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
                        <h4>Büro / Buchhaltung</h4>
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
                        <p>Mo - Fr: 9:00 - 17:00 Uhr<br>Sa: Nach Vereinbarung</p>
                    </div>
                </div>

                <div class="partner-badge" style="margin-top: 1rem;">
                    Partner des Werbemittelhandels
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <div class="card">
                    <div class="card-body" style="padding: 2rem;">
                        <h3 style="font-size: 1.5rem; font-weight: 800; color: var(--dark); margin-bottom: 0.5rem;">Anfrage senden</h3>
                        <p style="color: var(--gray-600); margin-bottom: 1.5rem;">Füllen Sie das Formular aus und wir melden uns schnellstmöglich bei Ihnen.</p>

                        <?php if ( $success ) : ?>
                            <div style="background: #d1fae5; border: 1px solid #10b981; border-radius: 0.5rem; padding: 1rem; margin-bottom: 1.5rem; color: #065f46;">
                                Vielen Dank für Ihre Anfrage! Wir melden uns schnellstmöglich bei Ihnen.
                            </div>
                        <?php endif; ?>

                        <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
                            <input type="hidden" name="action" value="werbedruck_contact">
                            <?php wp_nonce_field( 'werbedruck_contact', 'werbedruck_contact_nonce' ); ?>

                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label" for="firstname">Vorname</label>
                                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Ihr Vorname" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="lastname">Nachname</label>
                                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Ihr Nachname" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="email">E-Mail-Adresse</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="ihre.email@beispiel.de" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="phone">Telefon (optional)</label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="+49 123 456789">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="service">Gewünschte Leistung</label>
                                <select id="service" name="service" class="form-control">
                                    <option value="">Bitte wählen...</option>
                                    <option value="digitaldruck">Digitaldruck</option>
                                    <option value="foliendesign">Foliendesign</option>
                                    <option value="textilveredelung">Textilveredelung</option>
                                    <option value="lasergravuren">Lasergravuren</option>
                                    <option value="aufkleber">Aufkleber</option>
                                    <option value="bannerdruck">Bannerdruck</option>
                                    <option value="tassendruck">Tassendruck</option>
                                    <option value="sichtschutzfolien">Sichtschutzfolien</option>
                                    <option value="kfz-beschriftung">KFZ-Beschriftung</option>
                                    <option value="werbeschilder">Werbeschilder</option>
                                    <option value="beratung">Allgemeine Beratung</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="message">Nachricht</label>
                                <textarea id="message" name="message" class="form-control" placeholder="Beschreiben Sie Ihr Projekt oder Ihre Anfrage..." required></textarea>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" id="privacy" name="privacy" required>
                                    <label for="privacy">Ich stimme der <a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>">Datenschutzerklärung</a> zu und habe die <a href="<?php echo esc_url( home_url( '/agb/' ) ); ?>">AGB</a> gelesen.</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary" style="width: 100%;">Anfrage senden</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
