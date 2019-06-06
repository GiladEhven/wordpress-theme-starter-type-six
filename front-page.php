<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_frontpage_before();

    		?>

                <div id="h-template-frontpage">

                    <?php h_template_frontpage(); ?>

                </div>

		    <?php

		h_template_frontpage_after();

    get_footer();
