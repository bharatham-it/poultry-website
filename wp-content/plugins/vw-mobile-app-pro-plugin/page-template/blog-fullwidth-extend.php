<?php
/**
 * Template Name:Blog Full Width Extend
 */

require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_header.php';
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/template-parts/banner.php';?>

<?php do_action('vw_mobile_app_pro_plugin_before_blog'); ?>

<div id="full-width-blog">
	<div class="container">
    	<div class="content_page row">
			<?php if ( have_posts() ) : ?>
		      	<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$args = array(
					   'paged' => $paged,
					   'category_name' => get_theme_mod('vw_mobile_app_pro_plugin_category_setting')
					);
					$custom_query = new WP_Query( $args );
					while($custom_query->have_posts()) :
					   $custom_query->the_post();
					   	include(VW_MOBILE_APP_PRO_PLUGIN_EXT_DIR. 'template-parts/post/post-content.php');
					$p++; endwhile;
					wp_reset_postdata(); ?>
					<div class="navigation">
						<?php 
							$big = 999999999;
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => 'paged=%#%',
								'current' =>  (get_query_var('paged') ? get_query_var('paged') : 1),
								'total' => $custom_query->max_num_pages
							) );
						?>
					</div>
			<?php else : ?>
				<h3><?php esc_html_e('Not Found','vw-mobile-app-pro-plugin'); ?></h3>
			<?php endif; ?>
        	<div class="clearfix"></div>
		</div>
        <div class="clearfix"></div>
	</div>
</div>

<?php do_action('vw_mobile_app_pro_plugin_after_blog'); ?>

<?php require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_footer.php'; ?>