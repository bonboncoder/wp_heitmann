<?php
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'leftnavi' ),
	) );
        
        // Thumbnails
        add_theme_support( 'post-thumbnails' );
?>
