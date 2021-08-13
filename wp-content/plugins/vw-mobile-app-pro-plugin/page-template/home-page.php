<?php
/**
 * Template Name: Home Page 
 */
?>
<?php require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_header.php';

  $section_order ='';

  $section_order = explode( ',', get_theme_mod( 'vw_mobile_app_pro_plugin_section_ordering_settings_repeater') );
  
    foreach( $section_order as $key => $value ){
     if($value !=''){ 

	   	include VW_MOBILE_APP_PRO_PLUGIN_PATH. '/template-parts/home/section-'.$value.'.php';

        }
    }

require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/vw_footer.php';?>