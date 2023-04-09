<?php
/*
Plugin Name: Hello World
Description: Echos "Hello World" in footer of theme
Version: 1.0
Author: Chris Cagle
Author URI: http://www.cagintranet.com/
*/

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");

# register plugin
register_plugin(
	$thisfile, 
	'Hello World', 	
	'1.0', 		
	'Chris Cagle',
	'http://www.cagintranet.com/', 
	'Finds email addresses in content and components and 	"hides" them',
	'theme',
	'hello_world_show'  
);

# activate filter
add_action('theme-footer','hello_world'); 

# functions
function hello_world() {
	echo '<p>Hello World</p>';
}

function hello_world_show() {
	echo '<p>I like to echo "Hello World" in the footers of all 	themes.</p>';
}
?>