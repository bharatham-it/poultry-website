<?php 
$about_section = get_theme_mod( 'vw_mobile_app_pro_plugin_radio_awesome_screenshot_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('vw_mobile_app_pro_plugin_awesome_screenshot_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_awesome_screenshot_bgcolor')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_awesome_screenshot_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_awesome_screenshot_bgimage')).'\')';
}else{
  $about_backg = '';
}

?>
<section id="awesome_screenshot" style="<?php echo esc_attr($about_backg); ?>">
    <div class="container awesome_screenshot_inner">
      <div class="section-heading">
      <?php if(get_theme_mod('vw_mobile_app_pro_plugin_awesome_screenshot_section_title',true != '')){?>
          <h3><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_awesome_screenshot_section_title')); ?></h3>
      <?php } ?>
      <?php if(get_theme_mod('vw_mobile_app_pro_plugin_awesome_screenshot_section_subtitle',true != '')){?>
        <p class="w-75 mb-5"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_awesome_screenshot_section_subtitle')); ?></p>
      <?php } ?>
    </div>
    <div class="owl-carousel">
      <?php $screenshot_box =  get_theme_mod('vw_mobile_app_pro_plugin_awesome_screenshot_box_number');
       for($i=1; $i<=$screenshot_box; $i++) { ?>
        <div class="screenshot-box">
          <img src="<?php echo esc_url(get_theme_mod('vw_mobile_app_pro_plugin_awesome_screenshot_image'.$i));?>">
        </div>
      <?php } ?>
    </div>
    </div>
</section>