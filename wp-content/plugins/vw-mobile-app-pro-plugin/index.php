<?php

/*
  Plugin Name: VW Mobile App Pro Plugin
  Plugin URI: https://www.vwthemes.com/
  Description: 
  Version: 1.0
  Author: VW Themes
  Author URI: https://www.vwthemes.com/
  Text Domain: vw-mobile-app-pro-plugin
*/

 define( 'VW_MOBILE_APP_PRO_PLUGIN_EXT_FILE', __FILE__ );
 define( 'VW_MOBILE_APP_PRO_PLUGIN_EXT_BASE', plugin_basename( VW_MOBILE_APP_PRO_PLUGIN_EXT_FILE ) );
 define( 'VW_MOBILE_APP_PRO_PLUGIN_EXT_DIR', plugin_dir_path( VW_MOBILE_APP_PRO_PLUGIN_EXT_FILE ) );
 define( 'VW_MOBILE_APP_PRO_PLUGIN_EXT_URI', plugins_url( '/', VW_MOBILE_APP_PRO_PLUGIN_EXT_FILE ) );
 define( 'VW_MOBILE_APP_PRO_PLUGIN_EXT_VER', '1.0' );
 define( 'VW_MOBILE_APP_PRO_PLUGIN_EXT_TEMPLATE_DEBUG_MODE', false );
 define( 'VW_MOBILE_APP_PRO_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
 define( 'VW_MOBILE_APP_PRO_PLUGIN_THEME', "Sirat" );
 define('VW_SIRAT_CUSTOM_STYLES','vw-sirat');

require_once VW_MOBILE_APP_PRO_PLUGIN_EXT_DIR . 'classes/plugin_settings.php';
require_once VW_MOBILE_APP_PRO_PLUGIN_EXT_DIR . 'functions.php';
require_once VW_MOBILE_APP_PRO_PLUGIN_EXT_DIR . 'posttype/posttype.php';






