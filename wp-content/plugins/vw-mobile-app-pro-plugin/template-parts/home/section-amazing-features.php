<?php 
$about_section = get_theme_mod( 'vw_mobile_app_pro_plugin_radio_amazing_features_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_bgcolor')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_bgimage')).'\')';
}else{
  $about_backg = '';
}

?>
<section id="amazing_features" style="<?php echo esc_attr($about_backg); ?>">
    <div class="container amazing-features-inner">
      <div class="section-heading">
      <?php if(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_section_title',true != '')){?>
          <h3><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_section_title')); ?></h3>
      <?php } ?>
      <?php if(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_section_subtitle',true != '')){?>
        <p class="w-75 mb-5"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_section_subtitle')); ?></p>
      <?php } ?>
    </div>
      <div class="row m-0">
        <div class="col-lg-4 col-md-12 fdesc_box">
          <?php $left_box =  get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_left_number');
           for($i=1; $i<=$left_box; $i++) { ?>
            <div class="features-box mb-4">
              <div class="row m-0">
                <div class="col-lg-8 col-md-8 col-8 p-0">
                  <div class="features-box-content">
                    <?php if(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_left_title'.$i) != ''){ ?>
                    <h4><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_left_title'.$i)); ?></h4>
                    <?php } ?>
                    <?php if(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_left_desc'.$i) != ''){ ?>
                    <p><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_left_desc'.$i)); ?></p>
                    <?php } ?>
                  </div>            
                </div>
                <?php if(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_left_icon'.$i) != ''){ ?>
                <div class="col-md-4 col-4">
                  <div class="features-box-icon">
                    <i class="<?php echo esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_left_icon'.$i)); ?>"></i>
                  </div>
                </div>
                <?php } ?>
              </div> 
            </div>
          <?php } ?>
        </div>
        <?php if(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_center_image') != ''){ ?>
          <div class="col-lg-4 col-md-12">
            <div class="center-image">
             <img src="<?php echo esc_url(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_center_image'));?>">
            </div>
          </div>
        <?php } ?>
        <div class="col-lg-4 col-md-12 fdesc_box">
          <?php $right_box =  get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_right_number'); 
          for($i=1; $i<=$right_box; $i++) { ?>
            <div class="features-box mb-4">
                <div class="row m-0">
                  <?php if(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_right_icon'.$i) != ''){ ?>
                  <div class="col-md-4 col-4">
                    <div class="features-box-icon">
                      <i class="<?php echo esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_right_icon'.$i)); ?>"></i>
                    </div>
                  </div>
                  <?php } ?>
                  <div class="col-md-8 col-8 p-0">
                    <div class="features-box-content">
                      <?php if(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_right_title'.$i) != ''){ ?>
                        <h4><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_right_title'.$i)); ?></a></h4>
                      <?php } ?>
                      <?php if(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_right_desc'.$i) != ''){ ?>
                        <p><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_right_desc'.$i)); ?></a></p>
                      <?php } ?>
                    </div>            
                  </div>
                </div> 
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
</section>