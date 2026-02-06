<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Bar -->
<div class="top-bar">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
        <div style="display: flex; gap: 1.5rem; align-items: center;">
            <a href="tel:+4916059099110" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.8125rem; display: flex; align-items: center; gap: 0.375rem;">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                0160-5909911
            </a>
            <a href="mailto:info@werbedruck-gm.de" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.8125rem; display: flex; align-items: center; gap: 0.375rem;">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                info@werbedruck-gm.de
            </a>
        </div>
        <div style="display: flex; gap: 1rem; align-items: center;">
            <a href="https://www.google.com/maps/place/Quellenweg+6a,+51645+Gummersbach" target="_blank" style="color: rgba(255,255,255,0.8); text-decoration: none; font-size: 0.8125rem; display: flex; align-items: center; gap: 0.375rem;">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                Gummersbach
            </a>
        </div>
    </div>
</div>

<header class="site-header" id="siteHeader">
    <div class="container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
            <span class="logo-icon">
                <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2z"/></svg>
            </span>
            WERBEDRUCK <span>GM</span>
        </a>

        <nav class="main-nav">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php if ( is_front_page() ) echo 'class="active"'; ?>>Start</a>
            <a href="<?php echo esc_url( home_url( '/digitaldruck/' ) ); ?>" <?php if ( is_page( 'digitaldruck' ) ) echo 'class="active"'; ?>>Digitaldruck</a>
            <a href="<?php echo esc_url( home_url( '/folienbeschriftung/' ) ); ?>" <?php if ( is_page( 'folienbeschriftung' ) ) echo 'class="active"'; ?>>Folienbeschriftung</a>
            <a href="<?php echo esc_url( home_url( '/textilveredelung/' ) ); ?>" <?php if ( is_page( 'textilveredelung' ) ) echo 'class="active"'; ?>>Textilveredelung</a>
            <a href="<?php echo esc_url( home_url( '/lasergravuren/' ) ); ?>" <?php if ( is_page( 'lasergravuren' ) ) echo 'class="active"'; ?>>Lasergravuren</a>
            <a href="<?php echo esc_url( home_url( '/ueber-uns/' ) ); ?>" <?php if ( is_page( 'ueber-uns' ) ) echo 'class="active"'; ?>>Über uns</a>
            <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-accent" style="padding: 0.5rem 1.25rem; font-size: 0.875rem;">Kontakt</a>
        </nav>

        <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Menü">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>
    </div>

    <div id="mobileNav" class="mobile-nav">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Start</a>
        <a href="<?php echo esc_url( home_url( '/digitaldruck/' ) ); ?>">Digitaldruck</a>
        <a href="<?php echo esc_url( home_url( '/folienbeschriftung/' ) ); ?>">Folienbeschriftung</a>
        <a href="<?php echo esc_url( home_url( '/textilveredelung/' ) ); ?>">Textilveredelung</a>
        <a href="<?php echo esc_url( home_url( '/lasergravuren/' ) ); ?>">Lasergravuren</a>
        <a href="<?php echo esc_url( home_url( '/ueber-uns/' ) ); ?>">Über uns</a>
        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-accent" style="text-align: center; margin-top: 0.5rem;">Kontakt</a>
    </div>
</header>

<main>
