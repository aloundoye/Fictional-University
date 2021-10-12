<?php
	//callback function for adding assets on the web site
	function assets_files(){
		wp_enqueue_script('main-university-js', get_theme_file_uri('/js/script-bundled.js'), NULL,
			'1.0', true);
		wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,
		400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
		wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		wp_enqueue_style('index', get_stylesheet_directory_uri().'/index.css', false, null);
		wp_enqueue_style('university_main_styles', get_stylesheet_uri());
	}
	// callback function for adding features on the websites
	function university_features(){
		add_theme_support('title-tag');
	}

	add_action('after_setup_theme', 'university_features');
	//add assets files
	add_action('wp_enqueue_scripts', 'assets_files');
	//add custom post
