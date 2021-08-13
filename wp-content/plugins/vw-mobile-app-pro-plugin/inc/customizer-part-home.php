<?php
	/*-----------------------------------Main Banner -------------------------------------*/

	$wp_customize->add_section('vw_mobile_app_pro_plugin_main_banner_section',array(
		'title'	=> __('Main Banner','vw-mobile-app-pro-plugin'),
		'description'	=> __('Add Main Banner content here.','vw-mobile-app-pro-plugin'),
		'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));

  //Main Banner  option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_mainbanner_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_mainbanner_option',
      array(
      'label' => __('Main Banner Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_main_banner_section'
    )));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_radio_main_banner_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_mobile_app_pro_plugin_radio_main_banner_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-mobile-app-pro-plugin'),
	        'section' => 'vw_mobile_app_pro_plugin_main_banner_section',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-mobile-app-pro-plugin'),
	            'Disable' => __('Disable', 'vw-mobile-app-pro-plugin')
	        ),
	    )
    );

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_main_banner_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_main_banner_bgcolor',array(
		'label' => __('Background Color', 'vw-mobile-app-pro-plugin'),

		'section' => 'vw_mobile_app_pro_plugin_main_banner_section',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-mobile-app-pro-plugin'),
		'settings' => 'vw_mobile_app_pro_plugin_main_banner_bgcolor',
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_main_banner_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_mobile_app_pro_plugin_main_banner_bgimage',
               array(
                   'label' => __('Background Image(Image Resolution:1600*753)','vw-mobile-app-pro-plugin'),
                   'section' => 'vw_mobile_app_pro_plugin_main_banner_section',
                   'settings' => 'vw_mobile_app_pro_plugin_main_banner_bgimage',
    )));

    //Direct Selector
	$wp_customize->selective_refresh->add_partial( 'vw_mobile_app_pro_plugin_main_banner_section_title', array(
       'selector' => '.banner_conent h2',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_vw_mobile_app_pro_plugin_main_banner_section_title',
    ));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_main_banner_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_main_banner_section_title',array(
		'label'	=> __('Section Title','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_main_banner_section',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_main_banner_section_subtitle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_main_banner_section_subtitle',array(
		'label'	=> __('Sub text','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_main_banner_section',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_main_banner_section_button1',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_main_banner_section_button1',array(
		'label'	=> __('Button 1 Text','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_main_banner_section',
		'type'	=> 'text'
	));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_main_banner_section_button1_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_main_banner_section_button1_link',array(
		'label'	=> __('Button 1 Link','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_main_banner_section',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_main_banner_section_button2',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_main_banner_section_button2',array(
		'label'	=> __('Button 2 Text','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_main_banner_section',
		'type'	=> 'text'
	));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_main_banner_section_button2_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_main_banner_section_button2_link',array(
		'label'	=> __('Button 2 Link','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_main_banner_section',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_main_banner_rightimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_mobile_app_pro_plugin_main_banner_rightimage',
               array(
                   'label' => __('Right Side Image','vw-mobile-app-pro-plugin'),
                   'section' => 'vw_mobile_app_pro_plugin_main_banner_section',
                   'settings' => 'vw_mobile_app_pro_plugin_main_banner_rightimage',
    )));

    //Main Banner color  option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_mainbannercolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_mainbannercolor_option',
      array(
      'label' => __('Main Banner Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_main_banner_section'
    )));

    //Section Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_main_banner_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_main_banner_heading_color', array(
        'label' => __('Section Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_main_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_main_banner_heading_color',
    )));

    //Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_main_banner_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_main_banner_heading_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_main_banner_section',
        'label'    => __( 'Section Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	//Section Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_main_banner_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_main_banner_text_color', array(
        'label' => __('Section Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_main_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_main_banner_text_color',
    )));

    //Section Text FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_main_banner_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_main_banner_text_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_main_banner_section',
        'label'    => __( 'Section Text Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Section Button FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_main_banner_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_main_banner_button_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_main_banner_section',
        'label'    => __( 'Section Button Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Section Button Border Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_main_banner_button_border_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_main_banner_button_border_color', array(
        'label' => __('Button Border Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_main_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_main_banner_button_border_color',
    )));
    
    //Section Button1 Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_main_banner_button_one_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_main_banner_button_one_color', array(
        'label' => __('Button 1 Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_main_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_main_banner_button_one_color',
    )));
     //Section white Button Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_main_banner_button_two_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_main_banner_button_two_color', array(
        'label' => __('Button 2 Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_main_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_main_banner_button_two_color',
    )));

    //Section Button1 Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_main_banner_button_one_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_main_banner_button_one_bgcolor', array(
        'label' => __('Button 1 Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_main_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_main_banner_button_one_bgcolor',
    )));
     //Section white Button Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_main_banner_button_two_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_main_banner_button_two_bgcolor', array(
        'label' => __('Button 2 Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_main_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_main_banner_button_two_bgcolor',
    )));

    //Section Button1 Hover Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_main_banner_button_one_hvcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_main_banner_button_one_hvcolor', array(
        'label' => __('Button 1 Hover Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_main_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_main_banner_button_one_hvcolor',
    )));
     //Section white Button Hover Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_main_banner_button_two_hvcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_main_banner_button_two_hvcolor', array(
        'label' => __('Button 2 Hover Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_main_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_main_banner_button_two_hvcolor',
    )));
   
	/*------------------------------------About section -------------------------------------*/

    $wp_customize->add_section('vw_mobile_app_pro_plugin_about_sec',array(
		'title'	=> __('About Us','vw-mobile-app-pro-plugin'),
		'description'	=> __('Add About Us content here.','vw-mobile-app-pro-plugin'),
		'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));

  //About Us option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_aboutus_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_aboutus_option',
      array(
      'label' => __('About Us Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_about_sec'
    )));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_radio_about_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_mobile_app_pro_plugin_radio_about_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-mobile-app-pro-plugin'),
	        'section' => 'vw_mobile_app_pro_plugin_about_sec',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-mobile-app-pro-plugin'),
	            'Disable' => __('Disable', 'vw-mobile-app-pro-plugin')
	        ),
	    )
    );

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_about_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_about_bgcolor',array(
		'label' => __('Background Color', 'vw-mobile-app-pro-plugin'),

		'section' => 'vw_mobile_app_pro_plugin_about_sec',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-mobile-app-pro-plugin'),
		'settings' => 'vw_mobile_app_pro_plugin_about_bgcolor',
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_about_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_mobile_app_pro_plugin_about_bgimage',
               array(
                   'label' => __('Background Image(Image Resolution:1520*420)','vw-mobile-app-pro-plugin'),
                   'section' => 'vw_mobile_app_pro_plugin_about_sec',
                   'settings' => 'vw_mobile_app_pro_plugin_about_bgimage',
    )));

    //Direct Selector
	$wp_customize->selective_refresh->add_partial( 'vw_mobile_app_pro_plugin_about_section_title', array(
       'selector' => '#about h3',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_vw_mobile_app_pro_plugin_about_section_title',
    ));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_about_section_title',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_about_section_title',array(
			'label'	=> __('Section Title','vw-mobile-app-pro-plugin'),
			'section'	=> 'vw_mobile_app_pro_plugin_about_sec',
			'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_about_section_subtitle',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_about_section_subtitle',array(
			'label'	=> __('Sub text','vw-mobile-app-pro-plugin'),
			'section'	=> 'vw_mobile_app_pro_plugin_about_sec',
			'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_about_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_about_number',array(
		'label'	=> __('Number of record to show','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_about_sec',
		'type'		=> 'number'
	));
	$count =  get_theme_mod('vw_mobile_app_pro_plugin_about_number', 3);

	for($i=1; $i<=$count; $i++) {

		$wp_customize->add_setting('vw_mobile_app_pro_plugin_about_sec_icon'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_about_sec_icon'.$i,array(
			'label'	=> __('Add Icon Class','vw-mobile-app-pro-plugin'),
			'section'	=> 'vw_mobile_app_pro_plugin_about_sec',
			'type'	=> 'text'
		));

		$wp_customize->add_setting('vw_mobile_app_pro_plugin_about_icon_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_mobile_app_pro_plugin_about_icon_image'.$i,array(
	        'label' => __('Icon Image(Image Resolution 85*85)If you want to add image first remove the icon','vw-mobile-app-pro-plugin'),
	        'section' => 'vw_mobile_app_pro_plugin_about_sec',
	        'settings' => 'vw_mobile_app_pro_plugin_about_icon_image'.$i
		)));

		$wp_customize->add_setting('vw_mobile_app_pro_plugin_about_sec_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_about_sec_title'.$i,array(
			'label'	=> __('Icon Title','vw-mobile-app-pro-plugin'),
			'section'	=> 'vw_mobile_app_pro_plugin_about_sec',
			'type'	=> 'text'
		));
        
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_about_sec_details'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_about_sec_details'.$i,array(
			'label'	=> __('Icon Content','vw-mobile-app-pro-plugin'),
			'section'	=> 'vw_mobile_app_pro_plugin_about_sec',
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_about_sec_readmore'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_about_sec_readmore'.$i,array(
			'label'	=> __('Read More Text','vw-mobile-app-pro-plugin'),
			'section'	=> 'vw_mobile_app_pro_plugin_about_sec',
			'type'	=> 'text'
		));
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_about_sec_readmore_link'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_about_sec_readmore_link'.$i,array(
			'label'	=> __('Read More Link','vw-mobile-app-pro-plugin'),
			'section'	=> 'vw_mobile_app_pro_plugin_about_sec',
			'type'	=> 'text'
		));
	}

  //About Us color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_aboutuscolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_aboutuscolor_option',
      array(
      'label' => __('About Us Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_about_sec'
    )));

	//Section Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_about_sec_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_about_sec_heading_color', array(
        'label' => __('Section Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_about_sec',
        'settings' => 'vw_mobile_app_pro_plugin_about_sec_heading_color',
    )));

    //Section Border Color
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_about_sec_heading_border', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_about_sec_heading_border', array(
        'label' => __('Section Border Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_about_sec',
        'settings' => 'vw_mobile_app_pro_plugin_about_sec_heading_border',
    )));

    //Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_about_sec_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_about_sec_heading_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_about_sec',
        'label'    => __( 'Section Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	//Section Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_about_sec_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_about_sec_text_color', array(
        'label' => __('Section Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_about_sec',
        'settings' => 'vw_mobile_app_pro_plugin_about_sec_text_color',
    )));

    //Section Text FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_about_sec_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_about_sec_text_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_about_sec',
        'label'    => __( 'Section Text Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Section Icon Title Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_about_sec_icon_title_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_about_sec_icon_title_color', array(
        'label' => __('Icon Title Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_about_sec',
        'settings' => 'vw_mobile_app_pro_plugin_about_sec_icon_title_color',
    )));

    //Section Icon Title FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_about_sec_icon_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_about_sec_icon_title_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_about_sec',
        'label'    => __( 'Icon Title Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Section Icon Title Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_about_sec_icon_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_about_sec_icon_text_color', array(
        'label' => __('Icon Content Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_about_sec',
        'settings' => 'vw_mobile_app_pro_plugin_about_sec_icon_text_color',
    )));

    //Section Icon Title FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_about_sec_icon_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_about_sec_icon_text_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_about_sec',
        'label'    => __( 'Icon Title Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

     //Read More Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_about_sec_read_more_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_about_sec_read_more_color', array(
        'label' => __('Read More Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_about_sec',
        'settings' => 'vw_mobile_app_pro_plugin_about_sec_read_more_color',
    )));

    //Read More FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_about_sec_read_more_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_about_sec_read_more_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_about_sec',
        'label'    => __( 'Read More Text Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	/*-----------------------------------Promo Banner -------------------------------------*/

	$wp_customize->add_section('vw_mobile_app_pro_plugin_promo_banner_section',array(
		'title'	=> __('Promo Banner','vw-mobile-app-pro-plugin'),
		'description'	=> __('Add Promo Banner content here.','vw-mobile-app-pro-plugin'),
		'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));

  //Promo Banner option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_promobanner_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_promobanner_option',
      array(
      'label' => __('Promo Banner Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_promo_banner_section'
    )));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_radio_promo_banner_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_mobile_app_pro_plugin_radio_promo_banner_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-mobile-app-pro-plugin'),
	        'section' => 'vw_mobile_app_pro_plugin_promo_banner_section',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-mobile-app-pro-plugin'),
	            'Disable' => __('Disable', 'vw-mobile-app-pro-plugin')
	        ),
	    )
    );

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_promo_banner_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_promo_banner_bgcolor',array(
		'label' => __('Section Background Color', 'vw-mobile-app-pro-plugin'),

		'section' => 'vw_mobile_app_pro_plugin_promo_banner_section',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-mobile-app-pro-plugin'),
		'settings' => 'vw_mobile_app_pro_plugin_promo_banner_bgcolor',
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_promo_banner_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_mobile_app_pro_plugin_promo_banner_bgimage',
               array(
                   'label' => __('Section Background Image','vw-mobile-app-pro-plugin'),
                   'section' => 'vw_mobile_app_pro_plugin_promo_banner_section',
                   'settings' => 'vw_mobile_app_pro_plugin_promo_banner_bgimage',
    )));

    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_promo_banner_bgcolor_inner', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_promo_banner_bgcolor_inner',array(
		'label' => __('Inner Background Color', 'vw-mobile-app-pro-plugin'),

		'section' => 'vw_mobile_app_pro_plugin_promo_banner_section',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-mobile-app-pro-plugin'),
		'settings' => 'vw_mobile_app_pro_plugin_promo_banner_bgcolor_inner',
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_promo_banner_bgimage_inner',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_mobile_app_pro_plugin_promo_banner_bgimage_inner',
               array(
                   'label' => __('Inner Background Image','vw-mobile-app-pro-plugin'),
                   'section' => 'vw_mobile_app_pro_plugin_promo_banner_section',
                   'settings' => 'vw_mobile_app_pro_plugin_promo_banner_bgimage_inner',
    )));

    //Direct Selector
	$wp_customize->selective_refresh->add_partial( 'vw_mobile_app_pro_plugin_promo_banner_section_title', array(
       'selector' => '.promo_conent h3',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_vw_mobile_app_pro_plugin_promo_banner_section_title',
    ));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_promo_banner_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_promo_banner_section_title',array(
		'label'	=> __('Banner Title','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_promo_banner_section',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_promo_banner_section_subtitle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_promo_banner_section_subtitle',array(
		'label'	=> __('Sub text','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_promo_banner_section',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_promo_banner_section_button',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_promo_banner_section_button',array(
		'label'	=> __('Button Text','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_promo_banner_section',
		'type'	=> 'text'
	));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_promo_banner_section_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_promo_banner_section_button_link',array(
		'label'	=> __('Button Link','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_promo_banner_section',
		'type'	=> 'text'
	));

  //Promo Banner color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_promobannercolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_promobannercolor_option',
      array(
      'label' => __('Promo Banner Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_promo_banner_section'
    )));

	//Section Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_promo_banner_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_promo_banner_heading_color', array(
        'label' => __('Section Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_promo_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_promo_banner_heading_color',
    )));

    //Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_promo_banner_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_promo_banner_heading_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_promo_banner_section',
        'label'    => __( 'Section Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	//Section Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_promo_banner_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_promo_banner_text_color', array(
        'label' => __('Section Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_promo_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_promo_banner_text_color',
    )));

    //Section Text FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_promo_banner_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_promo_banner_text_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_promo_banner_section',
        'label'    => __( 'Section Text Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Section Button Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_promo_banner_button_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_promo_banner_button_color', array(
        'label' => __('Button Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_promo_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_promo_banner_button_color',
    )));

    //Section Button FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_promo_banner_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_promo_banner_button_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_promo_banner_section',
        'label'    => __( 'Section Button Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    )); 

    //Section Button Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_promo_banner_button_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_promo_banner_button_bgcolor', array(
        'label' => __('Button Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_promo_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_promo_banner_button_bgcolor',
    ))); 

    //Section Button Hover Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_promo_banner_button_hover_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_promo_banner_button_hover_bgcolor', array(
        'label' => __('Button Hover Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_promo_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_promo_banner_button_hover_bgcolor',
    )));   

    //Section Button Hover Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_promo_banner_button_hover_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_promo_banner_button_hover_color', array(
        'label' => __('Button Hover Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_promo_banner_section',
        'settings' => 'vw_mobile_app_pro_plugin_promo_banner_button_hover_color',
    )));   

	/* --------------------------- Amazing Features --------------------------------*/

	$wp_customize->add_section('vw_mobile_app_pro_plugin_amazing_features_section',array(
		'title'	=> __('Amazing Features','vw-mobile-app-pro-plugin'),
		'description'	=> __('Add Amazing Features content here.','vw-mobile-app-pro-plugin'),
		'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));

  //Amazing Features Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_amazingfeatures_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_amazingfeatures_option',
      array(
      'label' => __('Amazing Features Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_amazing_features_section'
    )));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_radio_amazing_features_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_mobile_app_pro_plugin_radio_amazing_features_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-mobile-app-pro-plugin'),
	        'section' => 'vw_mobile_app_pro_plugin_amazing_features_section',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-mobile-app-pro-plugin'),
	            'Disable' => __('Disable', 'vw-mobile-app-pro-plugin')
	        ),
	    )
    );

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_amazing_features_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_amazing_features_bgcolor',array(
		'label' => __('Background Color', 'vw-mobile-app-pro-plugin'),

		'section' => 'vw_mobile_app_pro_plugin_amazing_features_section',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-mobile-app-pro-plugin'),
		'settings' => 'vw_mobile_app_pro_plugin_amazing_features_bgcolor',
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_mobile_app_pro_plugin_amazing_features_bgimage',
               array(
                   'label' => __('Background Image(Image Resolution:1600*962)','vw-mobile-app-pro-plugin'),
                   'section' => 'vw_mobile_app_pro_plugin_amazing_features_section',
                   'settings' => 'vw_mobile_app_pro_plugin_amazing_features_bgimage',
    )));

    //Direct Selector
	$wp_customize->selective_refresh->add_partial( 'vw_mobile_app_pro_plugin_amazing_features_section_title', array(
       'selector' => '.amazing-features-inner h3',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_vw_mobile_app_pro_plugin_amazing_features_section_title',
    ));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_amazing_features_section_title',array(
		'label'	=> __('Section Heading','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_amazing_features_section',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_section_subtitle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_amazing_features_section_subtitle',array(
		'label'	=> __('Sub text','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_amazing_features_section',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_box_left_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_amazing_features_box_left_number',array(
		'label'	=> __('Number of Details to show for left box','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_amazing_features_section',
		'type'		=> 'number'
	));
	$left_box =  get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_left_number');
	for($i=1; $i<=$left_box; $i++) {

		$wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_box_left_icon'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_amazing_features_box_left_icon'.$i,array(
			'label'	=> __('Icon','vw-mobile-app-pro-plugin').$i,
			'section'	=> 'vw_mobile_app_pro_plugin_amazing_features_section',
			'setting'	=> 'vw_mobile_app_pro_plugin_amazing_features_box_left_icon'.$i,
			'type'		=> 'text'
		));

		$wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_box_left_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_amazing_features_box_left_title'.$i,array(
			'label'	=> __('Title','vw-mobile-app-pro-plugin').$i,
			'section'	=> 'vw_mobile_app_pro_plugin_amazing_features_section',
			'setting'	=> 'vw_mobile_app_pro_plugin_amazing_features_box_left_title'.$i,
			'type'		=> 'text'
		));

		$wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_box_left_desc'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_amazing_features_box_left_desc'.$i,array(
			'label'	=> __('Description','vw-mobile-app-pro-plugin').$i,
			'section'	=> 'vw_mobile_app_pro_plugin_amazing_features_section',
			'setting'	=> 'vw_mobile_app_pro_plugin_amazing_features_box_left_desc'.$i,
			'type'		=> 'text'
		));
	}


	$wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_box_center_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control( $wp_customize,'vw_mobile_app_pro_plugin_amazing_features_box_center_image',array(
		    'label' => __('Center Image','vw-mobile-app-pro-plugin'),
		    'section' => 'vw_mobile_app_pro_plugin_amazing_features_section',
		    'settings' => 'vw_mobile_app_pro_plugin_amazing_features_box_center_image'
		)
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_box_right_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_amazing_features_box_right_number',array(
		'label'	=> __('Number of Details to show for right box','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_amazing_features_section',
		'type'		=> 'number'
	));
	$right_box =  get_theme_mod('vw_mobile_app_pro_plugin_amazing_features_box_right_number');
	for($i=1; $i<=$right_box; $i++) {
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_box_right_icon'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_amazing_features_box_right_icon'.$i,array(
			'label'	=> __('Icon','vw-mobile-app-pro-plugin').$i,
			'section'	=> 'vw_mobile_app_pro_plugin_amazing_features_section',
			'setting'	=> 'vw_mobile_app_pro_plugin_amazing_features_box_right_icon'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_box_right_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_amazing_features_box_right_title'.$i,array(
			'label'	=> __('Title','vw-mobile-app-pro-plugin').$i,
			'section'	=> 'vw_mobile_app_pro_plugin_amazing_features_section',
			'setting'	=> 'vw_mobile_app_pro_plugin_amazing_features_box_right_title'.$i,
			'type'		=> 'text'
		));

		$wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_box_right_desc'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_amazing_features_box_right_desc'.$i,array(
			'label'	=> __('Description','vw-mobile-app-pro-plugin').$i,
			'section'	=> 'vw_mobile_app_pro_plugin_amazing_features_section',
			'setting'	=> 'vw_mobile_app_pro_plugin_amazing_features_box_right_desc'.$i,
			'type'		=> 'text'
		));
	}

  //Amazing Features Color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_amazingfeaturescolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_amazingfeaturescolor_option',
      array(
      'label' => __('Amazing Features Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_amazing_features_section'
    )));

	//Section Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_amazing_features_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_amazing_features_heading_color', array(
        'label' => __('Section Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_amazing_features_section',
        'settings' => 'vw_mobile_app_pro_plugin_amazing_features_heading_color',
    )));

    //Section Border Color
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_amazing_features_heading_border', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_amazing_features_heading_border', array(
        'label' => __('Section Border Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_amazing_features_section',
        'settings' => 'vw_mobile_app_pro_plugin_amazing_features_heading_border',
    )));

    //Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_heading_font',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_amazing_features_heading_font', array(
        'section'  => 'vw_mobile_app_pro_plugin_amazing_features_section',
        'label'    => __( 'Section Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Section Sub Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_amazing_features_subheading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_amazing_features_subheading_color', array(
        'label' => __('Subtitle Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_amazing_features_section',
        'settings' => 'vw_mobile_app_pro_plugin_amazing_features_subheading_color',
    )));

    //Section Sub Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_subheading_font',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_amazing_features_subheading_font', array(
        'section'  => 'vw_mobile_app_pro_plugin_amazing_features_section',
        'label'    => __( 'Subtitle Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	//Section Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_amazing_features_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_amazing_features_text_color', array(
        'label' => __('Section Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_amazing_features_section',
        'settings' => 'vw_mobile_app_pro_plugin_amazing_features_text_color',
    )));

    //Section Text FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_amazing_features_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_amazing_features_text_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_amazing_features_section',
        'label'    => __( 'Section Text Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Icon Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_amazing_features_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_amazing_features_icon_color', array(
        'label' => __('Icon Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_amazing_features_section',
        'settings' => 'vw_mobile_app_pro_plugin_amazing_features_icon_color',
    )));

    //Icon Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_amazing_features_icon_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_amazing_features_icon_bgcolor', array(
        'label' => __('Icon Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_amazing_features_section',
        'settings' => 'vw_mobile_app_pro_plugin_amazing_features_icon_bgcolor',
    )));

    //Icon Hover Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_amazing_features_icon_hvcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_amazing_features_icon_hvcolor', array(
        'label' => __('Icon Hover Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_amazing_features_section',
        'settings' => 'vw_mobile_app_pro_plugin_amazing_features_icon_hvcolor',
    )));

    //Icon Hover Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_amazing_features_icon_hover_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_amazing_features_icon_hover_bgcolor', array(
        'label' => __('Icon Hover Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_amazing_features_section',
        'settings' => 'vw_mobile_app_pro_plugin_amazing_features_icon_hover_bgcolor',
    )));


	/* --------------------------- Awesome Screenshot --------------------------------*/

	$wp_customize->add_section('vw_mobile_app_pro_plugin_awesome_screenshot_section',array(
		'title'	=> __('Awesome Screenshots','vw-mobile-app-pro-plugin'),
		'description'	=> __('Add Awesome Screenshots content here.','vw-mobile-app-pro-plugin'),
		'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));

  //Awesome Screenshot Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_awesomescreenshot_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_awesomescreenshot_option',
      array(
      'label' => __('Awesome Screenshot Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_awesome_screenshot_section'
    )));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_radio_awesome_screenshot_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_mobile_app_pro_plugin_radio_awesome_screenshot_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-mobile-app-pro-plugin'),
	        'section' => 'vw_mobile_app_pro_plugin_awesome_screenshot_section',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-mobile-app-pro-plugin'),
	            'Disable' => __('Disable', 'vw-mobile-app-pro-plugin')
	        ),
	    )
    );

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_awesome_screenshot_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_awesome_screenshot_bgcolor',array(
		'label' => __('Background Color', 'vw-mobile-app-pro-plugin'),

		'section' => 'vw_mobile_app_pro_plugin_awesome_screenshot_section',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-mobile-app-pro-plugin'),
		'settings' => 'vw_mobile_app_pro_plugin_awesome_screenshot_bgcolor',
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_awesome_screenshot_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'vw_mobile_app_pro_plugin_awesome_screenshot_bgimage',
               array(
                   'label' => __('Background Image(Image Resolution:1600*940)','vw-mobile-app-pro-plugin'),
                   'section' => 'vw_mobile_app_pro_plugin_awesome_screenshot_section',
                   'settings' => 'vw_mobile_app_pro_plugin_awesome_screenshot_bgimage',
    )));

    //Direct Selector
	$wp_customize->selective_refresh->add_partial( 'vw_mobile_app_pro_plugin_awesome_screenshot_section_title', array(
       'selector' => '#awesome_screenshot h3',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_vw_mobile_app_pro_plugin_awesome_screenshot_section_title',
    ));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_awesome_screenshot_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_awesome_screenshot_section_title',array(
		'label'	=> __('Section Title','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_awesome_screenshot_section',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_awesome_screenshot_section_subtitle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_awesome_screenshot_section_subtitle',array(
		'label'	=> __('Sub text','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_awesome_screenshot_section',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_awesome_screenshot_box_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_awesome_screenshot_box_number',array(
		'label'	=> __('Number of screenshots to show','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_awesome_screenshot_section',
		'type'		=> 'number'
	));
	$screenshot_box = get_theme_mod('vw_mobile_app_pro_plugin_awesome_screenshot_box_number');
	for($i=1; $i<=$screenshot_box; $i++) {
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_awesome_screenshot_image'.$i,array(
	        'default' => '',
	        'sanitize_callback' => 'esc_url_raw',
	    ));
	    $wp_customize->add_control(
	           new WP_Customize_Image_Control(
	               $wp_customize,
	               'vw_mobile_app_pro_plugin_awesome_screenshot_image'.$i,
	               array(
	                'label' => __('Screenshot','vw-mobile-app-pro-plugin'),
	                'section' => 'vw_mobile_app_pro_plugin_awesome_screenshot_section',
	                'settings' => 'vw_mobile_app_pro_plugin_awesome_screenshot_image'.$i,
	    )));
		
	}

   //Awesome Screenshot Color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_awesomescreenshotcolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_awesomescreenshotcolor_option',
      array(
      'label' => __('Awesome Screenshot Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_awesome_screenshot_section'
    )));

	//Section Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_awesome_screenshot_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_awesome_screenshot_heading_color', array(
        'label' => __('Section Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_awesome_screenshot_section',
        'settings' => 'vw_mobile_app_pro_plugin_awesome_screenshot_heading_color',
    )));

    //Section Border Color
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_awesome_screenshot_heading_border', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_awesome_screenshot_heading_border', array(
        'label' => __('Section Border Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_awesome_screenshot_section',
        'settings' => 'vw_mobile_app_pro_plugin_awesome_screenshot_heading_border',
    )));

    //Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_awesome_screenshot_heading_font',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_awesome_screenshot_heading_font', array(
        'section'  => 'vw_mobile_app_pro_plugin_awesome_screenshot_section',
        'label'    => __( 'Section Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Section Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_awesome_screenshot_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_awesome_screenshot_text_color', array(
        'label' => __('Section Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_awesome_screenshot_section',
        'settings' => 'vw_mobile_app_pro_plugin_awesome_screenshot_text_color',
    )));

    //Section Text FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_awesome_screenshot_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_awesome_screenshot_text_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_awesome_screenshot_section',
        'label'    => __( 'Section Text Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	/*--------------------------------- Plans Pricing --------------------------------------*/
	$wp_customize->add_section('vw_mobile_app_pro_plugin_plans_pricing',array(
		'title'	=> __('Plans and Pricing','vw-mobile-app-pro-plugin'),
		'description'	=> __('Add Plans and Pricing content here.','vw-mobile-app-pro-plugin'),
		'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));

  //Plans Pricing Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_pricingplans_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_pricingplans_option',
      array(
      'label' => __('Plans Pricing Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_plans_pricing'
    )));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_plans_pricing_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_plans_pricing_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-mobile-app-pro-plugin'),
	        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-mobile-app-pro-plugin'),
	            'Disable' => __('Disable', 'vw-mobile-app-pro-plugin')
	    ),
	));
	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_pricing_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_pricing_bgcolor',array(
		'label' => __('Background Color', 'vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-mobile-app-pro-plugin'),
		'settings' => 'vw_mobile_app_pro_plugin_plans_pricing_bgcolor',
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_plans_pricing_bgimage',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control(
	   new WP_Customize_Image_Control(
	       $wp_customize,
	       'vw_mobile_app_pro_plugin_plans_pricing_bgimage',
	       array(
	           'label' => __('Background Image (1600 x 1062)','vw-mobile-app-pro-plugin'),
	           'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
	           'settings' => 'vw_mobile_app_pro_plugin_plans_pricing_bgimage',
	)));

	//Direct Selector
	$wp_customize->selective_refresh->add_partial( 'vw_mobile_app_pro_plugin_pricing_box_section_title', array(
       'selector' => '#plans_pricing h3.head_white',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_vw_mobile_app_pro_plugin_pricing_box_section_title',
    ));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_pricing_box_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_pricing_box_section_title',array(
			'label'	=> __('Section Title','vw-mobile-app-pro-plugin'),
			'section'	=> 'vw_mobile_app_pro_plugin_plans_pricing',
			'setting'	=> 'vw_mobile_app_pro_plugin_pricing_box_section_title',
			'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_pricing_box_section_subtitle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_pricing_box_section_subtitle',array(
			'label'	=> __('Section Sub Title','vw-mobile-app-pro-plugin'),
			'section'	=> 'vw_mobile_app_pro_plugin_plans_pricing',
			'setting'	=> 'vw_mobile_app_pro_plugin_pricing_box_section_subtitle',
			'type'		=> 'text'
	));


	$wp_customize->add_setting('vw_mobile_app_pro_plugin_pricing_box_number',array(
		'default'	=> 3,
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_pricing_box_number',array(
		'label'	=> __('Number of box to show','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_plans_pricing',
		'type'		=> 'number'
	));
	$countpricing =  get_theme_mod('vw_mobile_app_pro_plugin_pricing_box_number', 3);
	for($i=1; $i<=$countpricing; $i++) {
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_pricing_box_title'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_pricing_box_title'.$i,array(
			'label'	=> __('Box Heading','vw-mobile-app-pro-plugin').$i,
			'section'	=> 'vw_mobile_app_pro_plugin_plans_pricing',
			'setting'	=> 'vw_mobile_app_pro_plugin_pricing_box_title'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_pricing_box_subtitle'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_pricing_box_subtitle'.$i,array(
			'label'	=> __('Sub Heading','vw-mobile-app-pro-plugin').$i,
			'section'	=> 'vw_mobile_app_pro_plugin_plans_pricing',
			'setting'	=> 'vw_mobile_app_pro_plugin_pricing_box_subtitle'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_pricing_box_price'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_pricing_box_price'.$i,array(
			'label'	=> __('Box Price','vw-mobile-app-pro-plugin').$i,
			'section'	=> 'vw_mobile_app_pro_plugin_plans_pricing',
			'setting'	=> 'vw_mobile_app_pro_plugin_pricing_box_price'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_pricing_box_price_base'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_pricing_box_price_base'.$i,array(
			'label'	=> __('Per/month or year','vw-mobile-app-pro-plugin').$i,
			'section'	=> 'vw_mobile_app_pro_plugin_plans_pricing',
			'setting'	=> 'vw_mobile_app_pro_plugin_pricing_box_price_base'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_pricing_text_number'.$i,array(
		'default'	=> 6,
		'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_pricing_text_number'.$i,array(
			'label'	=> __('Number of Plans to show','vw-mobile-app-pro-plugin').$i,
			'section'	=> 'vw_mobile_app_pro_plugin_plans_pricing',
			'type'		=> 'number'
		));
		$countplans =  get_theme_mod('vw_mobile_app_pro_plugin_pricing_text_number'.$i, 6);
		for($k=1; $k<=$countplans; $k++) { 
			$wp_customize->add_setting('vw_mobile_app_pro_plugin_plan_box_text'.$k.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
			));
			$wp_customize->add_control('vw_mobile_app_pro_plugin_plan_box_text'.$k.$i,array(
				'label'	=> __('Plans Text','vw-mobile-app-pro-plugin').$k,
				'section'	=> 'vw_mobile_app_pro_plugin_plans_pricing',
				'setting'	=> 'vw_mobile_app_pro_plugin_plan_box_text'.$k.$i,
				'type'		=> 'text'
			));
		}
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_pricing_box_btn'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_pricing_box_btn'.$i,array(
				'label'	=> __('Button Text','vw-mobile-app-pro-plugin').$i,
				'section'	=> 'vw_mobile_app_pro_plugin_plans_pricing',
				'setting'	=> 'vw_mobile_app_pro_plugin_pricing_box_btn'.$i,
				'type'		=> 'text'
		));
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_pricing_box_url'.$i,array(
				'default'	=> __('#','vw-mobile-app-pro-plugin'),
				'sanitize_callback'	=> 'esc_url_raw'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_pricing_box_url'.$i,array(
				'label'	=> __('Link','vw-mobile-app-pro-plugin').$i,
				'section'	=> 'vw_mobile_app_pro_plugin_plans_pricing',
				'setting'	=> 'vw_mobile_app_pro_plugin_pricing_box_url'.$i,
				'type'		=> 'url'
		));
	}

  //Plans Pricing Color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_pricingplanscolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_pricingplanscolor_option',
      array(
      'label' => __('Plans Pricing Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_plans_pricing'
    )));

	//Section Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_pricing_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_pricing_heading_color', array(
        'label' => __('Section Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
        'settings' => 'vw_mobile_app_pro_plugin_plans_pricing_heading_color',
    )));

    //Section Border Color
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_pricing_heading_border', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_pricing_heading_border', array(
        'label' => __('Section Border Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
        'settings' => 'vw_mobile_app_pro_plugin_plans_pricing_heading_border',
    )));

    //Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_plans_pricing_heading_font',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_plans_pricing_heading_font', array(
        'section'  => 'vw_mobile_app_pro_plugin_plans_pricing',
        'label'    => __( 'Section Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Section Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_pricing_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_pricing_text_color', array(
        'label' => __('Section Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
        'settings' => 'vw_mobile_app_pro_plugin_plans_pricing_text_color',
    )));

    //Section Text FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_plans_pricing_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_plans_pricing_text_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_plans_pricing',
        'label'    => __( 'Section Text Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Plan Title Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_price_title_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_price_title_color', array(
        'label' => __('Plan Title Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
        'settings' => 'vw_mobile_app_pro_plugin_plans_price_title_color',
    )));

    //Plan Title FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_plans_price_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_plans_price_title_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_plans_pricing',
        'label'    => __( 'Plan Title Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Plan Details Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_price_details_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_price_details_color', array(
        'label' => __('Plan Details Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
        'settings' => 'vw_mobile_app_pro_plugin_plans_price_details_color',
    )));

    //Plan Details FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_plans_price_details_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_plans_price_details_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_plans_pricing',
        'label'    => __( 'Plan Details Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Plan Box BG Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_price_box_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_price_box_bgcolor', array(
        'label' => __('Plan Box Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
        'settings' => 'vw_mobile_app_pro_plugin_plans_price_box_bgcolor',
    )));

    //Border Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_price_heading_border_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_price_heading_border_color', array(
        'label' => __('Border Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
        'settings' => 'vw_mobile_app_pro_plugin_plans_price_heading_border_color',
    )));

    //Section Button Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_price_button_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_price_button_color', array(
        'label' => __('Button Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
        'settings' => 'vw_mobile_app_pro_plugin_plans_price_button_color',
    )));

    //Section Button FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_plans_price_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_plans_price_button_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_plans_pricing',
        'label'    => __( 'Section Button Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    )); 

    //Section Button Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_price_button_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_price_button_bgcolor', array(
        'label' => __('Button Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
        'settings' => 'vw_mobile_app_pro_plugin_plans_price_button_bgcolor',
    ))); 

    //Section Button Hover Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_price_button_hover_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_price_button_hover_bgcolor', array(
        'label' => __('Button Hover Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
        'settings' => 'vw_mobile_app_pro_plugin_plans_price_button_hover_bgcolor',
    )));   

    //Section Button Hover Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_price_button_hover_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_price_button_hover_color', array(
        'label' => __('Button Hover Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
        'settings' => 'vw_mobile_app_pro_plugin_plans_price_button_hover_color',
    )));

    //Plans Pricing gradient color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_pricingplansgradientcolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_pricingplansgradientcolor_option',
      array(
      'label' => __('Gradient Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_plans_pricing'
    )));

    //Box Gradient Bgcolor
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_price_one_bgcolor', array(
        'default' => '#f94b5b',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_price_one_bgcolor', array(
        'label' => __('Background First Color', 'vw-mobile-app-pro-plugin'),
        'description' => __('Select two color for Box background gradient effect .','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
        'settings' => 'vw_mobile_app_pro_plugin_plans_price_one_bgcolor',
    )));

    //Box Gradient Bgcolor
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_plans_price_two_bgcolor', array(
        'default' => '#fc6352',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_plans_price_two_bgcolor', array(
        'label' => __('Background Second Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_plans_pricing',
        'settings' => 'vw_mobile_app_pro_plugin_plans_price_two_bgcolor',
    )));
	
    /*------------------------------Team Section ----------------------------------------*/
	$wp_customize->add_section('vw_mobile_app_pro_plugin_team_sec',array(
		'title'	=> __('Team Section','vw-mobile-app-pro-plugin'),
		'description'	=> __('This section is only for Team title and styling. <a href="'.esc_url(home_url()).'/wp-admin/edit.php?post_type=team" target="_blank">Click here</a> to add Team','vw-mobile-app-pro-plugin'),
		'priority'	=> null,
		'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));

  //Team Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_team_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_team_option',
      array(
      'label' => __('Team Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_team_sec'
    )));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_radio_team_enable',array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_radio_team_enable',
    array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_team_sec',
	    'choices' => array(
        'Enable' => __('Enable', 'vw-mobile-app-pro-plugin'),
        'Disable' => __('Disable', 'vw-mobile-app-pro-plugin')
	     ),
    ));
	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_team_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_team_bgcolor', array(
			'label' => __('Background Color', 'vw-mobile-app-pro-plugin'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-mobile-app-pro-plugin'),
			'section' => 'vw_mobile_app_pro_plugin_team_sec',
			'settings' => 'vw_mobile_app_pro_plugin_team_bgcolor',
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_our_team_bgimage',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'vw_mobile_app_pro_plugin_our_team_bgimage',
	        array(
	            'label' => __('Background image','vw-mobile-app-pro-plugin'),
	            'section' => 'vw_mobile_app_pro_plugin_team_sec',
	            'settings' => 'vw_mobile_app_pro_plugin_our_team_bgimage'
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_team_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	//Direct Selector
	$wp_customize->selective_refresh->add_partial( 'vw_mobile_app_pro_plugin_team_title', array(
       'selector' => '#team h3',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_vw_mobile_app_pro_plugin_team_title',
    ));

	$wp_customize->add_control('vw_mobile_app_pro_plugin_team_title',array(
		'label'	=> __('Section Title','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_team_sec',
		'setting'	=> 'vw_mobile_app_pro_plugin_team_title',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_team_desc',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_team_desc',array(
		'label'	=> __('Section Description','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_team_sec',
		'setting'	=> 'vw_mobile_app_pro_plugin_team_desc',
		'type'		=> 'text'
	));

  //Team Color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_teamcolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_teamcolor_option',
      array(
      'label' => __('Team Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_team_sec'
    )));

	//Section Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_team_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_team_heading_color', array(
        'label' => __('Section Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_team_sec',
        'settings' => 'vw_mobile_app_pro_plugin_team_heading_color',
    )));

    //Section Border Color
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_team_heading_border', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_team_heading_border', array(
        'label' => __('Section Border Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_team_sec',
        'settings' => 'vw_mobile_app_pro_plugin_team_heading_border',
    )));


    //Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_team_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_team_heading_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_team_sec',
        'label'    => __( 'Section Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	//Section Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_team_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_team_text_color', array(
        'label' => __('Section Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_team_sec',
        'settings' => 'vw_mobile_app_pro_plugin_team_text_color',
    )));

    //Section Text FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_team_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_team_text_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_team_sec',
        'label'    => __( 'Section Text Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Team Name Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_team_name_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_team_name_color', array(
        'label' => __('Team Name Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_team_sec',
        'settings' => 'vw_mobile_app_pro_plugin_team_name_color',
    )));

    //Team Name FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_team_name_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_team_name_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_team_sec',
        'label'    => __( 'Team Name Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	//Team Designation Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_team_desig_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_team_desig_color', array(
        'label' => __('Team Designation Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_team_sec',
        'settings' => 'vw_mobile_app_pro_plugin_team_desig_color',
    )));

    //Team Designation FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_team_desig_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_team_desig_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_team_sec',
        'label'    => __( 'Team Designation Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	/* ------------------------------Testimonial Section -----------------------------------*/
	$wp_customize->add_section('vw_mobile_app_pro_plugin_testimonial',array(
			'title'	=> __('Testimonial','vw-mobile-app-pro-plugin'),
			'description'	=> __('This section is only for Testimonial title and styling.<a href="'.esc_url(home_url()).'/wp-admin/edit.php?post_type=testimonials" target="_blank">Click here</a> to add testimonials.','vw-mobile-app-pro-plugin'),
			'priority'	=> null,
			'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));

  //Testimonial Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_testimonial_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_testimonial_option',
      array(
      'label' => __('Testimonial Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_testimonial'
    )));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_radio_testimonial_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_radio_testimonial_enable',
    array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_testimonial',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-mobile-app-pro-plugin'),
	            'Disable' => __('Disable', 'vw-mobile-app-pro-plugin')
	    ),
    ));
	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_testimonial_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_testimonial_bgcolor', array(
				'label' => __('Background Color', 'vw-mobile-app-pro-plugin'),
				'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-mobile-app-pro-plugin'),
				'section' => 'vw_mobile_app_pro_plugin_testimonial',
				'settings' => 'vw_mobile_app_pro_plugin_testimonial_bgcolor',
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_our_testimonial_bgimage',array(
			'default'	=>'',
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'vw_mobile_app_pro_plugin_our_testimonial_bgimage',
	        array(
	            'label' => __('Background image (1600 x 840)','vw-mobile-app-pro-plugin'),
	            'section' => 'vw_mobile_app_pro_plugin_testimonial',
	            'settings' => 'vw_mobile_app_pro_plugin_our_testimonial_bgimage'
	)));

	//Direct Selector
	$wp_customize->selective_refresh->add_partial( 'vw_mobile_app_pro_plugin_testimonial_title', array(
       'selector' => '#testimonials h3.head_white',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_vw_mobile_app_pro_plugin_testimonial_title',
    ));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_testimonial_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_testimonial_title',array(
		'label'	=> __('Section Title','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_testimonial',
		'setting'	=> 'vw_mobile_app_pro_plugin_testimonial_title',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_testimonial_desc',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_testimonial_desc',array(
		'label'	=> __('Section Description','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_testimonial',
		'setting'	=> 'vw_mobile_app_pro_plugin_testimonial_desc',
		'type'		=> 'text'
	));

  //Testimonial Color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_testimonialcolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_testimonialcolor_option',
      array(
      'label' => __('Testimonial Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_testimonial'
    )));

	//Section Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_testimonial_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_testimonial_heading_color', array(
        'label' => __('Section Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_testimonial',
        'settings' => 'vw_mobile_app_pro_plugin_testimonial_heading_color',
    )));

    //Section Border Color
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_testimonial_heading_border', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_testimonial_heading_border', array(
        'label' => __('Section Border Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_testimonial',
        'settings' => 'vw_mobile_app_pro_plugin_testimonial_heading_border',
    )));

    //Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_testimonial_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_testimonial_heading_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_testimonial',
        'label'    => __( 'Section Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	//Section Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_testimonial_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_testimonial_text_color', array(
        'label' => __('Section Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_testimonial',
        'settings' => 'vw_mobile_app_pro_plugin_testimonial_text_color',
    )));

    //Section Text FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_testimonial_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_testimonial_text_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_testimonial',
        'label'    => __( 'Section Text Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Testimonial Details Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_testimonial_details_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_testimonial_details_color', array(
        'label' => __('Testimonial Details Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_testimonial',
        'settings' => 'vw_mobile_app_pro_plugin_testimonial_details_color',
    )));

    //testimonial Details FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_testimonial_details_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_testimonial_details_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_testimonial',
        'label'    => __( 'Testimonial Details Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	//Testimonial Content Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_testimonial_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_testimonial_content_color', array(
        'label' => __('Testimonial Content Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_testimonial',
        'settings' => 'vw_mobile_app_pro_plugin_testimonial_content_color',
    )));

    //Testimonial Content FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_testimonial_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_testimonial_content_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_testimonial',
        'label'    => __( 'Testimonial Content Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	/* ---------------------------- Records --------------------------------*/
	$wp_customize->add_section('vw_mobile_app_pro_plugin_records_section',array(
		'title'	=> __('Records','vw-mobile-app-pro-plugin'),
		'description'	=> __('Add Records details here','vw-mobile-app-pro-plugin'),
		'priority'	=> null,
		'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));

  //Records Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_records_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_records_option',
      array(
      'label' => __('Records Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_records_section'
    )));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_records_section_enable',array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_records_section_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_records_section',
        'choices' => array(
            'Enable' => __('Enable', 'vw-mobile-app-pro-plugin'),
            'Disable' => __('Disable', 'vw-mobile-app-pro-plugin')
	)));
	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_records_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_records_bgcolor',array(
		'label' => __('Background Color', 'vw-mobile-app-pro-plugin'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_records_section',
		'settings' => 'vw_mobile_app_pro_plugin_records_bgcolor',
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_records_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_mobile_app_pro_plugin_records_bgimage',array(
        'label' => __('Background image ','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_records_section',
        'settings' => 'vw_mobile_app_pro_plugin_records_bgimage'
	)));

	//Direct Selector
	$wp_customize->selective_refresh->add_partial( 'vw_mobile_app_pro_plugin_records_title', array(
       'selector' => '#records h3',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_vw_mobile_app_pro_plugin_records_title',
    ));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_records_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_records_title',array(
		'label'	=> __('Section Title','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_records_section',
		'setting'	=> 'vw_mobile_app_pro_plugin_records_title',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_records_desc',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_records_desc',array(
		'label'	=> __('Section Description','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_records_section',
		'setting'	=> 'vw_mobile_app_pro_plugin_records_desc',
		'type'		=> 'textarea'
	));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_records_box_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_records_box_number',array(
		'label'	=> __('Number of boxes to show','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_records_section',
		'type'		=> 'number'
	));
	$countchoose =  get_theme_mod('vw_mobile_app_pro_plugin_records_box_number');
	for($i=1; $i<=$countchoose; $i++) {
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_records_box_icon'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_records_box_icon'.$i,array(
			'label'	=> __('Add Font Awesome Icons','vw-mobile-app-pro-plugin'),
			'section'	=> 'vw_mobile_app_pro_plugin_records_section',
			'setting'	=> 'vw_mobile_app_pro_plugin_records_box_icon'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('vw_mobile_app_pro_plugin_records_box_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_records_box_title'.$i,array(
			'label'	=> __('Title','vw-mobile-app-pro-plugin'),
			'section'	=> 'vw_mobile_app_pro_plugin_records_section',
			'setting'	=> 'vw_mobile_app_pro_plugin_records_box_title'.$i,
			'type'		=> 'text'
		));

		$wp_customize->add_setting('vw_mobile_app_pro_plugin_records_box_subtitle'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_mobile_app_pro_plugin_records_box_subtitle'.$i,array(
			'label'	=> __('Sub Title','vw-mobile-app-pro-plugin'),
			'section'	=> 'vw_mobile_app_pro_plugin_records_section',
			'setting'	=> 'vw_mobile_app_pro_plugin_records_box_subtitle'.$i,
			'type'		=> 'text'
		));
	}

	// Video Section

  //Video Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_video_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_video_option',
      array(
      'label' => __('Video Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_records_section'
    )));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_video_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_mobile_app_pro_plugin_video_image',array(
        'label' => __('Video Background Image ','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_records_section',
        'settings' => 'vw_mobile_app_pro_plugin_video_image'
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_video_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_video_url',array(
		'label'	=> __('Add Video URl','vw-mobile-app-pro-plugin'),
		'description' => __('Copy the iframe code of the You tube video, you will need to copy the embed url form the src.','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_records_section',
		'setting'	=> 'vw_mobile_app_pro_plugin_video_url',
		'type'		=> 'url'
	));

  //Records Color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_recordscolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_recordscolor_option',
      array(
      'label' => __('Records Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_records_section'
    )));

	//Section Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_record_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_record_heading_color', array(
        'label' => __('Section Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_records_section',
        'settings' => 'vw_mobile_app_pro_plugin_record_heading_color',
    )));

    //Section Border Color
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_record_heading_border', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_record_heading_border', array(
        'label' => __('Section Border Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_records_section',
        'settings' => 'vw_mobile_app_pro_plugin_record_heading_border',
    )));

    //Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_record_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_record_heading_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_records_section',
        'label'    => __( 'Section Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	//Section Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_record_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_record_text_color', array(
        'label' => __('Section Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_records_section',
        'settings' => 'vw_mobile_app_pro_plugin_record_text_color',
    )));

    //Section Text FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_record_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_record_text_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_records_section',
        'label'    => __( 'Section Text Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Record Icon Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_record_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_record_icon_color', array(
        'label' => __('Record Icon Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_records_section',
        'settings' => 'vw_mobile_app_pro_plugin_record_icon_color',
    )));

    //Record Count Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_record_count_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_record_count_color', array(
        'label' => __('Record Count Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_records_section',
        'settings' => 'vw_mobile_app_pro_plugin_record_count_color',
    )));

    //Record Count FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_record_count_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_record_count_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_records_section',
        'label'    => __( 'Record Count Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	//Record Title Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_record_title_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_record_title_color', array(
        'label' => __('Record Title Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_records_section',
        'settings' => 'vw_mobile_app_pro_plugin_record_title_color',
    )));

    //Record Title FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_record_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_record_title_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_records_section',
        'label'    => __( 'Record Title Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	/*------------------- Newsletter Section -------------------*/
	$wp_customize->add_section('vw_mobile_app_pro_plugin_newsletter_section',array(
		'title'	=> __('Newsletter','vw-mobile-app-pro-plugin'),
		'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));

  //Newsletter Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_newsletter_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_newsletter_option',
      array(
      'label' => __('Newsletter Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_newsletter_section'
    )));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_radio_newsletter_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
	    )
    );
	$wp_customize->add_control('vw_mobile_app_pro_plugin_radio_newsletter_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-mobile-app-pro-plugin'),
	        'section' => 'vw_mobile_app_pro_plugin_newsletter_section',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-mobile-app-pro-plugin'),
	            'Disable' => __('Disable', 'vw-mobile-app-pro-plugin')
	        ),
	    )
    );

    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_newsletter_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_newsletter_bgcolor',array(
		'label' => __('Background Color', 'vw-mobile-app-pro-plugin'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_newsletter_section',
		'settings' => 'vw_mobile_app_pro_plugin_newsletter_bgcolor',
	)));
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_newsletter_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_mobile_app_pro_plugin_newsletter_bgimage',array(
        'label' => __('Background image (1600 x 625)','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_newsletter_section',
        'settings' => 'vw_mobile_app_pro_plugin_newsletter_bgimage'
	)));

	//Direct Selector
	$wp_customize->selective_refresh->add_partial( 'vw_mobile_app_pro_plugin_newsletter_title', array(
       'selector' => '#newsletter-section h3.head_white',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_vw_mobile_app_pro_plugin_newsletter_title',
    ));
	
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_newsletter_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_newsletter_title',array(
		'label'	=> __('Section Title','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_newsletter_section',
		'setting'	=> 'vw_mobile_app_pro_plugin_newsletter_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_newsletter_desc',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_textarea_field'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_newsletter_desc',array(
		'label' => __('Section Description','vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_newsletter_section',
		'setting' => 'vw_mobile_app_pro_plugin_newsletter_desc',
		'type' => 'textarea'
	));

  //Newsletter Shortcode option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_newslettershortcode_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_newslettershortcode_option',
      array(
      'label' => __('Newsletter Shortcode Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_newsletter_section'
    )));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_newsletter_shortcode',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		)
	);
	$wp_customize->add_control('vw_mobile_app_pro_plugin_newsletter_shortcode',array(
			'label'	=> __('Shortcode','vw-mobile-app-pro-plugin'),
			'section'	=> 'vw_mobile_app_pro_plugin_newsletter_section',
			'setting'	=> 'vw_mobile_app_pro_plugin_newsletter_shortcode',
			'type'		=> 'text'
		)
	);

  //Newsletter Color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_newslettercolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_newslettercolor_option',
      array(
      'label' => __('Newsletter Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_newsletter_section'
    )));


	//Section Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_newsletter_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_newsletter_heading_color', array(
        'label' => __('Section Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_newsletter_section',
        'settings' => 'vw_mobile_app_pro_plugin_newsletter_heading_color',
    )));

    //Section Border Color
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_newsletter_heading_border', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_newsletter_heading_border', array(
        'label' => __('Section Border Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_newsletter_section',
        'settings' => 'vw_mobile_app_pro_plugin_newsletter_heading_border',
    )));

    //Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_newsletter_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_newsletter_heading_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_newsletter_section',
        'label'    => __( 'Section Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	//Section Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_newsletter_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_newsletter_text_color', array(
        'label' => __('Section Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_newsletter_section',
        'settings' => 'vw_mobile_app_pro_plugin_newsletter_text_color',
    )));

    //Section Text FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_newsletter_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_newsletter_text_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_newsletter_section',
        'label'    => __( 'Section Text Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Section Button Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_newsletters_button_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_newsletters_button_color', array(
        'label' => __('Button Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_newsletter_section',
        'settings' => 'vw_mobile_app_pro_plugin_newsletters_button_color',
    )));

    //Section Button FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_newsletters_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_newsletters_button_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_newsletter_section',
        'label'    => __( 'Section Button Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Section Button Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_newsletter_button_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_newsletter_button_bgcolor', array(
        'label' => __('Button Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_newsletter_section',
        'settings' => 'vw_mobile_app_pro_plugin_newsletter_button_bgcolor',
    )));
    
   

	/*------------------- Latest News Section -------------------*/
	$wp_customize->add_section('vw_mobile_app_pro_plugin_latest_post',array(
		'title'	=> __('Latest News','vw-mobile-app-pro-plugin'),
		'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));

   //Latest post Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_latestpost_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_latestpost_option',
      array(
      'label' => __('Latest Post Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_latest_post'
    )));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_radio_post_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
	$wp_customize->add_control(
    'vw_mobile_app_pro_plugin_radio_post_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-mobile-app-pro-plugin'),
	        'section' => 'vw_mobile_app_pro_plugin_latest_post',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-mobile-app-pro-plugin'),
	            'Disable' => __('Disable', 'vw-mobile-app-pro-plugin')
	    ),
    ));

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_latest_post_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_mobile_app_pro_plugin_latest_post_color', array(
		'label' => 'Background Color',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_latest_post',
		'settings' => 'vw_mobile_app_pro_plugin_latest_post_color',
	)));
	
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_our_latest_post_bgimage',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'vw_mobile_app_pro_plugin_our_latest_post_bgimage',
	        array(
	            'label' => __('Background image','vw-mobile-app-pro-plugin'),
	            'section' => 'vw_mobile_app_pro_plugin_latest_post',
	            'settings' => 'vw_mobile_app_pro_plugin_our_latest_post_bgimage'
	))); 

	//Direct Selector
	$wp_customize->selective_refresh->add_partial( 'vw_mobile_app_pro_plugin_latestpost_title', array(
       'selector' => '#latest_post h3',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_vw_mobile_app_pro_plugin_latestpost_title',
    ));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_latestpost_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_latestpost_title',array(
		'label'	=> __('Section Title','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_latest_post',
		'setting'	=> 'vw_mobile_app_pro_plugin_latestpost_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_mobile_app_pro_plugin_latestpost_desc',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_textarea_field'
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_latestpost_desc',array(
		'label'	=> __('Section Description','vw-mobile-app-pro-plugin'),
		'section'	=> 'vw_mobile_app_pro_plugin_latest_post',
		'setting'	=> 'vw_mobile_app_pro_plugin_latestpost_desc',
		'type'		=> 'textarea'
	));

  $wp_customize->add_setting('vw_mobile_app_pro_plugin_latestpost_read_more',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_mobile_app_pro_plugin_latestpost_read_more',array(
    'label' => __('Read More Text','vw-mobile-app-pro-plugin'),
    'section' => 'vw_mobile_app_pro_plugin_latest_post',
    'setting' => 'vw_mobile_app_pro_plugin_latestpost_read_more',
    'type'    => 'text'
  ));

  //Latest post Category Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_latestpostcategory_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_latestpostcategory_option',
      array(
      'label' => __('Latest Post Category Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_latest_post'
    )));


	$categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_latestblogpost_setting',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_latestblogpost_setting',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Latest post (select category to show selected post)','vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_latest_post',
	));

  //Show/Hide Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_showhide_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_showhide_option',
      array(
      'label' => __('Show/Hide Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_latest_post'
    )));	

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_toggle_post_date',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vwmobileapp_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwmobileapp_Toggle_Switch_Custom_control( $wp_customize, 'vw_mobile_app_pro_plugin_toggle_post_date',
	   array(
	      'label' => esc_html__( 'show/hide Date','vw-mobile-app-pro-plugin' ),
	      'section' => 'vw_mobile_app_pro_plugin_latest_post'
	)));

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_toggle_post_meta',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vwmobileapp_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwmobileapp_Toggle_Switch_Custom_control( $wp_customize, 'vw_mobile_app_pro_plugin_toggle_post_meta',
	   array(
	      'label' => esc_html__( 'show/hide Meta Content','vw-mobile-app-pro-plugin' ),
	      'section' => 'vw_mobile_app_pro_plugin_latest_post'
	)));

  //Latest post Color Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_latestpostcolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_latestpostcolor_option',
      array(
      'label' => __('Latest Post Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_latest_post'
    )));  
	
	//Section Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_latest_news_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_latest_news_heading_color', array(
        'label' => __('Section Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_latest_post',
        'settings' => 'vw_mobile_app_pro_plugin_latest_news_heading_color',
    )));

    //Section Border Color
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_latest_news_heading_border', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_latest_news_heading_border', array(
        'label' => __('Section Border Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_latest_post',
        'settings' => 'vw_mobile_app_pro_plugin_latest_news_heading_border',
    )));

    //Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_latest_news_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_latest_news_heading_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_latest_post',
        'label'    => __( 'Section Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Section Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_latest_news_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_latest_news_text_color', array(
        'label' => __('Section Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_latest_post',
        'settings' => 'vw_mobile_app_pro_plugin_latest_news_text_color',
    )));

    //Section Text FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_latest_news_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_latest_news_text_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_latest_post',
        'label'    => __( 'Section Text Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Post Title Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_latest_post_title_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_latest_post_title_color', array(
        'label' => __('Post Title Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_latest_post',
        'settings' => 'vw_mobile_app_pro_plugin_latest_post_title_color',
    )));

    //Post Title FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_latest_post_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_latest_post_title_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_latest_post',
        'label'    => __( 'Post Title Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Post Content Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_latest_post_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_latest_post_content_color', array(
        'label' => __('Post Content Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_latest_post',
        'settings' => 'vw_mobile_app_pro_plugin_latest_post_content_color',
    )));

    //Post Content FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_latest_post_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_latest_post_content_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_latest_post',
        'label'    => __( 'Post Content Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Section Button Text Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_latest_post_button_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_latest_post_button_color', array(
        'label' => __('Button Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_latest_post',
        'settings' => 'vw_mobile_app_pro_plugin_latest_post_button_color',
    )));

    //Section Button FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_latest_post_button_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_latest_post_button_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_latest_post',
        'label'    => __( 'Section Button Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    )); 

    //Section Button Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_latest_post_button_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_latest_post_button_bgcolor', array(
        'label' => __('Button Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_latest_post',
        'settings' => 'vw_mobile_app_pro_plugin_latest_post_button_bgcolor',
    ))); 

    //Section Button Hover Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_latest_post_button_hover_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_latest_post_button_hover_bgcolor', array(
        'label' => __('Button Hover Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_latest_post',
        'settings' => 'vw_mobile_app_pro_plugin_latest_post_button_hover_bgcolor',
    )));   

    //Section Button Hover Background Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_latest_post_button_hover_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_latest_post_button_hover_color', array(
        'label' => __('Button Hover Text Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_latest_post',
        'settings' => 'vw_mobile_app_pro_plugin_latest_post_button_hover_color',
    )));

	/*----------------------Contact Us---------------------------- */
    $wp_customize->add_section('vw_mobile_app_pro_plugin_conntact_us_section',array(
        'title' => __('Home Contact form','vw-mobile-app-pro-plugin'),
        'description'   => __('You will get same information on home contact us and contact us page.','vw-mobile-app-pro-plugin'),
        'panel' => 'vw_mobile_app_pro_plugin_panel_id',
    ));

    //Contact Us Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_contactus_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_contactus_option',
      array(
      'label' => __('Contact Us Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_conntact_us_section'
    )));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_radio_conntact_us_enable',
        array(
            'default' => 'Enable',
            'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
        )
    );
    $wp_customize->add_control('vw_mobile_app_pro_plugin_radio_conntact_us_enable',
        array(
            'type' => 'radio',
            'label' => __('Do you want this section', 'vw-mobile-app-pro-plugin'),
            'section' => 'vw_mobile_app_pro_plugin_conntact_us_section',
            'choices' => array(
                'Enable' => __('Enable', 'vw-mobile-app-pro-plugin'),
                'Disable' => __('Disable', 'vw-mobile-app-pro-plugin')
            ),
        )
    );
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_conntact_us_section_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_conntact_us_section_bgcolor', array(
        'label' => __('Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_conntact_us_section',
        'settings' => 'vw_mobile_app_pro_plugin_conntact_us_section_bgcolor',
    )));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_conntact_us_section_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_mobile_app_pro_plugin_conntact_us_section_bgimage',
            array(
                'label' => __('Background image','vw-mobile-app-pro-plugin'),
                'section' => 'vw_mobile_app_pro_plugin_conntact_us_section',
                'settings' => 'vw_mobile_app_pro_plugin_conntact_us_section_bgimage'
    )));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_home_form_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    //Direct Selector
	$wp_customize->selective_refresh->add_partial( 'vw_mobile_app_pro_plugin_home_form_title', array(
       'selector' => '.contact_us h3',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_vw_mobile_app_pro_plugin_home_form_title',
    ));
    
    $wp_customize->add_control('vw_mobile_app_pro_plugin_home_form_title',array(
        'label' => __('Footer Form Title','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_conntact_us_section',
        'setting'   => 'vw_mobile_app_pro_plugin_footer_form_title',
        'type'  => 'text'
    ));

    //Contact Us Shortcode option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_contactusshortcode_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_contactusshortcode_option',
      array(
      'label' => __('Contact Us Shortcode Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_conntact_us_section'
    )));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_conntact_us_form_shortcode',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_conntact_us_form_shortcode',array(
        'label' => __('Footer Form Shortcode','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_conntact_us_section',
        'setting'   => 'vw_mobile_app_pro_plugin_conntact_us_form_shortcode',
        'type'  => 'text'
    ));

    //Form Gradient Bgcolor option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_contactusgradientcolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_contactusgradientcolor_option',
      array(
      'label' => __('Gradient Bgcolor Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_conntact_us_section'
    )));
    
    //Form Gradient Bgcolor
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_conntact_us_one_bgcolor', array(
        'default' => '#f94b5b',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_conntact_us_one_bgcolor', array(
        'label' => __('Background First Color', 'vw-mobile-app-pro-plugin'),
        'description'	=> __('Select two color for form background gradient effect .','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_conntact_us_section',
        'settings' => 'vw_mobile_app_pro_plugin_conntact_us_one_bgcolor',
    )));

    //Form Gradient Bgcolor
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_conntact_us_two_bgcolor', array(
        'default' => '#fc6352',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_conntact_us_two_bgcolor', array(
        'label' => __('Background Second Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_conntact_us_section',
        'settings' => 'vw_mobile_app_pro_plugin_conntact_us_two_bgcolor',
    )));

    //Contact Us color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_contactuscolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_contactuscolor_option',
      array(
      'label' => __('Contact Us Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_conntact_us_section'
    )));

    //Heading Color Picker
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_home_contact_sec_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_home_contact_sec_heading_color', array(
        'label' => __('Section Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_conntact_us_section',
        'settings' => 'vw_mobile_app_pro_plugin_home_contact_sec_heading_color',
    )));

    //Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_home_contact_sec_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_home_contact_sec_heading_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_conntact_us_section',
        'label'    => __( 'Section Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Sub Heading color picker setting
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_home_contact_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_
    	_heading_color', array(
        'label' => __('Contact Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_conntact_us_section',
        'settings' => 'vw_mobile_app_pro_plugin_home_contact_heading_color',
    )));
    
    //Sub Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_home_contact_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_home_contact_heading_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_conntact_us_section',
        'label'    => __( 'Contact Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Detail Color picker setting
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_home_contact_detail_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_home_contact_detail_color', array(
        'label' => __('Contact Detail Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_conntact_us_section',
        'settings' => 'vw_mobile_app_pro_plugin_home_contact_detail_color',
    )));
    
    //Detail FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_home_contact_detail_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_home_contact_detail_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_conntact_us_section',
        'label'    => __( 'Contact Details Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    
    //Icon Color
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_home_contact_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_home_contact_icon_color', array(
        'label' => __('Icon Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_conntact_us_section',
        'settings' => 'vw_mobile_app_pro_plugin_home_contact_icon_color',
    )));
	
	/*-------------------Blog page category---------------------*/
	$wp_customize->add_section('vw_mobile_app_pro_plugin_blog_category',array(
		'title'	=> __('Blog Page','vw-mobile-app-pro-plugin'),
		'description'	=> __('select the category you wish to be get displayed on blog page .','vw-mobile-app-pro-plugin'),
		'priority'	=> null,
		'panel' => 'vw_mobile_app_pro_plugin_panel_id',
	));

  //Blog page Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_blogpage_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_blogpage_option',
      array(
      'label' => __('Blog Page Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_blog_category'
    )));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
	$wp_customize->add_setting('vw_mobile_app_pro_plugin_category_setting',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_mobile_app_pro_plugin_category_setting',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Blog page (select category to show selected post)','vw-mobile-app-pro-plugin'),
		'section' => 'vw_mobile_app_pro_plugin_blog_category',
	));	

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_toggle_auther',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vwmobileapp_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwmobileapp_Toggle_Switch_Custom_control( $wp_customize, 'vw_mobile_app_pro_plugin_toggle_auther',
	   array(
	      'label' => esc_html__( 'Author Name','vw-mobile-app-pro-plugin' ),
	      'section' => 'vw_mobile_app_pro_plugin_blog_category'
	)));

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_toggle_comments',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vwmobileapp_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwmobileapp_Toggle_Switch_Custom_control( $wp_customize, 'vw_mobile_app_pro_plugin_toggle_comments',
	   array(
	      'label' => esc_html__( 'Comment','vw-mobile-app-pro-plugin' ),
	      'section' => 'vw_mobile_app_pro_plugin_blog_category'
	)));

	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_toggle_date',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vwmobileapp_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwmobileapp_Toggle_Switch_Custom_control( $wp_customize, 'vw_mobile_app_pro_plugin_toggle_date',
	   array(
	      'label' => esc_html__( 'Post Date','vw-mobile-app-pro-plugin' ),
	      'section' => 'vw_mobile_app_pro_plugin_blog_category'
	)));
	
	$wp_customize->add_setting( 'vw_mobile_app_pro_plugin_toggle_sharing',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'vwmobileapp_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwmobileapp_Toggle_Switch_Custom_control( $wp_customize, 'vw_mobile_app_pro_plugin_toggle_sharing',
	   array(
	      'label' => esc_html__( 'Social Sharing','vw-mobile-app-pro-plugin' ),
	      'section' => 'vw_mobile_app_pro_plugin_blog_category'
	)));
    
?>