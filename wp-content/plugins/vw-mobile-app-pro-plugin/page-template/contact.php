<?php
/**
 * Template Name: Contact
*/

require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_header.php';
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/template-parts/banner.php';?>
<?php do_action('vw_mobile_app_pro_plugin_before_contact_title'); ?>
<div class="contact-box">
	<div class="container">
		<div class="contact-color-bg row mb-5">
			<div class="col-md-6">
				<div class="contact-info ">
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
		 			<?php if ( get_theme_mod('vw_mobile_app_pro_plugin_contactpage_working_hours_title',true) != "" ) { ?>
					<div class="contact-phone">
						<div class="inner-cont">
							<div class="c_content media-small">
				 				<i class="fas fa-calendar-alt"></i><span class="font-weight-bold text-uppercase"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_contactpage_working_hours_title')); ?></span>
				 				<p class="m-0"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_contactpage_working_hours')); ?></p>
				 			</div>
				 		</div>
		 			</div>
		 			<?php }?>

		 			<?php if ( get_theme_mod('vw_mobile_app_pro_plugin_contactpage_form_desc',true) != "" ) { ?>
					<div class="contact-phone">
						<div class="inner-cont">
							<div class="c_content media-small">
				 				<p class="m-0"><i class="fas fa-info-circle"></i><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_contactpage_form_desc')); ?></p>
				 			</div>
				 		</div>
		 			</div>
		 			<?php }?>
				</div>
				<div class="social_icons">
					<?php get_template_part( 'template-parts/home/social-icons' ); ?>
				</div>
			</div>
		
		<section class="contac_form col-md-6">
			<div class="text-center">
				<?php if(get_theme_mod('vw_mobile_app_pro_plugin_contactpage_form_title') != ''){?>
			      <h3><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_contactpage_form_title')); ?></h3>
			    <?php }
			    if(get_theme_mod('vw_mobile_app_pro_plugin_contactpage_form_subtitle') != ''){ ?>
			      <p class="subtitle"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_contactpage_form_subtitle')); ?></p>
			    <?php } ?>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
	        	<?php the_content(); ?>
	    	<?php endwhile; // end of the loop. ?>
		</section>
	</div>
	</div>	
	<?php do_action('vw_mobile_app_pro_plugin_before_map'); ?>
		<section class="google-map text-center p-0" id="map">
			<?php if ( get_theme_mod('vw_mobile_app_pro_plugin_address_latitude',true) != "" && get_theme_mod('vw_mobile_app_pro_plugin_address_longitude',true) != "" ) {?>
			  <embed width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_address_latitude')); ?>,<?php echo esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_address_longitude')); ?>&hl=es;z=14&amp;output=embed"></embed>
			<?php }?>
		</section>
	<?php do_action('vw_mobile_app_pro_plugin_after_map'); ?>
</div>
<?php do_action('vw_mobile_app_pro_plugin_before_footer'); ?>

<?php require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_footer.php'; ?>