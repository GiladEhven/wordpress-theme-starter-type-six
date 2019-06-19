<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	add_action( 'after_setup_theme', function() {

	    add_theme_support( 'editor-font-sizes', array(

	        array(
	            'name' => __( 'Tiny', 'wordpress-theme-starter-type-six' ),
	            'size' => 9,
	            'slug' => 'tiny',
	        ),

	        array(
	            'name' => __( 'Small', 'wordpress-theme-starter-type-six' ),
	            'size' => 13,
	            'slug' => 'small',
	        ),

	        array(
	            'name' => __( 'Normal', 'wordpress-theme-starter-type-six' ),
	            'size' => 17,
	            'slug' => 'normal',
	        ),

	        array(
	            'name' => __( 'Large', 'wordpress-theme-starter-type-six' ),
	            'size' => 21,
	            'slug' => 'large',
	        ),

	        array(
	            'name' => __( 'Huge', 'wordpress-theme-starter-type-six' ),
	            'size' => 25,
	            'slug' => 'huge',
	        ),

	        array(
	            'name' => __( 'Ginormous', 'wordpress-theme-starter-type-six' ),
	            'size' => 29,
	            'slug' => 'ginormous',
	        ),

	    ) );

	} );
