<?php
/**
 * Template to show the content of our record section 
 *
 * @package vw_mobile_app_pro_plugin
 */

$about_section = get_theme_mod( 'vw_mobile_app_pro_plugin_radio_about_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
/*About us*/
if( get_theme_mod('vw_mobile_app_pro_plugin_about_bgcolor','') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_about_bgcolor','')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_about_bgimage','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_about_bgimage')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="about" style="<?php echo esc_attr($about_backg); ?>" class="">
  <div class="container text-center">
    <div class="section-heading">
      <?php if(get_theme_mod('vw_mobile_app_pro_plugin_about_section_title',true != '')){?>
          <h3><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_about_section_title')); ?></h3>
      <?php } ?>
      <?php if(get_theme_mod('vw_mobile_app_pro_plugin_about_section_subtitle',true != '')){?>
        <p class="w-75 mb-5"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_about_section_subtitle')); ?></p>
      <?php } ?>
    </div>
    <div class="about_outer row">
      <?php $count =  get_theme_mod('vw_mobile_app_pro_plugin_about_number'); 
      for($i=1; $i<=$count; $i++) { ?>
        <div class="col-md-4 text-center ">
          <div class="about_box">
            <?php if(get_theme_mod('vw_mobile_app_pro_plugin_about_sec_icon'.$i) != ''){?>
              <div class="icon_about"><i class="<?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_about_sec_icon'.$i)); ?> fa-3x"></i></div>
            <?php } else if(get_theme_mod('vw_mobile_app_pro_plugin_about_icon_image'.$i) != '') {?>
              <img class="" src="<?php echo esc_url(get_theme_mod('vw_mobile_app_pro_plugin_about_icon_image'.$i)); ?>" alt=""/>
            <?php } if(get_theme_mod('vw_mobile_app_pro_plugin_about_sec_title'.$i,true) != ''){?>
              <h5 class="about font-weight-bold mt-3"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_about_sec_title'.$i)); ?></h5>
            <?php } if(get_theme_mod('vw_mobile_app_pro_plugin_about_sec_details'.$i,true) != ''){?>
              <p class="record_details"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_about_sec_details'.$i)); ?></p>
            <?php }?>
            <?php if( get_theme_mod('vw_mobile_app_pro_plugin_about_sec_readmore'.$i, true) != ''){ ?>
              <a class="font-weight-bold read_more" href="<?php echo esc_url(get_theme_mod('vw_mobile_app_pro_plugin_about_sec_readmore_link'.$i)); ?>"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_about_sec_readmore'.$i)); ?><i class="far fa-hand-point-right"></i></a>
            <?php } ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <div class="clearfix"></div>
</section>
