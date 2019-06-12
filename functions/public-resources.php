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
