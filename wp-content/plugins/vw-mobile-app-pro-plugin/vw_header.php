<?php
/**
 * The Header for our theme.
 *
 * @package vw-mobile-app-pro-plugin
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header id="masthead" class="site-header">
    <div id="header">
      <?php do_action( 'vw_mobile_app_pro_plugin_before_header' ); ?>
      <?php require_once VW_MOBILE_APP_PRO_PLUGIN_EXT_DIR.'template-parts/header/content-header.php'; ?>
    </div>
    <div class="clearfix"></div>

  </header>