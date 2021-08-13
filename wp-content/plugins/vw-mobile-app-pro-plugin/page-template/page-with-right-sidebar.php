<?php
/**
 * Template Name:Page with Right Sidebar
 */

require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_header.php';
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/template-parts/banner.php';?>

<?php do_action('vw_mobile_app_pro_plugin_before_page'); ?>

<div class="container">
    <div class="middle-align">
      <div class="row">
        <div class="col-md-8 content_page">
          <?php while ( have_posts() ) : the_post(); ?>
             <?php the_content();?>
             <?php
             //If comments are open or we have at least one comment, load up the comment template
              if ( comments_open() || '0' != get_comments_number() )
                  comments_template();
             ?>
           <?php endwhile; // end of the loop. ?>
        </div>
         <div class="col-md-4" id="<?php echo VW_MOBILE_STYLES; ?>sidebar">
            <?php  dynamic_sidebar('vw-sidebar-2'); ?>
         </div>
         <div class="clear"></div>
      </div>
    </div>
</div>
<?php do_action('vw_mobile_app_pro_plugin_after_page'); ?>

<?php require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_footer.php'; ?>