<?php 
$about_section = get_theme_mod( 'vw_mobile_app_pro_plugin_records_section_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('vw_mobile_app_pro_plugin_records_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_records_bgcolor')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_records_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_records_bgimage')).'\')';
}else{
  $about_backg = '';
}
$record_number =  get_theme_mod('vw_mobile_app_pro_plugin_records_box_number');
if($record_number != ''){
?>
  <section id="records" class="records_section" style="<?php echo esc_attr($about_backg); ?>">
    <div class="inner_sec">
      <div class="container">
        <div class="section-heading">
          <?php if(get_theme_mod('vw_mobile_app_pro_plugin_records_title') != ''){?>
            <h3><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_records_title')); ?></h3>
          <?php } ?>
          <?php if(get_theme_mod('vw_mobile_app_pro_plugin_records_desc') != ''){?>
            <p class="w-75 subtext mb-5"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_records_desc')); ?></p>
          <?php } ?>
        </div>
        <div class="row">
          <div class="record-inner col-md-6">
            <div class="row">            
              <?php for($i=1; $i<=$record_number; $i++) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 mb-4 record-box-outer">
                  <div class="record-box text-center">
                    <?php if(get_theme_mod('vw_mobile_app_pro_plugin_records_box_icon'.$i) != ''){ ?>
                      <div class="record-box-icon">
                        <i class="<?php echo esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_records_box_icon'.$i)); ?>"></i>
                      </div>
                    <?php } ?>
                    <div class="record-box-content">
                      <?php if(get_theme_mod('vw_mobile_app_pro_plugin_records_box_title'.$i) != ''){ ?>
                      <h4><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_records_box_title'.$i)); ?></h4>
                      <?php } ?>
                      <?php if(get_theme_mod('vw_mobile_app_pro_plugin_records_box_subtitle'.$i) != ''){ ?>
                      <p><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_records_box_subtitle'.$i)); ?></p>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              <?php } ?>            
            </div>
          </div>
          <div class="col-md-6">
            <?php if(get_theme_mod('vw_mobile_app_pro_plugin_video_image') != ''){?>
              <div class="over_video"><img src="<?php echo esc_url(get_theme_mod('vw_mobile_app_pro_plugin_video_image'));?>">
                <div class="ps_video">
                  <i class="fas fa-play" data-popup-open="popup-1"></i>
                </div>
                <div class="popup" data-popup="popup-1">
                  <div class="popup-inner">
                    <?php if( get_theme_mod('vw_mobile_app_pro_plugin_video_url') != ''){ ?>
                      <div class="video">
                        <embed height="400px" width="100%" src="<?php echo esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_video_url')); ?>" allowfullscreen></embed>
                      </div>
                      <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
<?php } ?>