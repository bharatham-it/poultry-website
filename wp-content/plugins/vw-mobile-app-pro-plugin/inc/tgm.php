<?php
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH. '/inc/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function vw_mobile_app_pro_plugin_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'VW Title Banner Image', 'vw-mobile-app-pro-plugin' ),
			'slug'             => 'vw-title-banner-image',
			'source'           => 'https://github.com/VowelwebLLP/vw-title-banner-image/archive/master.zip',
			'required'         => true,
			'force_activation' => true,
		),
		
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'vw_mobile_app_pro_plugin_register_recommended_plugins' );