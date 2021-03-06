<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    if ( is_user_logged_in() ) {

        $wp_user_object = get_userdata( get_current_user_id() );
        $user_nicename  = $wp_user_object->user_nicename;

    } else {

        $user_nicename  = 'placeholder';

    }

    // TODO: Populate each of the following with values required below
    $aria_req       = 0;
    $commenter      = array( 'comment_author' => 0, 'comment_author_email' => 0, 'comment_author_url' => 0 );

    $req            = get_option( 'require_name_email' );



    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_BODY'                  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_BODY',                  'default' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_BODY_HEADER'           ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_BODY_HEADER',           'container-fluid' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_BODY_FOOTER'           ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_BODY_FOOTER',           'container-fluid' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS'              ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS',              'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_FOOTER'       ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_FOOTER',       'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_HEADER'       ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_HEADER',       'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_LIST'         ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_LIST',         'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_MAIN'                  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_MAIN',                  'container' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_MAIN_DIV'              ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_MAIN_DIV',              'row' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_NAV_POST'              ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_NAV_POST',              'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_NAV_POSTS'             ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_NAV_POSTS',             'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE'         ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE',         'row' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_HEADER'  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_HEADER',  'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_SECTION' ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_SECTION', 'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_FOOTER'  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_FOOTER',  'col-12' );  }



    if ( ! defined( 'TYPESIX_DISABLE_EMOJI'                         ) ) { define( 'TYPESIX_DISABLE_EMOJI',                         true );  }
    if ( ! defined( 'TYPESIX_DISABLE_GENERATOR'                     ) ) { define( 'TYPESIX_DISABLE_GENERATOR',                     true );  }
    if ( ! defined( 'TYPESIX_DISABLE_RSD'                           ) ) { define( 'TYPESIX_DISABLE_RSD',                           true );  }
    if ( ! defined( 'TYPESIX_DISABLE_SHORTLINK'                     ) ) { define( 'TYPESIX_DISABLE_SHORTLINK',                     true );  }
    if ( ! defined( 'TYPESIX_DISABLE_WLW'                           ) ) { define( 'TYPESIX_DISABLE_WLW',                           true );  }



    if ( ! defined( 'TYPESIX_ENABLE_DEFAULT_STYLESHEET'             ) ) { define( 'TYPESIX_ENABLE_DEFAULT_STYLESHEET',             true ); }
    if ( ! defined( 'TYPESIX_ENABLE_PALETTE'                        ) ) { define( 'TYPESIX_ENABLE_PALETTE',                        false ); }



    if ( ! defined( 'TYPESIX_SELECT_SITE_MODE'                      ) ) { define( 'TYPESIX_SELECT_SITE_MODE',                      'live' ); }



    if ( ! defined( 'TYPESIX_SET_COMMENTS_AVATAR_SIZE'              ) ) { define( 'TYPESIX_SET_COMMENTS_AVATAR_SIZE',              64 ); }
    if ( ! defined( 'TYPESIX_SET_COMMENTS_REVERSE_CHILDREN'         ) ) { define( 'TYPESIX_SET_COMMENTS_REVERSE_CHILDREN',         false ); }
    if ( ! defined( 'TYPESIX_SET_COMMENTS_STYLE'                    ) ) { define( 'TYPESIX_SET_COMMENTS_STYLE',                    'ol' ); }
    if ( ! defined( 'TYPESIX_SET_COMMENTS_TYPE'                     ) ) { define( 'TYPESIX_SET_COMMENTS_TYPE',                     'comment' ); }



    if ( ! defined( 'TYPESIX_SUPPORT_BEAVER_BUILDER'                ) ) { define( 'TYPESIX_SUPPORT_BEAVER_BUILDER',                false ); }
    if ( ! defined( 'TYPESIX_SUPPORT_CUSTOMIZER'                    ) ) { define( 'TYPESIX_SUPPORT_CUSTOMIZER',                    false ); }
    if ( ! defined( 'TYPESIX_SUPPORT_GIVE_WP'                       ) ) { define( 'TYPESIX_SUPPORT_GIVE_WP',                       false ); }
    if ( ! defined( 'TYPESIX_SUPPORT_GUTENBERG'                     ) ) { define( 'TYPESIX_SUPPORT_GUTENBERG',                     true ); }
    if ( ! defined( 'TYPESIX_SUPPORT_WOOCOMMERCE'                   ) ) { define( 'TYPESIX_SUPPORT_WOOCOMMERCE',                   false ); }
    if ( ! defined( 'TYPESIX_SUPPORT_WP_COMMON'                     ) ) { define( 'TYPESIX_SUPPORT_WP_COMMON',                     true ); }
    if ( ! defined( 'TYPESIX_SUPPORT_WP_CUSTOM_BACKGROUND'          ) ) { define( 'TYPESIX_SUPPORT_WP_CUSTOM_BACKGROUND',          true ); }
    if ( ! defined( 'TYPESIX_SUPPORT_WP_CUSTOM_HEADER'              ) ) { define( 'TYPESIX_SUPPORT_WP_CUSTOM_HEADER',              true ); }



    // Set to 'false': Loads nothing (no Bootstrap support)
    // Set to 'true':  Loads 'version.php' (latest supported version)
    // Set to '0.0.0': Loads 'version-0.0.0.php' (named version if found or fall back to 'version.php')
    if ( ! defined( 'TYPESIX_USE_BOOTSTRAP'                         ) ) { define( 'TYPESIX_USE_BOOTSTRAP',                         true ); }
    if ( ! defined( 'TYPESIX_USE_FONT_AWESOME'                      ) ) { define( 'TYPESIX_USE_FONT_AWESOME',                      true ); }



    if ( is_admin() ) {

        require_once( get_template_directory()         . '/functions/admin-cleanup.php' );
        require_once( get_template_directory()         . '/functions/admin-resources.php' );
        require_once( get_template_directory()         . '/functions/admin-widgets.php' );

        if ( ! TYPESIX_SUPPORT_GUTENBERG )             add_filter( 'use_block_editor_for_post', '__return_false', 10 );

        if ( TYPESIX_SUPPORT_CUSTOMIZER )              require_once( get_template_directory() . '/support/admin-customizer.php' );
        if ( TYPESIX_SUPPORT_GIVE_WP )                 require_once( get_template_directory() . '/support/admin-give-wp.php' );
        if ( TYPESIX_SUPPORT_GUTENBERG )               require_once( get_template_directory() . '/support/admin-gutenberg.php' );
        if ( TYPESIX_SUPPORT_WOOCOMMERCE )             require_once( get_template_directory() . '/support/admin-woocommerce.php' );

    } else {

        require_once( get_template_directory()         . '/functions/public-action-hooks.php' );
        require_once( get_template_directory()         . '/functions/public-cleanup.php' );
        require_once( get_template_directory()         . '/functions/public-get.php' );
        require_once( get_template_directory()         . '/functions/public-resources.php' );
        require_once( get_template_directory()         . '/functions/public-template-tags.php' );

        if ( TYPESIX_SELECT_SITE_MODE == 'design' )    require_once( get_template_directory() . '/modes/public-action-hooks.php' );
        if ( TYPESIX_SUPPORT_CUSTOMIZER )              require_once( get_template_directory() . '/support/public-customizer.php' );
        if ( TYPESIX_SUPPORT_GIVE_WP )                 require_once( get_template_directory() . '/support/public-give-wp.php' );
        if ( TYPESIX_SUPPORT_GUTENBERG )               require_once( get_template_directory() . '/support/public-gutenberg.php' );
        if ( TYPESIX_SUPPORT_WOOCOMMERCE )             require_once( get_template_directory() . '/support/public-woocommerce.php' );

        $autoload_strings = get_stylesheet_directory() . '/autoloads/strings.php';

        if ( file_exists( $autoload_strings ) )        require_once( $autoload_strings );

    }

    if ( TYPESIX_SUPPORT_BEAVER_BUILDER )              require_once( get_template_directory() . '/support/common-beaver-builder.php' );
    if ( TYPESIX_SUPPORT_WP_COMMON )                   require_once( get_template_directory() . '/support/common-wordpress-common-features.php' );

    if ( TYPESIX_SUPPORT_WP_CUSTOM_BACKGROUND ) {

        $default_background_jpg = get_stylesheet_directory_uri() . '/images/backgrounds/default.jpg';
        $default_background_png = get_stylesheet_directory_uri() . '/images/backgrounds/default.png';

        if ( file_exists( $default_background_jpg ) ) {

            $default_background_image = $default_background_jpg;

        } elseif ( file_exists( $default_background_png ) ) {

            $default_background_image = $default_background_png;

        } else {

            $default_background_image = false;

        }

        if ( ! defined( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_ATTACHMENT' ) ) { define( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_ATTACHMENT', 'scroll' ); }
        if ( ! defined( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_COLOR'      ) ) { define( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_COLOR',      'eee' ); }
        if ( ! defined( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_IMAGE'      ) ) { define( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_IMAGE',      $default_background_image ); }
        if ( ! defined( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_POSITION_X' ) ) { define( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_POSITION_X', 'left' ); }
        if ( ! defined( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_POSITION_Y' ) ) { define( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_POSITION_Y', 'top' ); }
        if ( ! defined( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_REPEAT'     ) ) { define( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_REPEAT',     'repeat' ); }
        if ( ! defined( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_SIZE'       ) ) { define( 'TYPESIX_CUSTOM_BACKGROUND_DEFAULT_SIZE',       'auto' ); }

        require_once( get_template_directory() . '/support/common-wordpress-custom-background.php' );

    }

    if ( TYPESIX_SUPPORT_WP_CUSTOM_HEADER ) {

        $default_header_jpg = get_stylesheet_directory_uri() . '/images/headers/default.jpg';
        $default_header_png = get_stylesheet_directory_uri() . '/images/headers/default.png';

        if ( file_exists( $default_header_jpg ) ) {

            $default_header_image = $default_header_jpg;

        } elseif ( file_exists( $default_header_png ) ) {

            $default_header_image = $default_header_png;

        } else {

            $default_header_image = false;

        }

        if ( ! defined( 'TYPESIX_CUSTOM_HEADER_DEFAULT_IMAGE'       ) ) { define( 'TYPESIX_CUSTOM_HEADER_DEFAULT_IMAGE',           $default_header_image ); }
        if ( ! defined( 'TYPESIX_CUSTOM_HEADER_DEFAULT_TEXT_COLOR'  ) ) { define( 'TYPESIX_CUSTOM_HEADER_DEFAULT_TEXT_COLOR',      '222' ); }
        if ( ! defined( 'TYPESIX_CUSTOM_HEADER_FLEX_HEIGHT'         ) ) { define( 'TYPESIX_CUSTOM_HEADER_FLEX_HEIGHT',             true ); }
        if ( ! defined( 'TYPESIX_CUSTOM_HEADER_FLEX_WIDTH'          ) ) { define( 'TYPESIX_CUSTOM_HEADER_FLEX_WIDTH',              true ); }
        if ( ! defined( 'TYPESIX_CUSTOM_HEADER_HEIGHT'              ) ) { define( 'TYPESIX_CUSTOM_HEADER_HEIGHT',                  '400' ); }
        if ( ! defined( 'TYPESIX_CUSTOM_HEADER_RANDOM_DEFAULT'      ) ) { define( 'TYPESIX_CUSTOM_HEADER_RANDOM_DEFAULT',          false ); }
        if ( ! defined( 'TYPESIX_CUSTOM_HEADER_TEXT'                ) ) { define( 'TYPESIX_CUSTOM_HEADER_TEXT',                    true ); }
        if ( ! defined( 'TYPESIX_CUSTOM_HEADER_UPLOADS'             ) ) { define( 'TYPESIX_CUSTOM_HEADER_UPLOADS',                 false ); }
        if ( ! defined( 'TYPESIX_CUSTOM_HEADER_WIDTH'               ) ) { define( 'TYPESIX_CUSTOM_HEADER_WIDTH',                   '1400' ); }

        require_once( get_template_directory() . '/support/common-wordpress-custom-header.php' );

    }
