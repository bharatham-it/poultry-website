<div class="theme-offer">
	<?php
		//POST and update the customizer and other related data of VW Mobile App Pro
      if(isset($_POST['submit'])){
        $home_id =''; $blog_id =''; $page_id =''; $contact_id =''; $testimonials_id =''; $team_id ='';
        // Create a front page and assigned the template
        if( get_page_by_title( 'home' ) == NULL ){
          $home_title = 'Home';
      		$home_check = get_page_by_title($home_title);
     	   	$home = array(
        		   'post_type' => 'page',
        		   'post_title' => $home_title,
        		   'post_status' => 'publish',
        		   'post_author' => 1,
        		   'post_slug' => 'home'
     		   );
          $home_id = wp_insert_post($home);
         }
         //Set the home page template
         add_post_meta( $home_id, '_wp_page_template', 'page-template/home-page.php' );

         //Set the static front page
         $home = get_page_by_title( 'Home' );
         update_option( 'page_on_front', $home->ID );
         update_option( 'show_on_front', 'page' );

         if( get_page_by_title( 'Blog' ) == NULL ){
            // Create a blog page and assigned the template
            $blog_title = 'Blog';
            $blog_check = get_page_by_title($blog_title);
            $blog = array(
               'post_type' => 'page',
               'post_title' => $blog_title,
               'post_status' => 'publish',
               'post_author' => 1,
               'post_slug' => 'blog'
            );
            $blog_id = wp_insert_post($blog);
         }

         //Set the blog page template
         add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-fullwidth-extend.php' );

         if( get_page_by_title( 'Testimonials' ) == NULL ){
            // Create a blog page and assigned the template
            $testimonials_title = 'Testimonials';
            $testimonials_check = get_page_by_title($testimonials_title);
            $testimonials_content = '[vw-mobile-app-pro-plugin-testimonials]';
            $testimonials = array(
               'post_type' => 'page',
               'post_title' => $testimonials_title,
               'post_content'  => $testimonials_content,
               'post_status' => 'publish',
               'post_author' => 1,
               'post_slug' => 'testimonials'
            );
            $testimonials_id = wp_insert_post($testimonials);
         }

         if( get_page_by_title( 'Team' ) == NULL ){
            // Create a blog page and assigned the template
            $team_title = 'Team';
            $team_check = get_page_by_title($team_title);
            $team_content = '[vw-mobile-app-pro-plugin-team]';
            $team = array(
               'post_type' => 'page',
               'post_title' => $team_title,
               'post_content'  => $team_content,
               'post_status' => 'publish',
               'post_author' => 1,
               'post_slug' => 'team'
            );
            $team_id = wp_insert_post($team);
         }

         if( get_page_by_title( 'Page' ) == NULL ){
         // Create a Page 
            $page_title = 'Page ';
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel, et argentum simul reddere parentibus meis, debitum eo aliam putant quinque aut sex annos.';

            $page_check = get_page_by_title($page_title);
            $page = array(
            'post_type' => 'page',
            'post_title' => $page_title,
            'post_content'  => $content,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'page'
            );
            $page_id = wp_insert_post($page);
         }

         if( get_page_by_title( 'Contact' ) == NULL ){
            // Create a contact page and assigned the template
            $contact_title = 'Contact';
            $contact_check = get_page_by_title($contact_title);
            $contact = array(
            'post_type' => 'page',
            'post_title' => $contact_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'contact'
            );
   		   $contact_id = wp_insert_post($contact);
         }

         //Set the blog with right sidebar template
         add_post_meta( $contact_id, '_wp_page_template', 'page-template/contact.php' );

         // Section Ordering
          set_theme_mod('vw_mobile_app_pro_plugin_section_ordering_settings_repeater','main-banner,about-me,promo-banner,amazing-features,awesome-screenshot,plans-pricing,our-team,testimonial,record,newsletter,latest-posts,contact-us');

         /*customizer-custom-variables.php*/
         //Typography Section-First Highlight Color
         set_theme_mod( 'vw_mobile_app_pro_plugin_hi_first_color', '#fc6352' );

         //Typography Section-Second Highlight Color
         set_theme_mod( 'vw_mobile_app_pro_plugin_hi_second_color', '#52565b' );

   
         /*customizer-part-home.php*/
         //Main Banner Section
            //Section Title
            set_theme_mod( 'vw_mobile_app_pro_plugin_main_banner_section_title', 'Welcome To Mobile Application' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_main_banner_section_subtitle', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_main_banner_section_button1', 'Tell Me More ' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_main_banner_section_button2', 'Sign Me Up' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_main_banner_rightimage',plugins_url().'/vw-mobile-app-pro-plugin/assets/images/mobile.png' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_main_banner_bgimage',plugins_url().'/vw-mobile-app-pro-plugin/assets/images/bannerbg.png' );

         //About section-
            //About Me
            //Section Title
            set_theme_mod( 'vw_mobile_app_pro_plugin_about_section_title', 'ABOUT US' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_about_section_subtitle', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.' ); 

            //Number of Details to show
            set_theme_mod( 'vw_mobile_app_pro_plugin_about_number', '3' );
            $box_title = array("SUPER AFFORDABLE", "FULL SUPPORT", "CONCRETE SECURITY");
            for($i=1; $i<=3; $i++){

               set_theme_mod( 'vw_mobile_app_pro_plugin_about_icon_image'.$i,plugins_url().'/vw-mobile-app-pro-plugin/assets/images/abouticon'.$i.'.png' );
               // Box title
               set_theme_mod( 'vw_mobile_app_pro_plugin_about_sec_title'.$i, $box_title[$i-1] ); 
               //Description
               set_theme_mod( 'vw_mobile_app_pro_plugin_about_sec_details'.$i, 'Te obtinuit ut adepto satis somno aliisque institoribus iter.' ); 

               set_theme_mod( 'vw_mobile_app_pro_plugin_about_sec_readmore'.$i, 'Read More' );

            }

        //Promo Banner Section
            //Section Title
            set_theme_mod( 'vw_mobile_app_pro_plugin_promo_banner_section_title', 'QUICKLY ONE - CLICK APP INSATLL' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_promo_banner_section_subtitle', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita.' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_promo_banner_section_button', 'GET THE APP' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_promo_banner_bgimage_inner',plugins_url().'/vw-mobile-app-pro-plugin/assets/images/installappbg.jpg' );

        //Amazing Features
            //Section Title
            set_theme_mod( 'vw_mobile_app_pro_plugin_amazing_features_section_title', 'AMAZING FEATURES' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_amazing_features_section_subtitle', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.' ); 

            //background image
            set_theme_mod( 'vw_mobile_app_pro_plugin_amazing_features_bgimage',plugins_url().'/vw-mobile-app-pro-plugin/assets/images/amazingfeaturesbg.jpg' );

            //Number of Details to show
            set_theme_mod( 'vw_mobile_app_pro_plugin_amazing_features_box_left_number', '3' ); 
            $left_box_icon = array("far fa-object-ungroup", "fas fa-code", "fas fa-globe-asia");
            $left_box_title = array("CREATIVE DESIGN", "CLEAN CODED", "GREAT COMMUNITY");
            for($i=1; $i<=3; $i++){
              set_theme_mod( 'vw_mobile_app_pro_plugin_amazing_features_box_left_icon'.$i, $left_box_icon[$i-1] );
                //Sub Title
              set_theme_mod( 'vw_mobile_app_pro_plugin_amazing_features_box_left_title'.$i, $left_box_title[$i-1] );

              set_theme_mod( 'vw_mobile_app_pro_plugin_amazing_features_box_left_desc'.$i, 'Te obtinuit ut adepto satis somno aliisque institoribus iter.');
            }

            set_theme_mod( 'vw_mobile_app_pro_plugin_amazing_features_box_center_image',plugins_url().'/vw-mobile-app-pro-plugin/assets/images/amezingfeaturesimg.png' );

            //Number of Details to show
            set_theme_mod( 'vw_mobile_app_pro_plugin_amazing_features_box_right_number', '3' ); 
            $right_box_icon = array("fas fa-download", "fab fa-apple", "far fa-lightbulb");
            $right_box_title = array("EASY DOWNLOAD", "PURE & SIMPLE", "AWESOME FEATURES");
            for($i=1; $i<=3; $i++){
              set_theme_mod( 'vw_mobile_app_pro_plugin_amazing_features_box_right_icon'.$i, $right_box_icon[$i-1] );
                //Sub Title
              set_theme_mod( 'vw_mobile_app_pro_plugin_amazing_features_box_right_title'.$i, $right_box_title[$i-1] );

              set_theme_mod( 'vw_mobile_app_pro_plugin_amazing_features_box_right_desc'.$i, 'Te obtinuit ut adepto satis somno aliisque institoribus iter.');
            }

          //Awesome Screenshots
            //Section Title
            set_theme_mod( 'vw_mobile_app_pro_plugin_awesome_screenshot_section_title', 'Awesome Screenshots' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_awesome_screenshot_section_subtitle', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.' );

            //Number of Details to show
            
            set_theme_mod( 'vw_mobile_app_pro_plugin_awesome_screenshot_box_number', '5' ); 
            for($i=1; $i<=5; $i++){
              set_theme_mod( 'vw_mobile_app_pro_plugin_awesome_screenshot_image'.$i,plugins_url().'/vw-mobile-app-pro-plugin/assets/images/awesome-screenshots/awesomescreenshot'.$i.'.jpg' );
            }

        //Pricing Plans 
            //Title
            set_theme_mod( 'vw_mobile_app_pro_plugin_pricing_box_section_title', 'PRICING PLAN' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_pricing_box_section_subtitle', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.' );

            //background image
            set_theme_mod( 'vw_mobile_app_pro_plugin_plans_pricing_bgimage', plugins_url().'/vw-mobile-app-pro-plugin/assets/images/pricingplanbg.png');
            //Number of Pricing to show section
            set_theme_mod( 'vw_mobile_app_pro_plugin_pricing_box_number', '3' );
            $pricing_box_title = array("STARTUP", "EXCLUSIVE", "PREMIUM");
            $pricing_box_price = array("$90", "$120", "$210");
            $pricing_box_subtitle = array("Single user license", "Extended user license", "Multiuser License");
            //counter image
            for($i=1; $i<=3; $i++){
                  //
                  set_theme_mod( 'vw_mobile_app_pro_plugin_pricing_box_title'.$i, $pricing_box_title[$i-1] );
                  //
                  set_theme_mod( 'vw_mobile_app_pro_plugin_pricing_box_subtitle'.$i, $pricing_box_subtitle[$i-1] );
                  //
                  set_theme_mod( 'vw_mobile_app_pro_plugin_pricing_box_price'.$i, $pricing_box_price[$i-1] );
                  //
                  set_theme_mod( 'vw_mobile_app_pro_plugin_pricing_box_price_base'.$i, 'Per Year' );
                 
                  for($k=1; $k<=6; $k++){
                        //
                        set_theme_mod( 'vw_mobile_app_pro_plugin_plan_box_text'.$k.$i, 'features Listing will go here' );
                  }
                  //
                  set_theme_mod( 'vw_mobile_app_pro_plugin_pricing_box_btn'.$i, 'Select Plan' );
            }

        //Team Section
            //Section Title
            set_theme_mod( 'vw_mobile_app_pro_plugin_team_title', 'OUR DEVELOPERS' ); 
            set_theme_mod( 'vw_mobile_app_pro_plugin_team_desc', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.' ); 


        //Testimonial Section
            //Section Title and description
            set_theme_mod( 'vw_mobile_app_pro_plugin_testimonial_title', 'HAPPY CLIENTS' ); 
            set_theme_mod( 'vw_mobile_app_pro_plugin_testimonial_desc', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.' ); 

            set_theme_mod( 'vw_mobile_app_pro_plugin_our_testimonial_bgimage',plugins_url().'/vw-mobile-app-pro-plugin/assets/images/testimonials/happyclientbg.jpg' );


         // Records Section
            //Section Title
            set_theme_mod( 'vw_mobile_app_pro_plugin_records_title', 'RECORDS' ); 
            set_theme_mod( 'vw_mobile_app_pro_plugin_records_desc', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.' ); 
            //Number of Details to show
            set_theme_mod( 'vw_mobile_app_pro_plugin_records_box_number', '4' ); 
            $records_icon = array("far fa-smile", "fas fa-check", "fas fa-users", "fas fa-hands-helping");
            $records_number = array("450", "900", "30", "100%");
            $records_subtitle = array("Happy Clients", "Project Complete", "Team Member", "Work Support");
            for($i=1; $i<=4; $i++){
                  //Box Icon
                  set_theme_mod( 'vw_mobile_app_pro_plugin_records_box_icon'.$i, $records_icon[$i-1] );
                  //Box Icon
                  set_theme_mod( 'vw_mobile_app_pro_plugin_records_box_title'.$i, $records_number[$i-1] );
                  //Sub Title
                  set_theme_mod( 'vw_mobile_app_pro_plugin_records_box_subtitle'.$i, $records_subtitle[$i-1] ); 
            }

         //Video Section
            //Video Image
            set_theme_mod( 'vw_mobile_app_pro_plugin_video_image',plugins_url().'/vw-mobile-app-pro-plugin/assets/images/videobg.png' );
            //Embedded Video URL
            set_theme_mod( 'vw_mobile_app_pro_plugin_video_url', 'https://www.youtube.com/embed/DTp5lL46yI0' ); 

          //Newsletter
           //Section Title
            //Section Title
            set_theme_mod( 'vw_mobile_app_pro_plugin_newsletter_title', 'SUBSCRIBE TO OUR NEWSLETTER' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_newsletter_desc', 'No spam promise, only our latest news and freebies.' );
            //Title Image
            set_theme_mod( 'vw_mobile_app_pro_plugin_newsletter_shortcode', '[contact-form-7 id="124" title="Contact form 1"]' );

            set_theme_mod( 'vw_mobile_app_pro_plugin_newsletter_bgimage',plugins_url().'/vw-mobile-app-pro-plugin/assets/images/newsletterbg.png' );

         //Latest Post
            //Section Title
               set_theme_mod( 'vw_mobile_app_pro_plugin_latestpost_title', 'LATEST NEWS' ); 
               set_theme_mod( 'vw_mobile_app_pro_plugin_latestpost_desc', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.' );
               set_theme_mod( 'vw_mobile_app_pro_plugin_latestpost_read_more', 'Read More' ); 

         //Our Partners Title
            set_theme_mod( 'vw_mobile_app_pro_plugin_our_partnersbg_color', '#f3f6fc' ); 
            //Number of boxes to show
            set_theme_mod( 'vw_mobile_app_pro_plugin_our_partners_number', '5' );

            //vw_mobile_app_pro_plugin_our_partners_image
            for($i=1; $i<=6; $i++) {
                  set_theme_mod( 'vw_mobile_app_pro_plugin_our_partners_image'.$i, plugins_url().'/vw-mobile-app-pro-plugin/assets/images/sponsers/sponser'.$i.'.jpg' );
            }

         // Contact Us
            set_theme_mod( 'vw_mobile_app_pro_plugin_home_form_title', 'CONTACT US' ); 

            set_theme_mod( 'vw_mobile_app_pro_plugin_conntact_us_form_shortcode', 'Add Contact Form shortcode' );

         /*customizer-part-social-icons.php*/
            //twitter link
            set_theme_mod( 'vw_mobile_app_pro_plugin_headertwitter', 'https://twitter.com/' ); 
            //facebook link 
            set_theme_mod( 'vw_mobile_app_pro_plugin_headerfacebook', 'https://www.facebook.com/' ); 
            //Linkedin link
            set_theme_mod( 'vw_mobile_app_pro_plugin_headerlinkedin', 'https://www.linkedin.com' ); 
            //GooglePlus link
            set_theme_mod( 'vw_mobile_app_pro_plugin_headergoogleplus', 'https://plus.google.com/' );
            //GooglePlus link
            set_theme_mod( 'vw_mobile_app_pro_plugin_headeryoutube', 'https://www.youtube.com/' );
            //GooglePlus link
            set_theme_mod( 'vw_mobile_app_pro_plugin_headerpinterest', 'https://in.pinterest.com/' ); 

         /*customizer-part-footer.php*/
            //Footer Contact details
            $count = set_theme_mod( 'vw_mobile_app_pro_plugin_footer_contact_details_number', '3' );
            $box_icon = array("fas fa-map-marker-alt", "fas fa-phone", "fas fa-envelope");
            $box_content = array("351 Montreal Ave, Staten Island, NY 10306", "9876543210 , 1234567890", "Expample@gmail.com, 12345@gmail.com");
            for($i=1; $i<=3; $i++){
                  //Box Icon
                  set_theme_mod( 'vw_mobile_app_pro_plugin_footer_contact_details_box_icon'.$i, $box_icon[$i-1] );
                  //Box Icon
                  set_theme_mod( 'vw_mobile_app_pro_plugin_footer_contact_details_box'.$i, $box_content[$i-1] );
            }
         //Footer section
            set_theme_mod( 'vw_mobile_app_pro_plugin_footer_logo', plugins_url().'/vw-mobile-app-pro-plugin/assets/images/footerlogo.png' );

         //Contact Page
            //Longitude
            set_theme_mod( 'vw_mobile_app_pro_plugin_address_longitude', '-80.053361' ); 
            //Latitude
            set_theme_mod( 'vw_mobile_app_pro_plugin_address_latitude', '26.704241' ); 
            //Email Title text
            set_theme_mod( 'vw_mobile_app_pro_plugin_contactpage_email_title', 'Email ' ); 
            //Email ID
            set_theme_mod( 'vw_mobile_app_pro_plugin_contactpage_email', 'abcxuz@gmail.com' ); 
            //Address Title text
            set_theme_mod( 'vw_mobile_app_pro_plugin_address_title', 'Address' ); 
            //Address
            set_theme_mod( 'vw_mobile_app_pro_plugin_address', '455 Martinson, Los Angeles' ); 
            //Phone Title text
            set_theme_mod( 'vw_mobile_app_pro_plugin_contactpage_phone_title', 'Phone' ); 
            //Phone No.
            set_theme_mod( 'vw_mobile_app_pro_plugin_contactpage_phone', '123-456-7890' );

            //Working Hours Title
            set_theme_mod( 'vw_mobile_app_pro_plugin_contactpage_working_hours_title', 'Working Hours' ); 
            //Phone No.
            set_theme_mod( 'vw_mobile_app_pro_plugin_contactpage_working_hours', 'Monday-Friday, 8am to 6pm' ); 

            //Additional Infomation.
            set_theme_mod( 'vw_mobile_app_pro_plugin_contactpage_form_desc', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.' );

            //Contact From Title
            set_theme_mod( 'vw_mobile_app_pro_plugin_contactpage_form_title', 'SAY HELLO!' ); 
            //Phone No.
            set_theme_mod( 'vw_mobile_app_pro_plugin_contactpage_form_subtitle', 'We would love to hear from you!' );  

         //footer text
            //Copyright Text
            set_theme_mod( 'vw_mobile_app_pro_plugin_footer_copy', 'Mobile App Wordpress Theme 2018 | All Rights Reserved.' ); 
         
         //Shortcode
            set_theme_mod( 'vw_mobile_app_pro_plugin_shortcode', '[vw-mobile-app-pro-plugin-team], [vw-mobile-app-pro-plugin-testimonials]' );
            
         /*--- Latest Post---*/
         $post_name = array('BEAUTIFUL PLACE FOR YOUR GREAT JOURNEY','BEST WAY TO LAUNCH AN SHARE YOUR APP');

        	for($i=1;$i<=2;$i++){
            $title = $post_name[$i-1];
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.';
            	// Create post object
            $my_post = array(
            'post_title'    => wp_strip_all_tags( $title ),
            'post_content'  => $content,
            'post_status'   => 'publish',
            'post_type'     => 'post',
            );

            // Insert the post into the database
            $post_id = wp_insert_post( $my_post );

            $image_url = plugins_url().'/vw-mobile-app-pro-plugin/assets/images/blog/blog'.$i.'.jpg';

            $image_name       = 'news'.$i.'.jpg';
            $upload_dir       = wp_upload_dir(); // Set upload folder
            $image_data       = file_get_contents($image_url); // Get image data
            $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
            $filename         = basename( $unique_file_name ); // Create image file name

            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
              $file = $upload_dir['path'] . '/' . $filename;
            } else {
              $file = $upload_dir['basedir'] . '/' . $filename;
            }

            // Create the image  file on the server
            file_put_contents( $file, $image_data );

            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );

            // Set attachment data
            $attachment = array(
              'post_mime_type' => $wp_filetype['type'],
              'post_title'     => sanitize_file_name( $filename ),
              'post_content'   => '',
              'post_type'     => 'post',
              'post_status'    => 'inherit'
            );

            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');

            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );

            // And finally assign featured image to post
            set_post_thumbnail( $post_id, $attach_id );
			   }

        	/*--- Testimonial---*/
          $testimonials_name = array("JHON CENA", "KATTY PERRY","JHON CENA");
          $testimonials_designation = array("Developer, Apps craft", "Ux designer, Apps craft","Developer, Apps craft");
        	for($i=1;$i<=3;$i++){
            $title = $testimonials_name[$i-1];
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita.';
            	// Create post object
            $my_post = array(
            'post_title'    => wp_strip_all_tags( $title ),
            'post_content'  => $content,
            'post_status'   => 'publish',
            'post_type'     => 'testimonials',
            );

            // Insert the post into the database
            $post_id = wp_insert_post( $my_post );

            	// Now replafile_urice meta w/ new updated value array
            	update_post_meta( $post_id, 'vw_mobile_app_pro_plugin_posttype_testimonial_desigstory', $testimonials_designation[$i-1]);

            $image_url = plugins_url().'/vw-mobile-app-pro-plugin/assets/images/testimonials/testimonial'.$i.'.jpg';

            $image_name       = 'testimonial'.$i.'.jpg';
            $upload_dir       = wp_upload_dir(); // Set upload folder
            $image_data       = file_get_contents($image_url); // Get image data
            $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
            $filename         = basename( $unique_file_name ); // Create image file name

            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
              $file = $upload_dir['path'] . '/' . $filename;
            } else {
              $file = $upload_dir['basedir'] . '/' . $filename;
            }

            // Create the image  file on the server
            file_put_contents( $file, $image_data );

            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );

            // Set attachment data
            $attachment = array(
              'post_mime_type' => $wp_filetype['type'],
              'post_title'     => sanitize_file_name( $filename ),
              'post_content'   => '',
              'post_type'     => 'testimonials',
              'post_status'    => 'inherit'
            );

            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');

            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );

            // And finally assign featured image to post
            set_post_thumbnail( $post_id, $attach_id );
			   }

        	/*---Team Post ---*/ 

          $team_name = array("JASON STATHAM", "JESSICA GRAHAM", "JACKIE BAUER", "YASMIN PEARSON");
          $team_designation = array("  Mobile UI/UX Developer", "Mobile App developer", "Database manager", "Digital Marketer");

        	for($i=1;$i<=4;$i++){
         	$title = $team_name[$i-1];
         	$content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum.Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita.';

            // Create post object
         	$my_post = array(
         	  'post_title'    => wp_strip_all_tags( $title ),
         	  'post_content'  => $content,
         	  'post_status'   => 'publish',
               'post_type'     => 'team',
         	);

         	// Insert the post into the database
         	$post_id = wp_insert_post( $my_post );

         	// Now replace meta w/ new updated value array
           	update_post_meta( $post_id, 'meta-desig', 'team@gmail.com');
           	update_post_meta( $post_id, 'meta-call', '123-456-789');
           	update_post_meta( $post_id, 'meta-facebookurl', 'https://www.facebook.com/');
           	update_post_meta( $post_id, 'meta-linkdenurl', 'https://www.linkedin.com');
           	update_post_meta( $post_id, 'meta-twitterurl', 'https://twitter.com/');
           	update_post_meta( $post_id, 'meta-googleplusurl', 'https://plus.google.com' );
           	update_post_meta( $post_id, 'meta-designation', $team_designation[$i-1]);

           	$image_url = plugins_url().'/vw-mobile-app-pro-plugin/assets/images/team/team'.$i.'.jpg';

            $image_name       = 'team'.$i.'.jpg';
            $upload_dir       = wp_upload_dir(); // Set upload folder
            $image_data       = file_get_contents($image_url); // Get image data
            $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
            $filename         = basename( $unique_file_name ); // Create image file name

            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
              $file = $upload_dir['path'] . '/' . $filename;
            } else {
              $file = $upload_dir['basedir'] . '/' . $filename;
            }

            // Create the image  file on the server
            file_put_contents( $file, $image_data );

            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );

            // Set attachment data
            $attachment = array(
              'post_mime_type' => $wp_filetype['type'],
              'post_title'     => sanitize_file_name( $filename ),
              'post_content'   => '',
              'post_type'     => 'team',
              'post_status'    => 'inherit'
            );

            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');

            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );

            // And finally assign featured image to post
            set_post_thumbnail( $post_id, $attach_id );
         }
      }
    ?>
    <ul>
		<li>
			<hr>
			<span class="dashicons dashicons-format-aside"></span><?php esc_html_e('Click on the below content to get demo content installed.','vw-mobile-app-pro-plugin'); ?>
			<br><small><b><?php esc_html_e('Please take backup if your website is already live with data.This importer will fill the VW Mobile App Pro new customizer values.','vw-mobile-app-pro-plugin'); ?></b></small>
			<br><br>
	        <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=vw_mobile_app_pro_plugin_guide" method="POST" onsubmit="return validate(this);">
	            <input type="submit" name="submit" value="<?php esc_html_e('Run Importer','vw-mobile-app-pro-plugin'); ?>" class="button button-primary button-large">
	        </form>
			<script type="text/javascript">
				function validate(valid) {
    				 if(confirm("Do you really want to do this?")){
					    document.forms[0].submit();
					}
				    else {
					    return false;
				    }
				}
			</script>
			<hr>
		</li>
	</ul>
</div>