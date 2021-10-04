<?php
	function assets_files(){
		wp_enqueue_style('university_main_styles', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts', 'assets_files');