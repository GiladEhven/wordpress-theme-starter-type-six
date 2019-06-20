<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	add_action( 'after_setup_theme', function() {

	    add_theme_support( 'editor-font-sizes', array(

	        array(
	            'name' => __( 'One', 'wordpress-theme-starter-type-six' ),
	            'size' => 18,
	            'slug' => 'one',
	        ),

	        array(
	            'name' => __( 'Two', 'wordpress-theme-starter-type-six' ),
	            'size' => 22,
	            'slug' => 'two',
	        ),

	        array(
	            'name' => __( 'Three', 'wordpress-theme-starter-type-six' ),
	            'size' => 28,
	            'slug' => 'three',
	        ),

	        array(
	            'name' => __( 'Four', 'wordpress-theme-starter-type-six' ),
	            'size' => 36,
	            'slug' => 'four',
	        ),

	    ) );

	} );
