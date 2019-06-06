<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_archive_example_before();

    		?>

                <div id="h-template-archive-example">

                    <?php h_template_archive_example(); ?>

                </div>

		    <?php

		h_template_archive_example_after();

    get_footer();
