<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_front_page_before();

    		?>

                <div id="h-template-front-page">

                    <?php h_template_front_page(); ?>

                </div>

		    <?php

		h_template_front_page_after();

    get_footer();
