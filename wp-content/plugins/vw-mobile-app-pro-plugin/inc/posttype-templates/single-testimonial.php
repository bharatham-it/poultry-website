<?php
/**
 * The Template for displaying all single team.
 *
 * @package vw-mobile-app-pro-plugin
 */
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_header.php';
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/template-parts/banner.php';?>
<?php do_action('vw_mobile_app_pro_plugin_before_contact_title'); ?>
<div class="container">
    <div class="row">
        <div id="testimonial_single" class="col-md-8">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="team_feature-box">
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                    </div>
                <?php } ?>  
                <div class="testimonial_des">
                    <p class="mt-3"><?php the_content();?></p>
                </div>                 
                <?php if(get_post_meta($post->ID,'vw_mobile_app_pro_plugin_posttype_testimonial_desigstory',true)!= ''){ ?>
                <div class="teams-desig mb-3 mt-3"><strong><?php esc_html_e('Designation: ','vw-mobile-app-pro-plugin');?></strong><?php echo esc_html(get_post_meta($post->ID,'vw_mobile_app_pro_plugin_posttype_testimonial_desigstory',true)); ?></div>
                <?php }?>  
                <div class="clearfix"></div>
            <?php endwhile; // end of the loop. ?>
            
            <div class="post_pagination mt-4">
                <?php the_post_navigation( array(
                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'vw-mobile-app-pro-plugin' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Next post:', 'vw-mobile-app-pro-plugin' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'vw-mobile-app-pro-plugin' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-mobile-app-pro-plugin' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                ) );?>
            </div>
        </div>
        <div class="col-md-4" id="<?php echo VW_MOBILE_STYLES; ?>sidebar">
            <?php dynamic_sidebar('vw-sidebar-1'); ?>
        </div> 
    </div>    
    <div class="clearfix"></div>
</div>
<?php require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_footer.php'; ?>