<?php
/**
 * The Template for displaying all single posts.
 *
 * @package vw-mobile-app-pro-plugin
 */
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_header.php';
require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/template-parts/banner.php'; ?>
<div class="container">
	<div class="row">
		<div class="content_page col-md-8">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="content_boxes">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="feature-box">
						<img src="<?php the_post_thumbnail_url( 'full' ); ?>">
					</div>
				<?php } ?>
				<div class="metabox">
					<?php if ( get_theme_mod('vw_mobile_app_pro_plugin_toggle_date',true) == "1" ) { ?>
					<span class="entry-date"><?php echo esc_html( get_the_date() ); ?></span>
					<?php } ?>
					
					<?php if ( get_theme_mod('vw_mobile_app_pro_plugin_toggle_auther',true) == "1" ) { ?>
					<span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
					<?php } ?>
					
					<?php if ( get_theme_mod('vw_mobile_app_pro_plugin_toggle_comments',true) == "1" ) { ?>
					<span class="entry-comments"><?php comments_number( __( '0 Comments','vw-mobile-app-pro-plugin' ), __( '0 Comments','vw-mobile-app-pro-plugin' ), __( '0 % Comments','vw-mobile-app-pro-plugin' ) ); ?></span>
					<?php } ?>
					
				</div>
				<p><?php the_content();?></p>

				<?php if ( get_theme_mod('vw_mobile_app_pro_plugin_toggle_sharing',true) == "1" ) { ?>
				<?php do_action('vw_mobile_app_pro_plugin_before_blog_sharing'); ?>
				<div class="share_icon row p-0 m-0"> 
                    <p class="socila_share col-md-6 p-0">
                    	<b><?php esc_html_e('Share: ','vw-mobile-app-pro-plugin'); ?></b><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    	<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php the_title(); ?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    	<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                    	<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php echo the_title(); ?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                	</p>
                    <p class="col-md-6 post_tag">
                    	<?php
                        if( $tags = get_the_tags() ) {
                            echo '<span class="meta-sep"></span>';
                            foreach( $tags as $tag ) {
                              $sep = ( $tag === end( $tags ) ) ? '' : ' ';
                              echo '<a href="' . esc_url(get_term_link( $tag, $tag->taxonomy )) . '">#' . esc_html($tag->name) . '</a>' . esc_html($sep);
                            }
	                    } ?>
	                </p>
                </div>
                <?php } ?>
                <div class="post_ctg font-weight-bold"><span><?php esc_html_e('Categories: ','vw-mobile-app-pro-plugin'); ?></span><?php the_category();?></div>
				</div>
				<?php // If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) {
					comments_template();
				}?>
				<div class="clearfix"></div>
			<?php the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'vw-mobile-app-pro-plugin' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'vw-mobile-app-pro-plugin' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'vw-mobile-app-pro-plugin' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'vw-mobile-app-pro-plugin' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			endwhile; // end of the loop. ?>
		</div>
		<div class="col-md-4" id="<?php echo VW_MOBILE_STYLES; ?>sidebar">
          <?php dynamic_sidebar('vw-sidebar-1'); ?>
        </div>
		<div class="clearfix"></div>
	</div>
</div>
<?php require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_footer.php'; ?>