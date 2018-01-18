<?php
	register_nav_menu('header-menu', __('Header Menu', 'bootstrap_theme'));
	add_theme_support('post-thumbnails');
	add_image_size('featured', 250, 250, true);
	//Tao Sidebar
	If ( function_exists('register_sidebar')){
		register_sidebar(array(
			'name' => 'Right Sidebar',
			'id' => 'right-sidebar',
			'before_widget' => '<div id="%1$s" class="sidebar-item">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		));
	}
	
	add_filter('widget_text', 'do_shortcode');
?>