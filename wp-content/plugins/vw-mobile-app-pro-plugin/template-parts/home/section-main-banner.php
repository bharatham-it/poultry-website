<?php 
$about_section = get_theme_mod( 'vw_mobile_app_pro_plugin_radio_main_banner_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('vw_mobile_app_pro_plugin_main_banner_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_bgcolor')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_main_banner_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_bgimage')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="main_banner" style="<?php echo esc_attr($about_backg); ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="banner_conent">
            <?php if(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_section_title') != ''){ ?>
              <h2><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_section_title'));?></h2>
            <?php } ?>

            <?php if(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_section_subtitle') != ''){ ?>
              <p><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_section_subtitle'));?></p>
            <?php } ?>

            <div class="cta_btn">
              <?php if(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_section_button1') != ''){ ?>
                <a class="theme_button" href="<?php echo esc_url(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_section_button1_link'));?>"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_section_button1'));?></a>
              <?php } ?>

              <?php if(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_section_button2') != ''){ ?>
                <a class="theme_white_button" href="<?php echo esc_url(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_section_button2_link'));?>"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_section_button2'));?></a>
              <?php } ?>
            </div>
          </div>
        </div>
        <?php if(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_rightimage') != ''){ ?>
          <div class="col-md-5">
            <div class="righ-image">
             <img src="<?php echo esc_url(get_theme_mod('vw_mobile_app_pro_plugin_main_banner_rightimage'));?>">
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
</section>