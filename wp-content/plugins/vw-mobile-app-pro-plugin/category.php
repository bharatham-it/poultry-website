<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package vw-mobile-app-pro-plugin
 */
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_header.php'; ?>
<div class="container">
	<?php the_archive_title( '<h1>', '</h1>' ); ?>
</div>
<div class="feature-box">
	<div class="container">
		<div class="col-md-12">
			<div class="bradcrumbs">
				<?php vw_mobile_app_pro_plugin_the_breadcrumb(); ?>
			</div>
		</div>
	</div>
</div>
<div class="container">
    <div class="row">
		<div class="col-md-9">
			<div class="row">
				<?php if ( have_posts() ) : ?>
	                <?php while ( have_posts() ) : the_post();
						include(VW_MOBILE_APP_PRO_PLUGIN_EXT_DIR. 'template-parts/post/post-content.php');
					endwhile; ?>
	            <?php else : ?>
	                <?php get_template_part( 'no-results', 'archive' ); ?>
	            <?php endif; ?>
	            <div class="navigation">
					<?php // Previous/next page navigation.
			            the_posts_pagination( array(
			                'prev_text'  => __( 'Previous page', 'vw-mobile-app-pro-plugin' ),
			                'next_text'  => __( 'Next page', 'vw-mobile-app-pro-plugin' ),
			                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-mobile-app-pro-plugin' ) . ' </span>',
			            ));
					?>
				</div>
			</div>
        </div>
		<div id="<?php echo VW_MOBILE_STYLES; ?>sidebar" class="col-md-3">
			<?php dynamic_sidebar( 'vw-sidebar-1' ); ?>
		</div>
        <div class="clearfix"></div>
    </div>
</div>
<?php require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_footer.php'; ?>