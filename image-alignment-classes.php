<?php

/*
Plugin Name: Image Alignment Classes
Description: Adds classes to aligned images so theme developers can style them
Version: 2.0
Author: Rich Jenks
Author URI: http://richjenks.com
*/

register_plugin(
	basename(__FILE__, '.php'), // ID
	'Image Alignment Classes', // Name
	'2.0', // Version
	'Rich Jenks', // Author
	'http://richjenks.com', // Website
	'Adds classes to aligned images so theme developers can style them', // Description
	FALSE, // Page
	FALSE // Function
);

function image_alignment_classes_js() {
	echo '<script>
		Array.from(document.getElementsByTagName("img")).forEach(img => {
			if (img.style.float === "left") {
				img.classList.add("img-left")
			}
			if (img.style.float === "right") {
				img.classList.add("img-right")
			}
		})
	</script>';
}

add_action('theme-footer', 'image_alignment_classes_js'); 
