<?php
	/*
Plugin Name: Dorel Rent Manager Rental Application
Plugin URI:  http://sanfordconsutling.com/wp-plugins/dorel_rent_manager_rental_application
Description: Adds application form functionality for dorel properties
Version:     1.0
Author:      Karl Sanford
Author URI:  http://sanfordconsulting.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

  */

function cf_shortcode(){

	//ob_start();
	include_once 'includes/captcha-setup.php';
	include_once 'includes/query-string-parameters.php';
	include_once 'includes/application-form.php';
	include_once 'includes/captcha-error-postback.php';
	include_once 'includes/client-scripts.php';
	//return ob_get_clean();
}

cf_shortcode();

//add_shortcode('dorel_rent_manager_rental_application','cf_shortcode');
 
?>