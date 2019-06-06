<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_tag_before();

    		?>

                <div id="h-template-tag">

                    <?php h_template_tag(); ?>

                </div>

		    <?php

		h_template_tag_after();

    get_footer();
