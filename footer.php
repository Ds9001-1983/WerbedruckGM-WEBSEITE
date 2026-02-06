</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div>
                <h3>Werbedruck GM</h3>
                <p>Ihr professioneller Partner für Digitaldruck, Foliendesign, Textilveredelung und Lasergravuren im Oberbergischen. Qualität "MadeInOberberg" vom Meister.</p>
                <div class="footer-contact-info">
                    <p><?php echo werbedruck_icon('map-pin'); ?> <strong>Werkstatt:</strong> Quellenweg 6a, 51645 Gummersbach</p>
                    <p><?php echo werbedruck_icon('map-pin'); ?> <strong>Büro:</strong> Alte Landstr. 57, 51647 Gummersbach</p>
                    <p><?php echo werbedruck_icon('phone'); ?> <a href="tel:01605909911" style="color: #d4d4d4;">0160-5909911</a> (Mobil)</p>
                    <p><?php echo werbedruck_icon('phone'); ?> <a href="tel:022621088" style="color: #d4d4d4;">02262-1088</a> (Festnetz)</p>
                    <p><?php echo werbedruck_icon('mail'); ?> <a href="mailto:info@werbedruck-gm.de" style="color: #d4d4d4;">info@werbedruck-gm.de</a></p>
                </div>
            </div>

            <div>
                <h4>Leistungen</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/digitaldruck/' ) ); ?>">Digitaldruck</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/foliendesign/' ) ); ?>">Foliendesign</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/textilveredelung/' ) ); ?>">Textilveredelung</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/lasergravuren/' ) ); ?>">Lasergravuren</a></li>
                </ul>
            </div>

            <div>
                <h4>Rechtliches</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/impressum/' ) ); ?>">Impressum</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/datenschutz/' ) ); ?>">Datenschutz</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/agb/' ) ); ?>">AGB</a></li>
                </ul>
                <h4 style="margin-top: 1.5rem;">Downloads</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( get_template_directory_uri() . '/assets/pdf/WGM-WaschanleitungFlexFlockundDTFDruck.pdf' ); ?>" target="_blank">Waschanleitung Textildruck</a></li>
                    <li><a href="<?php echo esc_url( get_template_directory_uri() . '/assets/pdf/AGBs_2025-1.pdf' ); ?>" target="_blank">AGB (PDF)</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date( 'Y' ); ?> Werbedruck GM - Digital- und UV-Druck, Lohndruckerei. Inhaber: Thomas Krüger. Alle Rechte vorbehalten.</p>
            <p style="margin-top: 0.5rem;">Made with &#10084;&#65039; by <a href="https://superbrand.marketing" target="_blank" rel="noopener">SUPERBRAND.marketing</a> – Dein Superheld für deine Werbung.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
