<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_BODY'                  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_BODY',                  'default' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_BODY_LINER'            ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_BODY_LINER',            'default' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_BODY_HEADER'           ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_BODY_HEADER',           'default' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_MAIN'                  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_MAIN',                  'default' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_BODY_FOOTER'           ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_BODY_FOOTER',           'default' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_H_TEMPLATE'            ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_H_TEMPLATE',            'default' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE'         ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE',         'default' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_HEADER'  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_HEADER',  'default' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_SECTION' ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_SECTION', 'default' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_FOOTER'  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_FOOTER',  'default' );  }



    if ( ! defined( 'TYPESIX_DISABLE_EMOJI'                         ) ) { define( 'TYPESIX_DISABLE_EMOJI',                         true );  }
    if ( ! defined( 'TYPESIX_DISABLE_GENERATOR'                     ) ) { define( 'TYPESIX_DISABLE_GENERATOR',                     true );  }
    if ( ! defined( 'TYPESIX_DISABLE_RSD'                           ) ) { define( 'TYPESIX_DISABLE_RSD',                           true );  }
    if ( ! defined( 'TYPESIX_DISABLE_SHORTLINK'                     ) ) { define( 'TYPESIX_DISABLE_SHORTLINK',                     true );  }
    if ( ! defined( 'TYPESIX_DISABLE_WLW'                           ) ) { define( 'TYPESIX_DISABLE_WLW',                           true );  }



    if ( ! defined( 'ENABLE_PALETTE'                                ) ) { define( 'ENABLE_PALETTE',                                false ); }



    if ( ! defined( 'TYPESIX_SUPPORT_BEAVER_BUILDER'                ) ) { define( 'TYPESIX_SUPPORT_BEAVER_BUILDER',                false ); }
    if ( ! defined( 'TYPESIX_SUPPORT_CUSTOMIZER'                    ) ) { define( 'TYPESIX_SUPPORT_CUSTOMIZER',                    false ); }
    if ( ! defined( 'TYPESIX_SUPPORT_GIVE_WP'                       ) ) { define( 'TYPESIX_SUPPORT_GIVE_WP',                       false ); }
    if ( ! defined( 'TYPESIX_SUPPORT_GUTENBERG'                     ) ) { define( 'TYPESIX_SUPPORT_GUTENBERG',                     false ); }
    if ( ! defined( 'TYPESIX_SUPPORT_WOOCOMMERCE'                   ) ) { define( 'TYPESIX_SUPPORT_WOOCOMMERCE',                   false ); }
    if ( ! defined( 'TYPESIX_SUPPORT_WP_FEATURES'                   ) ) { define( 'TYPESIX_SUPPORT_WP_FEATURES',                   true ); }



    // Set to 'false': Loads nothing (no Bootstrap support)
    // Set to 'true':  Loads 'version.php' (latest supported version)
    // Set to '0.0.0': Loads 'version-0.0.0.php' (named version if found or fall back to 'version.php')
    if ( ! defined( 'TYPESIX_USE_BOOTSTRAP'                         ) ) { define( 'TYPESIX_USE_BOOTSTRAP',                         true ); }
    if ( ! defined( 'TYPESIX_USE_FONT_AWESOME'                      ) ) { define( 'TYPESIX_USE_FONT_AWESOME',                      true ); }



    if ( is_admin() ) {

        require_once( get_template_directory() . '/functions/admin-cleanup.php' );

        if ( TYPESIX_SUPPORT_BEAVER_BUILDER ) require_once( get_template_directory() . '/support/admin-beaver-builder.php' );
        if ( TYPESIX_SUPPORT_CUSTOMIZER )     require_once( get_template_directory() . '/support/admin-customizer.php' );
        if ( TYPESIX_SUPPORT_GIVE_WP )        require_once( get_template_directory() . '/support/admin-give-wp.php' );
        if ( TYPESIX_SUPPORT_GUTENBERG )      require_once( get_template_directory() . '/support/admin-gutenberg.php' );
        if ( TYPESIX_SUPPORT_WOOCOMMERCE )    require_once( get_template_directory() . '/support/admin-woocommerce.php' );
        if ( TYPESIX_SUPPORT_WP_FEATURES )    require_once( get_template_directory() . '/support/admin-wordpress-features.php' );

    } else {

        require_once( get_template_directory() . '/functions/public-action-hooks.php' );
        require_once( get_template_directory() . '/functions/public-cleanup.php' );
        require_once( get_template_directory() . '/functions/public-resources.php' );
        require_once( get_template_directory() . '/functions/public-template-tags.php' );

        if ( TYPESIX_SUPPORT_BEAVER_BUILDER ) require_once( get_template_directory() . '/support/public-beaver-builder.php' );
        if ( TYPESIX_SUPPORT_CUSTOMIZER )     require_once( get_template_directory() . '/support/public-customizer.php' );
        if ( TYPESIX_SUPPORT_GIVE_WP )        require_once( get_template_directory() . '/support/public-give-wp.php' );
        if ( TYPESIX_SUPPORT_GUTENBERG )      require_once( get_template_directory() . '/support/public-gutenberg.php' );
        if ( TYPESIX_SUPPORT_WOOCOMMERCE )    require_once( get_template_directory() . '/support/public-woocommerce.php' );
        if ( TYPESIX_SUPPORT_WP_FEATURES )    require_once( get_template_directory() . '/support/public-wordpress-features.php' );

    }
