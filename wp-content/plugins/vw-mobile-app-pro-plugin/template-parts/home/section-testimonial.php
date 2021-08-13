<?php 
$attorneys_enable = get_theme_mod( 'vw_mobile_app_pro_plugin_radio_testimonial_enable' );
if ( 'Disable' == $attorneys_enable ) {
  return;
}
if( get_theme_mod('vw_mobile_app_pro_plugin_testimonial_bgcolor') ) { 
  $testi_backg = 'background-color:'.esc_attr(get_theme_mod('vw_mobile_app_pro_plugin_testimonial_bgcolor')).';';
}elseif( get_theme_mod('vw_mobile_app_pro_plugin_our_testimonial_bgimage') ){
  $testi_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_mobile_app_pro_plugin_our_testimonial_bgimage')).'\')';
}else{
  $testi_backg = '';   
}
$args = array(
  'post_type' => 'testimonials',
  'post_status' => 'publish'
);
$new = new WP_Query($args); 
if ( defined( 'vw_mobile_app_pro_plugin_POSTTYPE_VERSION' ) ) :
?>

<section id="testimonials" style="<?php echo esc_attr($testi_backg); ?>">
  <div class="container">
    <div class="section-heading">
      <?php if(get_theme_mod('vw_mobile_app_pro_plugin_testimonial_title') != ''){?>
          <h3 class="head_white"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_testimonial_title')); ?></h3>
      <?php } ?>
      <?php if(get_theme_mod('vw_mobile_app_pro_plugin_testimonial_desc') != ''){?>
        <p class="w-75 mb-5 head_white"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_testimonial_desc')); ?></p>
      <?php } ?>
    </div>
    <div class="inner-test-bg">
      <?php
        if ( $new->have_posts() ) : ?>
        <div class="owl-carousel">
          <?php          
            $loop_index = 0;
            $i=1;
            while ( $new->have_posts() ){
              $new->the_post();  ?>
              <div class="<?php if($i == 1){ echo 'active';}?> testimonials_outer">
                <div class="testimonial_box mb-3" >
                  <div class="testimonial_auther">
                    <div class="textimonial-img">
                      <?php if (has_post_thumbnail()){ ?>
                        <img src="<?php the_post_thumbnail_url(); ?>">
                      <?php } ?>
                    </div>
                    <div class="testimonial-box">
                      <h4 class="testimonial_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><cite><?php echo esc_html(get_post_meta($post->ID,'vw_mobile_app_pro_plugin_posttype_testimonial_desigstory',true)); ?></cite></h4>
                    </div>
                  </div>             
                  <div class="content_box w-100">
                    <div class="short_text pb-3"><blockquote><?php $excerpt = get_the_excerpt(); echo esc_html(vw_mobile_app_pro_plugin_string_limit_words($excerpt,25)); ?></blockquote></div>
                  </div>                  
                </div>
              </div>
              <?php $i++;
            }
            wp_reset_query(); ?>
        </div>
      <?php 
        else :
          echo '<h5 class="text-center">' . esc_html__( 'Create the testimonials to make it appear here.', 'vw-mobile-app-pro-plugin' ) . '</h5>';
        endif;
      ?>
    </div>
  </div>
</section>
<?php
else :
   echo '<h5 class="text-center">' . esc_html__( 'Please Activate VW Mobile App Pro and create the testimonials to make it appear here.', 'vw-mobile-app-pro-plugin' ) . '</h5>'; 
endif; ?>