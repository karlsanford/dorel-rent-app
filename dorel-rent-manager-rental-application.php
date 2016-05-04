<?php
	/*
Plugin Name: Dorel Rent Manager Rental Application
Plugin URI:  https://github.com/karlsanford/dorel-rent-app
Description: Adds application form functionality for dorel properties
Version:     1.0
Author:      Karl Sanford
Author URI:  http://sanfordconsulting.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

  */

function cf_shortcode(){

	//calls rentmanager.com to get captcha image and code
	include_once 'includes/captcha-setup.php';
	
	//pulls 'location' and 'shortpropname' from query string and sets hidden fields
	include_once 'includes/query-string-parameters.php';

	//main application form
	include_once 'includes/application-form.php';

	//handles error with the captcha
	include_once 'includes/captcha-error-postback.php';

	//load js file that sets hidden date field and property name from qs parameter value
		//Use this for production
		wp_enqueue_script('the_js', plugins_url('/includes/rm-application.js',__FILE__) );
		
		//use this for testing outside of wordpress
		//include_once 'includes/client-scripts.php';
	
}

//uncomment for testing outside of wordpress
//cf_shortcode();


//comment this out for testing outside of wordpress
add_shortcode('dorel_rent_manager_rental_application','cf_shortcode');
 
?>