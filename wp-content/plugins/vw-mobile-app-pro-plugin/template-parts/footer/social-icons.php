<?php
/**
 * The Template for displaying Social Icons.
 */
 ?>
<?php if( get_theme_mod('vw_mobile_app_pro_plugin_headertwitter') != '' || get_theme_mod('vw_mobile_app_pro_plugin_headerinstagram') != '' || get_theme_mod('vw_mobile_app_pro_plugin_headerfacebook') != '' || get_theme_mod('vw_mobile_app_pro_plugin_headeryoutube') != '' || get_theme_mod('vw_mobile_app_pro_plugin_headerpinterest') != '' || get_theme_mod('vw_mobile_app_pro_plugin_headerlinkedin') != '' || get_theme_mod('vw_mobile_app_pro_plugin_headertumblric') != '' || get_theme_mod('vw_mobile_app_pro_plugin_headergoogleplus') != '' || get_theme_mod('vw_mobile_app_pro_plugin_headerflickr') != '' || get_theme_mod('vw_mobile_app_pro_plugin_headervk') != ''){ ?>
  <div class="top_social">
    <div class="socialbox">
      <?php if( get_theme_mod('vw_mobile_app_pro_plugin_headertwitter') != '' ){ ?>
        <a class="twitter" href="<?php echo esc_url( get_theme_mod( 'vw_mobile_app_pro_plugin_headertwitter' ) ); ?>" target="_blank"><i class="fab fa-twitter align-middle" aria-hidden="true"></i></a>
      <?php } ?>
      <?php if( get_theme_mod('vw_mobile_app_pro_plugin_headerinstagram') != '' ){ ?>
        <a class="insta" href="<?php echo esc_url( get_theme_mod( 'vw_mobile_app_pro_plugin_headerinstagram' ) ); ?>" target="_blank"><i class="fab fa-instagram align-middle" aria-hidden="true"></i></a>
      <?php } ?>
      <?php if( get_theme_mod('vw_mobile_app_pro_plugin_headerfacebook') != '' ){ ?>
        <a class="facebook" href="<?php echo esc_url( get_theme_mod( 'vw_mobile_app_pro_plugin_headerfacebook' ) ); ?>" target="_blank"><i class="fab fa-facebook-f align-middle " aria-hidden="true"></i></a>
      <?php } ?>
      <?php if( get_theme_mod('vw_mobile_app_pro_plugin_headeryoutube') != '' ){ ?>
        <a class="youtube" href="<?php echo esc_url( get_theme_mod( 'vw_mobile_app_pro_plugin_headeryoutube','https://www.youtube.com' ) ); ?>" target="_blank"><i class="fab fa-youtube align-middle" aria-hidden="true"></i></a>
      <?php } ?>
      <?php if( get_theme_mod('vw_mobile_app_pro_plugin_headerpinterest') != '' ){ ?>
        <a class="pintrest" href="<?php echo esc_url( get_theme_mod( 'vw_mobile_app_pro_plugin_headerpinterest' ) ); ?>" target="_blank"><i class="fab fa-pinterest-p align-middle " aria-hidden="true"></i></a>
      <?php } ?>
      <?php if( get_theme_mod('vw_mobile_app_pro_plugin_headerlinkedin') != '' ){ ?>
        <a class="linkedin" href="<?php echo esc_url( get_theme_mod( 'vw_mobile_app_pro_plugin_headerlinkedin' ) ); ?>" target="_blank"><i class="fab fa-linkedin-in align-middle" aria-hidden="true"></i></a>
      <?php } ?>
      <?php if( get_theme_mod('vw_mobile_app_pro_plugin_headertumblric') != '' ){ ?>
        <a class="tumbler" href="<?php echo esc_url( get_theme_mod( 'vw_mobile_app_pro_plugin_headertumblric' ) ); ?>" target="_blank"><i class="fab fa-tumblr align-middle" aria-hidden="true"></i></a>
      <?php } ?>
      <?php if( get_theme_mod('vw_mobile_app_pro_plugin_headergoogleplus') != '' ){ ?>
        <a class="gplus" href="<?php echo esc_url( get_theme_mod( 'vw_mobile_app_pro_plugin_headergoogleplus' ) ); ?>" target="_blank"><i class="fab fa-google-plus-g align-middle" aria-hidden="true"></i></a>
      <?php } ?>
      <?php if( get_theme_mod('vw_mobile_app_pro_plugin_headerflickr') != '' ){ ?>
        <a class="flicker" href="<?php echo esc_url( get_theme_mod( 'vw_mobile_app_pro_plugin_headerflickr') ); ?>" target="_blank"><i class="fab fa-flickr align-middle " aria-hidden="true"></i></a>
      <?php } ?>
      <?php if( get_theme_mod('vw_mobile_app_pro_plugin_headervk') != '' ){ ?>
        <a class="vk" href="<?php echo esc_url( get_theme_mod( 'vw_mobile_app_pro_plugin_headervk') ); ?>" target="_blank"><i class="fab fa-vk align-middle " aria-hidden="true"></i></a>
      <?php } ?>
    </div>
  </div>
<?php } ?>