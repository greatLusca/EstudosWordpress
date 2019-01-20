<?php 
	function temaEstudos_scripts(){
		

		wp_enqueue_style( 'style', get_stylesheet_uri() , array(), rand(111,9999), 'all' );

		//echo get_stylesheet_uri();
	}
	add_action( 'wp_enqueue_scripts' , 'temaEstudos_scripts');
 ?>