<?php

	namespace Ehven\Gilad\WordPress\Themes\Children\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_BODY'                  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_BODY',                  'default' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_BODY_HEADER'           ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_BODY_HEADER',           'container-fluid' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA'         ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA',         'row' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA_FOOTER'  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA_FOOTER',  'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA_HEADER'  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA_HEADER',  'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA_LIST'    ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA_LIST',    'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_MAIN'                  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_MAIN',                  'container' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_BODY_FOOTER'           ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_BODY_FOOTER',           'container-fluid' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE'         ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE',         'row' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_HEADER'  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_HEADER',  'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_SECTION' ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_SECTION', 'col-12' );  }
    if ( ! defined( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_FOOTER'  ) ) { define( 'TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_FOOTER',  'col-12' );  }

    /* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    if ( ! defined( 'TYPESIX_ENABLE_PALETTE'                        ) ) { define( 'TYPESIX_ENABLE_PALETTE',                        'orange' ); }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

    add_action( 'h_body_header', function() {

        ?><div class="row"><div class="col-12"><h2>Body Header</h2></div></div><?php

    });

    add_action( 'h_body_footer', function() {

        ?><div class="row"><div class="col-12"><h2>Body Footer</h2></div></div><?php

    });

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    add_action( 'h_loop_post_navigation_before', function() {

        ?><div class="row"><div class="col-12"><?php

    });

    add_action( 'h_loop_post_navigation_after', function() {

        ?></div></div><?php

    });
