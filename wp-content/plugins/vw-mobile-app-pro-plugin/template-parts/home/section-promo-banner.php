<?php 
$about_section = get_theme_mod( 'vw_mobile_app_pro_plugin_radio_promo_banner_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_bgcolor')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_bgimage')).'\')';
}else{
  $about_backg = '';
}

if( get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_bgcolor_inner') ) {
  $section_inner_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_bgcolor_inner')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_bgimage_inner') ){
  $section_inner_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_bgimage_inner')).'\')';
}else{
  $section_inner_backg = '';
}

?>
<section id="promo_banner" style="<?php echo esc_attr($about_backg); ?>">
    <div class="container">
      <div class="inner_banner" style="<?php echo esc_attr($section_inner_backg); ?>">
        <div class="row m-0">
          <div class="col-md-9">
            <div class="promo_conent">
              <?php if(get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_section_title') != ''){ ?>
                <h3><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_section_title'));?></h3>
              <?php } ?>

              <?php if(get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_section_subtitle') != ''){ ?>
                <p><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_section_subtitle'));?></p>
              <?php } ?>
            </div>
          </div>
          <?php if(get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_section_button') != ''){ ?>
            <div class="col-md-3">
              <div class="promo_cta_btn">
                  <a class="theme_button" href="<?php echo esc_url(get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_section_button_link'));?>"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_promo_banner_section_button'));?></a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
</section>