<?php

    /* Footer Sections */
    $wp_customize->add_section('vw_mobile_app_pro_plugin_footer_widget_section',array(
        'title' => __('Footer Widgets','vw-mobile-app-pro-plugin'),
        'description'   => __('Edit footer Widgets sections','vw-mobile-app-pro-plugin'),
        'panel' => 'vw_mobile_app_pro_plugin_panel_id',
    ));

    //Footer Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_footer_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_footer_option',
      array(
      'label' => __('Footer Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_footer_widget_section'
    )));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_footer_widgets_enable',
    array(
        'default' => 'Disable',
        'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_footer_widgets_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_mobile_app_pro_plugin_footer_widget_section',
        'choices' => array(
            'Enable' => __('Enable', 'vw-mobile-app-pro-plugin'),
            'Disable' => __('Disable', 'vw-mobile-app-pro-plugin')
        ),
    ));
    // add color picker setting
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_footer_widget_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_footer_widget_bgcolor', array(
        'label' => __('Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_footer_widget_section',
        'settings' => 'vw_mobile_app_pro_plugin_footer_widget_bgcolor',
    )));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_footer_widget_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_mobile_app_pro_plugin_footer_widget_bgimage',
            array(
                'label' => __('Background image','vw-mobile-app-pro-plugin'),
                'section' => 'vw_mobile_app_pro_plugin_footer_widget_section',
                'settings' => 'vw_mobile_app_pro_plugin_footer_widget_bgimage'
    )));

    //Footer Color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_footercolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_footercolor_option',
      array(
      'label' => __('Footer Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_footer_widget_section'
    )));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_footer_widget_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_footer_widget_heading_color', array(
        'label' => __('Footer Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_footer_widget_section',
        'settings' => 'vw_mobile_app_pro_plugin_footer_widget_heading_color',
    )));
    
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_footer_widget_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_footer_widget_heading_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_footer_widget_section',
        'label'    => __( 'Footer Heading Font Family','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_footer_widget_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_footer_widget_content_color', array(
        'label' => __('Footer Content Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_footer_widget_section',
        'settings' => 'vw_mobile_app_pro_plugin_footer_widget_content_color',
    )));
    
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_footer_widget_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_footer_widget_content_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_footer_widget_section',
        'label'    => __( 'Footer Content Font Family','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    // Footer Copyright
    $wp_customize->add_section('vw_mobile_app_pro_plugin_footer_section',array(
        'title' => __('Footer Text','vw-mobile-app-pro-plugin'),
        'description'   => __('Add some text for footer like copyright etc.','vw-mobile-app-pro-plugin'),
        'priority'  => null,
        'panel' => 'vw_mobile_app_pro_plugin_panel_id',
    ));

    //Direct Selector
    $wp_customize->selective_refresh->add_partial( 'vw_mobile_app_pro_plugin_footer_copy', array(
       'selector' => '.copyright p',
       'render_callback' => 'vw_mobile_app_pro_plugin_customize_partial_vw_mobile_app_pro_plugin_footer_copy',
    ));

    //Footer Text Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_footertext_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_footertext_option',
      array(
      'label' => __('Footer Text Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_footer_section'
    )));
    
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_footer_copy',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_footer_copy',array(
        'label' => __('Copyright Text','vw-mobile-app-pro-plugin'),
        'section'   => 'vw_mobile_app_pro_plugin_footer_section',
        'type'      => 'textarea'
    ));

     // add color picker setting
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_footer_copy_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_footer_copy_bgcolor', array(
        'label' => __('Background Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_footer_section',
        'settings' => 'vw_mobile_app_pro_plugin_footer_copy_bgcolor',
    )));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_footer_copy_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_mobile_app_pro_plugin_footer_copy_bgimage',
            array(
                'label' => __('Background image','vw-mobile-app-pro-plugin'),
                'section' => 'vw_mobile_app_pro_plugin_footer_section',
                'settings' => 'vw_mobile_app_pro_plugin_footer_copy_bgimage'
    )));

    //Footer Text Color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_footertextcolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_footertextcolor_option',
      array(
      'label' => __('Footer Text Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_footer_section'
    )));

    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_footer_copy_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_footer_copy_content_color', array(
        'label' => __('Footer Content Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_footer_section',
        'settings' => 'vw_mobile_app_pro_plugin_footer_copy_content_color',
    )));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_footer_copy_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_footer_copy_content_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_footer_section',
        'label'    => __( 'Content Font Family','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    //Contact Page section
    $wp_customize->add_section('vw_mobile_app_pro_plugin_contact_page_section',array(
        'title' => __('Contact','vw-mobile-app-pro-plugin'),
        'description'   => __('Add contact page settings here.','vw-mobile-app-pro-plugin'),
        'priority'  => null,
        'panel' => 'vw_mobile_app_pro_plugin_panel_id',
    ));

    //Contact Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_contactpage_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_contactpage_option',
      array(
      'label' => __('Contact Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_contact_page_section'
    )));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_address_longitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_address_longitude',array(
        'label' => __('Longitude','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'setting'   => 'vw_mobile_app_pro_plugin_address_longitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_address_latitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_address_latitude',array(
        'label' => __('Latitude','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'setting'   => 'vw_mobile_app_pro_plugin_address_latitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_contactpage_email_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_contactpage_email_title',array(
        'label' => __('Email Title','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'setting'   => 'vw_mobile_app_pro_plugin_contactpage_email_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_contactpage_email',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_contactpage_email',array(
        'label' => __('Email ','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'setting'   => 'vw_mobile_app_pro_plugin_contactpage_email',
        'type'  => 'text'
    ));
    
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_address_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_address_title',array(
        'label' => __('Address','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'setting'   => 'vw_mobile_app_pro_plugin_address_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_address',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_address',array(
        'label' => __('Address ','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'setting'   => 'vw_mobile_app_pro_plugin_address',
        'type'  => 'textarea'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_contactpage_phone_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_contactpage_phone_title',array(
        'label' => __('Phone Title','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'setting'   => 'vw_mobile_app_pro_plugin_contactpage_phone_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_contactpage_phone',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_contactpage_phone',array(
        'label' => __('Phone ','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'setting'   => 'vw_mobile_app_pro_plugin_contactpage_phone',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_contactpage_working_hours_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_contactpage_working_hours_title',array(
        'label' => __('Working Hours','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'setting'   => 'vw_mobile_app_pro_plugin_contactpage_working_hours_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_contactpage_working_hours',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_contactpage_working_hours',array(
        'label' => __('Add Working Hours','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'setting'   => 'vw_mobile_app_pro_plugin_contactpage_working_hours',
        'type'  => 'textarea'
    ));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_contactpage_form_desc',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_contactpage_form_desc',array(
        'label' => __('Add Additional Information','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'setting'   => 'vw_mobile_app_pro_plugin_contactpage_form_desc',
        'type'  => 'textarea'
    ));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_contactpage_form_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_contactpage_form_title',array(
        'label' => __('Add Form Title','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'setting'   => 'vw_mobile_app_pro_plugin_contactpage_form_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_contactpage_form_subtitle',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_contactpage_form_subtitle',array(
        'label' => __('Add Form Sub Title','vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'setting'   => 'vw_mobile_app_pro_plugin_contactpage_form_subtitle',
        'type'  => 'textarea'
    ));

    //Contact Color option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_contactpagecolor_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_contactpagecolor_option',
      array(
      'label' => __('Contact Color Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_contact_page_section'
    )));

    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_contact_page_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_contact_page_heading_color', array(
        'label' => __('Contact Heading Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'settings' => 'vw_mobile_app_pro_plugin_contact_page_heading_color',
    )));
    //This is Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_contact_page_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_contact_page_heading_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_contact_page_section',
        'label'    => __( 'Contact Heading Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_contact_page_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_contact_page_content_color', array(
        'label' => __('Contact Content Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'settings' => 'vw_mobile_app_pro_plugin_contact_page_content_color',
    )));
    //This is Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_contact_page_contact_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_mobile_app_pro_plugin_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_mobile_app_pro_plugin_contact_page_contact_font_family', array(
        'section'  => 'vw_mobile_app_pro_plugin_contact_page_section',
        'label'    => __( 'Contact Content Fonts','vw-mobile-app-pro-plugin'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_contact_page_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_mobile_app_pro_plugin_contact_page_icon_color', array(
        'label' => __('Icon Color', 'vw-mobile-app-pro-plugin'),
        'section' => 'vw_mobile_app_pro_plugin_contact_page_section',
        'settings' => 'vw_mobile_app_pro_plugin_contact_page_icon_color',
    )));

    //Shortcode Section
    $wp_customize->add_section('vw_mobile_app_pro_plugin_shortcode_section',array(
        'title' => __('Shortcode Settings','vw-mobile-app-pro-plugin'),
        'description'   => __('Use below shortcode here.','vw-mobile-app-pro-plugin'),
        'priority'  => null,
        'panel' => 'vw_mobile_app_pro_plugin_panel_id',
    ));

    //Shortcode Setting option
    $wp_customize->add_setting( 'vw_mobile_app_pro_plugin_shortcodesetting_option',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_mobile_app_pro_plugin_shortcodesetting_option',
      array(
      'label' => __('Shortcode Setting Option','vw-mobile-app-pro-plugin'),
      'section' => 'vw_mobile_app_pro_plugin_shortcode_section'
    )));

   $wp_customize->add_setting('vw_mobile_app_pro_plugin_shortcode',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_shortcode',array(
        'section' => 'vw_mobile_app_pro_plugin_shortcode_section',
        'setting'   => 'vw_mobile_app_pro_plugin_shortcode',
        'type'=>'textarea'
    ));
?>