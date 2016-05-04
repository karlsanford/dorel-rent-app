<?php
//get property name from query string
$location = $_GET['location'];
$propshortname = $_GET['propshortname'];

if(isset($_GET['env']) && trim($_GET['env'] == 'test')) {
	$postURL = 'http://httpbin.org/post';
	include_once 'test-head.php';
} else {
	$postURL = 'http://applicationgateway.rentmanager.com/WebApplicationHandler.aspx';
}
?>