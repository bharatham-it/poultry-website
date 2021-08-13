<?php 
$team_enable = get_theme_mod( 'vw_mobile_app_pro_plugin_radio_team_enable' );
if ( 'Disable' == $team_enable ) {
  return;
}
/*team*/
if( get_theme_mod('vw_mobile_app_pro_plugin_team_bgcolor') ) { 
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_team_bgcolor')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_our_team_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_our_team_bgimage')).'\')';
}else{
  $about_backg = '';   
}
$args = array(
  'post_type' => 'team',
  'post_status' => 'publish'
);            
$new = new WP_Query($args); 
if ( defined( 'vw_mobile_app_pro_plugin_POSTTYPE_VERSION' ) ) :
?>
  <section id="team" style="<?php echo esc_html($about_backg); ?>">
    <div class="container team_inner">
    <?php if(get_theme_mod('vw_mobile_app_pro_plugin_team_title') != ''){?>
      <div class="section-heading">
        <h3><span class="heading3"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_team_title')); ?></span></h3>
        <p><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_team_desc')); ?></p>
      </div>
    <?php } ?>
    <?php if ( $new->have_posts() ) : ?>
      <div class="owl-carousel mt-5">
        <?php            
          $loop_index = 0; $i=1;
          while ( $new->have_posts() ){
          $new->the_post();  ?>
          <div class="<?php if($i == 1){ echo 'active';}?> team_outer">
            <div class="<?php echo VW_MOBILE_STYLES; ?>box">
              <?php if(has_post_thumbnail()){ the_post_thumbnail(); } ?>
              <div class="box-content">
                <ul class="icon">
                  <?php if(get_post_meta($post->ID,'meta-facebookurl',true) || get_post_meta($post->ID,'meta-twitterurl',true) || get_post_meta($post->ID,'meta-googleplusurl',true) || get_post_meta($post->ID,'meta-linkdenurl',true)){?>
                      <?php if(get_post_meta($post->ID,'meta-facebookurl',true)){?>
                        <li><a href="<?php echo esc_html(get_post_meta($post->ID,'meta-facebookurl',true)); ?>" target="_blank"><span><i class="fab fa-facebook-f"></i></span></a></li>
                      <?php } if(get_post_meta($post->ID,'meta-twitterurl',true)){?>
                        <li><a href="<?php echo esc_html(get_post_meta($post->ID,'meta-twitterurl',true)); ?>" target="_blank"><span><i class="fab fa-twitter"></i></span></a></li>                            
                      <?php } if(get_post_meta($post->ID,'meta-linkdenurl',true)){?>
                        <li><a href="<?php echo esc_html(get_post_meta($post->ID,'meta-linkdenurl',true)); ?>" target="_blank"><span><i class="fab fa-linkedin-in"></i></span></a></li>
                      <?php } if(get_post_meta($post->ID,'meta-googleplusurl',true)){?>
                        <li><a href="<?php echo esc_html(get_post_meta($post->ID,'meta-googleplusurl',true)); ?>" target="_blank"><span><i class="fab fa-google-plus-g"></i></span></a></li>
                      <?php }?>
                  <?php }?>
                </ul>
              </div>
            </div>
            <div class="team_desc text-center">
              <h4 class="teamtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <?php if(get_post_meta($post->ID,'meta-designation',true)){?>
                <p><?php echo esc_html(get_post_meta(get_the_ID(),'meta-designation',true)); ?></p>
              <?php }?>
            </div>
          </div>
        <?php $i++; }
        wp_reset_query(); ?>
      </div>
      <?php
        else :
          echo '<h5 class="text-center">' . esc_html__( 'Create the team to make it appear here.', 'vw-mobile-app-pro-plugin' ) . '</h5>'; 
        endif;
      ?>
    </div>
  </section>
<?php
else :
  echo '<h5 class="text-center">' . esc_html__( 'Please Activate VW Mobile App Pro and create the team to make it appear here.', 'vw-mobile-app-pro-plugin' ) . '</h5>'; 
endif; ?>