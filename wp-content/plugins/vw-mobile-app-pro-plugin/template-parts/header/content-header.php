<?php
/**
 * Template part for displaying header content
 *
 * @package vw_mobile_app_pro_plugin
 */
?>
<div class="container">
  <div class="row bg-media">
    <div class="col-lg-3 col-md-6 col-sm-4 col-8">
      <div class="<?php echo VW_MOBILE_STYLES; ?>logo">
        <?php 
          if( has_custom_logo() ){  vw_mobile_app_pro_plugin_the_custom_logo();  }

          if( get_theme_mod('vw_mobile_app_pro_plugin_display_title', true) != ''){ ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>
          <?php }

          if( get_theme_mod('vw_mobile_app_pro_plugin_display_tagline', true) != ''){ 
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
              <p class="<?php echo VW_MOBILE_STYLES; ?>site-description"><?php echo esc_html($description); ?></p>
          <?php endif; }
        ?>
      </div>
    </div>
    <div class="col-lg-9 col-md-6 col-sm-8 col-4">
      <?php require_once VW_MOBILE_APP_PRO_PLUGIN_EXT_DIR. 'template-parts/header/navigation.php'; ?>
    </div>
  </div>
</div>