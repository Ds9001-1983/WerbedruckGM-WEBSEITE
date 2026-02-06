<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
            WERBEDRUCK <span>GM</span>
        </a>

        <nav class="main-nav">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php if ( is_front_page() ) echo 'class="active"'; ?>>Start</a>
            <a href="<?php echo esc_url( home_url( '/digitaldruck/' ) ); ?>" <?php if ( is_page( 'digitaldruck' ) ) echo 'class="active"'; ?>>Digitaldruck</a>
            <a href="<?php echo esc_url( home_url( '/foliendesign/' ) ); ?>" <?php if ( is_page( 'foliendesign' ) ) echo 'class="active"'; ?>>Foliendesign</a>
            <a href="<?php echo esc_url( home_url( '/textilveredelung/' ) ); ?>" <?php if ( is_page( 'textilveredelung' ) ) echo 'class="active"'; ?>>Textilveredelung</a>
            <a href="<?php echo esc_url( home_url( '/lasergravuren/' ) ); ?>" <?php if ( is_page( 'lasergravuren' ) ) echo 'class="active"'; ?>>Lasergravuren</a>
            <a href="<?php echo esc_url( home_url( '/ueber-uns/' ) ); ?>" <?php if ( is_page( 'ueber-uns' ) ) echo 'class="active"'; ?>>Über uns</a>
            <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn-primary">Kontakt</a>
        </nav>

        <button class="mobile-menu-btn" onclick="document.getElementById('mobileNav').classList.toggle('open')" aria-label="Menü">
            <?php echo werbedruck_icon( 'menu' ); ?>
        </button>
    </div>

    <div id="mobileNav" class="mobile-nav">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Start</a>
        <a href="<?php echo esc_url( home_url( '/digitaldruck/' ) ); ?>">Digitaldruck</a>
        <a href="<?php echo esc_url( home_url( '/foliendesign/' ) ); ?>">Foliendesign</a>
        <a href="<?php echo esc_url( home_url( '/textilveredelung/' ) ); ?>">Textilveredelung</a>
        <a href="<?php echo esc_url( home_url( '/lasergravuren/' ) ); ?>">Lasergravuren</a>
        <a href="<?php echo esc_url( home_url( '/ueber-uns/' ) ); ?>">Über uns</a>
        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">Kontakt</a>
    </div>
</header>

<main>
