<?php

/*
Plugin Name: Image Alignment Classes
Description: Adds classes to aligned images so theme developers can style them
Version: 1.1
Author: Rich Jenks
Author URI: http://richjenks.com
*/

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");

# register plugin
register_plugin(
	$thisfile, //Plugin id
	'Image Alignment Classes', 	//Plugin name
	'1.0', 		//Plugin version
	'Rich Jenks',  //Plugin author
	'http://richjenks.com', //author website
	'Adds classes to aligned images so theme developers can style them', //Plugin description
	FALSE, //page type - on which admin tab to display
	FALSE  //main function (administration)
);

// Queue jQuery
queue_script('jquery', GSFRONT);

// JS to add classes
function image_alignment_classes_js() {
	echo '<script>
	$("img").filter(function() {
		return $(this).css("float") == "left";
	}).addClass("img-left");
	$("img").filter(function() {
		return $(this).css("float") == "right";
	}).addClass("img-right");
</script>';
}

// Add classes to footer
add_action('theme-footer','image_alignment_classes_js'); 
