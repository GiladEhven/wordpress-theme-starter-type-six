<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_home_before();

    		?>

                <div id="h-template-home">

                    <?php h_template_home(); ?>

                </div>

		    <?php

		h_template_home_after();

    get_footer();
