<div class="menubar m-0 mt-md-0">
  <div class="container right_menu">
    <div class="innermenubox ">
      <div class="toggle-nav mobile-menu">
        <span onclick="openNav()"><i class="fas fa-bars"></i></span>
      </div>
      <div id="<?php echo VW_MOBILE_STYLES; ?>mySidenav" class="<?php echo VW_MOBILE_STYLES; ?>nav <?php echo VW_MOBILE_STYLES; ?>sidenav">
        <nav id="<?php echo VW_MOBILE_STYLES; ?>site-navigation" class="<?php echo VW_MOBILE_STYLES; ?>main-navigation">
          <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="closeNav()"><i class="fas fa-times"></i></a>
          <?php 
            wp_nav_menu( array( 
              'theme_location' => 'vw_primary_menu',
              'container_class' => 'menu clearfix' ,
              'menu_class' => 'clearfix',
              'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
              'fallback_cb' => 'wp_page_menu',
            ) ); 
          ?>
        </nav><!-- #site-navigation -->
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>