<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package vw-mobile-app-pro-plugin
 */
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_header.php'; ?>
<div class="container">
	<div class="middle-align">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<?php if ( have_posts() ) : ?>
						<header class="page-header">
							<?php the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
						</header>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post();
							include(VW_MOBILE_APP_PRO_PLUGIN_EXT_DIR. 'template-parts/post/post-content.php');
						endwhile;
						// Previous/next page navigation.
						the_posts_pagination( array(
							'prev_text'          => __( 'Previous page', 'vw-mobile-app-pro-plugin' ),
							'next_text'          => __( 'Next page', 'vw-mobile-app-pro-plugin' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-mobile-app-pro-plugin' ) . ' </span>',
						));
					else :
						get_template_part( 'no-results', 'archive' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-md-4" id="<?php echo VW_MOBILE_STYLES; ?>sidebar">
				<?php dynamic_sidebar( 'vw-sidebar-1' ); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_footer.php'; ?>