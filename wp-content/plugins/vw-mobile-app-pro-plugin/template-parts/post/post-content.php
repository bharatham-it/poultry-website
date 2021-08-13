<div class="col-md-6 col-sm-6">
  <div class="postbox">
    <div class="postpic">
      <?php if (has_post_thumbnail()){ ?>
        <?php the_post_thumbnail(); ?>
      <?php } ?>
      <?php if ( get_theme_mod('vw_mobile_app_pro_plugin_toggle_post_date',true) == "1" ) { ?>
        <div class="posticon-1">
          <div class="date_div">
            <span class="entry-date price pull-right"><?php the_time(get_option('date_format')); ?></span>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="postbox-content text-left">
      <h4 class="posttitle text-left"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
      <div class="posttext mt-3"><?php $excerpt = get_the_excerpt(); echo esc_html(vw_mobile_app_pro_plugin_string_limit_words($excerpt,30)); ?></div>
      <?php if ( get_theme_mod('vw_mobile_app_pro_plugin_toggle_post_meta',true) == "1" ) { ?>
        <ul class="meta_listing">
          <li class="auther mr-3"><i class="fas fa-user"></i><?php echo esc_html( the_author() ); ?></li>
          <li class="read_more"><a class="theme_orange_button" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('vw_mobile_app_pro_plugin_latestpost_read_more')); ?></a></li>
          <li class="ml-3"><i class="fas fa-comments"></i><?php comments_number( __('no comments','vw-mobile-app-pro-plugin'), __('no comments','vw-mobile-app-pro-plugin'), __('% comments','vw-mobile-app-pro-plugin') ); ?></li>
        </ul>
      <?php } ?>
    </div>
  </div>
</div>
