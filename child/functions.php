<?php

    namespace Ehven\Gilad\WordPress\Themes\Children\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_BODY'                  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_BODY',                  'default' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_BODY_HEADER'           ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_BODY_HEADER',           'container-fluid' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS'              ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS',              'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_FOOTER'       ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_FOOTER',       'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_HEADER'       ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_HEADER',       'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_LIST'         ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_LIST',         'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_MAIN'                  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_MAIN',                  'container' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_BODY_FOOTER'           ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_BODY_FOOTER',           'container-fluid' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE'         ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE',         'row' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_HEADER'  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_HEADER',  'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_SECTION' ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_SECTION', 'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_FOOTER'  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_FOOTER',  'col-12' );  }

    /* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    if ( ! defined( 'TYPESIX_ENABLE_PALETTE'                        ) ) { define( 'TYPESIX_ENABLE_PALETTE',                        'orange' ); }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

    if ( ! defined( 'TYPESIX_SELECT_SITE_MODE'                      ) ) { define( 'TYPESIX_SELECT_SITE_MODE',                      'design' ); }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

    add_action( 'h_body_header', function() {

        ?><div class="row"><div class="col-12"><h2>Body Header</h2></div></div><?php

    });

    add_action( 'h_body_footer', function() {

        ?><div class="row"><div class="col-12"><h2>Body Footer</h2></div></div><?php

    });

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

    add_action( 'h_entry_header', function() {

        echo '<h3 class="col-10 offset-1">This is a design hooked into the entry header... This particular demo content is not set within any document type detection conditional, so it will display on every template that uses the <code>h_entry_header()</code> action hook.</h3>';

    });

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

    $content_width = 1200;

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
