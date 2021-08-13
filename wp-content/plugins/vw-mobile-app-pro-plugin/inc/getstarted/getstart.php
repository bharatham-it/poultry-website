<?php
//about theme info
add_action( 'admin_menu', 'vw_mobile_app_pro_plugin_gettingstarted' );
function vw_mobile_app_pro_plugin_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'vw-mobile-app-pro-plugin'), esc_html__('Get Started', 'vw-mobile-app-pro-plugin'), 'edit_theme_options', 'vw_mobile_app_pro_plugin_guide', 'vw_mobile_app_pro_plugin_mostrar_guide');   
}
$theme = wp_get_theme(); // gets the current theme
function vw_mobile_app_pro_plugin_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<p><img src="<?php echo VW_MOBILE_APP_PRO_PLUGIN_EXT_URI.'inc/getstarted/images/final-logo.png'?>" width="200"></p>
			<h2><?php esc_html_e( 'Thanks for installing Sirat theme, you rock!', 'vw-mobile-app-pro-plugin' ) ?> </h2>
			<p><?php esc_html_e( 'VW Mobile App Pro now supports colors, typography custom links for custom post types. Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional website', 'vw-mobile-app-pro-plugin' ) ?></p>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'vw-mobile-app-pro-plugin' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=vw_mobile_app_pro_plugin_guide' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Getting Started With VW Mobile App Pro Plugin', 'vw-mobile-app-pro-plugin' ); ?></a></p>
		</div>
	</div>
	<?php }
}
if ( 'Sirat' == $theme->name) {
	add_action('admin_notices', 'vw_mobile_app_pro_plugin_notice');
}

function vw_mobile_app_pro_plugin_notice1(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<p><img src="<?php echo VW_MOBILE_APP_PRO_PLUGIN_EXT_URI.'inc/getstarted/images/final-logo.png'?>" width="200"></p>
			<h2><?php _e( 'To take the benefit of VW Mobile App Pro Plugin please activate Sirat Free Theme', 'vw-mobile-app-pro-plugin' ) ?> </h2>
		</div>
	</div>
	<?php }
}
if ( 'Sirat' != $theme->name) {
	add_action('admin_notices', 'vw_mobile_app_pro_plugin_notice1');
}

