<?php 
/*
*
*		functions.php
		This is the functions.php files. If for whatever reason you would like to input new functions into cornerstone or tweak ones that are already created (view original theme for more information) you can use this functions.php to overwrite it. '
*
*/

// Any custom js or css - Code to make your javascript work with the theme. 

function starterkit_scripts() {
	wp_enqueue_script( 'starterkit-js', get_stylesheet_directory_uri() . '/javascripts/min/starterkit.min.js', array( 'jquery' ));	
}

add_action( 'wp_enqueue_scripts', 'starterkit_scripts');




?>