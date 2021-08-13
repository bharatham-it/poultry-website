<?php 
$about_section = get_theme_mod( 'vw_mobile_app_pro_plugin_radio_our_partners_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
/*Our partners*/
if( get_theme_mod('vw_mobile_app_pro_plugin_our_partnersbg_color') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_our_partnersbg_color')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_our_partnersbg_image') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_our_partnersbg_image')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="our_partners" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
    <div class="partners_inner">     
      <div class="owl-carousel">
        <?php
          $number = get_theme_mod('vw_mobile_app_pro_plugin_our_partners_number');
          for ($i=1,$j=1; $i<=$number; $i++,$j++) {
            if($j==6){ $j=1; }
              if ( get_theme_mod('vw_mobile_app_pro_plugin_our_partners_number',true) != "" ) { ?>
              <div class="client_inner">
                <?php if( get_theme_mod('vw_mobile_app_pro_plugin_our_partners_image'.$i, true) != ''){ ?>
                    <img class="feature-img mt-3 mb-3" src="<?php echo esc_url(get_theme_mod('vw_mobile_app_pro_plugin_our_partners_image'.$i)); ?>" alt="Image"/>
                <?php } ?>
              </div>
            <?php }
          } ?> 
      </div>
    </div>
  </div>
</section>