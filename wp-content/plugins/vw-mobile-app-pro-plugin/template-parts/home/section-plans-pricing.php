<?php
/**
 * Template part for displaying posts
 *
 * @package vw_mobile_app_pro_plugin
 */
$about_us = get_theme_mod( 'vw_mobile_app_pro_plugin_plans_pricing_enable' );
if ( 'Disable' == $about_us ) {
  return;
}
if( get_theme_mod('vw_mobile_app_pro_plugin_plans_pricing_bgcolor','') ) { 
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_plans_pricing_bgcolor','')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_plans_pricing_bgimage','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_plans_pricing_bgimage')).'\')';
}else{
  $about_backg = '';   
}

if( get_theme_mod('vw_mobile_app_pro_plugin_plans_pricing_boxbgcolor','') ) { 
  $box_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_plans_pricing_boxbgcolor','')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_plans_pricing_boxbgimage','') ){
  $box_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_plans_pricing_boxbgimage')).'\')';
}else{
  $box_backg = '';   
}

?>
<section id="plans_pricing" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
    <div class="section-heading">
      <?php if(get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_section_title',true) != ''){?>
        <h3 class="head_white"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_section_title'));?></h3>
        <?php if(get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_section_subtitle',true != '')){?>
        <p class="w-75 mb-5 head_white"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_section_subtitle')); ?></p>
      <?php } ?>
      <?php }?>          
    </div>        
    <div class="row">
      <?php $countpricing =  get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_number', 3); ?>
      <?php /* Define column size */ 
       if( get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_number') == 1) {
          $col_size = 'col-md-12'; 
        } else if( get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_number') == 2){
          $col_size = 'col-md-6'; 
        } else{
          $col_size = 'col-lg-4 col-md-6'; 
        }?> 

      <?php for($i=1,$j=1; $i<=$countpricing; $i++,$j++) {?>
        <div class="<?php echo esc_attr($col_size); ?>">
          <div class="price-box price-box<?php echo esc_attr($i); ?>" style="<?php echo esc_attr($box_backg); ?>">
            <?php
              if( get_theme_mod('vw_mobile_app_pro_plugin_price_heading_bgcolor'.$i) ) { 
                $price_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_price_heading_bgcolor'.$i)).';';
              }elseif( get_theme_mod('vw_mobile_app_pro_plugin_price_heading_bgimage'.$i) ){
                $price_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_price_heading_bgimage'.$i)).'\')';
              }else{
                $price_backg = '';
              }
            ?>
            <div class="price-heading-box text-center" style="<?php echo esc_attr($price_backg); ?>">
              <?php if( get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_title'.$i, true) != ''){ ?>
                <h4><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_title'.$i)); ?></h4>
              <?php } ?>
              <p><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_subtitle'.$i));?></p>
              
              <?php if( get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_price'.$i, true) != ''){ ?>
                <h3><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_price'.$i)); ?><sub><?php echo esc_html('/');?><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_price_base'.$i)); ?></sub></h3>
              <?php } ?> 
            </div>
            
            <div class="col-md-12 plans-content">
              <?php $countplans =  get_theme_mod('vw_mobile_app_pro_plugin_pricing_text_number'.$i, 6); ?>
              <ul>
                <?php for($p=1; $p<=$countplans; $p++) {?>
                  <?php if( get_theme_mod('vw_mobile_app_pro_plugin_plan_box_text'.$p.$i, true) != ''){ ?>
                    <li><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_plan_box_text'.$p.$i)); ?></li>
                  <?php } ?>                
                <?php } ?>
              </ul>
            </div>
            <div class="col-md-12 select-plans">
              <?php if( get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_btn'.$i, true) != ''){ ?>
                <h4><a class="theme_orange_button" href="<?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_url'.$i,__('Select Plans','vw-mobile-app-pro-plugin'))); ?>"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_btn'.$i)); ?></a></h4>
              <?php } ?>
            </div>
          </div>  
        </div>
      <?php }?> 
    </div>
    <div class="clearfix"></div>
  </div>
</section>