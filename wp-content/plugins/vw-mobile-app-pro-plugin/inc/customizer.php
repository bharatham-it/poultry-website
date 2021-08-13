<?php
/**
 * vw-mobile-app-pro-plugin Theme Customizer
 *
 * @package vw-mobile-app-pro-plugin
 */
/**
 * Loads custom control for layout settings
 */
function vw_mobile_app_pro_plugin_custom_controls() {
    require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/inc/custom-controls.php';
    require_once VW_MOBILE_APP_PRO_PLUGIN_PATH.'/inc/admin/customize-texteditor-control.php';

}
add_action( 'customize_register', 'vw_mobile_app_pro_plugin_custom_controls' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_mobile_app_pro_plugin_customize_register( $wp_customize ) {
    // $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    // $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    $wp_customize->add_setting('vw_mobile_app_pro_plugin_display_title',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_display_title',array(
        'type' => 'checkbox',
        'label' => __('Show Title','vw-mobile-app-pro-plugin'),
        'section' => 'title_tagline',
    ));
    $wp_customize->add_setting('vw_mobile_app_pro_plugin_display_tagline',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_mobile_app_pro_plugin_display_tagline',array(
        'type' => 'checkbox',
        'label' => __('Show Tagline','vw-mobile-app-pro-plugin'),
        'section' => 'title_tagline',
    ));
    
    //add home page setting pannel
    $wp_customize->add_panel( 'vw_mobile_app_pro_plugin_panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Plugin Settings', 'vw-mobile-app-pro-plugin' ),
        'description' => __( 'Description of what this panel does.', 'vw-mobile-app-pro-plugin' ),
    ) );
    $font_array = array(
        '' => __( 'No Fonts', 'vw-mobile-app-pro-plugin' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-mobile-app-pro-plugin' ),
        'Acme' => __( 'Acme', 'vw-mobile-app-pro-plugin' ),
        'Anton' => __( 'Anton', 'vw-mobile-app-pro-plugin' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-mobile-app-pro-plugin' ),
        'Arimo' => __( 'Arimo', 'vw-mobile-app-pro-plugin' ),
        'Arsenal' => __( 'Arsenal', 'vw-mobile-app-pro-plugin' ),
        'Arvo' => __( 'Arvo', 'vw-mobile-app-pro-plugin' ),
        'Alegreya' => __( 'Alegreya', 'vw-mobile-app-pro-plugin' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-mobile-app-pro-plugin' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-mobile-app-pro-plugin' ),
        'Bangers' => __( 'Bangers', 'vw-mobile-app-pro-plugin' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-mobile-app-pro-plugin' ),
        'Bad Script' => __( 'Bad Script', 'vw-mobile-app-pro-plugin' ),
        'Bitter' => __( 'Bitter', 'vw-mobile-app-pro-plugin' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-mobile-app-pro-plugin' ),
        'BenchNine' => __( 'BenchNine', 'vw-mobile-app-pro-plugin' ),
        'Cabin' => __( 'Cabin', 'vw-mobile-app-pro-plugin' ),
        'Cardo' => __( 'Cardo', 'vw-mobile-app-pro-plugin' ),
        'Courgette' => __( 'Courgette', 'vw-mobile-app-pro-plugin' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-mobile-app-pro-plugin' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-mobile-app-pro-plugin' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-mobile-app-pro-plugin' ),
        'Cuprum' => __( 'Cuprum', 'vw-mobile-app-pro-plugin' ),
        'Cookie' => __( 'Cookie', 'vw-mobile-app-pro-plugin' ),
        'Chewy' => __( 'Chewy', 'vw-mobile-app-pro-plugin' ),
        'Days One' => __( 'Days One', 'vw-mobile-app-pro-plugin' ),
        'Dosis' => __( 'Dosis', 'vw-mobile-app-pro-plugin' ),
        'Economica' => __( 'Economica', 'vw-mobile-app-pro-plugin' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-mobile-app-pro-plugin' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-mobile-app-pro-plugin' ),
        'Francois One' => __( 'Francois One', 'vw-mobile-app-pro-plugin' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-mobile-app-pro-plugin' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-mobile-app-pro-plugin' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-mobile-app-pro-plugin' ),
        'Handlee' => __( 'Handlee', 'vw-mobile-app-pro-plugin' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-mobile-app-pro-plugin' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-mobile-app-pro-plugin' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-mobile-app-pro-plugin' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-mobile-app-pro-plugin' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-mobile-app-pro-plugin' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-mobile-app-pro-plugin' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-mobile-app-pro-plugin' ),
        'Kanit' => __( 'Kanit', 'vw-mobile-app-pro-plugin' ),
        'Lobster' => __( 'Lobster', 'vw-mobile-app-pro-plugin' ),
        'Lato' => __( 'Lato', 'vw-mobile-app-pro-plugin' ),
        'Lora' => __( 'Lora', 'vw-mobile-app-pro-plugin' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-mobile-app-pro-plugin' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-mobile-app-pro-plugin' ),
        'Merriweather' => __( 'Merriweather', 'vw-mobile-app-pro-plugin' ),
        'Monda' => __( 'Monda', 'vw-mobile-app-pro-plugin' ),
        'Montserrat' => __( 'Montserrat', 'vw-mobile-app-pro-plugin' ),
        'Muli' => __( 'Muli', 'vw-mobile-app-pro-plugin' ),
        'Marck Script' => __( 'Marck Script', 'vw-mobile-app-pro-plugin' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-mobile-app-pro-plugin' ),
        'Open Sans' => __( 'Open Sans', 'vw-mobile-app-pro-plugin' ),
        'Overpass' => __( 'Overpass', 'vw-mobile-app-pro-plugin' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-mobile-app-pro-plugin' ),
        'Oxygen' => __( 'Oxygen', 'vw-mobile-app-pro-plugin' ),
        'Orbitron' => __( 'Orbitron', 'vw-mobile-app-pro-plugin' ),
        'Patua One' => __( 'Patua One', 'vw-mobile-app-pro-plugin' ),
        'Pacifico' => __( 'Pacifico', 'vw-mobile-app-pro-plugin' ),
        'Padauk' => __( 'Padauk', 'vw-mobile-app-pro-plugin' ),
        'Playball' => __( 'Playball', 'vw-mobile-app-pro-plugin' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-mobile-app-pro-plugin' ),
        'PT Sans' => __( 'PT Sans', 'vw-mobile-app-pro-plugin' ),
        'Philosopher' => __( 'Philosopher', 'vw-mobile-app-pro-plugin' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-mobile-app-pro-plugin' ),
        'Poiret One' => __( 'Poiret One', 'vw-mobile-app-pro-plugin' ),
        'Quicksand' => __( 'Quicksand', 'vw-mobile-app-pro-plugin' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-mobile-app-pro-plugin' ),
        'Raleway' => __( 'Raleway', 'vw-mobile-app-pro-plugin' ),
        'Rubik' => __( 'Rubik', 'vw-mobile-app-pro-plugin' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-mobile-app-pro-plugin' ),
        'Russo One' => __( 'Russo One', 'vw-mobile-app-pro-plugin' ),
        'Righteous' => __( 'Righteous', 'vw-mobile-app-pro-plugin' ),
        'Slabo' => __( 'Slabo', 'vw-mobile-app-pro-plugin' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-mobile-app-pro-plugin' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-mobile-app-pro-plugin'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-mobile-app-pro-plugin' ),
        'Sacramento' => __( 'Sacramento', 'vw-mobile-app-pro-plugin' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-mobile-app-pro-plugin' ),
        'Tangerine' => __( 'Tangerine', 'vw-mobile-app-pro-plugin' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-mobile-app-pro-plugin' ),
        'VT323' => __( 'VT323', 'vw-mobile-app-pro-plugin' ),
        'Varela Round' => __( 'Varela Round', 'vw-mobile-app-pro-plugin' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-mobile-app-pro-plugin' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-mobile-app-pro-plugin' ),
        'Volkhov' => __( 'Volkhov', 'vw-mobile-app-pro-plugin' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-mobile-app-pro-plugin' )
    );
    //Customize Ordering
    require_once plugin_dir_path(__FILE__) . 'customize-repeater/customize-repeater.php';
    //Separator
    require_once plugin_dir_path(__FILE__) . 'customizer-seperator/class/customizer-seperator.php';
    
    //general Settings
    require_once plugin_dir_path(__FILE__) . 'customizer-custom-variables.php';
    
    //Top bar
    require_once plugin_dir_path(__FILE__) . 'customizer-part-header.php';
    //Home page sections
    require_once plugin_dir_path(__FILE__) . 'customizer-part-home.php';
    // Social icons
    require_once plugin_dir_path(__FILE__) . 'customizer-part-social-icons.php';
    //Footer
    require_once plugin_dir_path(__FILE__) . 'customizer-part-footer.php';

}
add_action( 'customize_register', 'vw_mobile_app_pro_plugin_customize_register' );
//Integer
function vw_mobile_app_pro_plugin_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class vw_mobile_app_pro_plugin_customize {
    /**
     * Returns the instance.
     *
     * @since  1.0.0
     * @access public
     * @return object
     */
    public static function get_instance() {
        static $instance = null;
        if ( is_null( $instance ) ) {
            $instance = new self;
            $instance->setup_actions();
        }
        return $instance;
    }
    /**
     * Constructor method.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function __construct() {}
    /**
     * Sets up initial actions.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function setup_actions() {
        // Register panels, sections, settings, controls, and partials.
        add_action( 'customize_register', array( $this, 'sections' ) );
        add_action( 'customize_register', array( $this, 'mobileApp' ) );
        // Register scripts and styles for the controls.
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
    }
    /**
     * Sets up the customizer sections.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $manager
     * @return void
     */
    public function sections( $manager ) {
        // Load custom sections.
       require_once plugin_dir_path(__FILE__) . 'review-section.php';
        // Register custom section types.
        $manager->register_section_type( 'vw_mobile_app_pro_plugin_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new vw_mobile_app_pro_plugin_customize_reviews_and_testimonials(
                $manager,
                'mobile_pro_example_11',
                array(
                    'title'    => esc_html__( 'Review & Testimonial', 'vw-mobile-app-pro-plugin' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Rate Us', 'vw-mobile-app-pro-plugin' ),
                    'reviews_and_testimonials_url'  => 'https://www.vwthemes.com/topic/reviews-and-testimonials/',
                    'priority'   => 1,
                )
            )
        );
    }
     public function mobileApp( $manager ) {
        // Load custom sections.
        require_once plugin_dir_path(__FILE__) . 'review-section.php';
        // Register custom section types.
        $manager->register_section_type( 'vw_mobile_app_pro_plugin_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new vw_mobile_app_pro_plugin_customize_reviews_and_testimonials(
                $manager,
                'mobile_pro_example_12',
                array(
                    'title'    => esc_html__( 'WooCommerce App', 'vw-mobile-app-pro-plugin' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Buy Now', 'vw-mobile-app-pro-plugin' ),
                    'reviews_and_testimonials_url'  => 'https://www.vwthemes.com/premium-plugin/vw-woocommerce-mobile-app/',
                    'priority'   => 2,
                )
            )
        );
    }
    /**
     * Loads theme customizer CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_control_scripts() {
        wp_enqueue_script( 'vw-mobile-app-pro-plugin-customize-controls', plugin_dir_url(__FILE__). '../assets/js/customize-controls.js');

        wp_enqueue_style( 'vw-mobile-app-pro-plugin-customize-controls', plugin_dir_url(__FILE__). '../assets/css/customize-controls.css');
    }
}
// Doing this customizer thang!
vw_mobile_app_pro_plugin_customize::get_instance();