add_action( 'admin_notices', 'vw_mobile_app_pro_plugin_r_review' );
function vw_mobile_app_pro_plugin_r_review() {

	// Verify that we can do a check for reviews.
	$review = get_option( 'vw_mobile_app_pro_plugin_r_review' );
	$time	= time();
	$load	= false;
	if ( ! $review ) {
		$review = array(
			'time' 		=> $time,
			'dismissed' => false
		);
		add_option('vw_mobile_app_pro_plugin_r_review', $review);
		//$load = true;
	} else {
		// Check if it has been dismissed or not.
		if ( (isset( $review['dismissed'] ) && ! $review['dismissed']) && (isset( $review['time'] ) && (($review['time'] + (DAY_IN_SECONDS * 2)) <= $time)) ) {
			$load = true;
		}
	}
	// If we cannot load, return early.
	if ( ! $load ) {
		return;
	}

	// We have a candidate! Output a review message.
	?>
	<div class="notice notice-info is-dismissible vw_mobile_app_pro_plugin-acc-r-review-notice">
		<div class="vw_notice_outer">
			<img class="vw-logo_img" src="<?php echo plugin_dir_url(__FILE__).'images/V-Logo.png'; ?>" />
		</div>
		<p class="vw_review_head"><?php echo esc_html('Hi! We saw you have been using VW Mobile App Pro plugin for a few days and wanted to ask for your help to make the theme better.We just need a minute of your time to rate the theme. Thank you!'); ?></p>
		<p class="vw_review_buttons"> 
			<a href="<?php echo esc_url (vw_mobile_app_pro_plugin_REVIEW); ?>" class="vw_mobile_app_pro_plugin-acc-r-dismiss-review-notice vw_mobile_app_pro_plugin-acc-r-review-out vw_review_buttons_a" target="_blank" rel="noopener"><?php echo esc_html('Rate the Theme','vw-mobile-app-pro-plugin'); ?></a>
			<a href="#"  class="vw_mobile_app_pro_plugin-acc-r-dismiss-review-notice vw_mobile_app_pro_plugin-rate-later vw_review_buttons_a" target="_self" rel="noopener"><?php echo esc_html( 'Maybe Later', '' ); ?></a>
			<a href="#" class="vw_mobile_app_pro_plugin-acc-r-dismiss-review-notice vw_mobile_app_pro_plugin-rated vw_review_buttons_a" target="_self" rel="noopener"><?php echo esc_html( 'I already did', '' ); ?></a>
		</p>
	</div>
	<script type="text/javascript">
		jQuery(document).ready( function($) {
			$(document).on('click', '.vw_mobile_app_pro_plugin-acc-r-dismiss-review-notice, .vw_mobile_app_pro_plugin-acc-r-dismiss-notice .notice-dismiss', function( event ) {
				if ( $(this).hasClass('vw_mobile_app_pro_plugin-acc-r-review-out') ) {
					var vw_mobile_app_pro_plugin_rate_data_val = "1";
				}
				if ( $(this).hasClass('vw_mobile_app_pro_plugin-rate-later') ) {
					var vw_mobile_app_pro_plugin_rate_data_val =  "2";
					event.preventDefault();
				}
				if ( $(this).hasClass('vw_mobile_app_pro_plugin-rated') ) {
					var vw_mobile_app_pro_plugin_rate_data_val =  "3";
					event.preventDefault();
				}

				$.post( ajaxurl, {
					action: 'vw_mobile_app_pro_plugin_r_dismiss_reviews',
					vw_mobile_app_pro_plugin_rate_data_acc_r : vw_mobile_app_pro_plugin_rate_data_val
				});
				
				$('.vw_mobile_app_pro_plugin-acc-r-review-notice').hide();
				//location.reload();
			});
		});
	</script>
	<?php
}

add_action( 'wp_ajax_vw_mobile_app_pro_plugin_r_dismiss_reviews', 'vw_mobile_app_pro_plugin_r_dismiss_reviews' );
function vw_mobile_app_pro_plugin_r_dismiss_reviews() {
	if ( ! $review ) {
		$review = array();
	}
	
	if($_POST['vw_mobile_app_pro_plugin_rate_data_acc_r']=="1"){
		$review['time'] 	 = time();
		$review['dismissed'] = false;
		
	}
	if($_POST['vw_mobile_app_pro_plugin_rate_data_acc_r']=="2"){
		$review['time'] 	 = time();
		$review['dismissed'] = false;
		
	}
	if($_POST['vw_mobile_app_pro_plugin_rate_data_acc_r']=="3"){
		$review['time'] 	 = time();
		$review['dismissed'] = true;
		
	}
	update_option( 'vw_mobile_app_pro_plugin_r_review', $review );
	die;
}

