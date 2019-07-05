<?php

    namespace Ehven\Gilad\WordPress\Themes\Children\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

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
