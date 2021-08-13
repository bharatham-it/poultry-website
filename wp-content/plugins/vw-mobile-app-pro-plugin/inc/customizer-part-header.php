<?php
	// Header Section

	$wp_customize->add_section('vw_mobile_app_pro_plugin_header_section',array(
		'title'	=> __('Header','vw-mobile-app-pro-plugin'),
		'description'	=> __('Header Settings','vw-mobile-app-pro-plugin'),
		'priority'	=> null,
		'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));

	//Section Ordering  option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_sectionordering_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_sectionordering_option',
      array(
      'label' => __('Section Ordering Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_section_ordering_settings'
    )));

	//Section Ordering 
	$wp_customize->add_section('vw_mobile_app_pro_plugin_section_ordering_settings',array(
	  'title' => __('Section Ordering','vw-mobile-app-pro-plugin'),
	  'description'=> __('Section Ordering.','vw-mobile-app-pro-plugin'),
	  'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));
	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_section_ordering_settings',
      array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'sanitize_text_field'
      )
  	);

  	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_section_ordering_settings_repeater',
	  array(
	    'default' => '',
	    'transport' => 'refresh',
	    'sanitize_callback' => 'sanitize_text_field'
	  )
	);
	$wp_customize->add_control( new vw_mobile_app_pro_plugin_Repeater_Custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_section_ordering_settings_repeater',
	  array(
	    'label' => __( 'Section Reordering' ),
	    'section' => 'vw_mobile_app_pro_plugin_section_ordering_settings',
	    'button_labels' => array(
	      'add' => __( 'Add Row' ), // Optional. Button label for Add button. Default: Add
	    )
	  )
	) );

	//Direct Selector
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
       'selector' => '#header .logo',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_blogname',
    ));

    //Header color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_headercolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_headercolor_option',
      array(
      'label' => __('Header color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_header_section'
    )));

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_header_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_header_title_color', array(
		'label' => __('Header Main title Color and subtitle color', 'vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_header_section',
		'settings' => 'vw_mobile_app_pro_plugin_header_title_color',
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_header_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_mobile_app_pro_plugin_header_title_font_family', array(
	    'section'  => 'vw_mobile_app_pro_plugin_header_section',
	    'label'    => __('Header Main title Font family','vw-mobile-app-pro-plugin'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_headerhomebg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_headerhomebg_color', array(
		'label' => __('Header Background Color for inner pages / On scroll', 'vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_header_section',
		'settings' => 'vw_mobile_app_pro_plugin_headerhomebg_color',
	)));

	//Header Menu color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_headermenucolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_headermenucolor_option',
      array(
      'label' => __('Header Menu color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_header_section'
    )));

	// This is Header Menu Color picker setting
	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_headermenu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_headermenu_color', array(
		'label' => __('Menu Item Color', 'vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_header_section',
		'settings' => 'vw_mobile_app_pro_plugin_headermenu_color',
	)));
	//This is Header Menu FontFamily picker setting
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_headermenu_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_mobile_app_pro_plugin_headermenu_font_family', array(
	    'section'  => 'vw_mobile_app_pro_plugin_header_section',
	    'label'    => __( 'Menu Item Fonts','vw-mobile-app-pro-plugin'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_header_menuhovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_header_menuhovercolor', array(
		'label' => __('Menu Item Hover Color', 'vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_header_section',
		'settings' => 'vw_mobile_app_pro_plugin_header_menuhovercolor',
	)));
	
	// This is Nav Dropdown Background Color picker setting
	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_dropdownbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_dropdownbg_color', array(
		'label' => __('Menu DropDown Background Color', 'vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_header_section',
		'settings' => 'vw_mobile_app_pro_plugin_dropdownbg_color',
	)));

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_dropdownbg_itemcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_dropdownbg_itemcolor', array(
		'label' => __('Menu DropDown Item Color', 'vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_header_section',
		'settings' => 'vw_mobile_app_pro_plugin_dropdownbg_itemcolor',
	)));

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_dropdownbg_item_hovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_dropdownbg_item_hovercolor', array(
		'label' => __('Menu DropDown Item Hover Color', 'vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_header_section',
		'settings' => 'vw_mobile_app_pro_plugin_dropdownbg_item_hovercolor',
	)));

	//Responsive Menu color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_responsivemenucolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_responsivemenucolor_option',
      array(
      'label' => __('Responsive Menu color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_header_section'
    )));
	
	//In Responsive
	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_dropdownbg_responsivecolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_dropdownbg_responsivecolor', array(
		'label' => __('Responsive Menu Background Color', 'vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_header_section',
		'settings' => 'vw_mobile_app_pro_plugin_dropdownbg_responsivecolor',
	)));
	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_headermenu_responsive_item_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_headermenu_responsive_item_color', array(
		'label' => __('Responsive Menu item Color', 'vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_header_section',
		'settings' => 'vw_mobile_app_pro_plugin_headermenu_responsive_item_color',
	)));
?>