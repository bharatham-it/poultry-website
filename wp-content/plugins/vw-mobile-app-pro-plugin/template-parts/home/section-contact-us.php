<?php 
$section_disable = get_theme_mod( 'vw_mobile_app_pro_plugin_radio_conntact_us_enable' );
if ( 'Disable' == $section_disable ) {
  return;
}

if( get_theme_mod('vw_mobile_app_pro_plugin_conntact_us_section_bgcolor') ) { 
  $section_bg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_conntact_us_section_bgcolor')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_conntact_us_section_bgimage') ){
  $section_bg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_conntact_us_section_bgimage')).'\')';
}else{
  $section_bg = '';   
}
?>
<section class="contact_us" style="<?php echo esc_attr($section_bg); ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-5 ">
				<div class="contact-info-home">
					<?php if(get_theme_mod('vw_mobile_app_pro_plugin_home_form_title') != ''){?>
						<h3><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_home_form_title')); ?></h3>
					<?php } ?>
					<div class="contact-info">
						<?php if ( get_theme_mod('vw_mobile_app_pro_plugin_address_title',true) != "" ) { ?>
						<div class="contact-address">
							<div class="inner-cont">
								<div class="c_content media-small">
									<i class="fas fa-location-arrow"></i><span class="font-weight-bold text-uppercase"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_address_title')); ?></span>
									<p class="m-0"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_address')); ?></p>
								</div>
							</div>
						</div>
						<?php }?>
						<?php if ( get_theme_mod('vw_mobile_app_pro_plugin_contactpage_email_title',true) != "" ) { ?>
						<div class="contact-email">
							<div class="inner-cont">
								<div class="c_content media-small">
									<i class="far fa-envelope-open"></i><span class="w-100 font-weight-bold text-uppercase"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_contactpage_email_title')); ?></span>
									<p class="m-0"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_contactpage_email',__('abc@gamil.com', 'vw-mobile-app-pro-plugin'))); ?></p>
								</div>
							</div>
						<?php }?>
						</div>				
						<?php if ( get_theme_mod('vw_mobile_app_pro_plugin_contactpage_phone_title',true) != "" ) { ?>
						<div class="contact-phone">
							<div class="inner-cont">
								<div class="c_content media-small">
					 				<i class="fas fa-phone-volume"></i><span class="font-weight-bold text-uppercase"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_contactpage_phone_title')); ?></span>
					 				<p class="m-0"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_contactpage_phone')); ?></p>
					 			</div>
					 		</div>
			 			</div>
			 			<?php }?>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<?php if ( get_theme_mod('vw_mobile_app_pro_plugin_conntact_us_form_shortcode') != false ){ ?>
					<div class="form_outer">
						<div class="home_form_sec col-md-9 offset-md-2">		    
							<?php echo do_shortcode(get_theme_mod('vw_mobile_app_pro_plugin_conntact_us_form_shortcode')); ?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>	