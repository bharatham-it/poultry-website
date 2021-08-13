<?php
$footer_section = get_theme_mod( 'vw_mobile_app_pro_plugin_footer_widgets_enable',true );
if ( 'Disable' == $footer_section ) {
	return;
}
if( get_theme_mod('vw_mobile_app_pro_plugin_footer_widget_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_footer_widget_bgcolor')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_footer_widget_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_footer_widget_bgimage')).'\')';
}else{
  $about_backg = '';
}
?>
<div id="<?php echo VW_MOBILE_STYLES; ?>footer" style="<?php echo esc_attr( $about_backg ); ?>">
	<div id="footer_box" class="darkbox">
		<div class="container footer-cols">
			<?php
			$count = 0;
			if ( is_active_sidebar('vw-footer-1') != '' ) {
				$count++;
			}
			if ( is_active_sidebar('vw-footer-2') != '' ) {
				$count++;
			}
			if ( is_active_sidebar('vw-footer-3') != '' ) {
				$count++;
			}
			if ( is_active_sidebar('vw-footer-4') != '' ) {
				$count++;
			}
			if ( $count == 1 ) {
				$colmd = 'col-lg-12 col-sm-6';
			} elseif ( $count == 2 ) {
				$colmd = 'col-lg-6 col-sm-6';
			} elseif ( $count == 3 ){
				$colmd = 'col-lg-4 col-sm-6';
			} else {
				$colmd = 'col-lg-3 col-sm-6';
			}
			?>
			<div class="row">
				<div class="<?php if ( is_active_sidebar('vw-footer-1') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd ); } ?>">
					<?php dynamic_sidebar( 'vw-footer-1' ); ?>
				</div>
				<div class="<?php if ( is_active_sidebar('vw-footer-2') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd ); } ?>">
					<?php dynamic_sidebar( 'vw-footer-2' ); ?>
				</div>
				<div class="<?php if ( is_active_sidebar('vw-footer-3') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd ); } ?>">
					<?php dynamic_sidebar( 'vw-footer-3' ); ?>
				</div>
				<div class="<?php if ( is_active_sidebar('vw-footer-4') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd ); } ?>">
					<?php dynamic_sidebar( 'vw-footer-4' ); ?>
				</div>
			</div>
		</div><!-- .container -->
	</div><!-- #footer_box -->
</div>