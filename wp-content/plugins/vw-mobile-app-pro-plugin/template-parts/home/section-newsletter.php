<?php
/**
 * Template to show the content of Newsletter section
 *
 * @package vw_mobile_app_pro_plugin
 */ 

$about_section = get_theme_mod( 'vw_mobile_app_pro_plugin_radio_newsletter_enable' );
if ( 'Disable' == $about_section ) {
  return;
}

if( get_theme_mod('vw_mobile_app_pro_plugin_newsletter_bgcolor') ) { 
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_newsletter_bgcolor')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_newsletter_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_newsletter_bgimage')).'\')';
}else{
  $about_backg = '';   
}

?>
<section id="newsletter-section" style="<?php echo esc_attr($about_backg); ?>">
	<div class="container">
		<div class="section-heading">
			<?php if(get_theme_mod('vw_mobile_app_pro_plugin_newsletter_title') != ''){?>
			<h3 class="head_white"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_newsletter_title')); ?></h3>
			<?php } ?>
			<?php if(get_theme_mod('vw_mobile_app_pro_plugin_newsletter_desc') != ''){?>
				<p class="head_white"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_newsletter_desc')); ?></p>
			<?php } ?>
		</div>
		<div class="newsletter-shortcode mt-4">
			<?php echo do_shortcode(get_theme_mod('vw_mobile_app_pro_plugin_newsletter_shortcode')); ?>
		</div>
	</div>
</section>