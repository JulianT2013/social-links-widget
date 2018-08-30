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
			array( 'Outputs social icons linked to profiles' => esc_html__( 'A Foo Widget', 'sl_domain' ), ) // Args
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
	}

	/**
	 * Gets and displays form
	 *
	 * @param array $instance The widget options
	 */
	public function getForm( $instance ) {
		/* Get Facebook Link */
		if( isset( $instance['facebook_link'] ) ) {
			$facebook_link = esc_attr( $instance['facebook_link'] );
		} else {
			$facebook_link = 'https://www.facebook.com';
		}

		/* Get Twitter Link */
		if( isset( $instance['facebook_link'] ) ) {
			$twitter_link = esc_attr( $instance['twitter_link'] );
		} else {
			$twitter_link = 'https://www.twitter.com';
		}

		/* Get Linkedin Link */
		if( isset( $instance['linkedin'] ) ) {
			$linkedin_link = esc_attr( $instance['linkedin_link'] );
		} else {
			$linkedin_link = 'https://www.linkedin.com';
		}

		/* Get Google Link */
		if( isset( $instance['google_link'] ) ) {
			$google_link = esc_attr( $instance['google_link'] );
		} else {
			$google_link = 'https://plus.google.com';
		}

		/* Get Facebook icon */
		if( isset( $instance['facebook_icon'] ) ) {
			$facebook_icon = esc_attr( $instance['facebook_icon'] );
		} else {
			$facebook_icon = plugins_url() . '/wp-social-links/img/facebook.png';
		}

		/* Get Twitter icon */
		if( isset( $instance['twitter_icon'] ) ) {
			$twitter_icon = esc_attr( $instance['twitter_icon'] );
		} else {
			$twitter_icon = plugins_url() . '/wp-social-links/img/twitter.png';
		}

		/* Get Linkedin icon */
		if( isset( $instance['linkedin_icon'] ) ) {
			$linkedin_icon = esc_attr( $instance['linkedin_icon'] );
		} else {
			$linkedin_icon = plugins_url() . '/wp-social-links/img/linkedin.png';
		}

		/* Get Google icon */
		if( isset( $instance['google_icon'] ) ) {
			$google_icon = esc_attr( $instance['google_icon'] );
		} else {
			$google_icon = plugins_url() . '/wp-social-links/img/google-plus.png';
		}


		/* Call Form Function */
//	$this->getForm( $instance );
		?>
		Still Works!
		<?php
	}
}

