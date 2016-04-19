<?php
/*
Plugin Name: Practo
Plugin URI: http://www.kdclabs.com/apps/practo
Description: Practo Instant Appointment Booking Widget for your website.
Version: 1.0.0
Author: _KDC-Labs
Author URI: http://www.kdclabs.com
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Donate link: https://www.payumoney.com/webfront/index/kdclabs
Contributors: kdclabs, vachan
*/

// Add Shortcode
function practo_shortcode( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'widget' => '',
			'doctor' => '',
			'practice' => '',
		), $atts )
	);

	// Code
	echo '<practo:abs_widget widget="'.$atts[widget].'"></practo:abs_widget>';
	wp_register_script( 'practo_widgets_js', 'https://www.practo.com/bundles/practopractoapp/js/abs_widget_helper.js', false, false, true );
}
add_shortcode( 'practo', 'practo_shortcode' );

?>