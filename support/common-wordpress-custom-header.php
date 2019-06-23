<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	add_action( 'after_setup_theme', function() {

		add_theme_support( 'custom-header', array(

	        'default-image'      => TYPESIX_CUSTOM_HEADER_DEFAULT_IMAGE,
	        'default-text-color' => TYPESIX_CUSTOM_HEADER_DEFAULT_TEXT_COLOR,
	        'flex-height'        => TYPESIX_CUSTOM_HEADER_FLEX_HEIGHT,
	        'flex-width'         => TYPESIX_CUSTOM_HEADER_FLEX_WIDTH,
	        'header-text'        => TYPESIX_CUSTOM_HEADER_TEXT,
	        'height'             => TYPESIX_CUSTOM_HEADER_HEIGHT,
	        'random-default'     => TYPESIX_CUSTOM_HEADER_RANDOM_DEFAULT,
	        'uploads'            => TYPESIX_CUSTOM_HEADER_UPLOADS,
	        'width'              => TYPESIX_CUSTOM_HEADER_WIDTH,

		) );

	} );
