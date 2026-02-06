<?php
/**
 * Werbedruck GM Theme Functions
 *
 * @package Werbedruck_GM
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'WERBEDRUCK_VERSION', '1.0.0' );
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
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null );

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
    $templates['page-foliendesign.php']     = 'Foliendesign';
    $templates['page-textilveredelung.php'] = 'Textilveredelung';
    $templates['page-lasergravuren.php']    = 'Lasergravuren';
    $templates['page-about.php']            = 'Über uns';
    $templates['page-contact.php']          = 'Kontakt';
    $templates['page-impressum.php']        = 'Impressum';
    $templates['page-datenschutz.php']      = 'Datenschutz';
    return $templates;
}
add_filter( 'theme_page_templates', 'werbedruck_page_templates' );

/**
 * Contact Form Handler
 */
function werbedruck_handle_contact_form() {
    if ( ! isset( $_POST['werbedruck_contact_nonce'] ) || ! wp_verify_nonce( $_POST['werbedruck_contact_nonce'], 'werbedruck_contact' ) ) {
        return;
    }

    $firstname = sanitize_text_field( $_POST['firstname'] ?? '' );
    $lastname  = sanitize_text_field( $_POST['lastname'] ?? '' );
    $email     = sanitize_email( $_POST['email'] ?? '' );
    $phone     = sanitize_text_field( $_POST['phone'] ?? '' );
    $service   = sanitize_text_field( $_POST['service'] ?? '' );
    $message   = sanitize_textarea_field( $_POST['message'] ?? '' );

    $to      = get_option( 'admin_email' );
    $subject = 'Neue Kontaktanfrage von ' . $firstname . ' ' . $lastname;
    $body    = "Name: {$firstname} {$lastname}\n";
    $body   .= "E-Mail: {$email}\n";
    $body   .= "Telefon: {$phone}\n";
    $body   .= "Gewünschte Leistung: {$service}\n\n";
    $body   .= "Nachricht:\n{$message}";
    $headers = array( 'Reply-To: ' . $email );

    wp_mail( $to, $subject, $body, $headers );

    wp_redirect( add_query_arg( 'contact', 'success', wp_get_referer() ) );
    exit;
}
add_action( 'admin_post_werbedruck_contact', 'werbedruck_handle_contact_form' );
add_action( 'admin_post_nopriv_werbedruck_contact', 'werbedruck_handle_contact_form' );

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
