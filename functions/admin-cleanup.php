<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    if ( GILAD_DISABLE_EMOJI ) {

		add_action( 'init', function() {
			remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
			remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
			remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		} );

    }
