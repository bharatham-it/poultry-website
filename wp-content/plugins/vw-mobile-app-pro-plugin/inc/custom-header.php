<?php
/**
 * @package vw-mobile-app-pro-plugin
 * Setup the WordPress core custom header feature.
 *
 * @uses vw_mobile_app_pro_plugin_header_style()
*/
function vw_mobile_app_pro_plugin_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'vw_mobile_app_pro_plugin_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 90,
		'wp-head-callback'       => 'vw_mobile_app_pro_plugin_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'vw_mobile_app_pro_plugin_custom_header_setup' );
if ( ! function_exists( 'vw_mobile_app_pro_plugin_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see vw_mobile_app_pro_plugin_custom_header_setup().
 */
function vw_mobile_app_pro_plugin_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() ) :
	?>
		.home.page-template #masthead.scrolled, #masthead{
			background: url(<?php echo esc_url(get_header_image()); ?>) no-repeat;
			background-position: center top;
			background-size: cover;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif;