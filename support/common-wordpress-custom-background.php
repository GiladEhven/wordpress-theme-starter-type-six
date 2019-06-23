<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	add_theme_support( 'custom-background', array(

		'default-attachment'     => TYPESIX_CUSTOM_BACKGROUND_DEFAULT_ATTACHMENT,
		'default-color'          => TYPESIX_CUSTOM_BACKGROUND_DEFAULT_COLOR,
		'default-image'          => TYPESIX_CUSTOM_BACKGROUND_DEFAULT_IMAGE,
		'default-position-x'     => TYPESIX_CUSTOM_BACKGROUND_DEFAULT_POSITION_X,
	    'default-position-y'     => TYPESIX_CUSTOM_BACKGROUND_DEFAULT_POSITION_Y,
		'default-repeat'         => TYPESIX_CUSTOM_BACKGROUND_DEFAULT_REPEAT,
	    'default-size'           => TYPESIX_CUSTOM_BACKGROUND_DEFAULT_SIZE,

	) );
