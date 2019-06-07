<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    if ( ! defined( 'GILAD_DISABLE_EMOJI'     ) ) { define( 'GILAD_DISABLE_EMOJI',     true ); }
    if ( ! defined( 'GILAD_DISABLE_GENERATOR' ) ) { define( 'GILAD_DISABLE_GENERATOR', true ); }
    if ( ! defined( 'GILAD_DISABLE_RSD'       ) ) { define( 'GILAD_DISABLE_RSD',       true ); }
    if ( ! defined( 'GILAD_DISABLE_SHORTLINK' ) ) { define( 'GILAD_DISABLE_SHORTLINK', true ); }
    if ( ! defined( 'GILAD_DISABLE_WLW'       ) ) { define( 'GILAD_DISABLE_WLW',       true ); }



    if ( is_admin() ) {

        require_once( get_stylesheet_directory() . '/functions/admin-cleanup.php' );

    } else {

        require_once( get_stylesheet_directory() . '/functions/public-action-hooks.php' );
        require_once( get_stylesheet_directory() . '/functions/public-cleanup.php' );
        require_once( get_stylesheet_directory() . '/functions/public-constants.php' );

    }

    // RENAME AND REPLACE

    function gilad_func_main_tag_classes() {}
