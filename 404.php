<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_404_before();

    		?>

                <div id="h-template-404">

                    <?php h_template_404(); ?>

                </div>

		    <?php

		h_template_404_after();

    get_footer();
