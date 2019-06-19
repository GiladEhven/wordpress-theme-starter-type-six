<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	add_action( 'after_setup_theme', function() {

	    add_theme_support( 'editor-color-palette', array(

	        array(
	            'name'  => __( 'Black', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'black',
	            'color' => '#000',
	        ),

	        array(
	            'name'  => __( 'Gray One', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-one',
	            'color' => '#111',
	        ),

	        array(
	            'name'  => __( 'Gray Two', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-two',
	            'color' => '#222',
	        ),

	        array(
	            'name'  => __( 'Gray Three', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-three',
	            'color' => '#333',
	        ),

	        array(
	            'name'  => __( 'Gray Four', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-four',
	            'color' => '#444',
	        ),

	        array(
	            'name'  => __( 'Gray Five', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-five',
	            'color' => '#555',
	        ),

	        array(
	            'name'  => __( 'Gray Six', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-six',
	            'color' => '#666',
	        ),

	        array(
	            'name'  => __( 'Gray Seven', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-seven',
	            'color' => '#777',
	        ),

	        array(
	            'name'  => __( 'Gray Eight', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-eight',
	            'color' => '#888',
	        ),

	        array(
	            'name'  => __( 'Gray Nine', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-nine',
	            'color' => '#999',
	        ),

	        array(
	            'name'  => __( 'Gray A', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-a',
	            'color' => '#aaa',
	        ),

	        array(
	            'name'  => __( 'Gray B', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-b',
	            'color' => '#bbb',
	        ),

	        array(
	            'name'  => __( 'Gray C', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-c',
	            'color' => '#ccc',
	        ),

	        array(
	            'name'  => __( 'Gray D', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-d',
	            'color' => '#ddd',
	        ),

	        array(
	            'name'  => __( 'Gray E', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'gray-e',
	            'color' => '#eee',
	        ),

	        array(
	            'name'  => __( 'White', 'wordpress-theme-starter-type-six' ),
	            'slug'  => 'white',
	            'color' => '#fff',
	        ),

	    ) );

	} );
