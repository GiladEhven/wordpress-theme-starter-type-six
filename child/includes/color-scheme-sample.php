<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	add_action( 'after_setup_theme', function() {

	    add_theme_support( 'editor-color-palette', array(

	        array(
	            'name'  => __( 'Red', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'red',
	            'color' => 'red',
	        ),

	        array(
	            'name'  => __( 'Green', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'green',
	            'color' => 'green',
	        ),

	        array(
	            'name'  => __( 'Blue', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'blue',
	            'color' => 'blue',
	        ),

	    ) );

	} );
