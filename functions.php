<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    if ( ! defined( 'GILAD_DISABLE_EMOJI'          ) ) { define( 'GILAD_DISABLE_EMOJI',          true );  }
    if ( ! defined( 'GILAD_DISABLE_GENERATOR'      ) ) { define( 'GILAD_DISABLE_GENERATOR',      true );  }
    if ( ! defined( 'GILAD_DISABLE_RSD'            ) ) { define( 'GILAD_DISABLE_RSD',            true );  }
    if ( ! defined( 'GILAD_DISABLE_SHORTLINK'      ) ) { define( 'GILAD_DISABLE_SHORTLINK',      true );  }
    if ( ! defined( 'GILAD_DISABLE_WLW'            ) ) { define( 'GILAD_DISABLE_WLW',            true );  }



    if ( ! defined( 'GILAD_SUPPORT_BEAVER_BUILDER' ) ) { define( 'GILAD_SUPPORT_BEAVER_BUILDER', false ); }
    if ( ! defined( 'GILAD_SUPPORT_CUSTOMIZER'     ) ) { define( 'GILAD_SUPPORT_CUSTOMIZER',     false ); }
    if ( ! defined( 'GILAD_SUPPORT_GIVE_WP'        ) ) { define( 'GILAD_SUPPORT_GIVE_WP',        false ); }
    if ( ! defined( 'GILAD_SUPPORT_GUTENBERG'      ) ) { define( 'GILAD_SUPPORT_GUTENBERG',      false ); }
    if ( ! defined( 'GILAD_SUPPORT_WOOCOMMERCE'    ) ) { define( 'GILAD_SUPPORT_WOOCOMMERCE',    false ); }
    if ( ! defined( 'GILAD_SUPPORT_WP_FEATURES'    ) ) { define( 'GILAD_SUPPORT_WP_FEATURES',    false ); }



    // Set to 'false': Loads nothing (no Bootstrap support)
    // Set to 'true':  Loads 'version.php' (latest supported version)
    // Set to '0.0.0': Loads 'version-0.0.0.php' (named version if found or fall back to 'version.php')
    if ( ! defined( 'GILAD_USE_BOOTSTRAP'          ) ) { define( 'GILAD_USE_BOOTSTRAP',          true ); }
    if ( ! defined( 'GILAD_USE_FONT_AWESOME'       ) ) { define( 'GILAD_USE_FONT_AWESOME',       true ); }



    if ( is_admin() ) {

        require_once( get_stylesheet_directory() . '/functions/admin-cleanup.php' );

        if ( GILAD_SUPPORT_BEAVER_BUILDER ) require_once( get_stylesheet_directory() . '/support/admin-beaver-builder.php' );
        if ( GILAD_SUPPORT_CUSTOMIZER )     require_once( get_stylesheet_directory() . '/support/admin-customizer.php' );
        if ( GILAD_SUPPORT_GIVE_WP )        require_once( get_stylesheet_directory() . '/support/admin-give-wp.php' );
        if ( GILAD_SUPPORT_GUTENBERG )      require_once( get_stylesheet_directory() . '/support/admin-gutenberg.php' );
        if ( GILAD_SUPPORT_WOOCOMMERCE )    require_once( get_stylesheet_directory() . '/support/admin-woocommerce.php' );
        if ( GILAD_SUPPORT_WP_FEATURES )    require_once( get_stylesheet_directory() . '/support/admin-wordpress-features.php' );

    } else {

        require_once( get_stylesheet_directory() . '/functions/public-action-hooks.php' );
        require_once( get_stylesheet_directory() . '/functions/public-cleanup.php' );
        require_once( get_stylesheet_directory() . '/functions/public-resources.php' );

        if ( GILAD_SUPPORT_BEAVER_BUILDER ) require_once( get_stylesheet_directory() . '/support/public-beaver-builder.php' );
        if ( GILAD_SUPPORT_CUSTOMIZER )     require_once( get_stylesheet_directory() . '/support/public-customizer.php' );
        if ( GILAD_SUPPORT_GIVE_WP )        require_once( get_stylesheet_directory() . '/support/public-give-wp.php' );
        if ( GILAD_SUPPORT_GUTENBERG )      require_once( get_stylesheet_directory() . '/support/public-gutenberg.php' );
        if ( GILAD_SUPPORT_WOOCOMMERCE )    require_once( get_stylesheet_directory() . '/support/public-woocommerce.php' );
        if ( GILAD_SUPPORT_WP_FEATURES )    require_once( get_stylesheet_directory() . '/support/public-wordpress-features.php' );

    }
