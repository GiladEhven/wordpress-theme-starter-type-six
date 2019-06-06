<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_index_before();

    		?>

                <div id="h-template-index">

                    <?php h_template_index(); ?>

                </div>

		    <?php

		h_template_index_after();

    get_footer();
