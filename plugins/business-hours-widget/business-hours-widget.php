<?php
/**
 * RED WordPress Widget Boilerplate
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   business-hours-widget
 * @author    Jisu Lee <jaejisu@gmail.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2015 Jisu Lee Co.
 *
 * @wordpress-plugin
 * Plugin Name:       business-hours-widget
 * Plugin URI:        http://www.redacademy.com
 * Description:       A handly business hours widget
 * Version:           1.0.0
 * Author:            Jisu Lee
 * Author URI:        http://www.redacademy.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}


class Business_Hours_Widget extends WP_Widget {

    /**
     * Unique identifier for your widget.
     *
     * @since    1.0.0
     *
     * @var      string
     */
    protected $widget_slug = 'business-hours-widget';

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, and instantiates the widget.
	 */
	public function __construct() {

		parent::__construct(
			$this->get_widget_slug(),
			'Busines Hours Widget',
			array(
				'classname'  => $this->get_widget_slug().'-class',
				'description' => 'A widget for adding business hours.'
			)
		);

	} // end constructor

    /**
     * Return the widget slug.
     *
     * @since    1.0.0
     *
     * @return    Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param array $args     The array of form elements
	 * @param array $instance The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		if ( ! isset ( $args['widget_id'] ) ) {
         $args['widget_id'] = $this->id;
      }

		// go on with your widget logic, put everything into a string and …

		extract( $args, EXTR_SKIP );

		$widget_string = $before_widget;

		// Manipulate the widget's values based on their input fields
		// show on the page (out put)
		$title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
		
		$monday_friday = empty( $instance['monday_friday'] ) ? '' : apply_filters( 'widget_monday_friday', $instance['monday_friday'] );
		
		$saturday = empty( $instance['saturday'] ) ? '' : apply_filters( 'widget_saturday', $instance['saturday'] );
		
		$sunday = empty( $instance['sunday'] ) ? '' : apply_filters( 'widget_sunday', $instance['sunday'] );
		
		ob_start();

		if ( $title ){
			$widget_string .= $before_title;
			$widget_string .= $title;
			$widget_string .= $after_title;
		}

		include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
		$widget_string .= ob_get_clean();
		$widget_string .= $after_widget;

		print $widget_string;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param array $new_instance The new instance of values to be generated via the update.
	 * @param array $old_instance The previous instance of values before the update.
	 */
	 // update 2
	public function update( $new_instance, $old_instance ) {

		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['monday_friday'] = strip_tags( $new_instance['monday_friday'] );
		$instance['saturday'] = strip_tags( $new_instance['saturday'] );
		$instance['sunday'] = strip_tags( $new_instance['sunday'] );
		// this function make the new upadte static in the form section once I press the save button
		return $instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param array $instance The array of keys and values for the widget.
	 */
	//  form 1
	public function form( $instance ) {
// this array section will show in the dashboard
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'title' => 'Business Hours',
				'monday_friday' => ' ',
				'saturday' => '',
				'sunday' => 'Closed'
			)
		);

		$title = strip_tags( $instance['title'] );
		$monday_friday = strip_tags($instance['monday_friday']);
		$saturday = strip_tags($instance['saturday']);
		$sunday = strip_tags($instance['sunday']);

		// Display the admin form
		include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );
		//this is defind the variables in admin.php

	} // end form

} // end class

add_action( 'widgets_init', function(){
     register_widget( 'Business_Hours_Widget' );
});
