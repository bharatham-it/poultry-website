<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package vw-mobile-app-pro-plugin
 */
get_header(); ?>
<div class="title-box">
	<div class="container">
		<h1><?php the_title();?></h1>	
	</div>
</div>
<div class="content_page">
	<div class="container">
		<div class="page-content">
				<h3><span class="heading3"><?php esc_html_e( '404 Not Found', 'vw-mobile-app-pro-plugin' ); ?></span></h3>
				<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn &hellip; Don\'t worry &hellip; it happens to the best of us.', 'vw-mobile-app-pro-plugin' ); ?></p>  
				<div class="read-moresec">
					<div><a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right">
					<?php esc_html_e( 'Back to Home Page', 'vw-mobile-app-pro-plugin' ); ?></a></div>
					</div>			
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php get_footer(); ?>