// Add a Custom CSS file to WP Admin Area
function vw_mobile_app_pro_plugin_admin_theme_style() {
   wp_enqueue_style( 'vw-mobile-app-pro-plugin-font', vw_mobile_app_pro_plugin_admin_font_url(), array() );
  wp_enqueue_style('custom-admin-style', plugin_dir_url(__FILE__). 'getstart.css');
   wp_enqueue_script('tabs',plugin_dir_url(__FILE__). 'js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_mobile_app_pro_plugin_admin_theme_style');

// Theme Font URL
function vw_mobile_app_pro_plugin_admin_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Muli:300,400,600,700,800,900';

	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//guidline for about theme
function vw_mobile_app_pro_plugin_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-mobile-app-pro-plugin' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Mobile App Pro', 'vw-mobile-app-pro-plugin' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-mobile-app-pro-plugin'); ?></p>
    </div>
    <div class="tab-sec">
		<div class="tab">
		  	<button class="tablinks" onclick="openCity(event, 'theme_desc_pro')"><?php esc_html_e( 'Getting Started', 'vw-mobile-app-pro-plugin' ); ?></button> 
		  	<button class="tablinks" onclick="openCity(event, 'demo_importer')"><?php esc_html_e( 'Demo Content Importer', 'vw-mobile-app-pro-plugin' ); ?></button> 
		  	<button class="tablinks" onclick="openCity(event, 'plugins')"><?php esc_html_e( 'Plugins', 'vw-mobile-app-pro-plugin' ); ?></button>
		  	<button class="tablinks" onclick="openCity(event, 'theme_offer')"><?php echo esc_html( 'Hire Us', 'vw-mobile-app-pro-plugin' ); ?></button>
		 	<button class="tablinks" onclick="openCity(event, 'our_theme')"><?php echo esc_html( 'Other Product', 'vw-mobile-app-pro-plugin' ); ?></button>
		</div>

		<!-- Tab content -->
		<div id="theme_desc_pro" class="tabcontent open">
			
		  	<div class="col-left-inner">
		  		<h3><?php esc_html_e( 'VW Mobile App Pro Information', 'vw-mobile-app-pro-plugin' ); ?></h3>
				<hr class="h3hr">
		  		<h4><?php esc_html_e( 'Plugin Documentation', 'vw-mobile-app-pro-plugin' ); ?></h4>
				<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-mobile-app-pro-plugin' ); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_MOBILE_APP_PRO_PLUGIN_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-mobile-app-pro-plugin' ); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Theme Customizer', 'vw-mobile-app-pro-plugin'); ?></h4>
				<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-mobile-app-pro-plugin'); ?></p>
				<div class="info-link">
					<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-mobile-app-pro-plugin'); ?></a>
				</div>
				<hr>				
				<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-mobile-app-pro-plugin'); ?></h4>
				<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-mobile-app-pro-plugin'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( vw_mobile_app_pro_plugin_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-mobile-app-pro-plugin'); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Reviews & Testimonials', 'vw-mobile-app-pro-plugin'); ?></h4>
				<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-mobile-app-pro-plugin'); ?>  </p>
				<div class="info-link">
					<a href="<?php echo esc_url( vw_mobile_app_pro_plugin_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-mobile-app-pro-plugin'); ?></a>
				</div>
		  	</div>
		  	<div class="col-right-inner">
			  <h3><?php esc_html_e('How to set up Home Page Template','vw-mobile-app-pro-plugin'); ?></h3>
			  <hr class="h3hr">
				<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-mobile-app-pro-plugin'); ?></p>
                 <ul>
                  <li><?php esc_html_e('1. Create a Page to set template:  Go to ','vw-mobile-app-pro-plugin'); ?>
                  <b><?php esc_html_e('Dashboard &gt;&gt; Pages &gt;&gt; Add New Page','vw-mobile-app-pro-plugin'); ?></b>.
                  <p><?php esc_html_e('Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.','vw-mobile-app-pro-plugin'); ?></p></li>
                  <img src="<?php echo plugin_dir_url(__FILE__). 'images/home-page-template.png'; ?>" alt="" />
                  <p></p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-mobile-app-pro-plugin'); ?></span><?php esc_html_e(' Go to ','vw-mobile-app-pro-plugin'); ?>
				  <b><?php esc_html_e(' Settings -&gt; Reading --&gt; Set the front page display static page to home page ','vw-mobile-app-pro-plugin'); ?></b></p>
                  <img src="<?php echo plugin_dir_url(__FILE__). 'images/set-front-page.png'; ?>" alt="" />
                  <p><?php esc_html_e(' Once you are done with this, you can see all the demo content on front page. ','vw-mobile-app-pro-plugin'); ?></p>
                 </ul>
		  	</div>
		</div>	
		<div id="plugins" class="tabcontent">
			<h2 class="dashboard-install-title"><?php esc_html_e(' Install Required Plugins ','vw-mobile-app-pro-plugin'); ?></h2>
             <div class="required_theme">
            	<p>
					<?php esc_html_e('In order to use vw mobile app pro plugin you need to install sirat free theme ','vw-mobile-app-pro-plugin'); ?>
				</p>
				<ul>
					<li>
						<?php esc_html_e('Go to wordpress dashboard >> appearance >> themes','vw-mobile-app-pro-plugin'); ?>
					</li>
					<li>
						<?php esc_html_e('click on add New then upload theme','vw-mobile-app-pro-plugin'); ?>
					</li>
					<li>
						<?php esc_html_e('Select your theme folder and click on install now button','vw-mobile-app-pro-plugin'); ?>
					</li>
					<li>
						<?php esc_html_e('After installation activate sirat theme','vw-mobile-app-pro-plugin'); ?>
					</li>

				</ul>
			</div>
	     	<div class="posttype-plugin">
		     	<h2 id="heading"><?php esc_html_e('Set up VW Mobile App pro Plugin','vw-mobile-app-pro-plugin'); ?></h2>
		     	<p><b><?php esc_html_e('Plugins are ways to extend and add to the functionality that already exists in WordPress.','vw-mobile-app-pro-plugin'); ?></b></p>
		     	<ol>
		     		<li><img src="<?php echo plugin_dir_url(__FILE__).'images/right-arrow.png'; ?>" alt="" /> <?php esc_html_e('First, you need to download the plugin from the source (which will be a zip file vw-mobile-app-pro-plugin).','vw-mobile-app-pro-plugin'); ?> </li>
		     		<li><img src="<?php echo plugin_dir_url(__FILE__).'images/right-arrow.png'; ?>" alt="" /> <?php esc_html_e('Next, you need to go to WordPress admin area and visit Plugins &#187; Add New.','vw-mobile-app-pro-plugin'); ?>  </b></li>
		     		<figure class="img-paraloid"><img src="<?php echo plugin_dir_url(__FILE__). 'images/uploadplug.png'; ?>" alt="" /></figure>
		     		<li><img src="<?php echo plugin_dir_url(__FILE__).'images/right-arrow.png'; ?>" alt="" /> <?php esc_html_e('After that, click on the ','vw-mobile-app-pro-plugin'); ?> <b><?php esc_html_e('Upload Plugin button','vw-mobile-app-pro-plugin'); ?></b> <?php esc_html_e('on top of the page.','vw-mobile-app-pro-plugin'); ?></li>
		     		<li><img src="<?php echo plugin_dir_url(__FILE__).'images/right-arrow.png'; ?>" alt="" /> <?php esc_html_e('This will bring you to the plugin upload page.','vw-mobile-app-pro-plugin'); ?> </li>
		     		<li><img src="<?php echo plugin_dir_url(__FILE__).'images/right-arrow.png'; ?>" alt="" />  <?php esc_html_e('Here, you need to click on the choose file button and select the plugin file you downloaded earlier to your computer.','vw-mobile-app-pro-plugin'); ?></li>
		     		<figure class="img-paraloid pull-left"><img src="<?php echo plugin_dir_url(__FILE__). 'images/pluginuploadpage.png'; ?>" alt="" /></figure>
		     		<li><img src="<?php echo plugin_dir_url(__FILE__).'images/right-arrow.png'; ?>" alt="" /> <?php esc_html_e(' After you have selected the file, you need to click on the install now button.','vw-mobile-app-pro-plugin'); ?></li>
		     		<li><img src="<?php echo plugin_dir_url(__FILE__).'images/right-arrow.png'; ?>" alt="" />  <?php esc_html_e(' WordPress will now upload the plugin file from your computer and install it for you. You will see a success message like this after installation is finished.','vw-mobile-app-pro-plugin'); ?></li>
		     		<li><img src="<?php echo plugin_dir_url(__FILE__).'images/right-arrow.png'; ?>" alt="" />  <?php esc_html_e(' Once installed, you need to click on the Activate Plugin link to start using the plugin.','vw-mobile-app-pro-plugin'); ?></li>
		     		<li><img src="<?php echo plugin_dir_url(__FILE__).'images/right-arrow.png'; ?>" alt="" /> <?php esc_html_e('  As soon as you activate plugin, you will Team and Testimonial in your Admin Navigation Pannel.','vw-mobile-app-pro-plugin'); ?></li>
		        </ol>
	     	</div>
		</div>
		<div id="our_theme" class="tabcontent">
			<h3><?php echo esc_html( 'You may also like some of our products', 'vw-mobile-app-pro-plugin' ); ?></h3>
			<hr class="h3hr">
			<div class="row-bar">
				<div class="col2-first">
					<h3><?php echo esc_html('SHOPIFY THEME','vw-mobile-app-pro-plugin'); ?></h3>
					<img src="<?php echo plugin_dir_url(__FILE__). 'images/shopify.png'; ?>" alt="" />
					<h4><b><?php echo esc_html('VW SHOWCASE SHOPIFY THEME','vw-mobile-app-pro-plugin'); ?></b></h4>
					<p><?php echo esc_html('If you want to run an online store, VW Showcase is the theme for you. Set your business statement by emphasizing on your products that could be anything like electronic items, home appliances, fashion accessories etc.','vw-mobile-app-pro-plugin'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( vw_mobile_app_pro_plugin_SHOPIFY ); ?>" target="_blank"><?php echo esc_html( 'Live Demo', 'vw-mobile-app-pro-plugin' ); ?></a>
					</div>
				</div>
				<div class="col2-first">
					<h3><?php echo esc_html('MOODLE THEME','vw-charity-pro'); ?></h3>
					<img src="<?php echo plugin_dir_url(__FILE__). 'images/moodle.png'; ?>" alt="" />
					<h4><b><?php echo esc_html('TALEEM RESPONSIVE LMS PRODUCT','vw-mobile-app-pro-plugin'); ?></b></h4>
					<p><?php echo esc_html('Taleem is a responsive Lms Product developed to be used by schools, colleges, universities, coaching institutes, online course providers and similar websites.','vw-mobile-app-pro-plugin'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( vw_mobile_app_pro_plugin_MOODLE ); ?>" target="_blank"><?php echo esc_html( 'Live Demo', 'vw-mobile-app-pro-plugin' ); ?></a>
					</div>
				</div>
				<div class="col2-first">
					<h3><?php echo esc_html('MOBILE APP','vw-mobile-app-pro-plugin'); ?></h3>
					<img src="<?php echo plugin_dir_url(__FILE__). 'images/mobile_app.png'; ?>" alt="" />
					<h4><b><?php echo esc_html('VW WOOCOMMERCE MOBILE APP','vw-mobile-app-pro-plugin'); ?></b></h4>
					<p><?php echo esc_html('Give your customer freedom and convenience of shopping from mobile through your own mobile commerce App. This app will be fully synchronised with your woo-commerce store. Place orders easily and set extra mobile benefits.','vw-mobile-app-pro-plugin'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( vw_mobile_app_pro_plugin_MOBILE_APP ); ?>" target="_blank"><?php echo esc_html( 'Live Demo', 'vw-mobile-app-pro-plugin' ); ?></a>
					</div>
				</div>
			</div>
		</div>
		<div id="theme_offer" class="tabcontent">
			<p><a href="<?php echo esc_url(vw_mobile_app_pro_plugin_CONTACT); ?>"><img src="<?php echo plugin_dir_url(__FILE__). 'images/theme_offers.png'; ?>" alt="" /></a></p>
		</div>
		<div id="demo_importer" class="tabcontent">
			<h3><?php esc_html_e('Do Before Demo Importer', 'vw-mobile-app-pro-plugin'); ?></h3>
			<ol class="importer-note">
				<li>
				<?php esc_html_e('1.Firstly Upload and Activate Sirat Free Theme From','w-mobile-app-pro'); ?>
					<a href="https://wordpress.org/themes/sirat/" target="_blank">WordPress.org</a>
				</li>
				<li>
				<?php esc_html_e('2. Upload and Activate Contact Form 7 plugin.', 'vw-mobile-app-pro-plugin'); ?>
				</li>
				<li>
				<?php esc_html_e('3. Then run demo importer to display demo contents.', 'vw-spa-pro'); ?>
				</li>
			</ol>
			<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'vw-mobile-app-pro-plugin' ); ?></h3>
			<hr class="h3hr">
			<?php 
			/* Get Started. */ 
			require_once plugin_dir_path(__FILE__) .'demo-importer.php';  ?>
		</div>
	</div>
</div>
<?php } ?>