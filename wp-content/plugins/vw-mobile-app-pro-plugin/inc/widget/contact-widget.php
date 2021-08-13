<?php
/**
 * Custom Widgets
 */

// Creating About widget 
class wpb_widget extends WP_Widget {
	function __construct() {
		parent::__construct(
		// Base ID of your widget
			'wpb_widget', 
			// Widget name will appear in UI
			__('Contct Us', 'vw-mobile-app-pro-plugin'), 
			// Widget description
			array( 'description' => __( 'Widget for Contact Us section', 'vw-mobile-app-pro-plugin' ), ) 
		);
	}
// Creating widget front-end
// This is where the action happens
	public function widget( $args, $instance ) {
		?>
		<div class="contact_us">
		<?php
        
		//creating main title
		$custom_title = apply_filters( 'widget_custom_title', esc_html($instance['custom_title']) );
		// before and after widget arguments are defined by themes
		  echo $args['before_widget'];
		if ( ! empty( $custom_title ) )?>	
		<h3 class="top_title">
			<?php echo esc_html($custom_title); ?>
		</h3>		
		<?php
		//creating content
		$custom_content = apply_filters( 'widget_custom_content', esc_html($instance['custom_content']) );
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $custom_content ) )?>
		<p class="message">
			<?php echo esc_textarea($custom_content);?>
		</p>
		<?php
		//creating Location
		$location_title = apply_filters( 'widget_location_title', esc_html($instance['location_title'] ));
		$location = apply_filters( 'widget_location', esc_html($instance['location'] ));
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $location ) ) ?>
			<div class="location contact_us_widget">
				<div class="row">
					<div class="col-md-3 col-4">
						<div class="contact_us_icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					</div>
					<div class="col-md-9 col-8">
						<div ><strong><?php echo esc_html($location_title); ?></strong>
						<p><?php echo esc_textarea($location); ?></p></div>
					</div>
				</div>
			</div>
		<?php
		//creating Phone
		$phone = apply_filters( 'widget_phone', esc_html($instance['phone'] ));
		$phone_title = apply_filters( 'widget_phone_title', esc_html($instance['phone_title'] ));
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $phone ) ) ?>
			<div class="phone contact_us_widget">
				<div class="row">
					<div class="col-md-3 col-4">
						<div class="contact_us_icon"><i class="fas fa-phone-square" aria-hidden="true"></i></div>
					</div>
					<div class="col-md-9 col-8">
						<div class=""><strong><?php echo esc_html($phone_title); ?></p></strong>
						<p><?php echo esc_html($phone); ?></p></div>
					</div>
				</div>
			</div>
		<?php
		//creating Email
		$email = apply_filters( 'widget_email', esc_html($instance['email'] ));
		$email_title = apply_filters( 'widget_email_title', esc_html($instance['email_title'] ));
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $email ) ) ?>
			<div class="email contact_us_widget">
				<div class="row">
					<div class="col-md-3 col-4">
						<div class="contact_us_icon"><i class="fas fa-envelope-square" aria-hidden="true"></i></div>
					</div>
					<div class="col-md-9 col-8">
						<div><strong><?php echo esc_html($email_title); ?></strong>
						<p><?php echo esc_html($email); ?></p></td></div>
					</div>
				</div>			
			</div>

		<?php
		//creating Email
		$time = apply_filters( 'widget_time', esc_html($instance['time'] ));
		$time_title = apply_filters( 'widget_time_title', esc_html($instance['time_title'] ));
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $time ) ) ?>
			<div class="time contact_us_widget">
				<div class="row">
					<div class="col-md-3 col-4">
						<div class="contact_us_icon"><i class="far fa-clock" aria-hidden="true"></i></div>
					</div>
					<div class="col-md-9 col-8">
						<div><strong><?php echo esc_html($time_title); ?></strong>
						<p><?php echo esc_html($time); ?></p></td></div>
					</div>
				</div>			
			</div>

		<?php
		// This is where you run the code and display the output
		//echo __( 'Hello, World!', 'vw-mobile-app-pro-plugin' );
		//echo $args['after_widget'];
	}
		
	// Widget Backend 
	public function form( $instance ) {
		//Main title
		if ( isset( $instance[ 'custom_title' ] ) ) {
			esc_html($custom_title = $instance[ 'custom_title' ]);
		}
		else {
			esc_html($custom_title = '');
		}
		//custom_content
		if ( isset( $instance[ 'custom_content' ] ) ) {
			esc_html($custom_content = $instance[ 'custom_content' ]);
		}
		else {
			esc_html($custom_content = '');
		}
		//Location Title
		if ( isset( $instance[ 'location_title' ] ) ) {
			esc_html($location_title = $instance[ 'location_title' ]);
		}
		else {
			esc_html($location_title = '');
		}
		//Location
		if ( isset( $instance[ 'location' ] ) ) {
			esc_html($location = $instance[ 'location' ]);
		}
		else {
			esc_html($location = '');
		}
		//Phone Title
		if ( isset( $instance[ 'phone_title' ] ) ) {
			esc_html($phone_title = $instance[ 'phone_title' ]);
		}
		else {
			esc_html($phone_title = '');
		}
		//Phone
		if ( isset( $instance[ 'phone' ] ) ) {
			esc_html($phone = $instance[ 'phone' ]);
		}
		else {
			esc_html($phone = '');
		}
		//Email
		if ( isset( $instance[ 'email_title' ] ) ) {
			esc_html($email_title = $instance[ 'email_title' ]);
		}
		else {
			esc_html($email_title = '');
		}
		//Email
		if ( isset( $instance[ 'email' ] ) ) {
			esc_html($email = $instance[ 'email' ]);
		}
		else {
			esc_html($email = '');
		}	
		//Time
		if ( isset( $instance[ 'time_title' ] ) ) {
			esc_html($time_title = $instance[ 'time_title' ]);
		}
		else {
			esc_html($time_title = '');
		}
		//Time
		if ( isset( $instance[ 'time' ] ) ) {
			esc_html($time = $instance[ 'time' ]);
		}
		else {
			esc_html($time = '');
		}		
		?>
			<!--Main title field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'custom_title' )); ?>"><?php esc_html_e( 'Title:', 'vw-mobile-app-pro-plugin' ); ?></label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'custom_title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'custom_title' )); ?>" type="text" value="<?php echo esc_attr( $custom_title ); ?>" />
			</p>			
			<!--Message field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'custom_content' )); ?>"><?php esc_html_e( 'Content:','vw-mobile-app-pro-plugin' ); ?></label> 
				<textarea class="widefat" id="<?php echo esc_attr($this->get_field_id( 'custom_content' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'custom_content' )); ?>" type="text"  value="<?php echo esc_attr( $custom_content ); ?>" ><?php if (!empty($custom_content))  { echo esc_html($custom_content); } ?></textarea>
			</p>
			<!--Location field-->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'location_title' )); ?>"><?php esc_html_e( 'Location Title:', 'vw-mobile-app-pro-plugin'); ?></label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'location_title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'location_title' )); ?>" type="text" value="<?php echo esc_attr( $location_title ); ?>" />
			</p>

			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'location' )); ?>"><?php esc_html_e( 'Location:', 'vw-mobile-app-pro-plugin'); ?></label>
				<textarea class="widefat" id="<?php echo esc_attr($this->get_field_id( 'location' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'location' )); ?>" type="text" value="<?php echo esc_attr( $location ); ?>" ><?php if (!empty($location)){ echo esc_html($location); } ?></textarea>
			</p>
			<!--Phone field-->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'phone_title' )); ?>"><?php esc_html_e( 'Phone Title:', 'vw-mobile-app-pro-plugin'); ?></label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'phone_title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'phone_title' )); ?>" type="text" value="<?php echo esc_attr( $phone_title ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'phone' )); ?>"><?php esc_html_e( 'Phone:', 'vw-mobile-app-pro-plugin'); ?></label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'phone' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'phone' )); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />
			</p>
			<!--Email field -->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'email_title' )); ?>"><?php esc_html_e( 'Email Title:', 'vw-mobile-app-pro-plugin'); ?></label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'email_title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'email_title' )); ?>" type="text" value="<?php echo esc_attr( $email_title ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'email' )); ?>"><?php esc_html_e( 'Email:', 'vw-mobile-app-pro-plugin'); ?></label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'email' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'email' )); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
			</p>	
			<!--time--->
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'time_title' )); ?>"><?php esc_html_e( 'Timings:', 'vw-mobile-app-pro-plugin'); ?></label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'time_title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'time_title' )); ?>" type="text" value="<?php echo esc_attr( $time_title ); ?>" />
			</p>
			<p>
				<label for="<?php echo esc_attr($this->get_field_id( 'time' )); ?>"><?php esc_html_e( 'Time:', 'vw-mobile-app-pro-plugin'); ?></label>
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'time' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'time' )); ?>" type="text" value="<?php echo esc_attr( $time ); ?>" />
			</p>	 
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();

		//title instance
		$instance['custom_title'] = (!empty( $new_instance['custom_title']))? strip_tags( $new_instance['custom_title'] ) : '';

		//content instance
		$instance['custom_content'] = ( ! empty( $new_instance['custom_content']))? strip_tags( $new_instance['custom_content'] ) : '';

		//location instance
		$instance['location_title'] = (! empty( $new_instance['location_title']))? strip_tags( $new_instance['location_title'] ) : '';
		$instance['location'] = (! empty( $new_instance['location']))? strip_tags( $new_instance['location'] ) : '';

		//phone instance
		$instance['phone_title'] = (! empty( $new_instance['phone_title']))? strip_tags( $new_instance['phone_title'] ) : '';
		$instance['phone'] = (! empty( $new_instance['phone']))? strip_tags( $new_instance['phone'] ) : '';

		//email instance
		$instance['email_title'] = (! empty( $new_instance['email_title']))? strip_tags( $new_instance['email_title'] ) : '';
		$instance['email'] = (! empty( $new_instance['email']))? strip_tags( $new_instance['email'] ) : '';

		//Time instance
		$instance['time_title'] = (! empty( $new_instance['time_title']))? strip_tags( $new_instance['time_title'] ) : '';
		$instance['time'] = (! empty( $new_instance['time']))? strip_tags( $new_instance['time'] ) : '';

		return $instance;
	}
} // Class wpb_widget ends here
	// Register and load the widget
	function wpb_load_widget() {
		register_widget( 'wpb_widget' );
	}
add_action( 'widgets_init', 'wpb_load_widget' );