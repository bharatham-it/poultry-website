<?php
    /* Social Icons */
    $wp_customize->add_section('vw_mobile_app_pro_plugin_social_icons',array(
        'title' => __('Social Icons','vw-mobile-app-pro-plugin'),
        'description'   => __('Add social Icons details Here','vw-mobile-app-pro-plugin'),
        'panel' => 'vw_mobile_app_pro_plugin_panel_id',
    ));

    //Social Icons Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_socialicons_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_socialicons_option',
      array(
      'label' => __('Social Icons Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_social_icons'
    )));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_headertwitter',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_mobile_app_pro_plugin_headertwitter',array(
        'label' => __('Add twitter link','vw-mobile-app-pro-plugin'),
        'section'   => 'vw_mobile_app_pro_plugin_social_icons',
        'setting'   => 'vw_mobile_app_pro_plugin_headertwitter',
        'type'      => 'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_headerpinterest',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_mobile_app_pro_plugin_headerpinterest',array(
        'label' => __('Add pinterest link','vw-mobile-app-pro-plugin'),
        'section'   => 'vw_mobile_app_pro_plugin_social_icons',
        'setting'   => 'vw_mobile_app_pro_plugin_headerpinterest',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_headerfacebook',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_mobile_app_pro_plugin_headerfacebook',array(
        'label' => __('Add facebook link','vw-mobile-app-pro-plugin'),
        'section'   => 'vw_mobile_app_pro_plugin_social_icons',
        'setting'   => 'vw_mobile_app_pro_plugin_headerfacebook',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_headeryoutube',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_mobile_app_pro_plugin_headeryoutube',array(
        'label' => __('Add Youtube link','vw-mobile-app-pro-plugin'),
        'section'   => 'vw_mobile_app_pro_plugin_social_icons',
        'setting'   => 'vw_mobile_app_pro_plugin_headeryoutube',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_headerinstagram',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_mobile_app_pro_plugin_headerinstagram',array(
        'label' => __('Add Instagram link','vw-mobile-app-pro-plugin'),
        'section'   => 'vw_mobile_app_pro_plugin_social_icons',
        'setting'   => 'vw_mobile_app_pro_plugin_headerinstagram',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_headerlinkedin',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_mobile_app_pro_plugin_headerlinkedin',array(
        'label' => __('Add Linkedin link','vw-mobile-app-pro-plugin'),
        'section'   => 'vw_mobile_app_pro_plugin_social_icons',
        'setting'   => 'vw_mobile_app_pro_plugin_headerlinkedin',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_headertumblric',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_mobile_app_pro_plugin_headertumblric',array(
        'label' => __('Add Tumblr link','vw-mobile-app-pro-plugin'),
        'section'   => 'vw_mobile_app_pro_plugin_social_icons',
        'setting'   => 'vw_mobile_app_pro_plugin_headertumblric',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_headergoogleplus',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_mobile_app_pro_plugin_headergoogleplus',array(
        'label' => __('Add GooglePlus link','vw-mobile-app-pro-plugin'),
        'section'   => 'vw_mobile_app_pro_plugin_social_icons',
        'setting'   => 'vw_mobile_app_pro_plugin_headergoogleplus',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_headerflickr',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_mobile_app_pro_plugin_headerflickr',array(
        'label' => __('Add Flickr link','vw-mobile-app-pro-plugin'),
        'section'   => 'vw_mobile_app_pro_plugin_social_icons',
        'setting'   => 'vw_mobile_app_pro_plugin_headerflickr',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_headervk',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('vw_mobile_app_pro_plugin_headervk',array(
        'label' => __('Add VK link','vw-mobile-app-pro-plugin'),
        'section'   => 'vw_mobile_app_pro_plugin_social_icons',
        'setting'   => 'vw_mobile_app_pro_plugin_headervk',
        'type'  => 'text'
    ));
   
?>