<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_search_before();

    		?>

                <div id="h-template-search">

                    <?php get_template_part( 'parts/loop', 'search' ); ?>

                </div>

		    <?php

		h_template_search_after();

    get_footer();
