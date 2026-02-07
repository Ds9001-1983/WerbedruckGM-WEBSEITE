<?php
/**
 * Werbedruck GM Theme Functions
 *
 * @package Werbedruck_GM
 * @version 1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'WERBEDRUCK_VERSION', '1.1.0' );
define( 'WERBEDRUCK_DIR', get_template_directory() );
define( 'WERBEDRUCK_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function werbedruck_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 64,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary'   => __( 'Hauptmenü', 'werbedruck-gm' ),
        'footer'    => __( 'Footer Menü', 'werbedruck-gm' ),
    ) );
}
add_action( 'after_setup_theme', 'werbedruck_setup' );

/**
 * Enqueue Styles & Scripts
 */
function werbedruck_scripts() {
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap', array(), null );

    // Theme Stylesheet
    wp_enqueue_style( 'werbedruck-style', get_stylesheet_uri(), array(), WERBEDRUCK_VERSION );

    // Theme JavaScript
    wp_enqueue_script( 'werbedruck-script', WERBEDRUCK_URI . '/js/main.js', array(), WERBEDRUCK_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'werbedruck_scripts' );

/**
 * Custom Page Templates Registration
 */
function werbedruck_page_templates( $templates ) {
    $templates['page-home.php']             = 'Startseite';
    $templates['page-digitaldruck.php']     = 'Digitaldruck';
    $templates['page-folienbeschriftung.php']     = 'Folienbeschriftung';
    $templates['page-textilveredelung.php'] = 'Textilveredelung';
    $templates['page-lasergravuren.php']    = 'Lasergravuren';
    $templates['page-about.php']            = 'Über uns';
    $templates['page-contact.php']          = 'Kontakt';
    $templates['page-impressum.php']        = 'Impressum';
    $templates['page-datenschutz.php']      = 'Datenschutz';
    $templates['page-agb.php']               = 'AGB';
    return $templates;
}
add_filter( 'theme_page_templates', 'werbedruck_page_templates' );

/**
 * ============================================================
 * AUTO-SETUP: Seiten, Templates, Menüs und Einstellungen
 * beim Aktivieren des Themes automatisch anlegen
 * ============================================================
 */
function werbedruck_theme_activation() {

    // Alle Seiten die automatisch angelegt werden sollen
    $pages = array(
        array(
            'title'    => 'Startseite',
            'slug'     => 'startseite',
            'template' => 'page-home.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Digitaldruck',
            'slug'     => 'digitaldruck',
            'template' => 'page-digitaldruck.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Folienbeschriftung',
            'slug'     => 'folienbeschriftung',
            'template' => 'page-folienbeschriftung.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Textilveredelung',
            'slug'     => 'textilveredelung',
            'template' => 'page-textilveredelung.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Lasergravuren',
            'slug'     => 'lasergravuren',
            'template' => 'page-lasergravuren.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Über uns',
            'slug'     => 'ueber-uns',
            'template' => 'page-about.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Kontakt',
            'slug'     => 'kontakt',
            'template' => 'page-contact.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Impressum',
            'slug'     => 'impressum',
            'template' => 'page-impressum.php',
            'content'  => '',
        ),
        array(
            'title'    => 'Datenschutz',
            'slug'     => 'datenschutz',
            'template' => 'page-datenschutz.php',
            'content'  => '',
        ),
        array(
            'title'    => 'AGB',
            'slug'     => 'agb',
            'template' => 'page-agb.php',
            'content'  => '',
        ),
    );

    $front_page_id = 0;

    foreach ( $pages as $page_data ) {
        // Prüfen ob Seite bereits existiert (nach Slug)
        $existing = get_page_by_path( $page_data['slug'] );

        if ( $existing ) {
            $page_id = $existing->ID;
            // Template aktualisieren falls nötig
            update_post_meta( $page_id, '_wp_page_template', $page_data['template'] );
            // Sicherstellen dass die Seite veröffentlicht ist
            if ( $existing->post_status !== 'publish' ) {
                wp_update_post( array(
                    'ID'          => $page_id,
                    'post_status' => 'publish',
                ) );
            }
        } else {
            $page_id = wp_insert_post( array(
                'post_title'   => $page_data['title'],
                'post_name'    => $page_data['slug'],
                'post_content' => $page_data['content'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_author'  => 1,
            ) );

            if ( $page_id && ! is_wp_error( $page_id ) ) {
                update_post_meta( $page_id, '_wp_page_template', $page_data['template'] );
            }
        }

        // Startseite merken
        if ( $page_data['slug'] === 'startseite' && $page_id && ! is_wp_error( $page_id ) ) {
            $front_page_id = $page_id;
        }
    }

    // Statische Startseite setzen
    if ( $front_page_id ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page_id );
    }

    // Seitentitel und Beschreibung setzen
    update_option( 'blogname', 'Werbedruck GM' );
    update_option( 'blogdescription', 'Qualität MadeInOberberg vom Meister' );

    // Permalinks auf "Beitragsname" setzen
    update_option( 'permalink_structure', '/%postname%/' );

    // Permalink-Regeln neu generieren
    flush_rewrite_rules();

    // Standard-Beitrag "Hallo Welt!" löschen
    $hello_world = get_page_by_path( 'hallo-welt', OBJECT, 'post' );
    if ( $hello_world ) {
        wp_delete_post( $hello_world->ID, true );
    }

    // Standard "Beispiel-Seite" löschen
    $sample_page = get_page_by_path( 'beispiel-seite' );
    if ( $sample_page ) {
        wp_delete_post( $sample_page->ID, true );
    }

    // Hauptmenü erstellen
    $menu_name = 'Hauptmenü';
    $menu_exists = wp_get_nav_menu_object( $menu_name );

    if ( ! $menu_exists ) {
        $menu_id = wp_create_nav_menu( $menu_name );

        if ( ! is_wp_error( $menu_id ) ) {
            $menu_items = array(
                'Startseite'       => 'startseite',
                'Digitaldruck'     => 'digitaldruck',
                'Folienbeschriftung'     => 'folienbeschriftung',
                'Textilveredelung' => 'textilveredelung',
                'Lasergravuren'    => 'lasergravuren',
                'Über uns'         => 'ueber-uns',
                'Kontakt'          => 'kontakt',
            );

            $position = 1;
            foreach ( $menu_items as $title => $slug ) {
                $page = get_page_by_path( $slug );
                if ( $page ) {
                    wp_update_nav_menu_item( $menu_id, 0, array(
                        'menu-item-title'     => $title,
                        'menu-item-object'    => 'page',
                        'menu-item-object-id' => $page->ID,
                        'menu-item-type'      => 'post_type',
                        'menu-item-status'    => 'publish',
                        'menu-item-position'  => $position,
                    ) );
                    $position++;
                }
            }

            // Menü der primary Location zuweisen
            $locations = get_theme_mod( 'nav_menu_locations' );
            $locations['primary'] = $menu_id;
            set_theme_mod( 'nav_menu_locations', $locations );
        }
    }

    // Flag setzen damit Setup nicht doppelt läuft
    update_option( 'werbedruck_theme_setup_done', '1' );
}
add_action( 'after_switch_theme', 'werbedruck_theme_activation' );

/**
 * Auch bei jedem Laden prüfen ob Setup gelaufen ist
 * (für den Fall dass das Theme per WP Pusher aktualisiert wird)
 */
function werbedruck_check_setup() {
    if ( get_option( 'werbedruck_theme_setup_done' ) !== '1' ) {
        werbedruck_theme_activation();
    }
}
add_action( 'init', 'werbedruck_check_setup' );

/**
 * Migration: Alte "Foliendesign"-Seite automatisch auf "Folienbeschriftung" umbenennen
 * Läuft einmalig und setzt ein Flag damit es nicht wiederholt wird.
 */
function werbedruck_migrate_foliendesign() {
    if ( get_option( 'werbedruck_foliendesign_migrated' ) === '1' ) {
        return;
    }

    // Alte Seite mit Slug "foliendesign" suchen
    $old_page = get_page_by_path( 'foliendesign' );

    if ( $old_page ) {
        // Titel, Slug und Template aktualisieren
        wp_update_post( array(
            'ID'         => $old_page->ID,
            'post_title' => 'Folienbeschriftung',
            'post_name'  => 'folienbeschriftung',
        ) );
        update_post_meta( $old_page->ID, '_wp_page_template', 'page-folienbeschriftung.php' );
    }

    // Auch alle anderen Seiten prüfen und Templates zuweisen falls sie "Standard-Template" haben
    $template_map = array(
        'startseite'       => 'page-home.php',
        'digitaldruck'     => 'page-digitaldruck.php',
        'folienbeschriftung' => 'page-folienbeschriftung.php',
        'textilveredelung' => 'page-textilveredelung.php',
        'lasergravuren'    => 'page-lasergravuren.php',
        'ueber-uns'        => 'page-about.php',
        'kontakt'          => 'page-contact.php',
        'impressum'        => 'page-impressum.php',
        'datenschutz'      => 'page-datenschutz.php',
        'agb'              => 'page-agb.php',
    );

    foreach ( $template_map as $slug => $template ) {
        $page = get_page_by_path( $slug );
        if ( $page ) {
            $current_template = get_post_meta( $page->ID, '_wp_page_template', true );
            if ( empty( $current_template ) || $current_template === 'default' ) {
                update_post_meta( $page->ID, '_wp_page_template', $template );
            }
        }
    }

    // Permalink-Regeln neu generieren
    flush_rewrite_rules();

    update_option( 'werbedruck_foliendesign_migrated', '1' );
}
add_action( 'init', 'werbedruck_migrate_foliendesign' );

/**
 * Admin-Button zum erneuten Ausführen des Setups
 */
function werbedruck_admin_menu() {
    add_theme_page(
        'Werbedruck GM Setup',
        'Theme Setup',
        'manage_options',
        'werbedruck-setup',
        'werbedruck_setup_page'
    );
}
add_action( 'admin_menu', 'werbedruck_admin_menu' );

function werbedruck_setup_page() {
    if ( isset( $_POST['werbedruck_run_setup'] ) && check_admin_referer( 'werbedruck_setup_nonce' ) ) {
        delete_option( 'werbedruck_theme_setup_done' );
        werbedruck_theme_activation();
        echo '<div class="notice notice-success"><p>Theme-Setup wurde erfolgreich ausgeführt! Alle Seiten wurden angelegt.</p></div>';
    }

    echo '<div class="wrap">';
    echo '<h1>Werbedruck GM - Theme Setup</h1>';
    echo '<p>Klicke auf den Button um alle Seiten, Menüs und Einstellungen automatisch anzulegen.</p>';
    echo '<form method="post">';
    wp_nonce_field( 'werbedruck_setup_nonce' );
    echo '<input type="hidden" name="werbedruck_run_setup" value="1">';
    echo '<p><button type="submit" class="button button-primary button-hero">Theme-Setup ausführen</button></p>';
    echo '</form>';
    echo '<hr>';
    echo '<h3>Was wird eingerichtet:</h3>';
    echo '<ul style="list-style: disc; padding-left: 20px;">';
    echo '<li>10 Seiten mit den richtigen Templates (Startseite, Digitaldruck, Folienbeschriftung, Textilveredelung, Lasergravuren, Über uns, Kontakt, Impressum, Datenschutz, AGB)</li>';
    echo '<li>Statische Startseite wird gesetzt</li>';
    echo '<li>Seitentitel: "Werbedruck GM"</li>';
    echo '<li>Permalinks: Beitragsname</li>';
    echo '<li>Hauptmenü mit allen Seiten</li>';
    echo '<li>Standard-Inhalte (Hallo Welt, Beispiel-Seite) werden gelöscht</li>';
    echo '</ul>';
    echo '</div>';
}


/**
 * SVG Icon Helper
 */
function werbedruck_icon( $name ) {
    $icons = array(
        'check' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>',
        'arrow-right' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>',
        'phone' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
        'mail' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
        'map-pin' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>',
        'clock' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
        'zap' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>',
        'menu' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>',
        'close' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>',
        'download' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>',
    );
    return $icons[ $name ] ?? '';
}

/**
 * Excerpt Length
 */
function werbedruck_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'werbedruck_excerpt_length' );
