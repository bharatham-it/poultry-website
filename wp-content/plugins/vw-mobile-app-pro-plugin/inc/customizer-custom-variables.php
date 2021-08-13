<?php
  //General Color Pallete
  $wp_customize->add_section('vw_mobile_app_pro_plugin_color_pallette',array(
      'title' => __('Typography / General settings','vw-mobile-app-pro-plugin'),
      'description'=> __('Typography settings','vw-mobile-app-pro-plugin'),
      'panel' => 'vw_mobile_app_pro_plugin_panel_id',
  ));

  //Boxed or Full Width Layout separator option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_radio_boxed_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_radio_boxed_option',
      array(
      'label' => __('Box Width Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette'
    )));

  $wp_customize->add_setting('vw_mobile_app_pro_plugin_radio_boxed_full_layout',
      array(
        'default' => 'full-Width',
        'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
  ));
  $wp_customize->add_control('vw_mobile_app_pro_plugin_radio_boxed_full_layout',
      array(
        'type' => 'radio',
        'label' => __('Choose Boxed or Full Width Layout', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_color_pallette',
        'choices' => array(
        'full-Width' => __('Full Width', 'vw-mobile-app-pro-plugin'),
        'boxed' => __('Boxed', 'vw-mobile-app-pro-plugin')
      ),
  ));

  $wp_customize->add_setting('vw_mobile_app_pro_plugin_radio_boxed_full_layout_value',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_mobile_app_pro_plugin_radio_boxed_full_layout_value',array(
      'label' => __('Add Boxed layout Width Here','vw-mobile-app-pro-plugin'),
      'description' => __('Boxed width is always set more than 1140px.','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette',
      'setting' => 'vw_mobile_app_pro_plugin_radio_boxed_full_layout_value',
      'type'    => 'text'
    )
  );

  //Body separator option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_body_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_body_option',
      array(
      'label' => __('Body Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette'
    )));

  //This is Button Text FontFamily picker setting
  $wp_customize->add_setting('vw_mobile_app_pro_plugin_body_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_mobile_app_pro_plugin_body_font_family', array(
      'section'  => 'vw_mobile_app_pro_plugin_color_pallette',
      'label'    => __( 'Body Font family','vw-mobile-app-pro-plugin'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_mobile_app_pro_plugin_body_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_mobile_app_pro_plugin_body_font_size',array(
      'label' => __('Font size in px','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette',
      'setting' => 'vw_mobile_app_pro_plugin_body_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_body_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_body_color', array(
    'label' => __('Body color', 'vw-mobile-app-pro-plugin'),
    'section' => 'vw_mobile_app_pro_plugin_color_pallette',
    'settings' => 'vw_mobile_app_pro_plugin_body_color',
  )));

  //H1 Heading option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_h1_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_h1_option',
      array(
      'label' => __('H1 Heading Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette'
    )));

  $wp_customize->add_setting('vw_mobile_app_pro_plugin_h1_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_mobile_app_pro_plugin_h1_font_family', array(
      'section'  => 'vw_mobile_app_pro_plugin_color_pallette',
      'label'    => __( 'H1','vw-mobile-app-pro-plugin'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_mobile_app_pro_plugin_h1_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_mobile_app_pro_plugin_h1_font_size',array(
      'label' => __('H1 font size in px','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette',
      'setting' => 'vw_mobile_app_pro_plugin_h1_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_h1_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_h1_color', array(
    'label' => __('H1 color', 'vw-mobile-app-pro-plugin'),
    'section' => 'vw_mobile_app_pro_plugin_color_pallette',
    'settings' => 'vw_mobile_app_pro_plugin_h1_color',
  )));

  //H2 Heading option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_h2_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_h2_option',
      array(
      'label' => __('H2 Heading Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette'
    )));

  $wp_customize->add_setting('vw_mobile_app_pro_plugin_h2_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_mobile_app_pro_plugin_h2_font_family', array(
      'section'  => 'vw_mobile_app_pro_plugin_color_pallette',
      'label'    => __( 'H2','vw-mobile-app-pro-plugin'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_mobile_app_pro_plugin_h2_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_mobile_app_pro_plugin_h2_font_size',array(
      'label' => __('H2 font size in px','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette',
      'setting' => 'vw_mobile_app_pro_plugin_h2_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_h2_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_h2_color', array(
    'label' => __('H2 color', 'vw-mobile-app-pro-plugin'),
    'section' => 'vw_mobile_app_pro_plugin_color_pallette',
    'settings' => 'vw_mobile_app_pro_plugin_h2_color',
  )));

  //H3 Heading option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_h3_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_h3_option',
      array(
      'label' => __('H3 Heading Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette'
    )));

  $wp_customize->add_setting('vw_mobile_app_pro_plugin_h3_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_mobile_app_pro_plugin_h3_font_family', array(
      'section'  => 'vw_mobile_app_pro_plugin_color_pallette',
      'label'    => __( 'H3','vw-mobile-app-pro-plugin'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_mobile_app_pro_plugin_h3_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_mobile_app_pro_plugin_h3_font_size',array(
      'label' => __('H3 font size in px','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette',
      'setting' => 'vw_mobile_app_pro_plugin_h3_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_h3_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_h3_color', array(
    'label' => __('H3 color', 'vw-mobile-app-pro-plugin'),
    'section' => 'vw_mobile_app_pro_plugin_color_pallette',
    'settings' => 'vw_mobile_app_pro_plugin_h3_color',
  )));

  //H4 Heading option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_h4_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_h4_option',
      array(
      'label' => __('H4 Heading Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette'
    )));

  $wp_customize->add_setting('vw_mobile_app_pro_plugin_h4_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_mobile_app_pro_plugin_h4_font_family', array(
      'section'  => 'vw_mobile_app_pro_plugin_color_pallette',
      'label'    => __( 'H4','vw-mobile-app-pro-plugin'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_mobile_app_pro_plugin_h4_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_mobile_app_pro_plugin_h4_font_size',array(
      'label' => __('H4 font size in px','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette',
      'setting' => 'vw_mobile_app_pro_plugin_h4_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_h4_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_h4_color', array(
    'label' => __('H4 color', 'vw-mobile-app-pro-plugin'),
    'section' => 'vw_mobile_app_pro_plugin_color_pallette',
    'settings' => 'vw_mobile_app_pro_plugin_h4_color',
  )));

  //H5 Heading option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_h5_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_h5_option',
      array(
      'label' => __('H5 Heading Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette'
    )));

  $wp_customize->add_setting('vw_mobile_app_pro_plugin_h5_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_mobile_app_pro_plugin_h5_font_family', array(
      'section'  => 'vw_mobile_app_pro_plugin_color_pallette',
      'label'    => __( 'H5','vw-mobile-app-pro-plugin'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_mobile_app_pro_plugin_h5_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_mobile_app_pro_plugin_h5_font_size',array(
      'label' => __('H5 font size in px','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette',
      'setting' => 'vw_mobile_app_pro_plugin_h5_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_h5_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_h5_color', array(
    'label' => __('H5 color', 'vw-mobile-app-pro-plugin'),
    'section' => 'vw_mobile_app_pro_plugin_color_pallette',
    'settings' => 'vw_mobile_app_pro_plugin_h5_color',
  )));

  //H6 Heading option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_h6_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_h6_option',
      array(
      'label' => __('H6 Heading Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette'
    )));

  $wp_customize->add_setting('vw_mobile_app_pro_plugin_h6_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_mobile_app_pro_plugin_h6_font_family', array(
      'section'  => 'vw_mobile_app_pro_plugin_color_pallette',
      'label'    => __( 'H6','vw-mobile-app-pro-plugin'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_mobile_app_pro_plugin_h6_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_mobile_app_pro_plugin_h6_font_size',array(
      'label' => __('H6 font size in px','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette',
      'setting' => 'vw_mobile_app_pro_plugin_h6_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_h6_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_h6_color', array(
    'label' => __('H6 color', 'vw-mobile-app-pro-plugin'),
    'section' => 'vw_mobile_app_pro_plugin_color_pallette',
    'settings' => 'vw_mobile_app_pro_plugin_h6_color',
  )));

  //Paragraph option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_para_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_para_option',
      array(
      'label' => __('Paragraph Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette'
    )));

  //paragarph font family
  $wp_customize->add_setting('vw_mobile_app_pro_plugin_paragarpah_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_mobile_app_pro_plugin_paragarpah_font_family', array(
      'section'  => 'vw_mobile_app_pro_plugin_color_pallette',
      'label'    => __( 'Paragraph','vw-mobile-app-pro-plugin'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_mobile_app_pro_plugin_para_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_mobile_app_pro_plugin_para_font_size',array(
      'label' => __('Paragraph font size in px','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette',
      'setting' => 'vw_mobile_app_pro_plugin_para_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_para_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_para_color', array(
      'label' => __('Para color', 'vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette',
      'settings' => 'vw_mobile_app_pro_plugin_para_color',
    )
  ));

  //Highlight First color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_highlightfirst_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_highlightfirst_option',
      array(
      'label' => __('Highlight First color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette'
    )));

  $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_hi_first_color', array(
    'default' => '#fc6352',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_hi_first_color', array(
    'label' => __('Highlight First Color  (It will change it globally)', 'vw-mobile-app-pro-plugin'),
    'section' => 'vw_mobile_app_pro_plugin_color_pallette',
    'settings' => 'vw_mobile_app_pro_plugin_hi_first_color',
  )));

  //Highlight Second color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_highlightsecond_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_highlightsecond_option',
      array(
      'label' => __('Highlight Second color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette'
    )));

  $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_hi_second_color', array(
    'default' => '#52565b',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_hi_second_color', array(
    'label' => __('Highlight Second Color (It will change it globally)', 'vw-mobile-app-pro-plugin'),
    'section' => 'vw_mobile_app_pro_plugin_color_pallette',
    'settings' => 'vw_mobile_app_pro_plugin_hi_second_color',
  )));

  //Highlight Third color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_highlightthird_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_highlightthird_option',
      array(
      'label' => __('Highlight Third color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_color_pallette'
    )));

  $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_hi_third_color', array(
    'default' => '#f94b5b',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_hi_third_color', array(
    'label' => __('Highlight Third Color (It will change it globally)', 'vw-mobile-app-pro-plugin'),
    'section' => 'vw_mobile_app_pro_plugin_color_pallette',
    'settings' => 'vw_mobile_app_pro_plugin_hi_third_color',
  )));

?>