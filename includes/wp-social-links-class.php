<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 30/08/2018
 * Time: 11:42 AM
 */

class WP_Social_Links_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		parent::__construct(
			'WP_Social_Links_Widget', // Base ID
			esc_html__( 'WP Social Links Widget', 'sl_domain' ), // Name
			[ 'Outputs social icons linked to profiles' => esc_html__( 'A Foo Widget', 'sl_domain' ), ] // Args
		);
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		?>
		TEST FRONTEND;
		<?php
	}

	/**
	 * Outputs the options form admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		/* Call Form Function */
		$this->getForm( $instance );
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
		$instance = [
			'facebook_link' => ( ! empty( $new_instance['facebook_link'] ) ) ? strip_tags( $new_instance['facebook_link'] ) : '',
			'facebook_icon' => ( ! empty( $new_instance['facebook_icon'] ) ) ? strip_tags( $new_instance['facebook_icon'] ) : '',
			'twitter_link'  => ( ! empty( $new_instance['twitter_link'] ) ) ? strip_tags( $new_instance['twitter_link'] ) : '',
			'twitter_icon'  => ( ! empty( $new_instance['twitter_icon'] ) ) ? strip_tags( $new_instance['twitter_icon'] ) : '',
			'google_link'   => ( ! empty( $new_instance['google_link'] ) ) ? strip_tags( $new_instance['google_link'] ) : '',
			'google_icon'   => ( ! empty( $new_instance['google_icon'] ) ) ? strip_tags( $new_instance['google_icon'] ) : '',
			'linkedin_link' => ( ! empty( $new_instance['linkedin_link'] ) ) ? strip_tags( $new_instance['linkedin_link'] ) : '',
			'linkedin_icon' => ( ! empty( $new_instance['linkedin_icon'] ) ) ? strip_tags( $new_instance['linkedin_icon'] ) : '',
			'icon_width'     => ( ! empty( $new_instance['icon_width'] ) ) ? strip_tags( $new_instance['icon_width'] ) : '',
		];

		return $instance;
	}

	/**
	 * Gets and displays form
	 *
	 * @param array $instance The widget options
	 */
	public function getForm( $instance ) {
		/* Get Facebook Link */
		if ( isset( $instance['facebook_link'] ) ) {
			$facebook_link = esc_attr( $instance['facebook_link'] );
		} else {
			$facebook_link = 'https://www.facebook.com';
		}

		/* Get Twitter Link */
		if ( isset( $instance['facebook_link'] ) ) {
			$twitter_link = esc_attr( $instance['twitter_link'] );
		} else {
			$twitter_link = 'https://www.twitter.com';
		}

		/* Get Linkedin Link */
		if ( isset( $instance['linkedin'] ) ) {
			$linkedin_link = esc_attr( $instance['linkedin_link'] );
		} else {
			$linkedin_link = 'https://www.linkedin.com';
		}

		/* Get Google Link */
		if ( isset( $instance['google_link'] ) ) {
			$google_link = esc_attr( $instance['google_link'] );
		} else {
			$google_link = 'https://plus.google.com';
		}

		/* Get Facebook icon */
		if ( isset( $instance['facebook_icon'] ) ) {
			$facebook_icon = esc_attr( $instance['facebook_icon'] );
		} else {
			$facebook_icon = plugins_url() . '/wp-social-links/img/facebook.png';
		}

		/* Get Twitter icon */
		if ( isset( $instance['twitter_icon'] ) ) {
			$twitter_icon = esc_attr( $instance['twitter_icon'] );
		} else {
			$twitter_icon = plugins_url() . '/wp-social-links/img/twitter.png';
		}

		/* Get Linkedin icon */
		if ( isset( $instance['linkedin_icon'] ) ) {
			$linkedin_icon = esc_attr( $instance['linkedin_icon'] );
		} else {
			$linkedin_icon = plugins_url() . '/wp-social-links/img/linkedin.png';
		}

		/* Get Google icon */
		if ( isset( $instance['google_icon'] ) ) {
			$google_icon = esc_attr( $instance['google_icon'] );
		} else {
			$google_icon = plugins_url() . '/wp-social-links/img/google-plus.png';
		}

		/* Get Icon Size */
		if ( isset( $instance['icon_width'] ) ) {
			$icon_width = esc_attr( $instance['icon_width'] );
		} else {
			$icon_width = 32;
		}

		?>

		<h4>Facebook</h4>
		<p>
			<label for="<?= $this->get_field_id( 'facebook_link' ) ?>"><?= __( 'Facebook Link' ) ?></label></p>
		<input type="text" class="widefat" id="<?= $this->get_field_id( 'facebook_link' ) ?>"
		       name="<?= $this->get_field_name( 'facebook_link' ) ?>" value="<?= esc_attr( $facebook_link ) ?>">
		</p>

		<p>
			<label for="<?= $this->get_field_id( 'facebook_icon' ) ?>"><?= __( 'Facebook Icon' ) ?></label></p>
		<input type="text" class="widefat" id="<?= $this->get_field_id( 'facebook_icon' ) ?>"
		       name="<?= $this->get_field_name( 'facebook_icon' ) ?>" value="<?= esc_attr( $facebook_icon ) ?>">
		</p>

		<h4>Twitter</h4>

		<p>
			<label for="<?= $this->get_field_id( 'twitter_link' ) ?>"><?= __( 'twitter Link' ) ?></label></p>
		<input type="text" class="widefat" id="<?= $this->get_field_id( 'twitter_link' ) ?>"
		       name="<?= $this->get_field_name( 'twitter_link' ) ?>" value="<?= esc_attr( $twitter_link ) ?>">
		</p>

		<p>
			<label for="<?= $this->get_field_id( 'twitter_icon' ) ?>"><?= __( 'twitter Icon' ) ?></label></p>
		<input type="text" class="widefat" id="<?= $this->get_field_id( 'twitter_icon' ) ?>"
		       name="<?= $this->get_field_name( 'twitter_icon' ) ?>" value="<?= esc_attr( $twitter_icon ) ?>">
		</p>

		<h4>Linkedin</h4>

		<p>
			<label for="<?= $this->get_field_id( 'linkedin_link' ) ?>"><?= __( 'linkedin Link' ) ?></label></p>
		<input type="text" class="widefat" id="<?= $this->get_field_id( 'linkedin_link' ) ?>"
		       name="<?= $this->get_field_name( 'linkedin_link' ) ?>" value="<?= esc_attr( $linkedin_link ) ?>">
		</p>

		<p>
			<label for="<?= $this->get_field_id( 'linkedin_icon' ) ?>"><?= __( 'linkedin Icon' ) ?></label></p>
		<input type="text" class="widefat" id="<?= $this->get_field_id( 'linkedin_icon' ) ?>"
		       name="<?= $this->get_field_name( 'linkedin_icon' ) ?>" value="<?= esc_attr( $linkedin_icon ) ?>">
		</p>

		<h4>Google Plus</h4>

		<p>
			<label for="<?= $this->get_field_id( 'google_link' ) ?>"><?= __( 'google Link' ) ?></label></p>
		<input type="text" class="widefat" id="<?= $this->get_field_id( 'google_link' ) ?>"
		       name="<?= $this->get_field_name( 'google_link' ) ?>" value="<?= esc_attr( $google_link ) ?>">
		</p>

		<p>
			<label for="<?= $this->get_field_id( 'google_icon' ) ?>"><?= __( 'Google Icon' ) ?></label></p>
		<input type="text" class="widefat" id="<?= $this->get_field_id( 'google_icon' ) ?>"
		       name="<?= $this->get_field_name( 'google_icon' ) ?>" value="<?= esc_attr( $google_icon ) ?>">
		</p>

		<p>
			<label for="<?= $this->get_field_id( 'icon_width' ) ?>"><?= __( 'Icon Width' ) ?></label></p>
		<input type="text" class="widefat" id="<?= $this->get_field_id( 'icon_width' ) ?>"
		       name="<?= $this->get_field_name( 'icon_width' ) ?>" value="<?= esc_attr( $icon_width ) ?>">
		</p>

		<?php
	}
}

