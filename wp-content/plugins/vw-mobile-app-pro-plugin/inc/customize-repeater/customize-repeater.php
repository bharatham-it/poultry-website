<?php
/**
 * Alpha Color Picker.
 * @package ThemesEye Themes
 */
if ( ! class_exists( 'WP_Customize_Control' ) ){
	return;
}

/**
 * Sortable Repeater Custom Control
 *
 * @author Anthony Hortin <http://maddisondesigns.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 * @link https://github.com/maddisondesigns
 */
class vw_mobile_app_pro_plugin_Repeater_Custom_Control extends WP_Customize_Control {
	/**
	 * The type of control being rendered
	 */
	public $type = 'sortable_repeater';
	/**
		 * Button labels
		 */
	public $button_labels = array();
	/**
	 * Constructor
	 */
	public function __construct( $manager, $id, $args = array(), $options = array() ) {
		parent::__construct( $manager, $id, $args );
		// Merge the passed button labels with our default labels
		$this->button_labels = wp_parse_args( $this->button_labels,
			array(
				'add' => __( 'Add', 'nikah-wedding-pro' ),
			)
		);
	}
	/**
	 * Enqueue our scripts and styles
	 */
	public function enqueue() {
		wp_enqueue_script( 'tethemes_custom_controls_js', plugin_dir_url(__FILE__). 'js/customize-repeater.js');
		wp_enqueue_style( 'tethemes_custom_controls_css', plugin_dir_url(__FILE__). 'css/customize-repeater.css');
		
	}
	/**
	 * Render the control in the customizer
	 */
	public function render_content() {

		$section_name = array('main-banner','about-me','promo-banner','amazing-features','awesome-screenshot','plans-pricing','our-team','testimonial','record','newsletter','latest-posts','contact-us');
		
		$string_array = rtrim(implode(',', $section_name), ',');
	?>
	    <div class="sortable_repeater_control">
			<?php if( !empty( $this->label ) ) { ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php } ?>
			<?php if( !empty( $this->description ) ) { ?>
				<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php } ?>
			<input type="hidden" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $string_array ); ?>" class="customize-control-sortable-repeater" <?php $this->link(); ?> />
			<div class="sortable">
				<div class="repeater">
					<input type="text" value="" class="repeater-input" placeholder="" disabled="disabled" /><span class="dashicons dashicons-sort"></span>
				</div>
			</div>
		</div>
	<?php
	}
}