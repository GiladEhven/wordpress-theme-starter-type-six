<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( is_admin() ) {

        //

    } else {

        require_once( get_stylesheet_directory() . '/functions/public-action-hooks.php' );
        require_once( get_stylesheet_directory() . '/functions/public-constants.php' );

    }

    // RENAME AND REPLACE

    function gilad_func_main_tag_classes() {}
