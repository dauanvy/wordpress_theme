<?php
	//Theme css va js
	function dtthuy_enqueue_styles() {
		//bootstrap and font-awesome
		wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
		wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
		//Custom css
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		//Custom script
		wp_enqueue_script( 'custom-script', get_template_directory_uri() . "/custom.js", array('jquery') );
	}	
	add_action( 'wp_enqueue_scripts', 'dtthuy_enqueue_styles' );
	
	/*Ham nay de xoa 
		html {
			margin-top: 32px !important;
		}
	*/
	function remove_admin_login_header() {
		remove_action('wp_head', '_admin_bar_bump_cb');
	}
	add_action('get_header', 'remove_admin_login_header');

	//wp_bootstrap_navwalker.php : De them class vao menu 
	require_once('wp_bootstrap_navwalker.php');
	//header-menu: Hien thi trong menu o admin
	register_nav_menu ( 'header-menu', __('Header Menu', 'bootstrap_theme') );
	
	add_theme_support('post-thumbnails');
	add_image_size('featured-thumb', 250, 250, true);

	//Xoa the p trong the_excerpt
	remove_filter( 'the_excerpt', 'wpautop' );

?>