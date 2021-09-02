<?php

define('VW_MOBILE_STYLES','vw-mobile-app-');

function vw_mobile_app_pro_plugin_sanitize_choices( $input, $setting ) {
  global $wp_customize;
  $control = $wp_customize->get_control( $setting->id );
  if ( array_key_exists( $input, $control->choices ) ) {
    return $input;
  } else {
    return $setting->default;
  }
}

function vw_mobile_app_pro_plugin_string_limit_words($string, $word_limit) {
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

define('vw_mobile_app_pro_plugin_SITE_URL','https://www.vwthemes.com/');
/* Theme Credit link */
function vw_mobile_app_pro_plugin_credit_link() {
  echo esc_html_e('','vw-mobile-app-pro-plugin'). "<a href=".esc_url(vw_mobile_app_pro_plugin_SITE_URL)." target='_blank'></a>";
}

/* Customizer */
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH. 'inc/customizer.php';
/* Get Started. */
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH. 'inc/getstarted/getstart.php';
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH. 'inc/posttype-templates/posttype-templates.php';
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH. 'inc/template-tags.php';
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH. 'inc/widget/contact-widget.php';
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH. 'inc/widget/socail-widget.php';
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH. 'inc/tgm.php';
//--------------------------------------------------------------------------------//
define('VW_MOBILE_APP_PRO_PLUGIN_THEME_DOC','https://www.vwthemesdemo.com/docs/vw-mobile-app-pro-plugin-plugin/');
define('vw_mobile_app_pro_plugin_SUPPORT','https://www.vwthemes.com/support/vw-theme/');
define('vw_mobile_app_pro_plugin_FAQ','https://www.vwthemes.com/faqs/');
define('vw_mobile_app_pro_plugin_CONTACT','https://www.vwthemes.com/contact/');
define('vw_mobile_app_pro_plugin_REVIEW','https://www.vwthemes.com/topic/reviews-and-testimonials/');
define('vw_mobile_app_pro_plugin_SHOPIFY','https://www.vwthemes.com/premium-shopify-themes/');
define('vw_mobile_app_pro_plugin_MOODLE','https://vwthemes.com/lms-themes/taleem-responsive-moodle-theme/');
define('vw_mobile_app_pro_plugin_MOBILE_APP','https://www.vwthemes.com/premium-woocommerce-mobile-app/vw-woocommerce-mobile-app/');

function vw_mobile_app_pro_plugin_widgets_init() {

 register_sidebar( array(
   'name'          => __( 'VW Blog Sidebar', 'vw-mobile-app-pro-plugin' ),
   'description'   => __( 'Appears on blog page sidebar', 'vw-mobile-app-pro-plugin' ),
   'id'            => 'vw-sidebar-1',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
 register_sidebar( array(
   'name'          => __( 'VW Page Sidebar', 'vw-mobile-app-pro-plugin' ),
   'description'   => __( 'Appears on page sidebar', 'vw-mobile-app-pro-plugin' ),
   'id'            => 'vw-sidebar-2',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
 register_sidebar( array(
   'name'          => __( 'VW Footer 1', 'vw-mobile-app-pro-plugin' ),
   'description'   => __( 'Appears on footer', 'vw-mobile-app-pro-plugin' ),
   'id'            => 'vw-footer-1',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
 register_sidebar( array(
   'name'          => __( 'VW Footer 2', 'vw-mobile-app-pro-plugin' ),
   'description'   => __( 'Appears on footer', 'vw-mobile-app-pro-plugin' ),
   'id'            => 'vw-footer-2',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
 register_sidebar( array(
   'name'          => __( 'VW Footer 3', 'vw-mobile-app-pro-plugin' ),
   'description'   => __( 'Appears on footer', 'vw-mobile-app-pro-plugin' ),
   'id'            => 'vw-footer-3',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
 register_sidebar( array(
   'name'          => __( 'VW Footer 4', 'vw-mobile-app-pro-plugin' ),
   'description'   => __( 'Appears on footer', 'vw-mobile-app-pro-plugin' ),
   'id'            => 'vw-footer-4',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget'  => '</aside>',
   'before_title'  => '<h3 class="widget-title">',
   'after_title'   => '</h3>',
 ) );
}
add_action( 'widgets_init', 'vw_mobile_app_pro_plugin_widgets_init' );

// ------------ menu ------------

add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
  register_nav_menus( array(
    'vw_primary_menu' => 'VW Primary Menu',
    
  ) );
}

?>
