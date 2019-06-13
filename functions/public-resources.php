<?php

	if ( defined( 'GILAD_USE_BOOTSTRAP' ) && GILAD_USE_BOOTSTRAP ) {

		get_template_part( 'support/public-bootstrap/version', GILAD_USE_BOOTSTRAP );

	    add_action( 'wp_enqueue_scripts', function() {

	        wp_deregister_script( 'jquery' );

	        wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/'     . GILAD_BOOTSTRAP_VERSION . '/css/bootstrap.min.css', array(),               null, 'all' );

	        wp_enqueue_script( 'jquery-new',   'https://code.jquery.com/jquery-'                   . GILAD_JQUERY_VERSION    . '.slim.min.js',           array(),               null, true );
	        wp_enqueue_script( 'popper-js',    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/' . GILAD_POPPER_VERSION    . '/umd/popper.min.js',     array( 'jquery-new' ), null, true );
	        wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/'     . GILAD_BOOTSTRAP_VERSION . '/js/bootstrap.min.js',   array( 'popper-js' ),  null, true );

	    } );

		add_filter( 'script_loader_tag', function( $html, $handle ) {

		    if ( 'jquery-new' === $handle ) {
		        return str_replace( "></script>", " defer integrity='" . GILAD_JQUERY_JS    . "' crossorigin='anonymous'></script>", $html );
		    } elseif ( 'popper-js' === $handle ) {
		        return str_replace( "></script>", " defer integrity='" . GILAD_POPPER_JS    . "' crossorigin='anonymous'></script>", $html );
		    } elseif ( 'bootstrap-js' === $handle ) {
		        return str_replace( "></script>", " defer integrity='" . GILAD_BOOTSTRAP_JS . "' crossorigin='anonymous'></script>", $html );
		    }
		    return $html;

		}, 10, 2 );

	    add_filter( 'style_loader_tag', function( $html, $handle ) {

	        if ( 'bootstrap-css' === $handle ) {
	            return str_replace( "media='all'", "media='all' integrity='" . GILAD_BOOTSTRAP_CSS . "' crossorigin='anonymous'", $html );
	        }
	        return $html;

	    }, 10, 2 );

	}

	// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

	if ( defined( 'GILAD_USE_FONT_AWESOME' ) && GILAD_USE_FONT_AWESOME ) {

		get_template_part( 'support/public-font-awesome/version', GILAD_USE_FONT_AWESOME );

	    add_action( 'wp_enqueue_scripts', function() {

	        wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/' . GILAD_FONT_AWESOME_VERSION . '/css/font-awesome.min.css', array(), null, 'all' );

	    } );

	    add_filter( 'style_loader_tag', function( $html, $handle ) {

	        if ( 'font-awesome' === $handle ) {
	            return str_replace( "media='all'", "media='all' integrity='" . GILAD_FONT_AWESOME_CSS . "' crossorigin='anonymous'", $html );
	        }
	        return $html;

	    }, 10, 2 );

	}

	// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

	$css_file_path = get_stylesheet_directory()     . '/assets/style.css';
	$css_file_uri  = get_stylesheet_directory_uri() . '/assets/style.css';
	$dependencies  = '';

	if ( defined( 'GILAD_USE_BOOTSTRAP' ) && GILAD_USE_BOOTSTRAP ) {

		$dependencies = 'bootstrap-css';

	}

	if ( file_exists( $css_file_path ) ) {

	    add_action( 'wp_enqueue_scripts', function() use ( $css_file_uri, $dependencies ) {

	        wp_enqueue_style( 'child', $css_file_uri, array( $dependencies ), null, 'all' );

	    } );

	}
