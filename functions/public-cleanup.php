<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    if ( TYPESIX_DISABLE_EMOJI ) {

		add_action( 'init', function() {
			remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );
			remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
			remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
		} );

    }

    if ( TYPESIX_DISABLE_GENERATOR ) {

    	remove_action( 'wp_head', 'wp_generator' );

    }

    if ( TYPESIX_DISABLE_RSD ) {

    	remove_action( 'wp_head', 'rsd_link' );

    }

    if ( TYPESIX_DISABLE_SHORTLINK ) {

    	remove_action( 'wp_head', 'wp_shortlink_wp_head' );

    }

    if ( TYPESIX_DISABLE_WLW ) {

    	remove_action( 'wp_head', 'wlwmanifest_link' );

    }
