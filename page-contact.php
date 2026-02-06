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
        <div class="contact-grid">
            <!-- Contact Info -->
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
                        <p>Mo – Fr: 9:00 – 17:00 Uhr<br>Sa: Nach Vereinbarung</p>
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
                        height="250" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="reveal-right">
                <div class="card">
                    <div class="card-body" style="padding: 2rem;">
                        <h3 style="font-size: 1.5rem; font-weight: 800; color: var(--dark); margin-bottom: 0.5rem;">Anfrage senden</h3>
                        <p style="color: var(--gray-600); margin-bottom: 1.5rem;">Füllen Sie das Formular aus und wir melden uns schnellstmöglich bei Ihnen.</p>

                        <?php if ( $success ) : ?>
                            <div class="form-success-message">
                                <svg width="24" height="24" fill="none" stroke="#065f46" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><path d="M22 4L12 14.01l-3-3"/></svg>
                                <div>
                                    <strong>Vielen Dank für Ihre Anfrage!</strong><br>
                                    Wir melden uns schnellstmöglich bei Ihnen.
                                </div>
                            </div>
                        <?php endif; ?>

                        <form id="contactForm" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="werbedruck_contact">
                            <?php wp_nonce_field( 'werbedruck_contact', 'werbedruck_contact_nonce' ); ?>

                            <!-- Persönliche Daten -->
                            <div class="form-section-title">
                                <span class="form-section-number">1</span>
                                <span>Persönliche Daten</span>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label" for="firstname">Vorname <span class="required">*</span></label>
                                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Ihr Vorname" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="lastname">Nachname <span class="required">*</span></label>
                                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Ihr Nachname" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label" for="email">E-Mail-Adresse <span class="required">*</span></label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="ihre.email@beispiel.de" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone">Telefon</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="+49 123 456789">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="company">Firma / Organisation</label>
                                <input type="text" id="company" name="company" class="form-control" placeholder="Ihre Firma (optional)">
                            </div>

                            <!-- Projektdetails -->
                            <div class="form-section-title">
                                <span class="form-section-number">2</span>
                                <span>Projektdetails</span>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label" for="service">Gewünschte Leistung <span class="required">*</span></label>
                                    <select id="service" name="service" class="form-control" required>
                                        <option value="">Bitte wählen...</option>
                                        <optgroup label="Digitaldruck">
                                            <option value="digitaldruck-allgemein">Digitaldruck (allgemein)</option>
                                            <option value="uv-druck">UV-Druck</option>
                                            <option value="bannerdruck">Banner- & Großformatdruck</option>
                                            <option value="aufkleber">Aufkleber & Etiketten</option>
                                            <option value="schilder">Schilder & Tafeln</option>
                                            <option value="visitenkarten">Visitenkarten & Drucksachen</option>
                                        </optgroup>
                                        <optgroup label="Folienbeschriftung">
                                            <option value="kfz-beschriftung">KFZ-Beschriftung</option>
                                            <option value="schaufensterbeschriftung">Schaufensterbeschriftung</option>
                                            <option value="sichtschutzfolien">Sichtschutzfolien</option>
                                            <option value="folienplot">Folienplot & Beschriftung</option>
                                        </optgroup>
                                        <optgroup label="Textilveredelung">
                                            <option value="textildruck">Textildruck (Flex/Flock)</option>
                                            <option value="dtf-druck">DTF-Druck</option>
                                            <option value="stickerei">Stickerei</option>
                                            <option value="tassendruck">Tassendruck & Sublimation</option>
                                        </optgroup>
                                        <optgroup label="Lasergravuren">
                                            <option value="lasergravur">Lasergravur</option>
                                            <option value="laserschnitt">Laserschnitt</option>
                                        </optgroup>
                                        <optgroup label="Sonstiges">
                                            <option value="beratung">Allgemeine Beratung</option>
                                            <option value="sonstiges">Sonstiges</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="budget">Ungefähres Budget</label>
                                    <select id="budget" name="budget" class="form-control">
                                        <option value="">Keine Angabe</option>
                                        <option value="unter-100">Unter 100 €</option>
                                        <option value="100-500">100 – 500 €</option>
                                        <option value="500-1000">500 – 1.000 €</option>
                                        <option value="1000-5000">1.000 – 5.000 €</option>
                                        <option value="ueber-5000">Über 5.000 €</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label" for="quantity">Stückzahl / Menge</label>
                                    <input type="text" id="quantity" name="quantity" class="form-control" placeholder="z. B. 100 Stück, 5 Meter">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="deadline">Gewünschter Termin</label>
                                    <input type="date" id="deadline" name="deadline" class="form-control">
                                </div>
                            </div>

                            <!-- Nachricht -->
                            <div class="form-section-title">
                                <span class="form-section-number">3</span>
                                <span>Ihre Nachricht</span>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="message">Projektbeschreibung <span class="required">*</span></label>
                                <textarea id="message" name="message" class="form-control" rows="6" maxlength="2000" placeholder="Beschreiben Sie Ihr Projekt, gewünschte Materialien, Farben, Maße oder sonstige Anforderungen..." required></textarea>
                                <span id="charCounter" class="char-counter">0 / 2000 Zeichen</span>
                            </div>

                            <!-- Datei-Upload -->
                            <div class="form-group">
                                <label class="form-label">Dateien anhängen <span style="color: var(--gray-500); font-weight: 400;">(optional)</span></label>
                                <div class="file-upload-area" id="fileUploadArea">
                                    <input type="file" id="fileUpload" name="attachments[]" multiple accept=".pdf,.jpg,.jpeg,.png,.ai,.eps,.svg,.cdr" style="display:none;">
                                    <div class="file-upload-content">
                                        <svg width="40" height="40" fill="none" stroke="var(--gray-400)" stroke-width="1.5" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                                        <p style="margin: 0.75rem 0 0.25rem; font-weight: 600; color: var(--dark);">Dateien hierher ziehen</p>
                                        <p style="margin: 0; font-size: 0.8125rem; color: var(--gray-500);">oder <span style="color: var(--primary); cursor: pointer; text-decoration: underline;" onclick="document.getElementById('fileUpload').click();">Dateien auswählen</span></p>
                                        <p style="margin: 0.5rem 0 0; font-size: 0.75rem; color: var(--gray-400);">PDF, JPG, PNG, AI, EPS, SVG, CDR – max. 10 MB pro Datei</p>
                                    </div>
                                </div>
                                <div id="fileList" class="file-list"></div>
                            </div>

                            <!-- Kontaktpräferenz -->
                            <div class="form-section-title">
                                <span class="form-section-number">4</span>
                                <span>Kontaktpräferenz</span>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Wie möchten Sie kontaktiert werden?</label>
                                <div class="contact-preference-grid">
                                    <label class="preference-option">
                                        <input type="radio" name="contact_preference" value="email" checked>
                                        <span class="preference-box">
                                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                            Per E-Mail
                                        </span>
                                    </label>
                                    <label class="preference-option">
                                        <input type="radio" name="contact_preference" value="phone">
                                        <span class="preference-box">
                                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                            Per Telefon
                                        </span>
                                    </label>
                                    <label class="preference-option">
                                        <input type="radio" name="contact_preference" value="whatsapp">
                                        <span class="preference-box">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.5.5 0 00.612.638l4.685-1.228A11.947 11.947 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.37 0-4.567-.696-6.42-1.885l-.15-.094-3.108.815.83-3.033-.103-.164A9.935 9.935 0 012 12C2 6.486 6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></svg>
                                            Per WhatsApp
                                        </span>
                                    </label>
                                </div>
                            </div>

                            <!-- Datenschutz -->
                            <div class="form-group" style="margin-top: 1.5rem;">
                                <div class="form-check">
                                    <input type="checkbox" id="privacy" name="privacy" required>
                                    <label for="privacy">Ich stimme der <a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>" style="color: var(--primary); text-decoration: underline;">Datenschutzerklärung</a> zu und habe die <a href="<?php echo esc_url( home_url( '/agb/' ) ); ?>" style="color: var(--primary); text-decoration: underline;">AGB</a> gelesen. <span class="required">*</span></label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-submit" style="width: 100%; padding: 1rem; font-size: 1.0625rem;">
                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="margin-right: 0.5rem; vertical-align: middle;"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                Anfrage absenden
                            </button>

                            <p style="text-align: center; font-size: 0.75rem; color: var(--gray-500); margin-top: 1rem;">
                                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="vertical-align: middle;"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                                Ihre Daten werden verschlüsselt übertragen und nicht an Dritte weitergegeben.
                            </p>
                        </form>
                    </div>
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
