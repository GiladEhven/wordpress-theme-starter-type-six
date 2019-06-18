<?php

	if ( defined( 'TYPESIX_USE_BOOTSTRAP' ) && TYPESIX_USE_BOOTSTRAP ) {

		get_template_part( 'support/public-bootstrap/version', TYPESIX_USE_BOOTSTRAP );

	    add_action( 'wp_enqueue_scripts', function() {

	        wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/'     . TYPESIX_BOOTSTRAP_VERSION . '/css/bootstrap.min.css', array(), null, 'all' );

			wp_register_script( 'jquery-for-bootstrap', 'https://code.jquery.com/jquery-'          . TYPESIX_JQUERY_VERSION    . '.slim.min.js' );
			wp_add_inline_script( 'jquery-for-bootstrap', 'var jquery_for_bootstrap = $.noConflict(true);' );

	        wp_enqueue_script( 'popper-js',    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/' . TYPESIX_POPPER_VERSION    . '/umd/popper.min.js',     array( 'jquery-for-bootstrap' ), null, true );
	        wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/'     . TYPESIX_BOOTSTRAP_VERSION . '/js/bootstrap.min.js',   array( 'popper-js' ),  null, true );

	    } );

		add_filter( 'script_loader_tag', function( $html, $handle ) {

		    if ( 'jquery-new' === $handle ) {
		        return str_replace( "></script>", " defer integrity='" . TYPESIX_JQUERY_JS    . "' crossorigin='anonymous'></script>", $html );
		    } elseif ( 'popper-js' === $handle ) {
		        return str_replace( "></script>", " defer integrity='" . TYPESIX_POPPER_JS    . "' crossorigin='anonymous'></script>", $html );
		    } elseif ( 'bootstrap-js' === $handle ) {
		        return str_replace( "></script>", " defer integrity='" . TYPESIX_BOOTSTRAP_JS . "' crossorigin='anonymous'></script>", $html );
		    }
		    return $html;

		}, 10, 2 );

	    add_filter( 'style_loader_tag', function( $html, $handle ) {

	        if ( 'bootstrap-css' === $handle ) {
	            return str_replace( "media='all'", "media='all' integrity='" . TYPESIX_BOOTSTRAP_CSS . "' crossorigin='anonymous'", $html );
	        }
	        return $html;

	    }, 10, 2 );

	}

	// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

	if ( defined( 'TYPESIX_ENABLE_PALETTE' ) && TYPESIX_ENABLE_PALETTE ) {

		$css_dependencies = '';
		$palette_file     = '';

		if ( defined( 'TYPESIX_USE_BOOTSTRAP' ) && TYPESIX_USE_BOOTSTRAP ) {

			$css_dependencies = 'bootstrap-css';

		}

		if ( file_exists( get_template_directory() . '/palettes/' . TYPESIX_ENABLE_PALETTE . '.css' ) ) {

			$palette_file = get_template_directory_uri() . '/palettes/' . TYPESIX_ENABLE_PALETTE . '.css';

		} else {

			$palette_file = get_template_directory_uri() . '/palettes/gray.css';

		}

	    add_action( 'wp_enqueue_scripts', function() use ( $css_dependencies, $palette_file ) {

	        wp_enqueue_style( 'palette', $palette_file, array( $css_dependencies ), null, 'all' );

	    } );

	}

	// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

	if ( defined( 'TYPESIX_USE_FONT_AWESOME' ) && TYPESIX_USE_FONT_AWESOME ) {

		get_template_part( 'support/public-font-awesome/version', TYPESIX_USE_FONT_AWESOME );

	    add_action( 'wp_enqueue_scripts', function() {

	        wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/' . TYPESIX_FONT_AWESOME_VERSION . '/css/font-awesome.min.css', array(), null, 'all' );

	    } );

	    add_filter( 'style_loader_tag', function( $html, $handle ) {

	        if ( 'font-awesome' === $handle ) {
	            return str_replace( "media='all'", "media='all' integrity='" . TYPESIX_FONT_AWESOME_CSS . "' crossorigin='anonymous'", $html );
	        }
	        return $html;

	    }, 10, 2 );

	}

	// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

	$css_dependencies = '';
	$css_file_path    = get_stylesheet_directory()     . '/assets/style.css';
	$css_file_uri     = get_stylesheet_directory_uri() . '/assets/style.css';
	$js_dependencies  = '';
	$js_file_path     = get_stylesheet_directory()     . '/assets/script.js';
	$js_file_uri      = get_stylesheet_directory_uri() . '/assets/script.js';

	if ( defined( 'TYPESIX_USE_BOOTSTRAP' ) && TYPESIX_USE_BOOTSTRAP ) {

		$css_dependencies = 'bootstrap-css';
		$js_dependencies  = 'bootstrap-js';

	}

	if ( file_exists( $js_file_path ) ) {

	    add_action( 'wp_enqueue_scripts', function() use ( $js_file_uri, $js_dependencies ) {

	        wp_enqueue_script( 'child-script', $js_file_uri, array( $js_dependencies ), null, true );

	    } );

	}

	if ( file_exists( $css_file_path ) ) {

	    add_action( 'wp_enqueue_scripts', function() use ( $css_file_uri, $css_dependencies ) {

	        wp_enqueue_style( 'child-style', $css_file_uri, array( $css_dependencies ), null, 'all' );

	    } );

	}
